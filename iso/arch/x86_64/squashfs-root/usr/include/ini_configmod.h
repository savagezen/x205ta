/*
    INI LIBRARY

    Interface that allows modification of the INI file.

    Copyright (C) Dmitri Pal <dpal@redhat.com> 2014

    INI Library is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    INI Library is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with INI Library.  If not, see <http://www.gnu.org/licenses/>.
*/

#ifndef INI_CONFIGMOD_H
#define INI_CONFIGMOD_H


/**
 * @defgroup insflags Flags used in add_xxx_value functions
 *
 * These flags control the behavior of the add_xxx_value functions.
 * Use these flags to specify how you want to process the key.
 * Do you want the function to replace an existing key? Or may be you want to
 * generate an error when function sees that there is a duplicate key?
 * Or may be you do not want to check anything and just add the key
 * to the section?
 *
 * Individual values provide more details about use.
 *
 * @{
 */
enum INI_VA {
/** @brief No check
 *
 * This is the default mode. Function will not perform
 * any checks for duplicates and will just add a key.
 */
    INI_VA_NOCHECK    = 0,
/**
 * @brief Update a specific value (best effort).
 *
 * Value of the index is used to determine which one of the duplicates
 * needs to be updated. Index is 0-based. If the index is out of range
 * the function will do best effort and return the last instance of the key.
 * For example if you have five duplicates and you are searching for the tenth
 * the function will find and return the fifth instance.
 */
    INI_VA_MOD        = 1,
/**
 * @brief Update a specific value (with error).
 *
 * Value of the index is used to determine which one of the duplicates
 * needs to be updated. Index is 0-based. If the value is not found or
 * the index is out of range the function returns ENOENT.
 * For example if you have five duplicates and you are searching for the tenth
 * the error ENOENT will be returned.
 */
    INI_VA_MOD_E      = 2,

/**
 * @brief Update or add if not found (best effort).
 *
 * Function will check for duplicates and would overwrite the specified
 * key if found.
 * Value of the index is used to determine which one of the duplicates
 * needs to be updated. Index is 0-based. If the value is not found
 * the new value will be added following other position related arguments.
 * This option performs best effort search.
 * For example if you have five duplicates and you are searching for the tenth
 * the function will find and return fifth instance.
 */
    INI_VA_MODADD     = 3,

/**
 * @brief Update or add if not found (with error).
 *
 * Function will check for duplicates and would overwrite the specified
 * key if found.
 * Value of the index is used to determine which one of the duplicates
 * needs to be updated. Index is 0-based. If the value is not found
 * the new value will be added following other position related arguments.
 * This option performs an exact search.
 * For example if you have five duplicates and you are searching for tenth
 * the error ENOENT will be returned.
 */
    INI_VA_MODADD_E   = 4,

/** @brief Clean all duplicates.
 *
 * Find all instances of the specific key and remove them first.
 * Then add the new key respecting the position related arguments.
 */
    INI_VA_CLEAN      = 5,

/** @brief Error if duplicate
 *
 * Return error EEXIST if an entry with the same key exists.
 */
    INI_VA_DUPERROR   = 6
};
/**
 * @}
 */

/**
 * @defgroup ini_mod API to create and modify configuration objects
 *
 * Functions in this section allow creation, modification
 * and deletion of sections and keys.
 *
 * Explanation of some of the common arguments:
 *
 * @param[in]  position        Specifies the position a key or a section
 *                             should be added to.\n\n
 *                             Options include:
 *                             - Last in the list
 *                             - First in the list
 *                             - N-th element of the list
 *                             - Before a specific element of the list
 *                             - After a specific element of the list
 *                             - As a first duplicate of a specific element
 *                             - As a last duplicate of a specific element
 *                             - As an N-th duplicate of a specific element
 *                             \n\n
 *                             Duplicates can be sequential or not, so there
 *                             are different constants that specify whether
 *                             to count all duplicates or just the ones that
 *                             go together.\n
 * @param[in]  other_xxx       Used in conjunction with 'position' constant.
 *                             In some cases it is convenient to add
 *                             a section or key immediately before
 *                             or after another section or key.
 *                             While 'position' defines
 *                             where it should be added, this parameter defines
 *                             the section or key to relate to.
 * @param[in]  idx             Index allows treating set of sections or keys
 *                             as an array and add Nth section or key.

 * @{
 *
 */


/**
 * @brief Function to add a section.
 *
 * Function creates a new section in the specified position.
 * The position is relative to other sections. Duplicate sections
 * are not allowed. In case a duplicate section is detected function
 * will return error EEXIST.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to add.
 * @param[in]  comments        Array of comments. Can be NULL, if no comment is
 *                             needed for the section. It is expected that
 *                             comment lines start with the correct comment
 *                             symbol. Function does not check this.
 *                             Use empty string to express an empty line.
 * @param[in]  count_comment   Count of comments in the array. If 0,
 *                             the array is expected to be NULL terminated
 *                             and function will traverse array until its end.
 * @param[in]  position        A constant that specifies the way the
 *                             section should be added. For more information
 *                             see "disposition constants" section of
 *                             the collection (collection.h) interface.
 *                             The value is used only in the add operation
 *                             so see the explanation in the "insert" paragraph.
 *                             Since duplicate sections are not allowed
 *                             any constants that request addition of
*                              a duplicate will cause function
 *                             to return an error.
 * @param[in]  other_section   Used in conjunction with position constant.
 *                             In some cases it is convenient to add
 *                             a section that is immediately before
 *                             or after another section. While position defines
 *                             where it should be added, this parameter defines
 *                             the section to relate to.
 * @param[in]  idx             Index, allows treating set of sections as
 *                             an array and add Nth section.
 *
 * @return 0                   - Success.
 * @return EEXIST              - Section already exists.
 * @return ENOSYS              - Unknown position value.
 * @return ENOMEM              - No memory to add value.
 * @return EINVAL              - Invalid argument.
 */
int ini_config_add_section(struct ini_cfgobj *ini_config,
                           const char *section,
                           const char *comments[],
                           size_t count_comment,
                           int position,
                           const char *other_section,
                           int idx);

/**
 * @brief Function to update a comment for a section.
 *
 * Function finds a section and updates or removes its comment.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to change the comment for.
 * @param[in]  comments        Array of comments. Can be NULL if no comment is
 *                             needed for the section. It is expected that
 *                             comment lines start with the correct comment
 *                             symbol. Function does not check this.
 *                             Use empty string to express an empty line.
 * @param[in]  count_comment   Count of comments in the array. If 0
 *                             the array is expected to be NULL terminated
 *                             and function will traverse array until its end.
 *
 * @return 0                   - Success.
 * @return ENOENT              - Section is not found.
 * @return ENOMEM              - No memory to add value.
 * @return EINVAL              - Invalid argument.
 */
int ini_config_comment_section(struct ini_cfgobj *ini_config,
                               const char *section,
                               const char *comments[],
                               size_t count_comment);

/**
 * @brief Function to rename a section.
 *
 * Function finds a section and renames it.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to find.
 * @param[in]  newname         New section name.
 *
 * @return 0                   - Success.
 * @return ENOENT              - Section is not found.
 * @return ENOMEM              - No memory to add value.
 * @return EINVAL              - Invalid argument.
 */
int ini_config_rename_section(struct ini_cfgobj *ini_config,
                              const char *section,
                              const char *newname);


/**
 * @brief Function to delete a section by name.
 *
 * Function is a convenience wrapper around
 * \ref ini_config_delete_section_by_position function.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to delete.
 *
 * @return 0                   - Success.
 * @return ENOENT              - Section is not found.
 * @return ENOMEM              - No memory to add value.
 * @return EINVAL              - Invalid argument.
 */
int ini_config_delete_section_by_name(struct ini_cfgobj *ini_config,
                                      const char *section);

/**
 * @brief Function to delete a section by position or name.
 *
 * Function allows removing a specific section by its relative position
 * in the list of sections or by its name.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  position        A constant that specifies the way the
 *                             section should be deleted. For more information
 *                             see "disposition constants" section of
 *                             the collection interface. The value is used
 *                             only in delete operation so see the explanation
 *                             in the "delete" paragraph.
 *                             There can't be duplicate sections. However
 *                             function respects all of the listed constants.
 *                             To find and delete a particular section
 *                             one can use COL_DSP_FIRSTDUP constant.
 *                             One should just expect that there is only
 *                             one instance of every section if any.
 * @param[in]  section         Used in conjunction with position constant.
 *                             In some cases it is convenient to add
 *                             a section immediately before
 *                             or after another value. While position defines
 *                             where it should be added, this parameter defines
 *                             the section to relate to.
 * @param[in]  idx             Index of the position.
 *                             For example one can specify
 *                             that the third section should be deleted.
 *
 * @return 0                   - Success.
 * @return ENOENT              - Section is not found.
 * @return ENOMEM              - No memory to add value.
 * @return EINVAL              - Invalid argument.
 */
int ini_config_delete_section_by_position(struct ini_cfgobj *ini_config,
                                          int position,
                                          const char *section,
                                          int idx);


/**
 * @brief Function to a add string value to a particular section.
 *
 * Depending on the flags function adds, or deletes and adds, or just modifies
 * the configuration value stored in the configuration object.
 *
 * \b NOTE: all other ini_config_add_xxx_value functions are implemented
 *          as wrappers around this function so they have the same
 *          behavior and logic.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to modify.
 * @param[in]  key             Key of the value to add or modify.
 * @param[in]  value           String that represents the value.
 * @param[in]  comments        Array of comments. Can be NULL if no comment is
 *                             needed for the section. It is expected that
 *                             comment lines start with the correct comment
 *                             symbol. Function does not check this.
 *                             Use empty string to express an empty line.
 * @param[in]  count_comment   Count of comments in the array. If 0,
 *                             the array is expected to be NULL terminated
 *                             and function will traverse array until its end.
 * @param[in]  border          The boundary the value should be wrapped at.
 *                             The usual value is 80 characters.
 * @param[in]  position        A constant that specifies the way the
 *                             value should be added. For more information
 *                             see "disposition constants" section of
 *                             the collection interface. The value is used
 *                             only in add operation so see the explanation
 *                             in the "insert" paragraph.
 * @param[in]  other_key       Used in conjunction with 'position' constant.
 *                             In some cases it is convenient to add
 *                             a value that should be placed immediately before
 *                             or after another value. While position defines
 *                             where it should be added, this parameter defines
 *                             the key to relate to.
 * @param[in]  idx             Index in the whole section or among
 *                             duplicates. For example one can specify
 *                             that the value should be added as a third
 *                             duplicate. This is convenient if INI file allows
 *                             duplicate keys.
 * @param[in]  flags           These constants define the main behavior of
 *                             the function. The function can thus be used
 *                             to build configuration object from scratch
 *                             (in this case no checks would be needed),
 *                             to modify a specific key which can be identified
 *                             by index among duplicate keys in the same
 *                             section. For more information see \ref insflags.
 *
 * @return 0                   - Success.
 * @return EEXIST              - The value already exists.
 * @return ENOENT              - The value not found.
 * @return ENOSYS              - Unknown flag or position value.
 * @return ENOMEM              - No memory to add value.
 * @return EINVAL              - Invalid argument.
 */
int ini_config_add_str_value(struct ini_cfgobj *ini_config,
                             const char *section,
                             const char *key,
                             const char *value,
                             const char *comments[],
                             size_t count_comment,
                             int border,
                             int position,
                             const char *other_key,
                             int idx,
                             enum INI_VA flags);

/**
 * @brief Function to add an integer value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an integer argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_int_value(struct ini_cfgobj *ini_config,
                             const char *section,
                             const char *key,
                             int value,
                             const char *comments[],
                             size_t count_comment,
                             int border,
                             int position,
                             const char *other_key,
                             int idx,
                             enum INI_VA flags);

/**
 * @brief Function to add a long value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a long integer argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_long_value(struct ini_cfgobj *ini_config,
                              const char *section,
                              const char *key,
                              long value,
                              const char *comments[],
                              size_t count_comment,
                              int border,
                              int position,
                              const char *other_key,
                              int idx,
                              enum INI_VA flags);

/**
 * @brief Function to add an unsigned long value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an unsigned long integer argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_ulong_value(struct ini_cfgobj *ini_config,
                               const char *section,
                               const char *key,
                               unsigned long value,
                               const char *comments[],
                               size_t count_comment,
                               int border,
                               int position,
                               const char *other_key,
                               int idx,
                               enum INI_VA flags);

/**
 * @brief Function to add an unsigned value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an unsigned argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_unsigned_value(struct ini_cfgobj *ini_config,
                                  const char *section,
                                  const char *key,
                                  unsigned value,
                                  const char *comments[],
                                  size_t count_comment,
                                  int border,
                                  int position,
                                  const char *other_key,
                                  int idx,
                                  enum INI_VA flags);

/**
 * @brief Function to add an int32 value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an int32 argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_int32_value(struct ini_cfgobj *ini_config,
                               const char *section,
                               const char *key,
                               int32_t value,
                               const char *comments[],
                               size_t count_comment,
                               int border,
                               int position,
                               const char *other_key,
                               int idx,
                               enum INI_VA flags);

/**
 * @brief Function to add an uint32 value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an uint32 argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_uint32_value(struct ini_cfgobj *ini_config,
                                const char *section,
                                const char *key,
                                uint32_t value,
                                const char *comments[],
                                size_t count_comment,
                                int border,
                                int position,
                                const char *other_key,
                                int idx,
                                enum INI_VA flags);

/**
 * @brief Function to add an int64 value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an int64 argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_int64_value(struct ini_cfgobj *ini_config,
                               const char *section,
                               const char *key,
                               int64_t value,
                               const char *comments[],
                               size_t count_comment,
                               int border,
                               int position,
                               const char *other_key,
                               int idx,
                               enum INI_VA flags);

/**
 * @brief Function to add an uint64 value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * an uint64 argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_uint64_value(struct ini_cfgobj *ini_config,
                                const char *section,
                                const char *key,
                                uint64_t value,
                                const char *comments[],
                                size_t count_comment,
                                int border,
                                int position,
                                const char *other_key,
                                int idx,
                                enum INI_VA flags);

/**
 * @brief Function to add a double value to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a double argument for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_double_value(struct ini_cfgobj *ini_config,
                                const char *section,
                                const char *key,
                                double value,
                                const char *comments[],
                                size_t count_comment,
                                int border,
                                int position,
                                const char *other_key,
                                int idx,
                                enum INI_VA flags);

/**
 * @brief Function to add a binary value to a particular section.
 *
 * Binary values are represented by a HEX string where two HEX digits
 * represent one byte of the source data. The value is surrounded
 * by a pair of single quotes.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a void argument for the value input. The length of the data is specified by
 * by the value_len argument.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_bin_value(struct ini_cfgobj *ini_config,
                             const char *section,
                             const char *key,
                             void *value,
                             size_t value_len,
                             const char *comments[],
                             size_t count_comment,
                             int border,
                             int position,
                             const char *other_key,
                             int idx,
                             enum INI_VA flags);

/**
 * @brief Function to add a value that consists of an array of constant strings
 *        to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a string array argument and a count for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_const_str_arr_value(struct ini_cfgobj *ini_config,
                                       const char *section,
                                       const char *key,
                                       const char *value_str_arr[],
                                       size_t count_str,
                                       char sep,
                                       const char *comments[],
                                       size_t count_comment,
                                       int border,
                                       int position,
                                       const char *other_key,
                                       int idx,
                                       enum INI_VA flags);

/**
 * @brief Function to add a value that consists of an array of strings
 *        to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a string array argument and a count for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_str_arr_value(struct ini_cfgobj *ini_config,
                                 const char *section,
                                 const char *key,
                                 char *value_str_arr[],
                                 size_t count_str,
                                 char sep,
                                 const char *comments[],
                                 size_t count_comment,
                                 int border,
                                 int position,
                                 const char *other_key,
                                 int idx,
                                 enum INI_VA flags);

/**
 * @brief Function to add a value that consists of an array of integers
 *        to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a integer array argument and a count for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_int_arr_value(struct ini_cfgobj *ini_config,
                                 const char *section,
                                 const char *key,
                                 int *value_int_arr,
                                 size_t count_int,
                                 char sep,
                                 const char *comments[],
                                 size_t count_comment,
                                 int border,
                                 int position,
                                 const char *other_key,
                                 int idx,
                                 enum INI_VA flags);

/**
 * @brief Function to add a value that consists of an array of long integers
 *        to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a long integer array argument and a count for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_long_arr_value(struct ini_cfgobj *ini_config,
                                  const char *section,
                                  const char *key,
                                  long *value_long_arr,
                                  size_t count_long,
                                  char sep,
                                  const char *comments[],
                                  size_t count_comment,
                                  int border,
                                  int position,
                                  const char *other_key,
                                  int idx,
                                  enum INI_VA flags);

/**
 * @brief Function to add a value that consists of an array of doubles
 *        to a particular section.
 *
 * Function is similar to \ref ini_config_add_str_value except it uses
 * a double array argument and a count for the value input.
 *
 * For logic, behavior and return values see \ref ini_config_add_str_value.
 */
int ini_config_add_double_arr_value(struct ini_cfgobj *ini_config,
                                    const char *section,
                                    const char *key,
                                    double *value_double_arr,
                                    size_t count_double,
                                    char sep,
                                    const char *comments[],
                                    size_t count_comment,
                                    int border,
                                    int position,
                                    const char *other_key,
                                    int idx,
                                    enum INI_VA flags);

/**
 * @brief Function to delete a value.
 *
 * Function deletes a value specified either by key or by position.
 * For example the caller can remove first or last key of the section as well
 * as first, last or specific instance of a specific key. If key is searched
 * by index and index is out of range the function would return ENOENT
 * indicating that specifically requested key is not found.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to remove the key from.
 * @param[in]  position        A constant that specifies the way the
 *                             key should be removed. For more information
 *                             see "disposition constants" section of
 *                             the collection interface, and specifically
 *                             the "delete" paragraph.
 * @param[in]  key             Used in conjunction with 'position' constant.
 *                             Depending on the value of the position
 *                             argument the key argument can specify
 *                             the key to delete or the key that the delete
 *                             operation should be relative to.
 * @param[in]  idx             Index of duplicates. For example one can specify
 *                             that he wants to delete the third duplicate
 *                             of a specific key. If there are less duplicates,
 *                             i.e. the index is out of range, the function
 *                             will return ENOENT.
 *
 * @return 0                   - Value was removed.
 * @return ENOENT              - The value not found.
 */
int ini_config_delete_value(struct ini_cfgobj *ini_config,
                            const char *section,
                            int position,
                            const char *key,
                            int idx);

/**
 * @brief Function to update a comment.
 *
 * Function can be used to find and modify a comment for a specific
 * key in a specific section.
 *
 * @param[in]  ini_config      Configuration object to modify.
 * @param[in]  section         Name of the section to find the key.
 * @param[in]  key             The key to find.
 * @param[in]  comments        The array of comments. Can be NULL. If NULL,
 *                             the existing comment will be removed if any.
 *                             The comment lines are expected to start with a
 *                             standard comment symbol. The function does not
                               check this.
 *                             Use empty string to express an empty line.
 * @param[in]  count_comment   Count of comments. If 0 the comment is
 *                             constructed using array of strings above.
 *                             It is expected to be NULL terminated.
 * @param[in]  idx             Index of duplicates. For example one can specify
 *                             that he wants to find the third duplicate
 *                             of a specific key. If there are less duplicates,
 *                             i.e. the index is out of range, the function
 *                             will return ENOENT.
 *
 * @return 0                   - Value was removed.
 * @return ENOENT              - The value not found.
 */

int ini_config_update_comment(struct ini_cfgobj *ini_config,
                              const char *section,
                              const char *key,
                              const char *comments[],
                              size_t count_comment,
                              int idx);
/**
 * @}
 */
#endif
