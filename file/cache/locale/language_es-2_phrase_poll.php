<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  'module_poll' => 'Encuestas',
  'menu_poll' => 'Encuestas',
  'menu_add_new_poll' => 'Agregar una nueva Encuesta',
  'menu_view_polls' => 'Ver mis Encuestas',
  'menu_polls' => 'Encuestas',
  'setting_is_image_required' => '<title>&#191;Es requerida una imagen?</title><info>Si es establece como cierto, los usuarios tendr&#225;n que subir una imagen con cada encuesta que vayan a publicar.

Por predeterminado est&#225; establecido como falso, los usuarios no tienen que subir una imagen en cada encuesta que ellos publiquen.</info>',
  'user_setting_poll_can_upload_image' => 'Este ajuste define si los miembros de este grupo de usuarios pueden agregar im&#225;genes junto con sus encuestas.',
  'setting_poll_max_image_pic_size' => '<title>Tama&#241;o de la imagen de la encuesta</title><info>Cuando los usuarios suban una imagen con sus encuestas, este ser&#225; el tama&#241;o m&#225;ximo de esa imagen, si la imagen es m&#225;s grande se agustar&#225; de tama&#241;o</info>',
  'user_setting_can_edit_own_poll' => '&#191;Pueden los miembros de este grupo de usuarios editar las encuestas que han publicado?',
  'user_setting_poll_can_change_own_vote' => 'Indica si un miembro del grupo de usuarios puede cambiar su voto en una encuesta.

Si se establece como falsa, la primera votaci&#243;n ser&#225; la definitiva para el usuario en esa encuesta.

Si se establece como cierta, el usuario ser&#225; capaz de cambiar su voto en el futuro.',
  'poll_vote_updated' => 'Usted ha cambiado su voto para esta encuesta',
  'poll_new_vote_added_successfully' => 'Su voto ha sido agregado con &#233;xito',
  'setting_poll_view_time_stamp' => '<title>Zona del Tiempo de la Encuesta Stamp</title><info>Este es el formato utilizado para mostrar las fechas, en cumplimiento con http://php.net/date</info>',
  'user_setting_poll_flood_control' => '&#191;Con qu&#233; frecuencia los miembros de este grupo de usuarios pueden publicar nuevas encuestas (en minutos).

0 => no restricci&#243;n
1 => 1 minuto
10 => 10 minutos',
  'poll_flood_control' => 'S&#243;lo es posible publicar las encuestas cada {x} minutos.',
  'user_setting_poll_requires_admin_moderation' => 'Este ajuste le indica si los sondeos publicados por los miembros de este grupo tendr&#225; que ser moderados (aprobado) antes de ser mostrados en el sitio.',
  'user_setting_poll_can_moderate_polls' => '&#191;Pueden los miembros de este grupo de usuarios moderar las encuestas? (borrar, aprobar)',
  'user_setting_poll_require_captcha_challenge' => '&#191;Deben los usuarios del grupo completar el campo de seguridad "captcha" antes de presentar una encuesta?',
  'user_setting_poll_can_edit_own_polls' => '&#191;Pueden los miembros de este grupo de usuarios editar sus propias encuestas despu&#233;s de ser sometidas?',
  'user_setting_poll_can_edit_others_polls' => '&#191;Pueden los miembros de este grupo de usuarios editar las encuestas de otros miembros?',
  'user_setting_poll_can_delete_own_polls' => '&#191;Pueden los miembros de este grupo de usuarios eliminar sus propias encuestas?',
  'user_setting_poll_can_delete_others_polls' => '&#191;Pueden los miembros de este grupo de usuarios eliminar las encuestas publicadas por otros miembros?',
  'user_setting_can_post_comment_on_poll' => '&#191;Pueden los usuarios de este grupo publicar comentarios en las encuestas?',
  'user_setting_view_poll_results_after_vote' => 'Cuando se establece a SI los miembros de este grupo de usuarios ver&#225;n los resultados de la encuesta inmediatamente despu&#233;s de la votaci&#243;n.',
  'user_setting_maximum_answers_count' => '&#191;Cuantas respuestas pueden los miembros de este grupo de usuarios a&#241;adir a sus encuestas?',
  'setting_polls_to_show' => '<title>Cuantas a mostrar</title><info>Este ajuste le indica cu&#225;ntas encuestas se debe mostrar por p&#225;gina.</info>',
  'user_setting_can_vote_in_own_poll' => '&#191;Quieres que los miembros de este grupo de usuarios puedan votar en sus propias encuestas?

Esto es diferente que cambiando sus votos.',
  'user_setting_points_poll' => '&#191;Cu&#225;ntos puntos se a&#241;ade a un premio de la encuesta?',
  'user_setting_can_view_user_poll_results_own_poll' => '&#191;Puede ver que usuarios han votado en su propia encuesta?',
  'user_setting_can_view_user_poll_results_other_poll' => '&#191;Pueden los usuarios ver los resultados de la encuesta en otras encuestas?',
  'user_setting_can_edit_title' => '&#191;Pueden los miembros de este grupo de usuarios editar el t&#237;tulo, la imagen, la configuraci&#243;n de azar, la configuraci&#243;n de privacidad y la configuraci&#243;n comentar en una encuesta?

Esto puede ser anulado por la configuraci&#243;n depoll_can_edit_others_polls y el poll_can_edit_own_polls',
  'user_setting_can_edit_question' => '&#191;Pueden los miembros de este grupo de usuarios editar las preguntas y respuestas de una encuesta?

Esto puede ser anulado por la configuraci&#243;n de poll_can_edit_others_polls y el poll_can_edit_own_polls',
  'setting_show_x_users_who_took_poll' => '<title>Cuantos usuarios votaron a mostrar</title><info>Este ajuste le indica cu&#225;ntos usuarios que han tomado la encuesta se muestran en la p&#225;gina de la encuesta.

Cambiar esta configuraci&#243;n afecta a la secci&#243;n de mini votos de los miembros.</info>',
  'user_setting_view_poll_results_before_vote' => '&#191;Pueden los miembros de este Grupo de Usuarios ver los resultados de la encuesta antes de votar en la misma?


Nota: Tenga en cuenta que esta configuraci&#243;n puede ser anulado por las configuraiones del "poll.can_view_user_poll_results_own_poll" y el "poll.can_view_user_poll_results_other_poll".

Tambi&#233;n puede ser complementado con la configuraci&#243;n de "poll.view_poll_results_after_vote"',
  'user_setting_highlight_answer_voted_by_viewer' => 'Si se establece "S&#237;" por default la selecci&#243;n que haga el espectador ser&#225; resaltado con un color de fondo.

Esto es &#250;til si tiene que establecer que los miembros de este grupo de usarios puedan ver los resultados despu&#233;s de tomar la encuesta, y ver sus propias respuestas.',
  'stat_title_4' => 'Encuestas',
  'setting_poll_meta_description' => '<title>Descripci&#243;n Meta para Encuentas</title><info>Descripci&#243;n Meta utilizada para el m&#243;dulo de encuesta.</info>',
  'setting_poll_meta_keywords' => '<title>Palabras Claves Meta para Encuestas</title><info>Palabras claves Meta para el m&#243;dulo de Encuesta.</info>',
  'an_error_occured_and_your_image_could_not_be_deleted_please_try_again' => 'Se produjo un error y tu imagen no pudo ser eliminada. Por favor, int&#233;ntalo de nuevo.',
  'this_poll_is_being_moderated_and_no_votes_can_be_added_yet' => 'Esta encuesta est&#225; siendo moderada y ning&#250;n voto se puede a&#241;adir todav&#237;a.',
  'your_vote_has_successfully_been_cast' => 'Su voto ha sido correctamente emitido.',
  'poll_successfully_approved' => 'Encuesta fue aprobada.',
  'poll_successfully_deleted' => 'Encuesta eliminada correctamente.',
  'there_was_a_problem_moderating_this_poll' => 'Ha habido un problema de moderador de esta encuesta.',
  'provide_a_question_for_your_poll' => 'Proporciona una pregunta para la encuesta.',
  'image_is_required' => 'Imagen es requerida.',
  'your_user_group_lacks_permissions_to_edit_that_poll' => 'Tu grupo de usuarios no tiene los permisos para modificar esa encuesta.',
  'that_poll_does_not_exist' => 'Esa encuesta no existe.',
  'each_poll_requires_an_image' => 'Cada encuesta requiere una imagen.',
  'your_poll_has_been_updated' => 'Tu encuesta se ha actualizado.',
  'your_poll_has_been_added' => 'Tu encuesta ha sigo agregada.',
  'your_poll_needs_to_be_approved_before_being_shown_on_the_site' => 'Tu encuesta tiene que ser aprobada antes de ser mostrada en el sitio.',
  'your_poll_has_been_added_feel_free_to_custom_design_it_the_way_you_want_here' => 'Tu encuesta se ha a&#241;adido, puedes dise&#241;arla de la manera que quieras aqu&#237;.',
  'editing_a_new_poll' => 'Edici&#243;n de una Nueva Encuesta',
  'adding_a_new_poll' => 'Adici&#243;n de una Nueva Encuesta',
  'editing_poll' => 'Edici&#243;n de Encuestas',
  'adding_poll' => 'Agregando Encuestas',
  'polls' => 'Encuestas',
  'that_poll_doesn_t_exist' => 'Esa encuesta no existe.',
  'you_do_not_have_permission_to_change_the_design_of_this_poll' => 'No tienes permiso para cambiar el dise&#241;o de esta encuesta.',
  'your_design_has_been_updated' => 'Su dise&#241;o ha sido actualizado.',
  'error' => 'Error',
  'there_are_no_answers_for_this_poll' => 'No hay respuestas para esta encuesta.',
  'design_your_poll' => 'Dise&#241;ar encuesta',
  'full_name_s_polls' => 'Encuestas de {full_name}',
  'full_name_s_polls_on_site_title_full_name_has_total_poll_s' => 'Encuestas de {full_name} en {site_title}. {full_name} tiene {total} encuesta(s).',
  'full_name_s_polls_upper' => 'Encuestas de {full_name}',
  'unable_to_view_this_poll' => 'No se puede ver esta encuesta.',
  'full_name_s_poll_from_time_stamp_question' => 'Encuesta de {full_name} del {time_stamp}: {question}.',
  'user_name_left_you_a_comment_on_site_title' => '{user_name} te dej&#243; un comentario en {site_title}.',
  'user_name_left_you_a_comment_on_site_title_to_view_this_comment_follow_the_link_below_a_href_link_link_a' => '{user_name} te dej&#243; un comentario en {site_title}.

Para ver este comentario, sigue la follow the link below:
<a href="{link}">{link}</a>',
  'user_name_left_you_a_comment_on_site_title_however_before_it_can_be_displayed_it_needs_to_be_approved_by_you_you_can_approve_or_deny_this_comment_by_following_the_link_below_a_href_link_link_a' => '{user_name} te dej&#243; un comentario en {site_title}, sin embargo, antes de que se pueda mostrar tiene que ser aprobado por t&#237;.

Tu puedes aprobar o rechazar este comentario, siguiendo el enlace de abajo:<a href="{link}">{link}</a>',
  'on_name_s_poll' => 'En la encuesta de {name}.',
  'full_name_approved_your_comment_on_site_title' => '{full_name} aprob&#243; tu comentario en {site_title}.',
  'full_name_approved_your_comment_on_site_title_message' => '{full_name} aprob&#243; tu comentario en {site_title}.

Para ver este comentario, sigue el enlace de abajo:
<a href="{link}">{link}</a>',
  'a_href_user_link_full_name_a_added_a_new_comment_on_their_own_a_href_title_link_poll_a' => '<a href="{user_link}">{full_name}</a> agreg&#243; un nuevo comentario en su propia <a href="{title_link}">encuesta</a>.',
  'a_href_user_link_full_name_a_added_a_new_comment_on_your_a_href_title_link_poll_a' => '<a href="{user_link}">{full_name}</a> agreg&#243; un nuevo comentario en tu <a href="{title_link}">encuesta</a>.',
  'a_href_user_link_full_name_a_added_a_new_comment_on_a_href_item_user_link_item_user_name_s_a_a_href_title_link_poll_a' => '<a href="{user_link}">{full_name}</a> agreg&#243; un nuevo comentario en <a href="{item_user_link}">{item_user_name}</a> <a href="{title_link}">encuesta</a>.',
  'a_href_user_link_full_name_a_added_a_new_poll_a_href_question_url_question_a' => '<a href="{user_link}">{full_name}</a> agreg&#243; una nueva encuesta "<a href="{question_url}">{question}</a>".',
  'create_a_poll' => 'Crear una Encuesta',
  'manage_polls' => 'Administrar Encuestas',
  'maximum_length_for_the_question_is_255_characters_and_it_cannot_be_empty' => 'La longitud m&#225;xima de la pregunta es de 255 caracteres y no puede estar vac&#237;o.',
  'we_dont_allow_default_answers_answer' => 'Nosotros no permitimos respuestas por defecto ({answer}).',
  'maximum_length_for_the_answers_is_150_characters' => 'La longitud m&#225;xima de las respuestas es de 150 caracteres.',
  'you_need_to_write_at_least_2_answers' => 'Tienes que escribir por lo menos 2 respuestas.',
  'insufficient_permissions_to_vote_on_this_poll' => 'Permisos insuficientes para votar en esta encuesta.',
  'only_friends_can_vote_on_this_poll' => 'S&#243;lo los amigos pueden votar en esta encuesta.',
  'you_have_reached_your_limit' => 'Has llegado a tu l&#237;mite.',
  'answer' => 'Respuesta',
  'you_must_have_a_minimum_of_total_answers' => 'Debes tener un m&#237;nimo de {total} respuestas.',
  'are_you_sure' => '&#191;Est&#225;s seguro?',
  'poll_created_on_time_stamp_by_user_info' => 'Encuesta creada en {time_stamp} por {user_info}.',
  'this_poll_is_being_moderated_and_no_votes_can_be_added_until_it_has_been_approved' => 'Esta encuesta est&#225; siendo moderada y ning&#250;n voto se puede a&#241;adir hasta que haya sido aprobado.',
  'submit_your_vote' => 'Envia tu Voto',
  'cancel' => 'Cancelar',
  'approve' => 'Aprobar',
  'edit' => 'Editar',
  'delete' => 'Eliminar',
  'report_this_poll' => 'Denunciar esta Encuesta',
  'report' => 'Denunciar',
  'votes_total_votes' => 'Votos ({total_votes})',
  'comments_total_comment' => 'Comentarios ({total_comment})',
  'members_votes_total_votes' => 'Votos de Miembros ({total_votes})',
  'poll_designer' => 'Dise&#241;ador de Encuestas',
  'background' => 'Fondo',
  'select_color' => 'Seleccionar Color',
  'percent' => 'Porciento',
  'border' => 'Borde',
  'save' => 'Guardar',
  'no_polls_have_been_added_yet' => 'No se han agregado encuestas a&#250;n.',
  'be_the_first_to_create_a_poll' => 'S&#233; el primero en crear una encuesta.',
  'votes_0' => 'Votos (0)',
  'total_votes_votes' => '{total_votes} Votos',
  'no_answers_to_show' => 'No hay respuestas a mostrar.',
  'user_info_voted_answer_on_time_stamp' => '{user_info} vot&#243; "{answer}" en {time_stamp}.',
  'default_answer' => 'Respuesta por defecto',
  'answers' => 'Respuestas',
  'image' => 'Imagen',
  'you_can_upload_a_jpg_gif_or_png_file' => 'Solo puedes subir archivos JPG, GIF o PNG.',
  'click_here_to_delete_this_image_and_upload_a_new_one_in_its_place' => 'Haga clic aqu&#237; para eliminar esta imagen y subir una nueva en su lugar.',
  'save_and_design_this_poll' => 'Guardar y Dise&#241;ar esta encuesta',
  'update' => 'Actualizar',
  'submit' => 'Enviar',
  'skip_and_design_this_poll' => 'Dise&#241;ar esta encuesta',
  'additional_options' => 'Opciones Adicionales',
  'randomize_answers' => 'Respuestas al Azar',
  'yes' => 'Si',
  'no' => 'No',
  'comments' => 'Comentarios',
  'allow_comments' => 'Permitir Comentarios',
  'moderate_comments_first' => 'Comentarios Moderados',
  'no_comments' => 'No Comentarios',
  'privacy' => 'Privacidad',
  'public_poll_will_be_added_to_our_public_poll_section' => 'P&#250;blica (encuesta ser&#225; a&#241;adido a nuestra secci&#243;n de encuestas p&#250;blicas)',
  'personal_poll_will_only_be_displayed_on_your_profile' => 'Personal (encuesta s&#243;lo se mostrar&#225; en tu perfil)',
  'friends_only_friends_can_view_this_poll' => 'Amigos (s&#243;lo amigos pueden ver esta encuesta)',
  'preferred_list_only_the_people_you_select_will_be_able_to_see_the_poll' => 'Lista Preferencial (s&#243;lo las personas que tu seleccione podr&#225;n ver la encuesta)',
  'you_have_not_added_any_polls' => 'No has agregado ninguna encuesta.',
  'add_a_new_poll' => 'Agrega tu primera encuesta',
  'user_info_has_not_added_any_polls' => '{user_info} no has agredado encuentas.',
  'browse_other_polls' => 'Buscar otras Encuestas',
  'be_the_first_to_add_a_poll' => 'S&#233; el primero en agregar una encuesta.',
  'polls_activity' => 'Encuestas',
  'question' => 'Pregunta',
  'user_setting_can_access_polls' => 'Puedes buscar y ver encuestas?',
  'user_setting_can_create_poll' => 'Puede crear una encuesta?',
  'a_href_user_link_full_name_a_likes_your_a_href_link_poll_a' => 'a <a href="{user_link}">{full_name}</a> le gusta tu <a href="{link}">encuesta</a>.',
  'a_href_user_link_full_name_a_likes_their_own_a_href_link_poll_a' => 'a <a href="{user_link}">{full_name}</a> le gusta su propia <a href="{link}">encuesta</a>.',
  'a_href_user_link_full_name_a_likes_a_href_view_user_link_view_full_name_a_s_a_href_link_poll_a' => 'a <a href="{user_link}">{full_name}</a> le gusta la <a href="{link}">encuesta</a> de <a href="{view_user_link}">{view_full_name}</a>.',
  'poll_results' => 'Resultados de la encuesta',
  'public_votes' => 'Votos p&#250;blicos',
  'displays_all_users_who_voted_and_what_choice_they_voted_for' => 'Muestra todos los usuarios que han votado, y qu&#233; elecci&#243;n se vot&#243; a favor.',
  'user_setting_can_view_hidden_poll_votes' => 'Puedes ver los votos, incluso si la encuesta est&#225; marcado para ocultar los votos? (Opci&#243;n de administraci&#243;n)',
  'votes_are_hidden_for_this_poll' => 'Los votos son ocultos en esta encuesta.',
  'poll' => 'Encuesta',
  'say_something_about_this_poll' => 'Diga algo acerca de esta encuesta...',
  'add_another_answer' => 'A&#241;adir otra respuesta',
  'poll_has_been_approved' => 'Encuesta ha sido aprobada.',
  'poll_approved' => 'Encuesta aprobada',
  'no_polls_found' => 'No se han encontrado encuestas.',
  'search_polls' => 'Buscar encuestas...',
  'latest' => '&#218;ltimo',
  'most_viewed' => 'Mas visto',
  'most_liked' => 'Mas gustado',
  'most_discussed' => 'Mas Discutido',
  'all_polls' => 'Todas las encuestas',
  'my_polls' => 'Mis encuestas',
  'friends_polls' => 'Encuestas de amigos',
  'pending_polls' => 'Encuestas pendientes',
  'by' => 'por',
  'actions' => 'Acciones',
  'moderate' => 'Moderar',
  'view_results' => 'Ver Resultados',
  'cannot_cast_a_vote_when_a_poll_is_pending_approval' => 'No puede emitir un voto cuando una encuesta se encuentra pendiente de aprobaci&#243;n.',
  'cancel_uppercase' => 'Cancelar',
  'control_who_can_see_this_poll' => 'Controlar quien puede ver esta encuesta.',
  'comment_privacy' => 'Privacidad de comentarios',
  'control_who_can_comment_on_this_poll' => 'Controlar quien puede comentar esta encuesta.',
  'report_this_poll_lowercase' => 'Denunciar esta encuesta',
  'view_poll' => 'Ver encuesta',
  'full_name_liked_your_poll_question' => 'a {full_name} le gusta tu encuesta "{question}"',
  'full_name_liked_your_poll_question_message' => '{full_name} le gusta tu encuesta "<a href="{link}">{question}</a>"

Para verlo sige el siguiente enlace:

<a href="{link}">{link}</a>',
  'full_name_voted_on_your_poll_question' => '{full_name} ha votado en tu encuesta "{question}"',
  'full_name_voted_answer_on_your_poll_question' => '{full_name} ha votado "{answer}" en su encuesta "{question}"

Para verlo sige el siguiente enlace:

<a href="{link}">{link}</a>',
  'unable_to_post_a_comment_on_this_item_due_to_privacy_settings' => 'No se puede escribir un comentario sobre este tema debido a la configuraci&#243;n de privacidad.',
  'posted_a_comment_on_gender_poll_a_href_link_title_a' => 'coment&#243; en su encuesta "<a href="{link}">{title}</a>".',
  'posted_a_comment_on_user_name_s_poll_a_href_link_title_a' => 'coment&#243; en la encuesta de {user_name} "<a href="{link}">{title}</a>".',
  'full_name_commented_on_one_of_your_polls_title' => '{full_name} coment&#243; en una de tus encuestas "{title}"',
  'full_name_commented_on_your_poll_a_href_link_title_a_to_see_the_comment_thread_follow_the_link_below_a_href_link_link_a' => '{full_name} coment&#243; en tu encuesta "<a href="{link}">{title}</a>".
Para verlo sige el siguiente enlace:
<a href="{link}">{link}</a>',
  'full_name_commented_on_gender_poll' => '{full_name} coment&#243; en su encuesta.',
  'full_name_commented_on_other_full_name_s_poll' => '{full_name} coment&#243; en la encuesta de {other_full_name}',
  'full_name_commented_on_gender_poll_a_href_link_title_a_to_see_the_comment_thread_follow_the_link_below_a_href_link_link_a' => '{full_name} coment&#243; en {gender} encuesta "<a href="{link}">{title}</a>".
Para verlo sige el siguiente enlace:
<a href="{link}">{link}</a>',
  'full_name_commented_on_other_full_name_s_poll_a_href_link_title_a_to_see_the_comment_thread_follow_the_link_below_a_href_link_link_a' => '{full_name} coment&#243; en {other_full_name}&#039;s encuesta "<a href="{link}">{title}</a>".
Para verlo sige el siguiente enlace:
<a href="{link}">{link}</a>',
  'user_name_commented_on_gender_poll_title' => '{user_name} coment&#243; en su encuesta "{title}"',
  'user_name_commented_on_your_poll_title' => '{user_name} coment&#243; en tu encuesta "{title}"',
  'user_name_commented_on_span_class_drop_data_user_full_name_s_span_poll_title' => '{user_name} coment&#243; en la encuesta de <span class="drop_data_user">{full_name}</span> "{title}"',
  'user_name_voted_on_gender_poll_title' => '{user_name} vot&#243; en {gender} encuesta "{title}"',
  'user_name_voted_on_your_poll_title' => '{user_name} vot&#243; en tu encuesta "{title}"',
  'user_name_voted_on_span_class_drop_data_user_full_name_s_span_poll_title' => '{user_name} vot&#243; en <span class="drop_data_user">{full_name}&#039;s</span> encuesta "{title}"',
  'user_name_liked_gender_own_poll_title' => 'a {user_name} le gusta su encuesta "{title}"',
  'user_name_liked_your_poll_title' => 'a {user_name} le gusta tu encuesta "{title}"',
  'user_name_liked_span_class_drop_data_user_full_name_span_poll_title' => 'a {user_name} le gusta la encuesta de <span class="drop_data_user">{full_name}</span> "{title}"',
  'your_poll_title_has_been_approved' => 'Tu encuesta "{title}" ha sido aprobada.',
  'poll_s_successfully_approved' => 'Encuesta(s) aprobada.',
  'poll_s_successfully_deleted' => 'Encuesta(s) eliminada.',
  'background_chooser' => 'Elegir fondo',
  'percentage_chooser' => 'Elegir porcentaje',
  'border_chooser' => 'Elegir borde',
  'your_poll_a_href_link_title_a_has_been_approved_to_view_this_poll_follow_the_link_below_a_href_link_link_a' => 'Su encuesta "<a href="{link}">{title}</a>" ha sido aprobada.

Para verla sige el siguiente enlace:

<a href="{link}">{link}</a>',
  'unable_to_find_this_poll' => 'No se puede encontrar esta encuesta.',
  'user_name_tagged_you_in_a_comment_in_a_poll' => '{user_name} tagged you in a comment in a poll',
  'menu_poll_polls_532c28d5412dd75bf975fb951c740a30' => 'Polls',
  'item_phrase' => 'poll',
); ?>