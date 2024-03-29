<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Дополнительное поле успешно добавлено в профиль.',
	'ALPHA_DOTS'			=> 'Только латинские буквенные символы, цифры и точки',
	'ALPHA_ONLY'			=> 'Только латинские буквенные символы и цифры',
	'ALPHA_SPACERS'			=> 'Только латинские буквенные символы, цифры и разделители',
	'ALPHA_UNDERSCORE'		=> 'Только латинские буквенные символы, цифры и подчёркивание',
	'ALPHA_PUNCTUATION'		=> 'Только латинские буквенные символы, цифры, запятые, точки, подчёркивание и тире, начинающиеся с латинской буквы',
	'ALWAYS_TODAY'			=> 'Всегда текущая дата',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Введите возможные варианты',
	'BOOL_TYPE_EXPLAIN'		=> 'Вид вариантов выбора: флажки или переключатели. Флажки будут отображены только в случае, если они помечены для данного пользователя. В этом случае будет использована <strong>вторая</strong> языковая опция. Переключатели будут отображены независимо от их состояния.',

	'CHANGED_PROFILE_FIELD'		=> 'Поле профиля успешно изменено.',
	'CHARS_ANY'					=> 'Любые',
	'CHECKBOX'					=> 'Флажки',
	'COLUMNS'					=> 'столбцов',
	'CP_LANG_DEFAULT_VALUE'		=> 'Значение по умолчанию',
	'CP_LANG_EXPLAIN'			=> 'Описание поля',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Подсказка к полю, показываемая пользователю',
	'CP_LANG_NAME'				=> 'Имя поля/заголовок, показываемый пользователю',
	'CP_LANG_OPTIONS'			=> 'Варианты',
	'CREATE_NEW_FIELD'			=> 'Добавить новое поле',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'По крайней мере одно дополнительное поле профиля пока не переведено. Введите необходимые данные, перейдя по ссылке «Перевести».',

	'DEFAULT_ISO_LANGUAGE'			=> 'Язык по умолчанию [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Для поля профиля не заполнены переменные языка по умолчанию.',
	'DEFAULT_VALUE'					=> 'Значение по умолчанию',
	'DELETE_PROFILE_FIELD'			=> 'Удаление поля профиля',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Вы действительно хотите удалить это поле?',
	'DISPLAY_AT_PROFILE'			=> 'В личном разделе',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Пользователь может изменить значение поля в личном разделе.',
	'DISPLAY_AT_REGISTER'			=> 'В форме регистрации',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Если включено, поле можно заполнить при регистрации.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Отображать в списке пользователей',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Если включено, поле будет отображено на странице списка пользователей.',
	'DISPLAY_ON_PM'					=> 'Отображать при просмотре личных сообщений',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Если включено, данное поле будет отображено в минипрофиле при просмотре личных сообщений.',
	'DISPLAY_ON_VT'					=> 'На страницах тем',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'При включении данной опции поле будет отображаться на страницах тем под аватарами пользователей.',
	'DISPLAY_PROFILE_FIELD'			=> 'Отображать поле для всех',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Поле профиля будет показано там, где это разрешено в настройках нагрузки на сервер. Если установлено значение «Нет», данное поле будет скрыто при просмотре тем, профилей, списка пользователей.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Введите варианты ответа, по одному ответу на строку',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Учтите, что вы можете изменять текст вариантов выбора и добавлять новые варианты в конец списка. Не рекомендуется добавлять новые варианты между существующими, это может привести к тому, что в профилях пользователей окажутся другие варианты выбора. Это также может произойти, если вы удалите варианты из середины списка. Удаление варианта из конца списка приведёт к тому, у пользователей, выбравших в профиле этот вариант, он сменится на вариант по умолчанию.',
	'EMPTY_FIELD_IDENT'				=> 'Вы не ввели идентификатор поля',
	'EMPTY_USER_FIELD_NAME'			=> 'Введите имя поля/заголовок',
	'ENTRIES'						=> 'Значения',
	'EVERYTHING_OK'					=> 'Всё в порядке',

	'FIELD_BOOL'				=> 'Логическое поле (Да или Нет)',
	'FIELD_CONTACT_DESC'		=> 'Описание контакта',
	'FIELD_CONTACT_URL'			=> 'Ссылка на контакт',
	'FIELD_DATE'				=> 'Дата',
	'FIELD_DESCRIPTION'			=> 'Описание поля',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Подсказка к полю, показываемая пользователю',
	'FIELD_DROPDOWN'			=> 'Раскрывающийся список',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'				=> 'Идентификатор поля',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Поле с таким идентификатором уже существует. Введите другой идентификатор.',
	'FIELD_IDENT_EXPLAIN'		=> 'Название поля для его обозначения в базе данных и файлах шаблонов.',
	'FIELD_INT'					=> 'Число',
	'FIELD_IS_CONTACT'			=> 'Отображать поле как контактную информацию',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Поле контакта отображается в разделе контактов профиля пользователя, а также в минипрофилях при просмотре тем и личных сообщений. Можно использовать лексему строки <samp>%s</samp>, которая будет заменена на значение, указанное пользователем.',
	'FIELD_LENGTH'				=> 'Размер поля ввода',
	'FIELD_NOT_FOUND'			=> 'Поле не найдено.',
	'FIELD_STRING'				=> 'Однострочное текстовое поле',
	'FIELD_TEXT'				=> 'Многострочное текстовое поле',
	'FIELD_TYPE'				=> 'Тип поля',
	'FIELD_TYPE_EXPLAIN'		=> 'Вы не сможете изменять тип поля.',
	'FIELD_URL'					=> 'URL (ссылка)',
	'FIELD_VALIDATION'			=> 'Допустимые символы',
	'FIRST_OPTION'				=> 'Первый вариант',

	'HIDE_PROFILE_FIELD'			=> 'Скрытое поле',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Поле скрыто от всех, кроме самого пользователя, администраторов и модераторов. Если в Личном разделе опция отображения поля отключена, пользователь не сможет видеть или изменять его, это смогут сделать только администраторы.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Идентификатор поля может содержать только латинские строчные буквы и _ (символ нижнего подчёркивания)',
	'INVALID_FIELD_IDENT_LEN'	=> 'Идентификатор поля может быть длиной не более 17 символов',
	'ISO_LANGUAGE'				=> 'Язык [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Настройки для языка [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> 'Любые буквенные символы, цифры и точки',
	'LETTER_NUM_ONLY'			=> 'Любые буквенные символы и цифры',
	'LETTER_NUM_PUNCTUATION'	=> 'Любые буквенные символы, цифры, запятые, точки, подчёркивание и тире, начинающиеся с любой буквы',
	'LETTER_NUM_SPACERS'		=> 'Любые буквенные символы, цифры и разделители',
	'LETTER_NUM_UNDERSCORE'		=> 'Любые буквенные символы, цифры и подчёркивание',

	'MAX_FIELD_CHARS'		=> 'Максимальное число символов',
	'MAX_FIELD_NUMBER'		=> 'Максимально допустимое число',
	'MIN_FIELD_CHARS'		=> 'Минимальное число символов',
	'MIN_FIELD_NUMBER'		=> 'Минимально допустимое число',

	'NO_FIELD_ENTRIES'			=> 'Не заданы возможные варианты выбора',
	'NO_FIELD_ID'				=> 'Не указан идентификатор поля.',
	'NO_FIELD_TYPE'				=> 'Не указан тип поля.',
	'NO_VALUE_OPTION'			=> 'Незначащий вариант',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Если поле обязательно к заполнению и выбран этот вариант, пользователю выводится сообщение об ошибке',
	'NUMBERS_ONLY'				=> 'Только цифры (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Основные настройки',
	'PROFILE_FIELD_ACTIVATED'	=> 'Поле профиля успешно включено.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Поле профиля успешно отключено.',
	'PROFILE_LANG_OPTIONS'		=> 'Языковые параметры',
	'PROFILE_TYPE_OPTIONS'		=> 'Настройки вида поля',

	'RADIO_BUTTONS'				=> 'Переключатели',
	'REMOVED_PROFILE_FIELD'		=> 'Поле профиля успешно удалено.',
	'REQUIRED_FIELD'			=> 'Обязательное поле',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Пользователю необходимо заполнить или выставить значение поля. Поле доступно при регистрации и в личном разделе.',
	'ROWS'						=> 'строк',

	'SAVE'							=> 'Сохранить',
	'SECOND_OPTION'					=> 'Второй вариант',
	'SHOW_NOVALUE_FIELD'			=> 'Отображать поле, если выбран незначащий вариант',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Устанавливает, будет ли отображено поле профиля в случае, если выбран незначащий вариант для необязательного поля, либо не было выбрано значение для обязательного поля.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Здесь вы можете ввести основные параметры нового поля профиля. Эта информация нужна для второго шага, на котором вы сможете установить оставшиеся настройки, сделать предварительный просмотр будущего поля и внести необходимые исправления, если необходимо.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Здесь вы можете изменить основные параметры нового поля профиля. На втором шаге соответствующие значения будут пересчитаны и вы сможете просмотреть и протестировать измененные настройки.',
	'STEP_1_TITLE_CREATE'			=> 'Добавление поля в профиль',
	'STEP_1_TITLE_EDIT'				=> 'Редактирование поля профиля',
	'STEP_2_EXPLAIN_CREATE'			=> 'Здесь вы можете задать общие настройки будущего поля. Затем можно будет посмотреть, как будет выглядеть для пользователя созданное поле. Поиграйте с настройками, пока не будете удовлетворены тем, как работает поле.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Здесь вы можете изменить общие настройки будущего поля. <br /><strong>Учтите, что эти изменения не повлияют на уже существующие поля профиля, заполненные пользователями.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Настройки вида поля',
	'STEP_2_TITLE_EDIT'				=> 'Настройки вида поля',
	'STEP_3_EXPLAIN_CREATE'			=> 'Так как на конференции установлено более одного языка, необходимо ввести данные для остальных языков. В противном случае, для данного поля будут использованы настройки языка по умолчанию. Настройки для других языков можно задать позже.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Так как на конференции установлено более одного языка, вы можете изменить или задать настройки для остальных языков. В противном случае, для данного поля будут использованы настройки языка по умолчанию.',
	'STEP_3_TITLE_CREATE'			=> 'Языковые переменные других языков',
	'STEP_3_TITLE_EDIT'				=> 'Языковые определения',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Введите строку, по умолчанию отображаемую в поле. Не вводите строку, если хотите оставить поле пустым.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Введите текст, по умолчанию отображаемый в поле. Не вводите текст, если хотите оставить поле пустым.',
	'TRANSLATE'						=> 'Перевести',

	'USER_FIELD_NAME'	=> 'Имя поля/заголовок, показываемый пользователю',

	'VISIBILITY_OPTION'				=> 'Видимость поля',
));
