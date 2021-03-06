<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  'user_setting_wysiwyg_on_comments' => 'Puede utilizar un editor WYSIWYG en los comentarios?

Nota: La funci&#243;n del editor WYSIWYG debe estar habilitado.',
  'user_setting_edit_own_comment' => '&#191;Pueden editar sus propios comentarios?',
  'user_setting_edit_user_comment' => '&#191;Puede editar comentarios agregados por otros usuarios?',
  'user_setting_delete_own_comment' => '&#191;Se puede borrar sus propios comentarios?',
  'user_setting_delete_user_comment' => '&#191;Puede eliminar comentarios agregados por otros usuarios?',
  'user_setting_points_comment' => 'Especifique cu&#225;ntos puntos, el usuario recibir&#225; al agregar un nuevo comentario.',
  'user_setting_can_vote_on_comments' => 'Permitir a los usuarios a votar sobre los comentarios?',
  'user_setting_can_post_comments' => '&#191;Pueden publicar comentarios?',
  'module_comment' => 'Comentario',
  'x_wrote' => '<a href="{link}">{full_name}</a> escribi&#243; en {date}',
  'edit' => 'Editar',
  'reply' => 'Responder',
  'quote' => 'Citar',
  'delete' => 'Eliminar',
  'delete_comment' => 'Eliminar Comentario',
  'last_update_on_x_by_x' => '&#218;ltima actualizaci&#243;n el {date} por {full_name}',
  'fill_text_your_comment' => 'Rellene el texto de su comentario',
  'leave_a_reply' => 'Deje una contestaci&#243;n',
  'comment' => 'Comentario',
  'submit_comment' => 'Enviar Comentario',
  'adding_comment' => 'Enviando...',
  'comment_deleted' => 'Comentario Eliminado',
  'voted' => 'Vot&#243;!',
  'vote' => '{total} Votos',
  'votes' => '{total} Votos',
  'vote_this_comment' => 'Vote este comentario Arriba',
  'vote_this_comment_down' => 'Vote este comentario Abajo',
  'comments_header' => 'Comentarios',
  'comments' => 'No existen comentarios. Sea el primero en <a href="#add-comment" onclick="$.scrollTo(\'#add-comment\', 360); return false;">agregar</a> un comentario.',
  'user_wrote_date' => '{full_name} escribi&#243; en {date}',
  'name' => 'Nombre',
  'email_will_not_published' => 'Email (No ser&#225; publicado)',
  'website' => 'Sitio web',
  'comments_must_login_signup' => 'No existen comentarios. <a href="{login}">Inicia sesi&#243;n</a> o <a href="{register}">registrate</a> para ser el primero.',
  'user_setting_comment_post_flood_control' => 'Definir los minutos que este grupo de usuarios debe esperar antes de poder enviar un comentario nuevo.

Nota: el valor 0 si no deber&#237;a haber ning&#250;n l&#237;mite.',
  'setting_allow_rss_feed_on_comments' => '<title>RSS Feed en Comentarios</title><info>Seleccione esto a <b>Si</b> para activar RSS feeds en comentarios.</info>',
  'setting_total_child_comments' => '<title>Total Child Comments</title><info>Define how many child comments can a parent comment have?

Aviso: Esto s&#243;lo se utiliza si las respuestas de rosca est&#225;n habilitadas.</info>',
  'user_setting_can_moderate_comments' => 'Se puede moderar los comentarios?',
  'setting_spam_check_comments' => '<title>Spam Check Comments</title><info>Spam Check Comments</info>',
  'setting_comment_hash_check' => '<title>Comment Hash Check</title><info>Si se habilita esta comprobar&#225; si los comentarios de los &#250;ltimos X a&#241;adido en los &#250;ltimos minutos Y son id&#233;nticos a la observaci&#243;n de que se agrega.
Aviso: X & Y son los par&#225;metros que se pueden cambiar.</info>',
  'setting_comments_to_check' => '<title>Comments To Check</title><info>Si la configuraci&#243;n para comprobar si los comentarios son id&#233;nticas se puede establecer aqu&#237; la cantidad de comentarios en el pasado debe ser revisado.</info>',
  'setting_total_minutes_to_wait_for_comments' => '<title>Comment Minutes to Wait Until Next Check</title><info>Si la configuraci&#243;n para comprobar si los comentarios son id&#233;nticas se puede establecer aqu&#237; a qu&#233; distancia se debe comprobar en cuesti&#243;n de minutos.</info>',
  'posting_a_comment_a_little_too_soon_total_time' => 'Public&#243; un comentario demasiado pronto. {total_time}',
  'add_some_text_to_your_comment' => 'Agrega un poco de texto a tu comentario.',
  'your_comment_was_successfully_added_moderated' => 'Tu comentario ha sido agregado, sin embargo, este art&#237;culo requiere que todos los comentarios sean moderados por el propietario antes de que se hagan p&#250;blicos.',
  'last_update_on_time_stamp_by_full_name' => 'Ultima actualizaci&#243;n en {time_stamp} por {full_name}.',
  'comment_successfully_deleted' => 'Comentario ha sido eliminado.',
  'fill_in_your_name' => 'Escriba su nombre.',
  'comment_title' => 'Comentarios',
  'last_activity' => 'Ultima Actividad',
  'rating' => 'Calificaci&#243;n',
  'rss_feeds_are_disabled_for_comments' => 'Los RSS feeds para los comentarios est&#225;n deshabilitados.',
  'comment_does_not_exist' => 'El comentario no existe.',
  'nothing_new_to_approve' => 'Nada nuevo para aprobar.',
  'comments_pending_approval' => 'Comentarios pendientes a ser aprobados',
  'comments_pending_approval_total' => 'Comentarios Pendientes de Aprobaci&#243;n (<span id="js_request_comment_count_total">{total}</span>)',
  'new_comments' => 'Comentarios Nuevos',
  'comments_for_approval' => 'Comentarios a ser Aprobados',
  'add_comment' => 'Enviando...',
  'view_comments' => 'Ver Comentarios',
  'user_link_added_a_comment_and_is_pending_your_approval' => '{user_link} agreg&#243; un comentario y est&#225; pendiente de tu aprobaci&#243;n.',
  'by_full_name' => 'Por: {full_name}',
  'latest_comments_on_site_title' => 'Comentarios Recientes en {site_title}.',
  'latest_comments' => 'Comentarios Recientes',
  'your_comment_has_been_marked_as_spam_it_will_have_to_be_approved_by_an_admin' => 'Tu comentario ha sido marcado como un spam. Tendr&#225; que ser aprobado por un administrador antes de mostrarse en p&#250;blico.',
  'not_a_valid_comment' => 'No es un comentario v&#225;lido.',
  'unable_to_moderate_this_comment' => 'No se puede moderar este comentario.',
  'email' => 'Email',
  'will_not_be_published' => 'No ser&#225;n publicados.',
  'message' => 'Mensaje',
  'item' => 'Art&#237;culo',
  'approve' => 'Aprobar',
  'deny' => 'Denegar',
  'your_comment_has_successfully_added' => 'Tu comentario ha sido agregado.',
  'view_replies_total_to_this_comment' => 'Ver las respuestas ({total}) a este comentario.',
  'are_you_sure' => '&#191;Est&#225;s seguro?',
  'user_link_at_item_time_stamp' => '{user_link} en {item_time_stamp}.',
  'view_more' => 'Ver m&#225;s',
  'moderate_comments' => 'Comentarios Moderados',
  'comment_successfully_approved' => 'Comentario ha sido aprobado.',
  'user_link_left_a_comment_on_your_item' => '{user_link} te dej&#243; un comentario en tu <a href="{link}">{item_name}</a>.',
  'no_comments' => 'No hay Comentarios.',
  'user_setting_can_delete_comments_posted_on_own_profile' => '&#191;Puede este grupo de usuarios eliminar los comentarios publicados en su propio perfil?',
  'no_comments_added' => 'No se han agregado comentarios.',
  'setting_allow_comments_on_profiles' => '<title>Permitir Comentarios en el Perfil</title><info>Habilitar esta funci&#243;n para permitir los comentarios en los perfiles.</info>',
  'loading' => 'Subiendo',
  'view_all_total_left_comments' => 'Ver todos los comentarios {total_left}',
  'comments_text' => 'Comentarios de Texto',
  'view_all_comments' => 'Ver todos los Comentarios',
  'view_all_comments_total' => 'Ver todos los Comentarios ({total})',
  'cannot_comment_on_this_item_as_it_does_not_exist_any_longer' => 'No se puede comentar sobre este art&#237;culo, ya que no existe.',
  'comments_activity' => 'Comentarios',
  'new_comments_stats' => 'Comentarios',
  'you_cannot_write_a_comment_on_your_own_profile' => 'No puedes escribir un comentario sobre tu propio perfil.',
  'user_setting_can_comment_on_own_profile' => 'Puede comentar en su perfil propio?',
  'update_owner_id_for_comments_only_for_those_that_upgraded_from_v1_6_21' => 'Actualizar # ID propietario de comentarios (S&#243;lo para aquellos que actualiz&#243; desde v1.6.21).',
  'your_old_v1_6_21_setting_file_must_exist' => 'El archivo de configuraci&#243;n viejo v1.6.21 debe existir para que podamos continuar. Archivo de configuraci&#243;n Antiguo: {file}',
  'the_database_table_table_does_not_exist' => 'La tabla de base de datos "{table}" no existe. No se puede actualizar el contador.',
  'full_name_approved_your_comment_on_site_title' => '{full_name} aprob&#243; tu comentario en {site_title}.',
  'full_name_approved_your_comment_on_site_title_message' => '{full_name} aprob&#243; tu comentario en {site_title}.

Para ver este comentario, sigue el enlace de abajo
<a href="{link}">{link}</a>',
  'a_href_user_link_full_name_a_likes_your_a_href_link_comment_a' => 'a <a href="{user_link}">{full_name}</a> le gusta tu <a href="{link}">comentario</a>.',
  'a_href_user_link_full_name_a_likes_their_own_a_href_link_coment_a' => 'a <a href="{user_link}">{full_name}</a> le gusta {gender} su propio <a href="{link}">comentario</a>.',
  'a_href_user_link_full_name_a_likes_a_href_view_user_link_view_full_name_a_s_a_href_link_comment_a' => 'a <a href="{user_link}">{full_name}</a> le gusta el <a href="{link}">comentario</a> de <a href="{view_user_link}">{view_full_name}</a>.',
  'user_setting_approve_all_comments' => 'Aprobar los comentarios antes de que sean exhibidos p&#250;blicamente?',
  'your_comment_has_successfully_been_added_however_it_is_pending_an_admins_approval' => 'Tu comentario ha sido publicado, sin embargo, est&#225; pendiente la aprobaci&#243;n del administrador.',
  'comments_approve' => 'Comentarios',
  'comment_approved_on_site_title' => 'Comentario aprobado en {site_title}',
  'one_of_your_comments_on_site_title' => 'Uno de tus comentarios sobre {site_title} ha sido aprobado. Para ver este comentario, haz clic en el enlace de abajo:
<a href="{link}">{link}</a>',
  'subscribe_to_comments' => 'Suscribirse a los comentarios',
  'setting_total_comments_in_activity_feed' => '<title>Cantidad total de Comentarios Para cargar</title><info>Definir la cantidad de comentarios que se debe mostrar en cada actividad reciente.</info>',
  'setting_total_amount_of_comments_to_load' => '<title>Total Amount of Comments To Load</title><info>When a user clicks to view more comments on a feed or item this setting controls how many comments to load via AJAX on the page they are on. If this number is surpassed they are then directed to the parent item where it will display all the comments and comes built in with a pager.</info>',
  'delete_this_comment' => 'Eliminar este comentario',
  '1_person' => '1',
  'total_people' => '{total}',
  'viewing_comment' => 'Viendo comentarios',
  'setting_thread_comment_total_display' => '<title>Total de comentarios</title><info>Definir cu&#225;ntos comentarios debemos mostrar.

Nota: s&#243;lo se utiliza si est&#225;n habilitadas las respuestas. 
</info>',
  'view_total_more' => 'Ver {total} mas',
  'viewing_a_single_comment' => 'Viendo un unico comentario.',
  'view_previous_comments' => 'Ver comentarios anteriores',
  'user_setting_can_delete_comment_on_own_item' => 'Can delete any comments posted on their own item?',
  'comment_on_items' => 'Comment on Items',
  'item_phrase' => 'comment',
); ?>