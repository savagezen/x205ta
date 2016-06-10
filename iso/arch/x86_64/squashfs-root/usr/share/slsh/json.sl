% -*- mode: slang; mode: fold -*-

import("json");

%{{{ Type Handlers for json_encode

private variable Type_Map = Ref_Type[0];

private define add_type_handler ()
{
   variable func = ();
   loop (_NARGS-1)
     {
	variable type = ();
	variable idx = __class_id (type);
	variable n = length (Type_Map);
	if (idx >= n)
	  {
	     variable new_map = Ref_Type[idx+1];
	     new_map[[0:n-1]] = Type_Map;
	     Type_Map = new_map;
	  }
	Type_Map[idx] = func;
     }
}

private define get_encode_func (type)
{
   try
     {
	variable func = Type_Map[__class_id (type)];
	if (func == NULL) throw IndexError;
	return func;
     }
   catch IndexError:
     throw Json_Invalid_Json_Error, "$type does not represent a JSON data structure"$;
}
%}}}

private define json_encode_string (indent, q, data) %{{{
{
   return _json_encode_string (data);
}
add_type_handler (String_Type, BString_Type, &json_encode_string);
%}}}

private define json_encode_boolean (indent, q, data) %{{{
{
   if (data == 1) return "true"B;
   if (data == 0) return "false"B;
   throw Json_Invalid_Json_Error, sprintf (`invalid boolean value '\%03o'; only '\000' and '\001' are allowed`, data);
}
add_type_handler (UChar_Type, &json_encode_boolean);
%}}}

private define json_encode_null (indent, q, data) %{{{
{
   return "null"B;
}
add_type_handler (Null_Type, &json_encode_null);
%}}}

private define json_encode_number (indent, q, data) %{{{
{
   return string (data);
}
add_type_handler (
	Char_Type, % UChar_Type,
	Short_Type, UShort_Type,
	Int_Type, UInt_Type,
	Long_Type, ULong_Type,
#ifexists LLong_Type
	LLong_Type, ULLong_Type,
#endif
	Float_Type, Double_Type,
	&json_encode_number);
%}}}

private define json_encode_object (indent, q, object) %{{{
{
   variable json = "{"B;
   variable keys = get_struct_field_names (object);
   variable n_values = length (keys);
   if (n_values)
     {
	% pvs indent KEY nsep VAL vsep pvs indent KEY nsep VAL vsep
	% ... pvs indent KEY nsep VAL pvs

	variable new_indent = bstrcat (indent, q.indent);
	variable sep = bstrcat (q.vsep, q.post_vsep, new_indent);
	variable nsep = q.nsep;

	variable key = keys[0];
	variable val = get_struct_field(object, key);
	variable type = typeof (val);
	variable func = get_encode_func (type);
	json = bstrcat (__tmp(json), q.post_vsep, new_indent,
			_json_encode_string (key), nsep, (@func)(new_indent, q, val));

	variable i;
	_for i (1, n_values-1)
	  {
	     key = keys[i];
	     val = get_struct_field(object, key);
	     variable next_type = typeof (val);
	     if (next_type == String_Type)
	       {
		  json = bstrcat (__tmp(json), sep, _json_encode_string (key),
				  nsep, _json_encode_string (val));
		  continue;
	       }

	     if (next_type != type)
	       (type, func) = (next_type, get_encode_func (next_type));
	     json = bstrcat (__tmp(json), sep, _json_encode_string (key),
			     nsep, (@func)(new_indent, q, val));
          }
	json = bstrcat (__tmp(json), q.post_vsep);
     }
   return bstrcat (__tmp(json), indent, "}");
}
add_type_handler (Struct_Type, &json_encode_object);
%}}}

private define json_encode_array (indent, q, array) %{{{
{
   variable json = "["B;
   variable n_values = length (array);
   if (n_values)
     {
	%  pvs, new_indent, VALUE, vsep, pvs, new_indent, VALUE, vsep, pvs, ..., new_indent, VALUE, pvs

	variable new_indent = bstrcat (indent, q.indent);
	variable sep = bstrcat (q.vsep, q.post_vsep, new_indent);

	variable i = 0;
	variable a = array[i];
	variable type = typeof (a);
	variable func = get_encode_func (type);
	json = bstrcat (__tmp(json), q.post_vsep,
			new_indent, (@func)(new_indent, q, a));

	if ((typeof (array) == Array_Type) && not any (_isnull (array)))
	  {
	     if (type == String_Type)
	       _for i (1, n_values-1)
		 json = bstrcat (__tmp(json), sep, _json_encode_string (array[i]));
	     else
	       _for i (1, n_values-1)
		 json = bstrcat (__tmp(json), sep, (@func)(new_indent, q, array[i]));
	  }
	else _for i (1, n_values-1)
	  {
	     a = array[i];
	     variable next_type = typeof (a);
	     if (next_type == String_Type)
	       {
		  json = bstrcat (__tmp(json), sep, _json_encode_string (a));
		  continue;
	       }

	     if (next_type != type)
	       (type, func) = (next_type, get_encode_func (next_type));
	     json = bstrcat (__tmp(json), sep, (@func)(new_indent, q, a));
	  }

	json = bstrcat (__tmp(json), q.post_vsep);
     }
   return bstrcat (__tmp(json), indent, "]");
}
add_type_handler (List_Type, Array_Type, &json_encode_array);
%}}}

private define default_handler (indent, q, data) %{{{
{
   if (0 < __is_numeric (data) < 3)
     return json_encode_number (data);

   if (is_struct_type (data))
     return json_encode_object (data);

   variable type = _typeof (data);
   throw Json_Invalid_Json_Error, "$type does not represent a JSON data structure"$;
}
Type_Map[where (_isnull (Type_Map))] = &default_handler;
%}}}

% process_qualifiers %{{{

private define split_post_vsep (post_vsep) %{{{
{
   variable indent = "";
   variable parts = strchop (post_vsep, '\n', 0);
   if (length (parts) > 1)
     {
	indent = parts[-1];
	parts[-1] = "";
	post_vsep = strjoin (parts, "\n");
     }
  return (indent, post_vsep);
}
%}}}

private define only_whitespace (s)
{
   return ""B + str_delete_chars (s, "^ \t\n\r");
}

private define process_qualifiers ()
{
   variable post_vsep = split_post_vsep (qualifier ("post_vsep", ""));
   variable indent = ();  % other return value from split_post_vsep
   variable q = struct {
      pre_nsep  = only_whitespace (qualifier ("pre_nsep", "")),
      post_nsep = only_whitespace (qualifier ("post_nsep", "")),
      pre_vsep  = only_whitespace (qualifier ("pre_vsep", "")),
      post_vsep = only_whitespace (post_vsep),
      indent    = only_whitespace (indent),
   };
   return struct {
      nsep = q.pre_nsep + ":" + q.post_nsep,
      vsep = q.pre_vsep + ",",
      @q
   };
}
%}}}

define json_encode (data)
{
   variable q = process_qualifiers (;; __qualifiers);
   variable func = get_encode_func (typeof (data));
   variable json = (@func)(""B, q, data);
   return typecast (json, String_Type);
}
