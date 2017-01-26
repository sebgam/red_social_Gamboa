<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  'module_im' => 'Chat',
  'setting_im_time_stamp' => '<title>Messenger Fecha y Hora</title><info>Messenger Fecha y Hora</info>',
  'setting_enable_im_in_footer_bar' => '<title>Activar IM (Footer Bar)</title><info>Seleccione esto a <b>Si</b> para habilitar que la mensajer&#237;a instant&#225;nea forme parte de la barra del pie de p&#225;gina del sitio.</info>',
  'setting_group_total_friends_to_display_in_im' => '<title>Total de amigos para mostrar en im</title><info>Definir la cantidad de amigos que se debe mostrar en la lista de IM.</info>',
  'setting_total_friends_to_display_in_im' => '<title>Total de amigos en lista IM </title><info>Definir la cantidad de amigos que se debe mostrar en la lista de IM.</info>',
  'online' => 'En L&#237;nea',
  'away' => 'Ocupado',
  'appear_offline' => 'Aparecer desconectado',
  'not_a_valid_chat_room' => 'No es una sala de chat v&#225;lida.',
  'unable_to_send_this_user_an_offline_message' => 'No se puede enviar a este usuario un mensaje fuera de l&#237;nea.',
  'report' => 'Denunciar',
  'report_this_user' => 'Denunciar este Usuario',
  'instant_messenger' => 'Chat',
  'chat' => 'Chat',
  'offline' => 'Desconectado',
  'close' => 'Cerrar',
  'find_your_friends' => 'Encuentra a tus amigos...',
  'no_friends_online' => 'No tienes amigos en l&#237;nea.',
  'member_is_offline' => 'El usuario est&#225; desconectado.',
  'go_offline' => 'Desconectarme',
  'edit_block_list' => 'Editar bloqueados',
  'status' => 'Estado',
  'play_sound_on_new_message' => 'Reproducir sonido en mensaje nuevo',
  'yes' => 'Si',
  'no' => 'No',
  'options' => 'Opciones',
  'block' => 'Bloquear',
  'more_conversations' => 'M&#225;s Conversaciones...',
  'conversations' => 'Conversaciones',
  'setting_im_time_stamp_past' => '<title>IM Fecha y Hora (Pasada)</title><info>IM Fecha y Hora (Pasada)</info>',
  'are_you_sure' => '&#191;Est&#225;s seguro?',
  'setting_im_php_sleep' => '<title>Tiempo de espera del Sevidor</title><info>Cuando la IM solicita una actualizaci&#243;n del servidor, el servidor comprobar&#225; si hay nuevos mensajes y otra informaci&#243;n, si nada nuevo se encuentra se va a esperar para comprobar una vez m&#225;s, este valor determina el tiempo (en segundos) debe esperar el servidor.

Cuanto m&#225;s bajo sea el valor del tiempo m&#225;s real de la IM se ver&#225;, pero va a utilizar m&#225;s recursos del servidor.

Un valor demasiado bajo y su servidor no puede ser capaz de manejar, usar con cuidado.</info>',
  'setting_im_php_loops' => '<title>N&#250;mero de controles del servidor</title><info>Cuando las solicitudes de mensajer&#237;a instant&#225;nea una actualizaci&#243;n del servidor, el servidor comprobar&#225; si hay nuevos mensajes y otra informaci&#243;n, si nada nuevo se encuentra se va a esperar para comprobar una vez m&#225;s, esto ocurre en la misma llamada AJAX. Este valor indica cu&#225;ntas veces debe el mismo proceso de comprobar nuevas actualizaciones antes de cerrar la conexi&#243;n.

Algunos servidores pueden limitar el tiempo de una carrera de proceso de PHP (por ejemplo 30 segundos), puede utilizar este valor y "El sue&#241;o del servidor de tiempo de espera" para programar las actualizaciones para la mensajer&#237;a instant&#225;nea.

La combinaci&#243;n por defecto permite que los controles para funcionar durante 30 segundos antes de devolver el control al navegador web para otra carrera.</info>',
  'setting_js_interval_value' => '<title>Comprobar intervalo de tiempo de espera JS Ajax </title><info>Esta configuraci&#243;n controla la frecuencia con que el IM comprobar el estado de una llamada Ajax. El valor es en milisegundos, por lo que el valor predeterminado es 3 segundos.

Si el valor es demasiado baja, el navegador puede dejar de responder. Se aconseja mantenerlo en el rango de miles de personas.</info>',
  'setting_server_for_ajax_calls' => '<title>Servidor para llamadas Ajax </title><info>Para mejorar el rendimiento se puede distribuir la carga de la mensajer&#237;a instant&#225;nea a un servidor diferente.
Este ajuste le indica a qu&#233; servidor debe la consulta de mensajer&#237;a instant&#225;nea para las actualizaciones.

Tenga en cuenta que el servidor todav&#237;a debe estar bajo el mismo dominio.

Si lo deja en blanco el IM consultar el servidor principal.
Los valores aceptables son en forma de un dominio o una direcci&#243;n IP, por ejemplo:
http://im.domain.com/
http://67.15.104.63/~~V

son ejemplos v&#225;lidos. Tambi&#233;n no se olvide el http:// y el final /</info>',
  'block_this_user' => 'Bloquear este usuario',
  'unable_to_block_this_user' => 'No se puede bloquear a este usuario.',
  'clear_this_conversation' => 'Clear this conversation',
); ?>