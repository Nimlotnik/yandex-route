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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Добавить вложения',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Если вы не хотите добавлять вложения, оставьте поля пустыми.',
	'ADD_FILE'					=> 'Добавить файл',
	'ADD_POLL'					=> 'Добавить опрос',
	'ADD_POLL_EXPLAIN'			=> 'Если вы не хотите добавлять опрос к вашему сообщению, оставьте поля пустыми.',
	'ALREADY_DELETED'			=> 'Это сообщение уже удалено.',
	'ATTACH_DISK_FULL'			=> 'Недостаточно свободного места на диске для загрузки данного вложения.',
	'ATTACH_QUOTA_REACHED'		=> 'Достигнут максимальный общий размер ваших вложений.',
	'ATTACH_SIG'				=> 'Присоединить подпись (её можно изменять в личном разделе)',

	'BBCODE_A_HELP'				=> 'Вставить вложение в текст сообщения: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Жирный текст: [b]текст[/b]',
	'BBCODE_C_HELP'				=> 'Код: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Флэш: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Размер шрифта: [size=85]маленький шрифт[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ОТКЛЮЧЕН</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>ВКЛЮЧЁН</em>',
	'BBCODE_I_HELP'				=> 'Наклонный текст: [i]текст[/i]',
	'BBCODE_L_HELP'				=> 'Список: [list][*]текст[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Элемент списка: [*]текст',
	'BBCODE_O_HELP'				=> 'Упорядоченный список: [list=1][*]Пункт первый[/list] или [list=a][*]Пункт a[/list]',
	'BBCODE_P_HELP'				=> 'Вставить изображение: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Цитата: [quote]текст[/quote]',
	'BBCODE_S_HELP'				=> 'Цвет шрифта: [color=red]текст[/color] или [color=#FF0000]текст[/color]',
	'BBCODE_U_HELP'				=> 'Подчёркнутый текст: [u]текст[/u]',
	'BBCODE_W_HELP'				=> 'Вставить ссылку: [url]http://url[/url] или [url=http://url]Текст ссылки[/url]',
	'BBCODE_Y_HELP'				=> 'Список: добавить элемент списка',
	'BUMP_ERROR'				=> 'Вы не можете поднимать тему сразу после последнего сообщения. Попробуйте чуть позже.',

	'CANNOT_DELETE_REPLIED'		=> 'Извините, но вы можете удалять только сообщения, не имеющие ответов.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Это сообщение было заблокировано, вы не можете его редактировать.',
	'CANNOT_EDIT_TIME'			=> 'Вы больше не можете редактировать или удалять это сообщение.',
	'CANNOT_POST_ANNOUNCE'		=> 'Вы не можете создавать объявления.',
	'CANNOT_POST_STICKY'		=> 'Вы не можете создавать прилепленные темы.',
	'CHANGE_TOPIC_TO'			=> 'Статус темы',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Сообщение содержит %1$d символ.',
		2	=> 'Сообщение содержит %1$d символа.',
		3	=> 'Сообщение содержит %1$d символов.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Подпись содержит %1$d символ.',
		2	=> 'Подпись содержит %1$d символа.',
		3	=> 'Подпись содержит %1$d символов.',
	),
	'CLOSE_TAGS'				=> 'Закрыть тэги',
	'CURRENT_TOPIC'				=> 'Текущая тема',

	'DELETE_FILE'				=> 'Удалить файл',
	'DELETE_MESSAGE'			=> 'Удалить сообщение',
	'DELETE_MESSAGE_CONFIRM'	=> 'Вы уверены, что хотите удалить это сообщение?',
	'DELETE_OWN_POSTS'			=> 'Извините, но вы можете удалять только ваши собственные сообщения.',
	'DELETE_PERMANENTLY'		=> 'Удалить безвозвратно',
	'DELETE_POST_CONFIRM'		=> 'Вы уверены, что хотите удалить это сообщение?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Вы уверены, что хотите <strong>безвозвратно</strong> удалить это сообщение?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Удалить данное сообщение без возможности восстановления',
		2	=> 'Удалить %1$d сообщения без возможности восстановления',
		3	=> 'Удалить %1$d сообщений без возможности восстановления',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Вы уверены, что хотите удалить эти сообщения?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Вы уверены, что хотите <strong>безвозвратно</strong> удалить эти сообщения?',
	'DELETE_REASON'				=> 'Причина удаления',
	'DELETE_REASON_EXPLAIN'		=> 'Указанная причина удаления будет видна только модераторам.',
	'DELETE_POST_WARN'			=> 'Удалить это сообщение',
	'DELETE_TOPIC_CONFIRM'		=> 'Вы уверены, что хотите удалить эту тему?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Удалить данную тему без возможности восстановления',
		2	=> 'Удалить %1$d темы без возможности восстановления',
		3	=> 'Удалить %1$d тем без возможности восстановления',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Вы уверены, что хотите <strong>безвозвратно</strong> удалить эту тему?',
	'DELETE_TOPICS_CONFIRM'		=> 'Вы уверены, что хотите удалить эти темы?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Вы уверены, что хотите <strong>безвозвратно</strong> удалить эти темы?',
	'DISABLE_BBCODE'			=> 'Отключить в этом сообщении BBCode',
	'DISABLE_MAGIC_URL'			=> 'Не преобразовывать адреса URL в ссылки',
	'DISABLE_SMILIES'			=> 'Отключить в этом сообщении смайлики',
	'DISALLOWED_CONTENT'		=> 'Закачка была отклонена, так как вложение было определено как возможная атака.',
	'DISALLOWED_EXTENSION'		=> 'Расширение %s запрещено администратором.',
	'DRAFT_LOADED'				=> 'Черновик загружен, вы можете закончить редактирование сообщения сейчас.<br />После отправки этого сообщения черновик будет удалён.',
	'DRAFT_LOADED_PM'			=> 'Черновик загружен, вы можете закончить редактирование личного сообщения сейчас.<br />После отправки этого личного сообщения черновик будет удалён.',
	'DRAFT_SAVED'				=> 'Черновик успешно сохранён.',
	'DRAFT_TITLE'				=> 'Название черновика',

	'EDIT_REASON'				=> 'Причина редактирования сообщения',
	'EMPTY_FILEUPLOAD'			=> 'Загруженный файл пустой.',
	'EMPTY_MESSAGE'				=> 'Вы должны ввести текст сообщения',
	'EMPTY_REMOTE_DATA'			=> 'Не удалось закачать файл, пожалуйста, попробуйте закачать его вручную.',

	'FLASH_IS_OFF'				=> '[flash] <em>ОТКЛЮЧЕН</em>',
	'FLASH_IS_ON'				=> '[flash] <em>ВКЛЮЧЁН</em>',
	'FLOOD_ERROR'				=> 'Вы не можете отправить следующее сообщение сразу после предыдущего. Пожалуйста, попробуйте чуть позже.',
	'FONT_COLOR'				=> 'Цвет шрифта',
	'FONT_COLOR_HIDE'			=> 'Скрыть панель цветов',
	'FONT_HUGE'					=> 'Огромный',
	'FONT_LARGE'				=> 'Большой',
	'FONT_NORMAL'				=> 'Нормальный',
	'FONT_SIZE'					=> 'Размер шрифта',
	'FONT_SMALL'				=> 'Маленький',
	'FONT_TINY'					=> 'Очень маленький',

	'GENERAL_UPLOAD_ERROR'		=> 'Не удалось закачать вложение %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>ОТКЛЮЧЕН</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>ВКЛЮЧЁН</em>',
	'INVALID_FILENAME'			=> '%s является недопустимым именем файла.',

	'LOAD'						=> 'Загрузить',
	'LOAD_DRAFT'				=> 'Загрузить черновик',
	'LOAD_DRAFT_EXPLAIN'		=> 'Вы можете выбрать черновик для продолжения редактирования сообщения. Ваше текущее сообщение будет удалено, содержание сообщения будет утеряно. <br />Просматривать, редактировать и удалять черновики вы можете в личном разделе.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Вам необходимо авторизоваться для поднятия темы в этом форуме.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Вам необходимо авторизоваться для удаления сообщений в этом форуме.',
	'LOGIN_EXPLAIN_POST'		=> 'Вам необходимо авторизоваться для создания сообщений в этом форуме.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Вам необходимо авторизоваться для цитирования сообщений в этом форуме.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Вам необходимо авторизоваться, чтобы отвечать в темах в этом форуме.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Вы можете использовать шрифты размером не более %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Ваши флэш-файлы должны быть не более %d пикс. в высоту.',
		2	=> 'Ваши флэш-файлы должны быть не более %d пикс. в высоту.',
		3	=> 'Ваши флэш-файлы должны быть не более %d пикс. в высоту.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Ваши флэш-файлы должны быть не более %d пикс. в ширину.',
		2	=> 'Ваши флэш-файлы должны быть не более %d пикс. в ширину.',
		3	=> 'Ваши флэш-файлы должны быть не более %d пикс. в ширину.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Ваши изображения должны быть не более %1$d пикс. в высоту.',
		2	=> 'Ваши изображения должны быть не более %1$d пикс. в высоту.',
		3	=> 'Ваши изображения должны быть не более %1$d пикс. в высоту.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Ваши изображения должны быть не более %d пикс. в ширину.',
		2	=> 'Ваши изображения должны быть не более %d пикс. в ширину.',
		3	=> 'Ваши изображения должны быть не более %d пикс. в ширину.',
	),
	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Введите текст вашего сообщения. Длина сообщения не более <strong>%d</strong> символа.',
		2	=> 'Введите текст вашего сообщения. Длина сообщения не более <strong>%d</strong> символов.',
		3	=> 'Введите текст вашего сообщения. Длина сообщения не более <strong>%d</strong> символов.',
	),
	'MESSAGE_DELETED'			=> 'Сообщение было успешно удалено.',
	'MORE_SMILIES'				=> 'Ещё смайлики…',

	'NOTIFY_REPLY'				=> 'Сообщать мне о получении ответа',
	'NOT_UPLOADED'				=> 'Не удалось загрузить файл.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Вы не можете удалять существующие варианты ответов.',
	'NO_PM_ICON'				=> 'Нет значка ЛС',
	'NO_POLL_TITLE'				=> 'Вы должны ввести название опроса.',
	'NO_POST'					=> 'Сообщение не существует.',
	'NO_POST_MODE'				=> 'Не указан режим сообщения.',
	'NO_TEMP_DIR'				=> 'Временная папка не найдена или недоступна для записи.',

	'PARTIAL_UPLOAD'			=> 'Файл загружен только частично.',
	'PHP_UPLOAD_STOPPED'		=> 'Загрузка файла остановлена одним из модулей PHP.',
	'PHP_SIZE_NA'				=> 'Слишком большой размер вложения.<br />Невозможно определить максимальный размер закачиваемых файлов, заданный в php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Слишком большой размер вложения.<br />Максимальный размер закачиваемого файла: %1$d %2$s.<br />Имейте в виду, что эта величина определена в php.ini и средствами форума невозможно изменить это значение в большую сторону.',
	'PLACE_INLINE'				=> 'Вставить в текст сообщения',
	'POLL_DELETE'				=> 'Удалить опрос',
	'POLL_FOR'					=> 'Опрос должен идти',
	'POLL_FOR_EXPLAIN'			=> 'Введите 0, чтобы опрос не заканчивался.',
	'POLL_MAX_OPTIONS'			=> 'Вариантов ответа',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Количество вариантов ответа, разрешённых при голосовании.',
	'POLL_OPTIONS'				=> 'Варианты ответа',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Разместите каждый вариант ответа с новой строки. Максимальное количество вариантов: <strong>%d</strong>.',
		2	=> 'Разместите каждый вариант ответа с новой строки. Максимальное количество вариантов: <strong>%d</strong>.',
		3	=> 'Разместите каждый вариант ответа с новой строки. Максимальное количество вариантов: <strong>%d</strong>.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> array(
		1	=> 'Разместите каждый вариант ответа с новой строки. Максимальное количество вариантов: <strong>%d</strong>. Если вы удалите или добавите новый вариант ответа, результаты голосования обнулятся.',
		2	=> 'Разместите каждый вариант ответа с новой строки. Максимальное количество вариантов: <strong>%d</strong>. Если вы удалите или добавите новый вариант ответа, результаты голосования обнулятся.',
		3	=> 'Разместите каждый вариант ответа с новой строки. Максимальное количество вариантов: <strong>%d</strong>. Если вы удалите или добавите новый вариант ответа, результаты голосования обнулятся.',
	),
	'POLL_QUESTION'				=> 'Вопрос',
	'POLL_TITLE_TOO_LONG'		=> 'Название опроса должно содержать меньше 100 знаков.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Название опроса слишком длинное, попробуйте уменьшить количество BBCode или смайликов.',
	'POLL_VOTE_CHANGE'			=> 'Разрешить изменять ответ',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Если разрешено, пользователи могут менять свои ответы в опросе.',
	'POSTED_ATTACHMENTS'		=> 'Опубликованные вложения',
	'POST_APPROVAL_NOTIFY'		=> 'Вы будете уведомлены об одобрении вашего сообщения.',
	'POST_CONFIRMATION'			=> 'Подтверждение отправки',
	'POST_CONFIRM_EXPLAIN'		=> 'Для предотвращения автоматического размещения сообщений на этой конференции необходимо ввести код подтверждения. Код отображён на картинке ниже. Если из-за плохого зрения или по другим причинам вы не можете прочесть код на картинке, свяжитесь с %sадминистратором%s',
	'POST_DELETED'				=> 'Сообщение успешно удалено.',
	'POST_EDITED'				=> 'Сообщение успешно отредактировано.',
	'POST_EDITED_MOD'			=> 'Сообщение успешно отредактировано, но должно быть одобрено модератором до того, как будет отображено на конференции.',
	'POST_GLOBAL'				=> 'Важная',
	'POST_ICON'					=> 'Значок',
	'POST_NORMAL'				=> 'Обычная',
	'POST_REVIEW'				=> 'Предварительный просмотр',
	'POST_REVIEW_EDIT'			=> 'Предварительный просмотр',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Это сообщение было изменено другим пользователем в то время, когда вы редактировали его. Вы можете просмотреть текущую версию сообщения и внести желаемые изменения.',
	'POST_REVIEW_EXPLAIN'		=> 'Было добавлено по крайней мере одно сообщение в этой теме. Возможно, вы захотите изменить содержание своего сообщения.',
	'POST_STORED'				=> 'Сообщение успешно отправлено.',
	'POST_STORED_MOD'			=> 'Сообщение успешно отправлено, но должно быть одобрено модератором до того, как будет отображено на конференции.',
	'POST_TOPIC_AS'				=> 'Статус создаваемой темы',
	'PROGRESS_BAR'				=> 'Индикатор загрузки',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Максимально допустимое количество вложенных друг в друга цитат в сообщении: %d.',
		2	=> 'Максимально допустимое количество вложенных друг в друга цитат в сообщении: %d.',
		3	=> 'Максимально допустимое количество вложенных друг в друга цитат в сообщении: %d.',
	),
	'QUOTE_NO_NESTING'			=> 'Вложенные цитаты запрещены.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Указанный файл не может быть загружен из-за превышения времени ожидания запроса.',
	'SAVE'						=> 'Сохранить',
	'SAVE_DATE'					=> 'Последнее изменение',
	'SAVE_DRAFT'				=> 'Сохранить черновик',
	'SAVE_DRAFT_CONFIRM'		=> 'Пожалуйста, обратите внимание, что сохраняются только заголовок и текст сообщения, любые другие элементы будут удалены.<br />Вы хотите сохранить черновик сейчас?',
	'SMILIES'					=> 'Смайлики',
	'SMILIES_ARE_OFF'			=> 'Смайлики <em>ОТКЛЮЧЕНЫ</em>',
	'SMILIES_ARE_ON'			=> 'Смайлики <em>ВКЛЮЧЕНЫ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Срок действия для объявления/прилепленной/важной темы',
	'STICK_TOPIC_FOR'			=> 'Тема будет прилепленной/объявлением/важной',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Введите 0, чтобы повышенный статус темы сохранялся бессрочно. Обратите внимание, что указанный срок отсчитывается от момента создания темы.',
	'STYLES_TIP'				=> 'Совет: можно быстро применить стили к выделенному тексту.',

	'TOO_FEW_CHARS'				=> 'Ваше сообщение слишком короткое.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Необходимо ввести не менее %1$d символа.',
		2	=> 'Необходимо ввести не менее %1$d символов.',
		3	=> 'Необходимо ввести не менее %1$d символов.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Необходимо ввести по крайней мере два варианта ответа в опросе.',
	'TOO_MANY_ATTACHMENTS'		=> 'Невозможно добавить ещё одно вложение, максимальное количество: %d.',
	'TOO_MANY_CHARS'			=> 'Ваше сообщение слишком длинное.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		1	=> 'Максимальное разрешённое количество символов: %1$d.',
		2	=> 'Максимальное разрешённое количество символов: %1$d.',
		3	=> 'Максимальное разрешённое количество символов: %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Вы выбрали слишком много вариантов ответа в опросе.',
	'TOO_MANY_SMILIES'			=> 'Ваше сообщение содержит слишком много смайликов. Максимальное разрешённое количество: %d.',
	'TOO_MANY_URLS'				=> 'Ваше сообщение содержит слишком много ссылок URL. Максимальное разрешённое количество: %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Слишком много вариантов ответа.',
	'TOPIC_BUMPED'				=> 'Тема успешно поднята.',

	'UNAUTHORISED_BBCODE'		=> 'Вы не можете использовать некоторые BBCode: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Для того, чтобы изменить статус темы с важной на обычную, вы должны выбрать форум, в котором она будет опубликована.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Сообщение содержит следующие неподдерживаемые символы:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Тема сообщения содержит следующие неподдерживаемые символы:<br />%s',
	'UPDATE_COMMENT'			=> 'Обновить комментарий',
	'URL_INVALID'				=> 'Указанный вами адрес файла недопустим.',
	'URL_NOT_FOUND'				=> 'Указанный файл не найден.',
	'URL_IS_OFF'				=> '[url] <em>ОТКЛЮЧЕН</em>',
	'URL_IS_ON'					=> '[url] <em>ВКЛЮЧЁН</em>',
	'USER_CANNOT_BUMP'			=> 'Вы не можете поднимать темы в этом форуме.',
	'USER_CANNOT_DELETE'		=> 'Вы не можете удалять сообщения в этом форуме.',
	'USER_CANNOT_EDIT'			=> 'Вы не можете редактировать сообщения в этом форуме.',
	'USER_CANNOT_REPLY'			=> 'Вы не можете отвечать на сообщения в этом форуме.',
	'USER_CANNOT_FORUM_POST'	=> 'Вы не можете размещать сообщения в этом форуме. Тип форума не поддерживает этого.',

	'VIEW_MESSAGE'				=> '%sПросмотреть ваше сообщение%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sПросмотреть отправленные вами личные сообщения%s',

	'WRONG_FILESIZE'			=> 'Слишком большой размер вложения. Максимальный разрешённый размер: %1$d %2$s.',
	'WRONG_SIZE'				=> 'Размеры изображения должны быть не менее %1$s×%2$s и не более %3$s×%4$s. Размер отправленного изображения — %5$s×%6$s.',
));
