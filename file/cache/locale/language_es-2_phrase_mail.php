<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  'user_setting_total_folders' => 'Importe total carpetas que el usuario puede a&#241;adir a su casilla de correo.

Para a&#241;adir un n&#250;mero ilimitado a&#241;adir "nulo" (sin comillas).',
  'menu_compose' => 'Escribir nuevo',
  'module_mail' => 'Correo',
  'menu_mail' => 'Mensajes',
  'user_wrote_time' => '<a href="{link}">{user}</a> escribi&#243; en {time}',
  'add_new_folder' => 'Agregar una nueva Carpeta...',
  'adding_new_folder' => 'Agregando una nueva carpeta',
  'invalid_message' => 'Mensaje inv&#225;lido.',
  'add_reply' => 'Agregar una respuesta.',
  'message' => 'Mensaje',
  'adding_message' => 'Agregando Mensaje.',
  'reply' => 'Responder',
  'send' => 'Enviar',
  'folders' => 'Carpetas',
  'edit_folders' => 'Editar Carpetas',
  'inbox' => 'Mensajes Recibidos',
  'sent_messages' => 'Mensajes Enviados',
  'trash' => 'Papelera',
  'add' => 'Agregar',
  'update' => 'Actualizar',
  'cancel' => 'Cancelar',
  'delete' => 'Eliminar',
  'view_folders' => 'Ver Carpetas',
  'move_folder' => 'Mover a la carpeta',
  'or_cancel' => 'o <a href="#" onclick="$(\'#js_action_selector\').val(\'\'); $(\'#js_folders\').hide(); $(\'#js_select_info\').show(\'slow\'); return false;">Cancelar</a>.',
  'default' => 'Predeterminado',
  'custom' => 'Personalizar',
  'select' => 'Seleccionar',
  'undelete' => 'Rescatar Borrados',
  'mark_read' => 'Marcar como Le&#237;do',
  'mark_unread' => 'Marcar como no Le&#237;do',
  'none' => 'Ninguno',
  'read' => 'Le&#237;dos',
  'unread' => 'No le&#237;dos',
  'all' => 'Todos',
  'to' => 'A',
  're' => 'Ref',
  'messages' => 'No hay mensajes.',
  'messages_updated' => 'Mensaje(s) ha(n) sido actualizados(s).',
  'messages_deleted' => 'Mensaje(s) ha(n) sido eliminado(s).',
  'search_inbox' => 'Bandeja de B&#250;squeda',
  'invalid_box' => 'Buz&#243;n Inv&#225;lido.',
  'message_successfully_deleted' => 'Mensaje ha sido eliminado.',
  'messages_successfully_moved' => 'Mensaje(s) ha(n) sido movido(s).',
  'folder_error' => 'Carpetas s&#243;lo pueden contener caracteres alfanum&#233;ricos, l&#237;mite de 255 caracteres y los s&#237;mbolos siguientes: _-',
  'folder_already_use' => 'Carpeta ya est&#225; en uso.',
  'compose_new_message' => 'Escribir un nuevo Mensaje',
  'subject' => 'Asunto',
  'provide_user_email' => 'Proporciona un usuario o un correo electr&#243;nico.',
  'provide_subject_for_your_message' => 'Proporciona un asunto para su mensaje.',
  'provide_message' => 'Proporciona un mensaje.',
  'message_was_successfully_users' => 'Tu mensaje se ha enviado a los siguientes usuarios',
  'not_member' => 'No es un miembro.',
  'cannot_send_message_yourself' => 'No te puedes enviar un mensaje a ti mismo.',
  'and' => 'y',
  'user_setting_can_compose_message' => 'Puede crear mensajes para otros usuarios?',
  'user_setting_can_add_folders' => 'Se puede agregar carpetas personalizadas?',
  'menu_view_messages' => 'Ver mensajes',
  'setting_show_core_mail_folders_item_count' => '<title>Show inbox, sentbox and deletebox item count</title><info>Si est&#225; activado mostrar&#225; los totales de cuenta de correo en cada carpeta, es decir:

recibidos (2)
enviados (6)
borrados (10)</info>',
  'user_setting_show_core_mail_folders_item_count' => 'Cuando se activa muestra cu&#225;ntos mensajes hay en la bandeja de entrada, Enviados y deletebox de cada perfil.

Tenga en cuenta que esto se suma las consultas adicionales a su base de datos.',
  'setting_display_total_mail_count' => '<title>Mostrar Total correos</title><info>Seleccione esto a <b>No</b> si desea mostrar el n&#250;mero de nuevos mensajes que un usuario tiene al lado de la principal "correo" que aparece en el men&#250; principal por defecto.

<b> Aviso: </ b> Esto a&#241;adir&#225; un extra de consulta SQL </ info>..',
  'user_setting_can_add_attachment_on_mail' => 'Pueden a&#241;adir archivos adjuntos?',
  'user_setting_mail_box_limit' => 'Este ajuste le indica cu&#225;ntos mensajes se pueden almacenar en funci&#243;n del grupo de usuarios. Se complementa con el establecimiento de override_mail_box_limit para que los miembros administradores y el personal para almacenar cualquier cantidad de mensajes.',
  'user_setting_override_mail_box_limit' => 'Este ajuste le indica si los miembros de este grupo de usuarios puede superar el l&#237;mite impuesto por el ajuste mail_box_limit.

Por defecto s&#243;lo los administradores y miembros del personal pueden tener mensajes ilimitados almacenados.',
  'user_setting_restrict_message_to_friends' => 'Este ajuste le indica si el usuario s&#243;lo puede enviar mensajes a la gente de su lista de amigos.',
  'user_setting_can_message_self' => 'Esta configuraci&#243;n controla si los miembros de este grupo de usuarios pueden enviar mensajes a s&#237; mismos.',
  'user_setting_override_restrict_message_to_friends' => 'Miembros autorizados para anular el"restrict_message_to_friends" ser&#225; capaz de recibir mensajes sin importar si son amigos del remitente o no.',
  'user_setting_mail_box_warning' => 'Cuando los usuarios est&#225;n a punto de utilizar todo el espacio permitido por correo electr&#243;nico un mensaje de advertencia se mostrar&#225;.

Este ajuste le indica qu&#233; porcentaje de su capacidad de correo electr&#243;nico debe ser utilizado antes de mostrar esta advertencia.

Ajuste a cero para no mostrar nunca una advertencia.',
  'setting_enable_mail_box_warning' => '<title>Mostrar advertencia al acercarse L&#237;mite Maibox</title><info>Esta configuraci&#243;n anula la configuraci&#243;n de grupo de usuarios \'mail.mail_box_warning\'. Si esta opci&#243;n est&#225; deshabilitada sin previo aviso se mostrar&#225;n sin importar de qu&#233; est&#225; establecido en mail.mail_box_warning.</info>',
  'user_setting_allow_delete_every_message' => 'Cuando se activa esta opci&#243;n permite a los usuarios borrar todos los mensajes de la carpeta actual sin tener que borrar varias veces, o pasar por el localizador.

Una nueva opci&#243;n aparecer&#225; en el selector electr&#243;nico con el n&#250;mero de mensajes para eliminar entre par&#233;ntesis.

ejemplo:
    ninguno
    leer
    no le&#237;do
    todos
-> Todos los (24)',
  'setting_enable_cron_delete_old_mail' => '<title>Autoborrado de correo antiguo</title><info>Este ajuste aciva o desactiva el borrado automatico de correo antiguo.

Se puede establecer la edad de un mensaje en el ajuste <setting>mail.message_age_to_delete</setting>.

Puede configurar la frecuencia con la que ejecute este trabajo en el ajuste<setting>mail.cron_delete_messages_delay</setting>.</info>',
  'setting_cron_delete_messages_delay' => '<title>Auto Borrar mensajes</title><info>Este ajuste le indica con qu&#233; frecuencia (en d&#237;as) el eliminador autom&#225;tico eliminar mensajes antiguos.</info>',
  'setting_message_age_to_delete' => '<title>Un mensaje viejo es...</title><info>Este ajuste le indica la edad de un mensaje debe estar (en d&#237;as) para ser autoeliminado.

Este ajuste depende directamente de<setting>mail.enable_cron_delete_old_mail</setting>.</info>',
  'setting_delete_sent_when_account_cancel' => '<title>Borrar correos enviados</title><info>Cuando un usuario cancela su cuenta el sistema debe eliminar los mensajes enviados?

Esto afecta el otro usuario la lista de mensajes recibidos y est&#225; activado por defecto.</info>',
  'user_setting_can_read_private_messages' => 'Pueden los miembros de este grupo leer los mensajes privados en su sitio?',
  'user_setting_can_delete_others_messages' => 'Pueden los miembros de este grupo borrar los mensajes de otras personas?',
  'user_setting_enable_captcha_on_mail' => 'Activar Captcha al crear mensajes.',
  'setting_spam_check_messages' => '<title>Compruebe spam interno PM</title><info>Compruebe spam interno PM</info>',
  'setting_mail_hash_check' => '<title>PM Hash Check</title><info>Si se habilita esta comprobar&#225; si los mensajes enviados en los &#250;ltimos X minutos Y los &#250;ltimos son id&#233;nticos al mensaje que se establezcan.

Aviso: X & Y son los par&#225;metros que se pueden cambiar.</info>',
  'setting_total_mail_messages_to_check' => '<title>Mensajes privados para verificar</title><info>Si la configuraci&#243;n para comprobar si son id&#233;nticos PM se puede ver aqu&#237; la cantidad de mensajes en el pasado debe ser revisado.</info>',
  'setting_total_minutes_to_wait_for_pm' => '<title>PM Minutes to Wait Unilt Next Check</title><info>Si la configuraci&#243;n para comprobar si son id&#233;nticos PM se puede establecer aqu&#237; a qu&#233; distancia se debe comprobar en cuesti&#243;n de minutos.</info>',
  'setting_show_preview_message' => '<title>Mostrar previo mensaje</title><info>Si est&#225; activado los usuarios pueden ver una version corta de sus mensajes.</info>',
  'user_setting_send_message_to_max_users_each_time' => 'Este valor restringe el env&#237;o de mensajes privados.
Se establece el n&#250;mero m&#225;ximo de destinatarios al enviar mensajes privados, evitando a los usuarios seleccionar demasiados y prevenir el spam potencial.

Establece en 0 para un n&#250;mero ilimitado.',
  'read_private_message' => 'Leer Mensaje Privado',
  'subject_amp_text' => 'Asunto y Texto',
  'text' => 'Texto',
  'all_members' => 'Todos los Miembros',
  'featured_members' => 'Oficiales',
  'online' => 'En L&#237;nea',
  'updated' => 'Actualizado',
  'name_and_photo_only' => 'Nombre y Foto Solamente',
  'name_photo_and_users_details' => 'Nombre, foto y detalles del usuario',
  'private_messages' => 'Mensajes Privados',
  'view_private_messages' => 'Ver Mensajes Privados',
  'currently_your_account_is_marked_as_a_spammer' => 'Actualmente su cuenta est&#225; marcada como un "spammer". Esta caracter&#237;stica espec&#237;fica no est&#225; habilitada para su cuenta en el momento.',
  'unable_to_send_a_private_message_to_this_user_at_the_moment' => 'No se puede enviar un mensaje privado a este usuario en este momento.',
  'select_a_member_to_send_a_message_to' => 'Selecciona un miembro para enviar un mensaje a.',
  'this_message_feels_like_spam_try_again' => 'Este mensaje se siente como SPAM. Prueba otra vez.',
  'mail' => 'Correo',
  'no_mail_specified' => 'No hay correo especificado.',
  'mail_deleted_successfully' => 'Correo ha sido eliminado.',
  'mail_could_not_be_deleted' => 'El correo no puede ser eliminado.',
  'error_you_did_not_select_any_message' => 'Error, no has seleccionado ning&#250;n mensaje.',
  'mail_folder_does_not_exist' => 'Carpeta de correo no existe.',
  'new_messages' => 'Muevos Mensajes',
  'compose_message' => 'Escribir',
  '1_new_message' => 'un nuevo mensaje',
  'total_new_messages' => '{total} nuevos mensajes',
  'user_link_sent_you_a_message' => '{user_link} te envi&#243; un mensaje.',
  'mail_text' => 'Texto del mensaje',
  'too_many_users_this_message_was_sent_to_the_first_total_users' => 'Demasiados usuarios, este mensaje se envi&#243; a los primeros {total} usuarios.',
  'unable_to_send_a_private_message_to_full_name_as_they_have_disabled_this_option_for_the_moment' => 'No se puede enviar un mensaje privado a "{full_name}", esta opci&#243;n ha sido desactivada por el momento.',
  'user_has_reached_their_inbox_limit' => 'El usuario ha llegado a su l&#237;mite de buz&#243;n de entrada.',
  'you_cannot_message_yourself' => 'No puedes enviarte mensaje a ti mismo.',
  'you_can_only_message_your_friends' => 'S&#243;lo puedes enviarle mensajes a tus amigos.',
  'not_a_valid_message' => 'No es un mensaje v&#225;lido.',
  'full_name_sent_you_a_message_on_site_title' => '{full_name} te envi&#243; un mensaje en {site_title}.',
  'full_name_sent_you_a_message_subject_subject' => '{full_name} te envi&#243; un mensaje.

--------------------
Asunto: {subject}

{message}
--------------------

Para responder a este mensaje, sige el siguiente enlace:
<a href="{link}">{link}</a>',
  'you_will_delete_every_message_in_this_folder' => 'Debes borrar todos los mensajes en esta carpeta.',
  'member_search' => 'Buscar Miembros',
  'search' => 'Buscar',
  'within' => 'dentro',
  'user_group' => 'Grupo de Usuarios',
  'show_members' => 'Mostrar Miembros',
  'messages_title' => 'Mensaje',
  'from' => 'De',
  'sent' => 'Enviados',
  'read_message' => 'Leer Mensaje',
  'delete_message' => 'Eliminar Mensaje',
  'message_sender' => 'Remitente del Mensaje',
  'message_user' => 'Mensaje del usuario',
  'message_receiver' => 'Receptor de Mensajes',
  'are_you_sure' => '&#191;Est&#225;s seguro?',
  'no_messages_to_show' => 'No hay mensajes para mostrar.',
  'send_a_copy_to_myself' => 'Enviar una copia a m&#237; mismo.',
  'you_can_only_send_this_message_to_total_users' => 'S&#243;lo se puede enviar este mensaje a {total} usuarios.',
  'messages_total_days_old_will_be_auto_deleted' => '{total} d&#237;as de antig&#252;edad de los mensajes se ha auto eliminado.',
  'you_have_reached_your_mail_box_capacity_and_wont_be_able' => 'Has llegado a la capacidad de tu buz&#243;n de de correo electr&#243;nico y no podr&#225;s recibir m&#225;s mensajes hasta que liberes algo de espacio.',
  'you_are_approaching_your_mail_box_limit' => 'Te est&#225; acercando a tu l&#237;mite de buz&#243;n de correo electr&#243;nico, actualmente est&#225; en {total}%. Cuando llegues a 100%, no podr&#225;s recibir m&#225;s correo.',
  'view_attachments' => 'Ver datos adjuntos',
  'you_wrote_to_yourself_at_time_stamp' => 'Te escribistes a t&#237; mismo en {time_stamp}.',
  'preview' => 'Vista Previa',
  'you_wrote_to_user_name_at_time_stamp' => 'Escribiste a {user_name} en {time_stamp}.',
  'user_name_wrote_at_time_stamp' => '{user_name} escribi&#243; en {time_stamp}.',
  'site_sent_you_a_message' => '{site} te ha enviado un mensaje.',
  'mass_message_to' => 'Mensaje Masivo a',
  'previous' => 'Anterior',
  'newer_message' => 'Mensaje m&#225;s reciente',
  'next' => 'Pr&#243;ximo',
  'older_message' => 'Mensaje m&#225;s viejo',
  'provide_a_name_for_your_folder' => 'Proporcione un nombre para su carpeta.',
  'you_have_reached_your_limit' => 'Has llegado a tu l&#237;mite.',
  'mesages_sent' => 'Mensajes',
  'viewing_private_message' => 'Viendo mensaje privado',
  'private_message_from_timestamp' => 'Mensajes privados desde {time_stamp} entre {owner} y {viewer}.',
  'message_not_found' => 'Mensaje no encontrado.',
  'report' => 'Denunciar',
  'report_this_message' => 'Denunciar este mensaje.',
  'mobile_messages' => 'Mensajes',
  'compose' => 'Enviar',
  'no_messages' => 'No hay mensajes',
  'unable_to_find_any_messages' => 'Incapaz de encontrar ning&#250;n mensaje',
  'select_recipient' => 'Seleccionar destinatario',
  'select_a_recipient_below' => 'Seleccione un destinatario a continuaci&#243;n',
  'update_mail_count' => 'Actualizar numero de mails',
  'updating' => 'Actualizando',
  'setting_disallow_select_of_recipients' => '<title>Disallow Selecting Not Allowed Recipients</title><info>Cuando esta opci&#243;n est&#225; activada, el script se ejecuta un control adicional en cada usuario de destino en la selecci&#243;n de quienes recibir&#225;n un correo interno.

Esto ayuda a que el selector del usuario a ser m&#225;s f&#225;cil de usar al no permitir elegir y escribir un mensaje a alguien que no puede recibir, pero, al mismo tiempo que utiliza m&#225;s recursos y puede ralentizar el sitio.</info>',
  'processing_batch_number' => 'Procesamiento por lotes {number}',
  'batch_number_completed_percentage' => 'Lote {page_number} completado ({percentage}%)',
  'use_the_exact_user_name' => 'Use el nombre de usuario exacto',
  'send_from_my_own_address_semail' => 'Enviar a mi propia direcci&#243;n({sEmail})',
  'messages_notify' => 'Mensajes',
  'send_a_new_message' => 'Enviar un nuevo mensaje',
  'no_new_messages' => 'No hay mensajes nuevos.',
  'see_all_messages' => 'Ver todos los mensajes',
  'new_folder' => 'Nueva carpeta',
  'new_message' => 'Nuevo mensaje',
  'select_folder' => 'Seleccionar carpeta',
  'folder_successfully_created' => 'Carpeta creada.',
  'create_new_folder' => 'Crear carpeta',
  'delete_this_list' => 'Eliminar esta lista',
  'moderate' => 'Moderar',
  'mark_as_read' => 'Marcar como leido',
  'mark_as_unread' => 'Marcar como no leido',
  'you' => 'Tu',
  'no_messages_found_here' => 'No hay mensajes.',
  'create_a_new_folder' => 'Crear una nueva carpeta',
  'search_messages' => 'Buscar Mensajes...',
  'latest' => '&#218;ltimo',
  'unread_first' => 'No leidos primero',
  'move' => 'Mover',
  'this_message_was_sent_from_full_name' => 'Este mensaje ha sido enviado desde {full_name}',
  'actions' => 'Acciones',
  'search_friends_by_their_name' => 'Buscar amigos por su nombre...',
  'enter_the_name_of_your_custom_folder' => 'Escriba el nombre de la carpeta personalizada.',
  'submit' => 'Enviar',
  'your_message_was_successfully_sent' => 'Su mensaje ha sido enviado',
  'li_a_href_link_email_image_new_messages_messages_number_a_li' => '<li><a href="{link}">{email_image} Nuevos mensajes( {messages_number})</a><li>',
  'get_the_total_number_of_unseen_messages_if_you_do_not_pass_the_user_id_we_will_return_information_about_the_user_that_is_currently_logged_in' => 'Consige el n&#250;mero total de mensajes no leidos. Si usted no pasa el #{USER_ID} devolveremos la informaci&#243;n sobre el usuario que a entrado al sistema actualmente.',
  'folder_successfully_deleted' => 'Carpeta eliminada.',
  'message_s_successfully_deleted' => 'Mensaje(s) eliminado.',
  'setting_update_message_notification_preview' => '<title>Update Message "Read" on Notification Preview</title><info>Enable this option to update the notification counter for new messages when a user previews the mail via the site wide mail notification icon.</info>',
  'menu_mail_mail_532c28d5412dd75bf975fb951c740a30' => 'Mail',
  'setting_threaded_mail_conversation' => '<title>Threaded Mail Conversation</title><info>Enable this option to display messages from 2 users as 1 conversation.</info>',
  'full_name_sent_you_a_message_no_subject' => '{full_name} sent you a message.

--------------------
{message}
--------------------

To reply to this message, follow the link below:
<a href="{link}">{link}</a>',
  'unable_to_export_your_messages' => 'Unable to export your messages.',
  'message_has_been_read' => 'Message has been read',
  'forward' => 'Forward',
  'unable_to_find_a_conversation_history_with_this_user' => 'Unable to find a conversation history with this user.',
  'messages_un_archived' => 'Messages un-archived',
  'messages_archived' => 'Messages archived',
  'moderation' => 'Moderation',
  'sent_via_a_mobile_device' => 'Sent via a mobile device',
  'message_successfully_archived' => 'Message successfully archived.',
  'message_successfully_unarchived' => 'Message successfully unarchived.',
  'archive' => 'Archive',
  'un_archive' => 'Un-archive',
  'export' => 'Export',
  'unable_to_find_the_message_you_are_trying_to_mark_as_read_unread' => 'Unable to find the message you are trying to mark as read/unread.',
  'unarchive' => 'Unarchive',
  'you_are_currently_viewing_our_legacy_inbox' => 'You are currently viewing our legacy inbox.',
  'you_are_viewing_a_message_that_is_from_our_legacy_inbox' => 'You are viewing a message that is from our legacy inbox.',
  'view_more' => 'View More',
  'custom_folders' => 'Custom Folders',
  'this_message_was_sent_to_full_name' => 'This message was sent to {full_name}',
  'this_message_was_sent_from_you' => 'This message was sent from you',
  'legacy_inbox' => 'Legacy Inbox',
  'page_claim_message' => 'Hello, I hereby claim the page "{title}" (URL: {url}) as my own and request your attention to the matter. I am able to provide any documentation that you may require.',
  'claiming_page_title' => 'Claiming Page &#039;{title}&#039;',
); ?>