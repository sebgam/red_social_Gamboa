<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  'setting_group_cookie' => '<title>Cookies</title><info>Cookies Informaci&#243;n</info>',
  'setting_cookie_path' => '<title>Ruta para guardar Cookies</title><info>La ruta a la que se guarda la cookie. Si ejecuta m&#225;s de un sitio en el mismo dominio, ser&#225; necesario establecer esto en los directorios individuales de su sitio. De lo contrario, simplemente dejarlo como  / .

Tenga en cuenta que la ruta siempre debe terminar en una barra de avance; por ejemplo \'/community/\', \'/phpfox/\' etc.

<b>Introducir un valor no v&#225;lido puede dejar no se ha podido iniciar sesi&#243;n en el foro.</b></info>',
  'setting_cookie_domain' => '<title>Dominio de las cookies</title><info>Esta opci&#243;n establece el dominio en el que la cookie est&#225; activa. La raz&#243;n m&#225;s com&#250;n para cambiar esta configuraci&#243;n es que tienes dos direcciones URL diferentes a su sitio, es decir, ejemplo.com y community.example.com. Permitir a los usuarios a permanecer conectado al sitio si visitan a trav&#233;s de una url, se establecer&#237;a esta. ejemplo.com (Observe el dominio comienza con un punto. 

Probablemente desea dejar esta opci&#243;n en blanco como entrar en un entorno no v&#225;lido puede dejar no se ha podido iniciar sesi&#243;n en el sitio.</info>',
  'setting_group_development' => '<title>Desarrollo</title><info>Informaci&#243;n de ejemplo</info>',
  'setting_log_missing_images' => '<title>Registro de imagenes perdidas</title><info>Encontrar y registrar cualquier faltantes im&#225;genes en un archivo de registro. Esto podr&#237;a ser utilizado durante el desarrollo de un nuevo m&#243;dulo o complemento.  

Si est&#225; ejecutando un sitio vivo Aseg&#250;rese de que esta opci&#243;n est&#225; deshabilitada.

Nota: La relativa localizaci&#243;n del registro es: /file/cache/missing-images.txt</info>',
  'setting_attachment_valid_images' => '<title>Crear Miniaturas</title><info>Definir qu&#233; extensiones de archivo deber&#237;amos crear miniaturas para cuando un usuario carga un archivo adjunto de imagen.</info>',
  'setting_attachment_max_thumbnail' => '<title>Miniatura Ancho/Alto</title><info>Definir la anchura y la altura de la miniatura que se crear&#225; despu&#233;s un usuario cargue una imagen. Si la imagen cargada es menor, a continuaci&#243;n, la anchura y altura especificada no crear&#225; una miniatura de la imagen.</info>',
  'setting_attachment_max_medium' => '<title>Miniatura mediana Ancho/Alto</title><info>Definir la anchura y la altura de la miniatura mediana que se crear&#225; despu&#233;s un usuario cargue una imagen. Si la imagen cargada es menor, a continuaci&#243;n, la anchura y altura especificada no crear&#225; una mediana miniatura de la imagen.

Tenga en cuenta que el mediana miniatura se muestra en la p&#225;gina Web en lugar de la imagen original para ahorrar ancho de banda.</info>',
  'setting_attachment_upload_bars' => '<title>Entradas de subida</title><info>Definir cu&#225;ntas entradas de carga deben mostrarse al usuario para cargar archivos adjuntos de un elemento.</info>',
  'setting_group_content_formatting' => '<title>Formato 
del contenido</title><info>Formato Informaci&#243;n</info>',
  'setting_wysiwyg' => '<title>WYSIWYG Editor</title><info>Seleccione por defecto editor WYSIWYG.

WYSIWYG (Lo que ve es lo que obtiene)</info>',
  'setting_allow_html' => '<title>Permitir HTML</title><info>Seleccione esto a <b>Si</b> Si desea permitir HTML en su sitio. Tenga en cuenta que incluso con esta opci&#243;n habilitada por defecto s&#243;lo permitimos determinadas etiquetas HTML nos sentimos que no perjudicar&#225; a su sitio. Puede agregar m&#225;s etiquetas HTML modificando la configuraci&#243;n de  <b>sAllowedHtmlTags</b> que puede encontrar en este grupo de ajustes.</info>',
  'setting_allowed_html' => '<title>Allowed HTML Tags</title><info>We provide a set of HTML tags we feel will give your users the ability to format their content without harming your site. 

You are free to add more HTML tags you deem necessary. If you do add more tags note that we have taken steps to prevent injections from JavaScript for example so adding more tags should not cause a security risk, it can however alter the way your site looks.

To add more tags simply add the tag you wish either to the end or front of the provided tags.</info>',
  'setting_xhtml_valid' => '<title>XHTML V&#225;lido</title><info>Seleccione esto a <b>Si</b> si desea intentar limpiar el contenido de sus usuarios y tratar de hacer el sitio XHTML v&#225;lido.

Tenga en cuenta que al activar esta funci&#243;n utilizar&#225; recursos adicionales a fin de analizar todos los datos que se agregan y quitar o corregir los errores HTML no deseados. Mantener esta funci&#243;n desactivada en sitios grandes ser&#237;a mejor a menos que realmente desea su sitio para ser XHTML v&#225;lido.</info>',
  'setting_wysiwyg_comments' => '<title>Activar WYSIWYG</title><info>Seleccione esto a <b>Si</b> si usted quiere activar el uso de WYSIWYG editor cuando los usuarios a&#241;aden un comentario de un art&#237;culo u otro perfil de usuarios. 

Nota: Para que este ajuste tenga efecto debe de estar usando WYSIWYG editor que es otro que el <b>default</b> editor.</info>',
  'setting_comment_page_limit' => '<title>Limite de la pagina</title><info>Definir la cantidad de comentarios se muestran en una p&#225;gina antes de a&#241;adir un n&#250;mero de p&#225;ginas que los usuarios puedan seguir navegando por otras p&#225;ginas para ver el resto de los comentarios.</info>',
  'setting_keep_active_posts' => '<title>Publicaciones Activas</title><info>Definir cu&#225;nto tiempo debemos mantener las publicaciones activas en cuesti&#243;n de minutos.

Tenga en cuenta que si una publicacion pasa de este l&#237;mite, se mostrar&#225; en el sitio con normalidad, sin embargo, si un puesto est&#225; activo, habr&#225; alguna forma de dejar que el usuario sepa que no han visto el hilo espec&#237;fico o foro. Dependiendo del tema que usted est&#225; usando este es generalmente identificado por las im&#225;genes y dar formato al t&#237;tulo del tema o foro que ser audaz ..</info>',
  'setting_use_hot_threads' => '<title>Mostrar temas activos</title><info>Seleccione esto a <b>Si</b> si usted quiere mostrar <b>Temas Activos</b> en su foro. 
Temas Activos son definidos por el ajuste <setting>iHotThreadPosts</setting> o <setting>iHotThreadViews</setting>. 

Seg&#250;n aquellos ajustes esto considerar&#225; si un tema es popular por cuantas publicaciones o ve un tema tiene y si esto superara los ajustes mencionados antes que ser&#225; considerado un <b>Tema Caliente</b>.</info>',
  'setting_hot_thread_posts' => '<title>Limitar hilos activos (Publicados)</title><info>Definir cu&#225;ntos hilos debe a&#241;adirse antes de un de hilo puede ser considerado como un <b>Hilo activo</b>.

Tenga en cuenta que si la configuraci&#243;n<setting>bUseHotThreads</setting> se desactiva este ajuste no tendr&#225; ning&#250;n efecto en su sitio.</info>',
  'setting_hot_thread_views' => '<title>Limitar hilos activos (Visto)</title><info>Definir c&#243;mo Cu&#225;ntos vistas de hilo debe a&#241;adirse antes de un hilo puede ser considerado como un<b>Hilo activo</b>.

Tenga en cuenta que si la configuraci&#243;n <setting>bUseHotThreads</setting> se desactiva este ajuste no tendr&#225; ning&#250;n efecto en su sitio.</info>',
  'setting_login_module' => '<title>Metodo de inicio de sesion de usuario</title><info>M&#233;todo de inicio de sesi&#243;n utilizado cuando un usuario inicia sesi&#243;n en un sitio.

<b>Cookies</b> almacenar&#225; la informaci&#243;n que necesitamos para mantener un usuario conectado en su fin, mientras que un<b>Session</b> La informaci&#243;n se guarda en el servidor.

Tenga en cuenta que si un usuario se registra en el sitio con el "Recordarme" caja marcada autom&#225;ticamente se utiliza un<b>Cookie</b> para establecer la sesi&#243;n de los usuarios.</info>',
  'setting_active_session' => '<title>Session activa</title><info>Define el tiempo que un usuario se muestra como activo en el sitio en cuesti&#243;n de minutos.

Si un usuario est&#225; inactivo ya continuaci&#243;n, el valor especificado, se eliminar&#225;n de la tabla de sesiones en l&#237;nea. Cuando se hace esto que ya no parecen estar en l&#237;nea cuando otros miembros de ver su perfil. Si el usuario de repente se vuelve activo despu&#233;s de su sesi&#243;n ha finalizado una nueva sesi&#243;n, se crear&#225; autom&#225;ticamente.</info>',
  'setting_tag_min_display' => '<title>Minimo Display</title><info>Definir c&#243;mo tantas etiquetas se debe agregar antes de que se puede mostrar al p&#250;blico.

Superior esta opci&#243;n si desea mostrar una nube de etiquetas, con s&#243;lo unas pocas etiquetas.</info>',
  'setting_tag_max_font_size' => '<title>Tama&#241;o m&#237;nimo de fuente</title><info>Definir el tama&#241;o de letra para las etiquetas m&#225;s a&#241;adidas/usadas &#8203;&#8203;en el sitio.</info>',
  'setting_tag_min_font_size' => '<title>Tama&#241;o m&#237;nimo de fuente</title><info>Definir el tama&#241;o de letra para las etiquetas menos utilizadas en el sitio.</info>',
  'setting_tag_cache_tag_cloud' => '<title>Cache</title><info>Define cu&#225;nto tiempo debe almacenar en cach&#233; las nubes de etiquetas que se muestran en las secciones que los utilizan.

Tenga en cuenta que este valor debe ser definido en cuesti&#243;n de minutos.

Es importante que las nubes de etiquetas de cach&#233; como esto elimina una consulta a la base de datos que puede ser bastante extensa memoria.</info>',
  'setting_top_bloggers_display_limit' => '<title>Top Bloggers Limite</title><info>Define el l&#237;mite de cu&#225;ntos <b>Top Bloggers</b> se puede mostrar al ver la secci&#243;n del blog.</info>',
  'setting_top_bloggers_min_post' => '<title>Blog Contador de visitas de Top Bloggers</title><info>Antes de que un usuario puede ser considerado como un <b>Top Blogger</b> se debe introducir una cantidad X de blog (s) donde X es el valor de esta configuraci&#243;n.</info>',
  'setting_cache_top_bloggers' => '<title>Cache Top Bloggers</title><info>Seleccione esto a <b>Si</b> si deberiamos cachear <b>Top Bloggers</b>. Ello siempre una idea buena al escondite que tales cosas como no hay ninguna necesidad de dirigir una pregunta suplementaria a la base de datos para averiguar qu&#233; usuarios son <b>Top Bloggers</b> este requiere contar todos los blogs a&#241;adidos.

Nota: Este ajuste <setting>iCacheTopBloggersLimit</setting> controla cuanto tiempo guarda la cache.</info>',
  'setting_cache_top_bloggers_limit' => '<title>Top Bloggers Tiempo del Cach&#233;</title><info>Definir cu&#225;nto tiempo debemos mantener la memoria cach&#233; para el <b>Top Bloggers</b>.

Tenga en cuenta que este ajuste no habr&#225; efecto si la configuraci&#243;n<setting>bCacheTopBloggers</setting> esta desactivada.</info>',
  'setting_display_post_count_in_top_bloggers' => '<title>Mostrar recuento de posts para Top Bloggers</title><info>Seleccione esto a <b>Si</b> si le gustara mostrar el recuento de posts adem&#225;s de los nombres de cada uno de los <b>Top Bloggers</b>.

Note que este rasgo conf&#237;a en el tema que usted usa y si el tema no es el tema por defecto puede que este no pudiera ser mostrado.</info>',
  'setting_group_archive_handler' => '<title>Archivo de controlador</title><info> Controla la forma en la clase Archivo se encarga,archivos que necesita ser extra&#237;do o creado.</info>',
  'setting_unzip_path' => '<title>Descomprimir Ruta</title><info>Ruta de acceso completa a donde el binario para <b>descomprimir </b> est&#225; localizado.

Si no est&#225; seguro que usted puede tratar de a&#241;adir lo siguiente:
[code]
unzip
[/code]

If the above does not work you will need to ask your host or run the following command via command line:
[code]
whereis unzip
[/code]</info>',
  'setting_lang_pack_helper' => '<title>Paquete de ayuda del idioma</title><info>Si se habilita esta opci&#243;n, se a&#241;ade entre par&#233;ntesis que rodean una frase, que puede ser utilizado para identificar que frases no se han a&#241;adido en el paquete de lenguaje b&#225;sico. Duras frases codificadas no tienen soportes.

Si una frase es dif&#237;cil codificado en el c&#243;digo fuente del sitio no ser&#225; capaz de traducir esa frase espec&#237;fica.

Lo mejor es utilizar esta funci&#243;n durante el desarrollo o la creaci&#243;n de un paquete nuevo idioma.

Ejemplo de c&#243;mo una frase que se ver&#225; una vez se habilita esta opci&#243;n:
[quote]
{This is a sample}
[/quote]</info>',
  'setting_group_cron' => '<title>Cron</title><info>Controlar el servicio de programaci&#243;n basado en el tiempo previsto.</info>',
  'setting_cron' => '<title>Tareas programadas</title><info>Seleccione esto a <b>Si</b> para activar <b>Tareas programadas</b> para activar la ejecuci&#243;n en segundo plano de su sitio

Si usted tiene el acceso al sistema un crontab este m&#233;todo es preferido, pero requerir&#225; el acceso a su servidor. Una vez que un crontab es el sistema usted puede incapacitar este rasgo.</info>',
  'setting_feed_time_layout' => '<title>Time Layout</title><info>Control how old feeds can be by getting feeds that are <b>X</b> minutos, horas, dias o meses old. <b>X</b> se define por la configuraci&#243;n 

<setting>iDisplayFeedsFrom</setting>.</info>',
  'setting_display_feeds_from' => '<title>L&#237;mite de Tiempo</title><info>Esta configuraci&#243;n se utiliza en conjunci&#243;n con la configuraci&#243;n<setting>sFeedTimeLayout</setting>.

Aqui debes definir el numero que va a controlar como de viejo puede ser el nuevo feed.</info>',
  'setting_feed_only_friends' => '<title>Solo amigos</title><info>Seleccione esto a <b>Si</b> si le gustaria que la actividad reciente sea s&#243;lo mostrada al usuario y sus amigos.</info>',
  'setting_feed_display_limit' => '<title>L&#237;mite de Visualizaci&#243;n</title><info>Limitar c&#250;antas feeds deben ser visualizados en el nuevo feed.</info>',
  'setting_captcha_code' => '<title>Cadena Captcha</title><info>Los caracteres alfanum&#233;ricos que formar&#225; parte de la rutina de Captcha.</info>',
  'setting_captcha_limit' => '<title>Limite de Caracteres</title><info>Limite el n&#250;mero de caracteres que se muestran en la imagen CAPTCHA.</info>',
  'setting_captcha_use_font' => '<title>Usar fuente (TTF)</title><info>Si esta activado y su server soporta PHP function [link=http://se.php.net/imagettftext]imagettftext[/link] la rutina Captcha usar&#225; un TTF (Fuente de Tipo Verdadera) para crear el texto en vez de usar la funci&#243;n de cuerda de proceso de im&#225;genes de falta.

La fuente que se usara sera controlada por el ajuste <setting>sCaptchaFont</setting>:</info>',
  'setting_captcha_font' => '<title>True Type Font</title><info>Seleccione que TTF (True Type Font) quiere usar para su Captcha imagen.

Nota. Este ajuste <setting>bCaptchaUseFont</setting> debe estar activado para usar esta opci&#243;n.</info>',
  'setting_default_lang_id' => '<title>Languaje predeterminado ID</title><info>Controlar el identificador de idioma predeterminado para el sitio. Tenga en cuenta este ajuste se maneja dentro de la secuencia de comandos y en la mayor&#237;a de los casos <b>no</b> debe ser modificado.</info>',
  'setting_default_theme_name' => '<title>Nombre del tema predeterminado</title><info>Nombre del tema predeterminado</info>',
  'setting_default_style_name' => '<title>Nombre de estilo predeterminado</title><info>Nombre de estilo predeterminado</info>',
  'setting_default_style_id' => '<title>Estilo predeterminado ID</title><info>Estilo predeterminado ID</info>',
  'setting_module_forum' => '<title>URL predeterminado del modulo forum</title><info>Si el nombre del m&#243;dulo de foro es diferente este valor debe ser actualizado.</info>',
  'setting_group_admin_control_panel' => '<title>Panel de Control Admin </title><info>Administrar la configuraci&#243;n del Admin CP.</info>',
  'setting_admin_cp' => '<title>Admin CP Localizacion</title><info>Ubicacion del Admin CP. Cambiar esto para asegurar tu Admin CP.

Por defecto la configuraci&#243;n es <b>admincp</b> por lo que la direcci&#243;n final ser&#225;:
[quote]
http://www.yoursite.com/admincp/
[/quote]

Tenga en cuenta el ejemplo anterior es cuando la URL corta est&#225; activada.</info>',
  'setting_group_general' => '<title>General</title><info>Administrar configuracion general</info>',
  'setting_global_update_time' => '<title>Fecha y Hora Global</title><info>Cada m&#243;dulo dispone de elementos que se muestran y utilizan nuestros valores de marca de tiempo para mostrar la fecha de la manera que nos gustar&#237;a.

Si un m&#243;dulo no especificar un valor de marca de tiempo que utilizar&#225; el tiempo de dise&#241;o predeterminado sello que se controla con esta configuraci&#243;n.

Para una mejor comprensi&#243;n acerca de c&#243;mo modificar esta configuraci&#243;n y cu&#225;les son los valores de la cadena representan puede hacer un seguimiento en la fecha en PHP() funcion [link=http://se2.php.net/date]aqui[/link].</info>',
  'setting_group_time_stamps' => '<title>Fecha y Horas</title><info>Control global del modulo de fecha y hora.</info>',
  'setting_group_server_settings' => '<title>Configuraci&#243;n del servidor</title><info>Administrar la configuraci&#243;n del servidor y las opciones de optimizaci&#243;n.</info>',
  'setting_use_gzip' => '<title>Salida GZIP HTML </title><info>Seleccionando <b>Si</b> permitir&#225; phpFox a la compresa de GZIP la salida de HTML de p&#225;ginas, a la baja de reducir exigencias de amplitud de banda. Este s&#243;lo ser&#225; usado en clientes que lo apoyan, y son HTTP 1.1 d&#243;cil. Habr&#225; una peque&#241;a interpretaci&#243;n arriba.

Esta caracteristica requiere ZLIB library.

Si usted esta usando <b>mod_gzip</b> o <b>mod_deflate</b> en su server, no active esta opci&#243;n</info>',
  'setting_gzip_level' => '<title>Nivel de compresi&#243;n GZIP </title><info>Establecer el nivel de compresi&#243;n GZIP, que tendr&#225; lugar en la salida. 0=none; 9=max.

Le recomendamos que utilice un nivel para obtener resultados &#243;ptimos.</info>',
  'setting_title_delim' => '<title>Delimitador del titulo del sitio</title><info>Este valor se utiliza como delimitador de los t&#237;tulos que se a&#241;aden por separado para cada p&#225;gina en el sitio.</info>',
  'setting_site_title' => '<title>Nombre del sitio</title><info>Nombre de su sitio. Esto aparecer&#225; en cada p&#225;gina.</info>',
  'setting_branding' => '<title>Quitar marca de phpFox</title><info>Seleccione esto a <b>Si</b> para eliminar la marca de phpfox.</info>',
  'setting_ip_check' => '<title>Comprobar la duracion de la sesion IP Octet</title><info>Seleccione la m&#225;scara de subred que refleja el nivel de comprobaci&#243;n que desea ejecutar en contra de las direcciones IP cuando una sesi&#243;n se han recuperado.

Esto es &#250;til si usted tiene un gran n&#250;mero de usuarios que est&#225;n detr&#225;s de los proxies transparentes y tienen una direcci&#243;n IP que puede cambiar al azar entre la solicitud como AOL.

Cuanto m&#225;s se reduce el mayor es el riesgo de seguridad desde el secuestro de sesi&#243;n.</info>',
  'setting_session_prefix' => '<title>Cookie Prefix</title><info>Prefijo para las cookies y sesiones de PHP est&#225;n fijados por el gui&#243;n.

Tenga en cuenta que todo el mundo se ver&#225; obligado a ingresar de nuevo por razones de seguridad.</info>',
  'setting_keywords' => '<title>Palabras Meta</title><info>Introduzca las palabras clave meta para todas las p&#225;ginas. Estos son utilizados por los motores de b&#250;squeda para indexar las p&#225;ginas con m&#225;s relevancia.

Tenga en cuenta que ciertos m&#243;dulos o las p&#225;ginas que tienen su propia configuraci&#243;n de palabras clave meta y si los que se establecen van a modificar este ajuste.</info>',
  'setting_description' => '<title>Meta Descripcion</title><info>Introduzca la descripci&#243;n de la meta para todas las p&#225;ginas. Esto es utilizado por los motores de b&#250;squeda para indexar sus p&#225;ginas m&#225;s relevante.

Tenga en cuenta que ciertos m&#243;dulos o las p&#225;ginas que tienen su propia configuraci&#243;n de palabras clave meta y si los que se establecen van a modificar este ajuste.</info>',
  'setting_tar_path' => '<title>Tar Path</title><info>Ruta completa donde el binario para tar se encuentra.

Si no est&#225;s seguro puedes tratar de a&#241;adir lo siguiente:
[code]
tar
[/code]

Si lo anterior no funciona, tendr&#225; que preguntar a su anfitri&#243;n o ejecute el comando siguiente a trav&#233;s de l&#237;nea de comandos:
[code]
whereis tar
[/code]</info>',
  'setting_csrf_protection_level' => '<title> CSRF nivel de protecci&#243;n </title> <info> Seleccione la falsificaci&#243;n de Cross Site Request (CSRF) nivel de prevenci&#243;n que usted desea en su sitio.

<b> Baja </ b>
Prevenci&#243;n m&#237;nima de los ataques CSRF.

<b> Media </ b>
Cada usuario tendr&#225; un identificador &#250;nico token que ser&#225; est&#225;tico, siempre y cuando utilizar el mismo navegador para esa sesi&#243;n.

<b> Alta </ b>
Cada usuario tiene un ID &#250;nico token que se puede cambiar en cada p&#225;gina que visitan lo que les da una identificaci&#243;n al azar en cada actualizaci&#243;n de la p&#225;gina. Este m&#233;todo ofrece una protecci&#243;n completa contra los ataques CSRF, sin embargo, desde el token es al azar el usuario s&#243;lo puede navegar por su sitio con una ventana de navegador. Si ellos, por ejemplo, utilizar un navegador compatible con las fichas y se utiliza una ficha de segundo y luego se intenta enviar un formulario que puede ser que consiga un ataque CSRF mensaje de error, ya que su raz&#243;n &#250;ltima de la ficha anterior se hab&#237;a abierto. </ Info>',
  'setting_is_personal_site' => '<title>Sitio Personal</title><info>Si se establece en <b>Si</b> el sitio ser&#225; tratado como su sitio web personal y elementos como los blogs s&#243;lo ser&#225; visible desde el espacio p&#250;blico y no de perfiles personales.

S&#243;lo activar esta funci&#243;n si no se planea en tener una comunidad de redes sociales y s&#243;lo plan para a&#241;adir sus art&#237;culos personales.</info>',
  'setting_module_core' => '<title>Core Module</title><info>Especifique el m&#243;dulo principal. El cambio que esto podr&#237;a causar graves problemas en el sitio.</info>',
  'setting_build_file_dir' => '<title>Construir Directorios</title><info>Si esta seleccionado en <b>Si</b> y los elementos son a&#241;adidos al directorio <b>file/</b>  se colocar&#225; en carpetas separadas para fines de seguridad y organizaci&#243;n. La carpeta <b>file/</b> Se utiliza para almacenar datos en cach&#233; o elementos cargados por los usuarios. 

Puede definir c&#243;mo ser&#225;n los directorios construido utilizando la configuraci&#243;n de <setting>sBuildFormat</setting>.

Por defecto directorios se construir&#225; utilizando el <b>A&#241;o/Mes</b> formato. Si una imagen es subida el 01 de enero de 2008 se colocar&#237;a en la carpeta:  file/pic/photo/2008/01/

<b>Nota:</b> Si usted tiene PHP [link="http://se.php.net/features.safe-mode"]Safe Mode[/link] habilitada esta funci&#243;n no funciona a menos que pertenece la carpeta <b>file/</b> con el mismo UID (propietario) como la secuencia de comandos.</info>',
  'setting_build_format' => '<title>Build Format</title><info>Esta configuraci&#243;n controla la forma en la configuraci&#243;n en  <setting>bBuildFileDir</setting> funcciones.

Esta funcion utiliza PHP [link="http://se2.php.net/date"]date()[/link] funcionar&#225; para controlar la creaci&#243;n de directorios dentro de la <b>file/</b> folder.

Por defecto se utiliza <b>Y/m</b>. <b>Y</b> significa una representaci&#243;n num&#233;rica completa de un a&#241;o, 4 d&#237;gitos (Ej. 2008). <b>m</b> es sin&#243;nimo de una representaci&#243;n num&#233;rica de un mes, con ceros a la izquierda (Ej. 01).

Para m&#225;s informaci&#243;n sobre esta opci&#243;n, usted puede dar seguimiento a la funci&#243;n de PHP [link="http://se2.php.net/date"]here[/link].</info>',
  'setting_blog_time_stamp' => '<title>Blog</title><info>Controles de fecha y hora para las entradas de blog.

Si se utiliza la configuraci&#243;n predeterminada y la plantilla predeterminada de la marca de tiempo aparecer&#225; debajo de cada t&#237;tulo del blog y ser&#225; similar a:
[quote]
Posted June 22, 2008 by Raymond Benc
[/quote]</info>',
  'setting_comment_time_stamp' => '<title>Comentarios</title><info>Controles de marcas de hora para cada comentario que se publicar&#225; en el sitio.

Si utiliza la configuraci&#243;n predeterminada y la plantilla de sello de tiempo aparecer&#225; bajo el nombre de usuario del publicador
[quote]
Raymond Benc escribi&#243; 
[/quote]
y ser&#225; similar a:
[quote]
June 22, 2008 
[/quote]</info>',
  'setting_forum_time_stamp' => '<title>Foro</title><info>M&#225;s informaci&#243;n pr&#243;ximamente...</info>',
  'setting_forum_post_time_stamp' => '<title>Publicacion en el foro </title><info>>M&#225;s informaci&#243;n muy...</info>',
  'setting_forum_post_today_time_stamp' => '<title>Publicacion en el foro  (Hoy)</title><info>>M&#225;s informaci&#243;n muy...</info>',
  'setting_forum_post_yesterday_time_stamp' => '<title>Publicacion en el foro (Ayer)</title><info>M&#225;s informaci&#243;n muy...</info>',
  'setting_forum_post_join_date' => '<title>Forum Post User Join</title><info>M&#225;s informaci&#243;n muy...</info>',
  'setting_zip_path' => '<title>Zip Path</title><info>Ruta de acceso completa a donde el binario para <b>zip</b> est&#225; localizado.

Si no est&#225; seguro que usted puede tratar de a&#241;adir lo siguiente:
[code]
zip
[/code]

Si lo anterior no funciona, tendr&#225; que preguntar a su anfitri&#243;n o ejecute el comando siguiente a trav&#233;s de l&#237;nea de comandos:
[code]
whereis zip
[/code]</info>',
  'setting_cache_phrases' => '<title>Pagina Cache</title><info>Si se establece en <b>Si</b>, frases de los paquetes de idiomas se almacenan en cach&#233; basado en la p&#225;gina que se est&#225; viendo en lugar del m&#233;todo convencional, que almacena todas las frases y los divide para arriba en los m&#243;dulos a los que pertenecen.

El m&#233;todo de m&#243;dulo de memoria cach&#233; es bueno durante su periodo de desarrollo, sin embargo una vez que su sitio est&#233; activo y que no planea realizar cambios en el paquete de idioma que permiten esta opci&#243;n a las frases de memoria cach&#233; en una base por p&#225;gina es una buena idea.

Esto a cambio de ahorrar el consumo total de memoria que las frases se almacenan en cach&#233; en la memoria (dependiendo del m&#233;todo de cach&#233;) y la carga de varios m&#243;dulos en una sola p&#225;gina puede ser una p&#233;rdida, cuando puede que s&#243;lo necesite 20 frases de 3 m&#243;dulos diferentes.</info>',
  'setting_site_copyright' => '<title>Copyright</title><info>A&#241;adir tus sitios copyright.</info>',
  'setting_comment_is_threaded' => '<title>Mostrar tema</title><info>Si selecciona en <b>Si</b> comentarios se mostrar&#225;n en un formato de tema permitiendo a los usuarios responder a comentarios espec&#237;ficos en lugar del tema general que comentar.</info>',
  'setting_group_forms' => '<title>Formularios</title><info>Administrar la configuraci&#243;n de las formas generales que se utilizan en el sitio.</info>',
  'setting_display_required' => '<title>Mostrar campos requeridos</title><info>Cuando selecciona a <b>Si</b> formas que tienen campos opcionales y \'requeridos\' tendr&#225; un asterisco  (dependiendo en que esta seleccionado el ajuste <setting>sRequiredSymbol</setting>).</info>',
  'setting_required_symbol' => '<title>Campo obligatorio de Simbolo</title><info>Sobre las formas que tienen los campos que se requieren se a&#241;ade un s&#237;mbolo para distinguir a qu&#233; campos son obligatorios y cu&#225;les no. Cambie este ajuste va a cambiar ese s&#237;mbolo que por defecto es un asterisco.</info>',
  'setting_blog_display_user_post_count' => '<title>Mostrar recuento de posts por Categorias (Personal)</title><info>Si selecciona esto a <b>Si</b> mostrar&#225; un recuento de post de los usuarios de una categor&#237;a espec&#237;fica. Esto se mostrar&#225; en su perfil, blog y cuando este navegando en sus propios blogs.



Aviso: Esto agregar&#225; una carga adicional al servidor si esta en <b>Si</b>.</info>',
  'setting_default_time_zone_offset' => '<title>Zona horaria predeterminada</title><info>Seleccione la zona horaria predeterminada para los clientes y nuevos usuarios.</info>',
  'setting_login_type' => '<title>Usuario m&#233;todo de entrada</title><info>Seleccione el m&#233;todo que desea que los usuarios utilicen al iniciar sesi&#243;n en el sitio.

<b>user_name</b>
Debe utilizar su nombre de usuario.

<b>email</b>
Debe utilizar su email.

<b>both</b>
Debe utilizar su email o nombre de usuario.</info>',
  'setting_redirect_after_login' => '<title>URL Redireccion despues de ingresar</title><info>Despu&#233;s de que un usuario ha iniciado la sesi&#243;n y que no han solicitado una p&#225;gina para visitar se puede establecer una URL de redirecci&#243;n por defecto, que le los env&#237;e a esta p&#225;gina en concreto inmediatamente despu&#233;s de iniciar la sesi&#243;n.

Si se agrega un enlace externo, aseg&#250;rese de agregar "http://" (sin comillas) de lo contrario la URL ser&#225; tratado como un enlace interno.</info>',
  'setting_profile_time_stamps' => '<title>Perfil</title><info>Perfil fecha y hora</info>',
  'setting_user_pic_sizes' => '<title>User Pic Sizes</title><info>User Pic Sizes</info>',
  'setting_mail_time_stamp' => '<title>Mail</title><info>Mail</info>',
  'setting_profile_use_id' => '<title>Perfil de usuario ID Conexi&#243;n</title><info>Seleccione esto a <b>Si</b> Si le gustar&#237;a tener perfiles de usuario conectados a trav&#233;s de su ID#. Seleccione esto a <b>No</b> Si le gustar&#237;a tener perfiles de usuario conectados a trav&#233;s de su nombre de usuario. 

Nota: si se conecta a trav&#233;s de su ID# de usuario  permitir&#225; a los miembros  la capacidad para utilizar caracteres no admitidos que no est&#225;n permitidos si conecta un perfil con su nombre de usuario.</info>',
  'setting_group_sample_2' => '<title>Sample 2</title><info>Sample 2</info>',
  'setting_bsample' => '<title>Esta es una prueba</title><info>Otra prueba...</info>',
  'setting_captcha_on_signup' => '<title>Captcha en el Registro</title><info>Captcha en el Registro</info>',
  'menu_home' => 'Inicio',
  'submit' => 'Enviar',
  'save' => 'Guardar',
  'delete' => 'Eliminar',
  'revert_to_default' => 'Volver al predeterminado',
  'version' => 'Version {version}',
  'display_from_x_to_x_of_x' => 'Desde <span id="js_pager_from">{from}</span> hasta <span id="js_pager_to">{to}</span> de <span id="js_pager_total">{total}</span>',
  'page_x_of_x' => 'P&#225;gina {current} de {total}',
  'first' => 'Primero',
  'previous' => 'Anterior',
  'next' => 'Siguiente',
  'last' => 'Ultimo',
  'edit' => 'Editar',
  'go' => 'Ir',
  'are_you_sure' => '&#191;Est&#225; seguro?',
  'yes' => 'Si',
  'no' => 'No',
  'cancel' => 'Cancelar',
  'go_advanced' => 'Avanzado',
  'processing' => 'Enviado',
  'admin' => 'No Admin',
  'select' => 'Seleccionar',
  'per_page' => '{total} por p&#225;gina',
  'time' => 'Fecha',
  'descending' => 'Descendente',
  'ascending' => 'Ascendente',
  'searching' => 'Buscando',
  'reset' => 'Reajustar',
  'invalid_search_id' => 'ID de B&#250;squeda inv&#225;lido',
  'search_results_found' => 'No se encontraron resultados',
  'menu_admincp' => 'AdminCP',
  'menu_log_out' => 'Cerrar Sesi&#243;n',
  'copyright' => 'Copyright',
  'required_fields' => 'Campos obligatorios',
  'search' => 'Buscar',
  'bold' => 'Negrilla',
  'italic' => 'It&#225;lico',
  'underline' => 'Subrayar',
  'toggle' => 'Toggle',
  'user_name' => 'Nombre Usuario',
  'close' => 'Cerrar',
  'quote' => 'Citar',
  'originally_posted' => 'Publicado originalmente por',
  'code' => 'C&#243;digo',
  'notice' => 'Aviso',
  'menu_friends' => 'Amigos',
  'setting_group_mail' => '<title>Correo</title><info>Configuraci&#243;n del correo...</info>',
  'setting_method' => '<title>Metodo enviar e-mail</title><info>Seleccione el m&#233;todo que desea que sus mensajes de correo electr&#243;nico que se envi&#243;, el cual es, ya sea usando el correo por defecto () de PHP o SMTP.</info>',
  'setting_mailsmtphost' => '<title>Hosting SMTP</title><info>Si SMTP est&#225; activada, configure el host del servidor SMTP.</info>',
  'setting_mail_smtp_authentication' => '<title>Autenticaci&#243;n SMTP</title><info>Autenticaci&#243;n SMTP</info>',
  'setting_mail_smtp_username' => '<title>Nombre de usuario SMTP</title><info>Nombre de usuario SMTP</info>',
  'setting_mail_smtp_password' => '<title>Contrase&#241;a SMTP</title><info>Contrase&#241;a SMTP </info>',
  'setting_mail_from_name' => '<title>E-mail Desde Nombre</title><info>E-mail Desde Nombre</info>',
  'setting_email_from_email' => '<title>E-mail Desde E-mail</title><info>E-mail Desde E-mail</info>',
  'setting_mail_signature' => '<title>E-mail Firma</title><info>E-mail Firma</info>',
  'setting_log_site_activity' => '<title>Registrar toda la actividad</title><info>Seleccione esto a "Si" para registrar toda la actividad del sitio, que puede utilizarse posteriormente para crear estad&#237;sticas generales o realizar un seguimiento de una actividad de usuarios espec&#237;ficos.</info>',
  'setting_cache_js_css' => '<title>Cache JavaScript & CSS</title><info>Seleccione esto a <b>Si</b> para cachear todo el JavaScript y CSS dentro de un archivo para agilizar su sitio.</info>',
  'about' => 'Acerca de Nosotros',
  'menu_about' => 'Nosotros',
  'privacy_policy' => 'Pol&#237;ticas de Privacidad',
  'setting_cache_plugins' => '<title>Cache Plugins</title><info>Cache Plugins</info>',
  'menu_log' => 'Iniciar Sesi&#243;n',
  'setting_host' => '<title>Hosting FTP</title><info>Hosting FTP</info>',
  'setting_username' => '<title>Nombre de usuario FTP</title><info>Nombre de usuario FTP</info>',
  'setting_password' => '<title>Contrase&#241;a FTP</title><info>Contrase&#241;a FTP</info>',
  'setting_ftp_enabled' => '<title>Activar soporte FTP</title><info>Activar soporte FTP</info>',
  'terms_use' => 'T&#233;rminos de Uso',
  'setting_group_ftp' => '<title>FTP</title><info>Controla tus FTP (File Transport Protocol) m&#225;s detalles.</info>',
  'user_setting_can_view_update_info' => 'Se puede ver en "Actualizar" la informaci&#243;n sobre los puntos?

Nota: Esta informaci&#243;n se muestra el nombre de usuario de la &#250;ltima persona que modific&#243; un art&#237;culo y el momento en que se llev&#243; a cabo.',
  'user_setting_can_view_private_items' => 'Puede ver los elementos privados publicados en el sitio.

Tales art&#237;culos son creados por un miembro y est&#225;n marcados como privados por lo que s&#243;lo ese miembro puede ver el tema y los miembros que tienen esta opci&#243;n activada.',
  'user_setting_can_add_new_setting' => 'Se puede agregar la configuraci&#243;n de nuevos productos.

Habilitar esta caracter&#237;stica s&#243;lo si el desarrollo est&#225; en curso y se est&#225;n introduciendo cambios en el producto.',
  'setting_group_cache' => '<title>Cache</title><info>Todas las variables relacionadas con cach&#233;</info>',
  'setting_crop_seo_url' => '<title>Crop URLs</title><info>Crop URL para SEO</info>',
  'setting_group_search_engine_optimization' => '<title>Optimizaci&#243;n del Search Engine</title><info>Optimizaci&#243;n del Search Engine</info>',
  'setting_meta_description_limit' => '<title>Limite descripcion Meta</title><info>Definir el n&#250;mero m&#225;ximo de caracteres que pueden ser utilizados en una etiqueta meta descripci&#243;n.</info>',
  'setting_meta_keyword_limit' => '<title>Limite palabras meta</title><info>Definir el n&#250;mero m&#225;ximo de caracteres que pueden ser utilizados en una etiqueta de palabra clave meta.</info>',
  'setting_description_time_stamp' => '<title>Meta Description Time Stamp</title><info>Meta Description Time Stamp</info>',
  'setting_use_dnscheck' => '<title>Use DNSCheck in email validation</title><info>http://php.net/checkdnsrr

Este valor indica si la secuencia de comandos debe validar las direcciones de correo electr&#243;nico utilizando checkdnsrr.

Esta funci&#243;n puede no estar disponible en algunas instalaciones por defecto de Windows. Sin embargo, incluso si se habilita esta opci&#243;n si la funci&#243;n no existe el sitio no se producir&#225; un error, s&#243;lo se salta esa parte de la validaci&#243;n.

Hay algo de indocumentados (pero t&#233;cnicamente es posible) disminuir el uso de esta funci&#243;n, as&#237; que mientras que a&#241;ade seguridad adicional a su sitio, tambi&#233;n podr&#237;a convertirse en un cuello de botella. Use con cuidado.</info>',
  'setting_group_debug' => '<title>Depuracion</title><info>Configuracion de la Depuracion</info>',
  'setting_admin_debug_mode' => '<title>Debug Level</title><info>Control the debug output at the bottom for the site.

<b>Level Information</b>

<b>Level 0</b> = Debug is disabled.

<b>Level 1</b> = Enables PHP error reporting, page generation times and query count.

<b>Level 2</b> = Includes <i>Level 1</i>, server usage, session and cookie information.

<b>Level 3</b> = Includes <i>Level 1</i>, <i>Level 2</i> and SQL queries.</info>',
  'setting_replace_url_with_links' => '<title>Reemplazar URL por enlaces</title><info>Seleccione esto a <b>Si</b> Si desea reemplazar autom&#225;ticamente las URL por enlaces.</info>',
  'setting_shorten_parsed_url_links' => '<title>Shorten Parsed URL Links</title><info>Si la opci&#243;n de analizar las cadenas de URL para los v&#237;nculos est&#225; habilitada, se puede controlar la duraci&#243;n de la cadena de la URL debe ser antes de acortarlo.

<b>Aviso:</b> Selecciona <b>0</b> para no tener limite.</info>',
  'module_report' => 'Denuncias',
  'setting_default_music_player' => '<title>Reproductor de m&#250;sica predeterminado</title><info>Reproductor de m&#250;sica predeterminado</info>',
  'setting_footer_bar_site_name' => '<title>Nombre de la barra de pie del sitio</title><info>El nombre definido aqu&#237; se mostrar&#225; en la barra de pie de los sitios.</info>',
  'setting_enable_footer_bar' => '<title>Activar la barra de pie de p&#225;gina</title><info>Seleccione esto a <b>Si</b> Si desea activar la barra de pie de p&#225;gina del sitio.</info>',
  'menu_dashboard' => 'Inicio',
  'setting_group_spam' => '<title>Spam</title><info>Spam</info>',
  'setting_site_is_offline' => '<title>Sitio desconectado?</title><info>Seleccione esto a <b>Si</b> para poner su sitio como desconectado.</info>',
  'setting_site_offline_message' => '<title>Offline Mensaje</title><info>Mensaje que se mostrar&#225; a los invitados cuando el sitio est&#225; fuera de l&#237;nea.</info>',
  'setting_site_offline_no_template' => '<title>Pagina en blanco</title><info>Seleccione esto a <b>Si</b> Si desea utilizar una plantilla en blanco al mostrar el sitio desconectado.</info>',
  'user_setting_can_view_site_offline' => 'Puede ver el sitio, incluso cuando se configura en offline?',
  'setting_group_site_offlineonline' => '<title>Sitio Offline/Online</title><info>Sitio Offline/Online</info>',
  'setting_group_site_statistics' => '<title>Estad&#237;sticas del Sitio</title><info>Estad&#237;sticas del Sitio</info>',
  'setting_cache_site_stats' => '<title>Cache estadisticas del sitio</title><info>Seleccione esto a <b>Si</b> Si deben almacenar en cach&#233; las Estadisticas de sitio.

<b>Nota:</b> Es altamente desaconsejable las Estadisticas de sitio en cach&#233; requiere un gran conjunto de consultas a la base de datos a trav&#233;s de numerosas tablas.</info>',
  'setting_site_stat_update_time' => '<title>Actualizaci&#243;n de Estad&#237;sticas de cach&#233; (Minutos)</title><info>Definir en cuesti&#243;n de minutos el tiempo de espera hasta que tenga que volver a almacenar en cach&#233; las estad&#237;sticas del sitio.</info>',
  'setting_display_site_stats' => '<title>Mostrar el estado del sitio</title><info>Seleccione esto a <b>Si</b> para mostrar las estad&#237;sticas del sitio p&#250;blicamente dentro del escritorio de los usuarios.</info>',
  'setting_identify_dst' => '<title>DST</title><info>DST</info>',
  'user_cancellation_9' => 'Yo no encuentro este sitio &#250;til.',
  'user_cancellation_10' => 'Tengo un problema de privacidad.',
  'user_cancellation_11' => 'No entiendo c&#243;mo usar este sitio.',
  'user_cancellation_12' => 'Estoy recibiendo demasiados correo electr&#243;nicos de este sitio.',
  'user_cancellation_13' => 'Recibo demasiados spam o demasiadas solicitudes de amistad.',
  'user_cancellation_14' => 'Estoy aburrido de este sitio.',
  'phpfox_branding_removal' => 'Eliminaci&#243;n de marca',
  'setting_item_view_area' => '<title>Localizaci&#243;n del art&#237;culo</title><info>Selecciona <b>publico</b> si le gustan todos los elementos que se mostrar&#225;n dentro de una secci&#243;n p&#250;blica o seleccione <b>perfil</b> tener elementos que aparece en un perfil de usuarios.

Se recomienda esta opci&#243;n, ya que esto recoge enormemente los efectos en los motores de busqueda de la paginas del sitio.</info>',
  'setting_ftp_dir_path' => '<title>FTP Directory Path</title><info>Proporcione la ruta completa al directorio ra&#237;z de scripts.

Si no est&#225; seguro sobre la ruta de acceso completa, puede hacer clic  <a href="#" onclick="tb_show(\'FTP Path Search\', $.ajaxBox(\'core.ftpPathSearch\', \'height=410&width=500\'));">aqu&#237;</a> para obtener ayuda en la b&#250;squeda de la ruta completa correcta.</info>',
  'admincp_menu_country' => 'Paises',
  'admincp_menu_country_manager' => 'Administrar Paises',
  'admincp_menu_country_import' => 'Importar',
  'admincp_menu_country_add' => 'Agregar Pa&#237;s',
  'admincp_menu_country_child_add' => 'A&#241;adir Estado/Provincia',
  'user_setting_user_is_banned' => 'Active esta opci&#243;n si el grupo de usuarios tendr&#225;n prohibido entrar al sitio e interactuar con otros miembros.

<b>Aviso:</b> Esta opci&#243;n es s&#243;lo para un grupo de usuarios que se considera que se "proh&#237;ben" los miembros',
  'setting_banned_user_group_id' => '<title>Banned User Group ID</title><info>Banned User Group ID</info>',
  'setting_group_image_processing' => '<title>Procesamiento de Im&#225;genes</title><info>Procesamiento de Im&#225;genes</info>',
  'setting_watermark_option' => '<title>Imagen de marca de agua</title><info>Ciertas &#225;reas de la imagen permiten marcas de agua. Si estas secciones tienen la imagen de marca de agua habilitado esta opci&#243;n debe estar habilitada.

Si selecciona "imagen", esto a&#241;adir&#225; una imagen peque&#241;a marca de agua a cada imagen que se carga. Si selecciona "texto" esto va a a&#241;adir el texto se define en esta secci&#243;n.</info>',
  'setting_watermark_image' => '<title>Nombre de la imagen de marca de agua</title><info>Nombre de la imagen de marca de agua</info>',
  'setting_watermark_opacity' => '<title>Opacidad de la marca de agua</title><info>La opacidad de una imagen puede variar desde 1-100.</info>',
  'setting_watermark_image_position' => '<title>Posicion marca de agua</title><info>Seleccione una posici&#243;n para colocar la marca de agua.</info>',
  'setting_image_text_hex' => '<title>Color del Texto marca de agua</title><info>(COLORES HEX Ejemplo: 000000)</info>',
  'setting_image_text' => '<title>Texto marca de agua</title><info>Texto marca de agua</info>',
  'setting_group_registration' => '<title>Registracion</title><info>Registracion</info>',
  'setting_registration_enable_dob' => '<title>Activar datos de nacimiento</title><info>Activar datos de nacimiento</info>',
  'setting_registration_enable_gender' => '<title>Habilitar G&#233;nero</title><info>Habilitar G&#233;nero</info>',
  'setting_registration_enable_location' => '<title>Habilitar Ubicaci&#243;n</title><info>Habilitar Ubicaci&#243;n</info>',
  'setting_registration_enable_timezone' => '<title>Activar Timezone</title><info>Activar Timezone</info>',
  'kind_regards_phpfox' => 'Saludos cordiales,
Manati.com',
  'setting_global_admincp_note' => '<title>Notas Globales AdminCP</title><info>Notas Globales AdminCP</info>',
  'admincp_menu_online' => 'En L&#237;nea',
  'admincp_menu_online_members' => 'Miembros',
  'admincp_menu_online_guests' => 'Personas/Bots',
  'admincp_menu_system_overview' => 'Descripci&#243;n general del sistema',
  'setting_enable_spam_check' => '<title>Activar Spam Check</title><info>Activar Spam Check</info>',
  'setting_akismet_url' => '<title>Akismet URL</title><info>Akismet URL</info>',
  'setting_akismet_password' => '<title>Akismet Contrase&#241;a</title><info>Akismet Contrase&#241;a</info>',
  'user_setting_is_spam_free' => 'Seleccione esto a <b>Si</b> Si este grupo de usuarios nunca debe comprobarse para spam.',
  'setting_auto_deny_items' => '<title>SPAM Count</title><info>Definir el n&#250;mero de elementos que un usuario puede intentar Spam antes de que a&#241;adir cualquier cosa no se comprobar&#225; que vamos a considerar que se trata de spam.</info>',
  'setting_auto_ban_spammer' => '<title>Auto Ban Spammers</title><info>Definir cu&#225;ntas veces un usuario puede hacer spam antes de que se prohiba de forma autom&#225;tica.

<b>Aviso:</b>Ponga esto a "0" (sin comillas) para desactivar esta opci&#243;n.</info>',
  'setting_warn_on_external_links' => '<title>External Links Warning</title><info>Warn users when they have clicked on a link that will direct them to another site.</info>',
  'setting_disable_all_external_urls' => '<title>Desactivar todos las URLS externas</title><info>Activar esta funci&#243;n para eliminar todos los enlaces externos del sitio. 

<b>Aviso:</b> Sitios a&#241;adido a la "Lista de URL Blanca" ser&#225; permitido.</info>',
  'setting_url_spam_white_list' => '<title>URL White List</title><info>Agregue sitios en los que desea permitir los enlaces externos.</info>',
  'setting_disable_all_external_emails' => '<title>Disable All External Emails</title><info>Activar esta funci&#243;n para eliminar todos los emails externos del sitio.

Aviso: Los sitios agregados a la "lista del email Blanca" ser&#225; permitido.</info>',
  'setting_email_white_list' => '<title>Email White List</title><info>Agregue sitios en los que desea permitir en email externos.</info>',
  'setting_phpfox_version' => '<title>phpFox Version</title><info>phpFox Version</info>',
  'user_setting_can_view_twitter_updates' => 'Puede ver actualizaciones phpFox twitter ?',
  'user_setting_can_view_news_updates' => 'Puede ver noticias phpFox & actualizaciones?',
  'setting_redirect_guest_on_same_page' => '<title>Redirecci&#243;n misma p&#225;gina despu&#233;s de Iniciar sesion/Registrado</title><info>Active esta opci&#243;n para redirigir los invitados a la misma p&#225;gina que se visita despu&#233;s de que hayan registrado o iniciado sesion.</info>',
  'setting_meta_description_profile' => '<title>Meta Descripcion del Perfil</title><info>Esta es la descripci&#243;n de la meta prevista en un perfil de los usuarios que se incluye con su informaci&#243;n personal. Se aconseja para que esto no sea demasiado largo, a fin de dejar espacio para la informaci&#243;n personal de los usuarios.</info>',
  'setting_words_remove_in_keywords' => '<title>Keyword String Removal</title><info>Definir las palabras aqu&#237;, que no debe aparecer en palabras clave meta. Cada palabra debe ser separada por comas.

<b>Aviso:</b> La b&#250;squeda es sensible a may&#250;sculas.</info>',
  'update' => 'Actualizar',
  'total_items' => 'Total de Art&#237;culos',
  'activity_points' => 'Puntos de Actividad',
  'dashboard' => 'Estado',
  'membership' => 'Rango',
  'profile_views' => 'Visitas al perfil',
  'space_used' => 'Espacio Usado',
  'member_since' => 'En MR desde',
  'what_s_new' => 'Lo m&#225;s Reciente',
  'site_stats' => 'Estad&#237;sticas',
  'customize_dashboard' => 'Personalizar el Panel',
  'quick_links' => 'Enlaces',
  'module_is_not_a_valid_module' => '{module} no es un m&#243;dulo v&#225;lido.',
  'state_province' => 'Estado/Provincia',
  'what_is_on_your_mind' => '&#191;Qu&#233; hay en tu mente?',
  'click_to_change_profile_photo' => 'Haz clic aqu&#237; para cambiar la foto del perfil.',
  'last_login' => 'Ultima Visita',
  'submit_links' => 'Enlaces de Inicio',
  'manage_links' => 'Administrar los enlaces',
  'logout' => 'Cerrar sesi&#243;n',
  'click_to_view_your_profile' => 'Haz clic aqu&#237; para ver tu perfil.',
  'click_to_change_your_profile_photo' => 'Haz clic aqu&#237; para cambiar la foto del perfil.',
  'click_to_change_your_status' => 'Haga clic aqu&#237; para cambiar tu estado.',
  'status' => 'Estado',
  'link_save_or_cancel' => '<a href="#" onclick="$(\'#js_user_status_form\').ajaxCall(\'user.updateStatus\'); return false;">Guardar</a> o <a href="#" class="js_update_status">Cancelar</a>',
  'start_search' => 'Comenzar la B&#250;squeda...',
  'favorites' => 'Favoritos',
  'hide_the_footer_bar' => 'Ocultar la barra de pie de p&#225;gina',
  'show_the_footer_bar' => 'Mostrar la barra de pie de p&#225;gina',
  'ftp_path' => 'Acceso FTP',
  'change_your_time_zone_preference' => 'Cambiar la preferencia de zona horaria.',
  'welcome_name' => 'Bienvenido, {name}!',
  'share' => 'Compartir',
  'setting_enable_getid3_check' => '<title>Utilice getid3 para archivos subidos</title><info>getid3 es una biblioteca de 3 &#170; parte que nos ayuda a verificar el contenido de un archivo de metadatos que se carga en el servidor para comprobar si el archivo que se est&#225; cargando contiene datos que se relaciona con lo que estamos permitiendo que se cargue (por ejemplo, fotos, MP3 , videos, etc ..).</info>',
  'setting_extended_global_time_stamp' => '<title>Extended Global Time Stamp</title><info>Extended Global Time Stamp</info>',
  'setting_theme_session_prefix' => '<title>Theme Session Prefix</title><info>Theme Session Prefix</info>',
  'edit_this_block' => 'Editar este Bloque',
  'remove_this_block' => 'Borrar este Bloque',
  'hello' => 'Hola',
  'hello_name' => 'Hola {name}',
  'the_site_is_currently_in_offline_mode' => 'El sitio se encuentra actualmente en "Modo Desconectado".',
  'explore' => 'Explorar',
  'add_a_video' => 'Agregar un Video',
  'enter_the_url_of_your_link' => 'Proporciona la URL de tu enlace',
  'enter_the_url_of_your_image' => 'Proporciona la URL de tu imagen',
  'add_a_link' => 'Agregar un Enlace',
  'add_a_photo' => 'Agregar una Foto',
  'toggle_fullscreen' => 'Agrandar Pantalla',
  'full_screen_editor' => 'Editor de Pantalla Completa',
  'january' => 'Enero',
  'february' => 'Febrero',
  'march' => 'Marzo',
  'april' => 'Abril',
  'may' => 'Mayo',
  'june' => 'Junio',
  'july' => 'Julio',
  'august' => 'Agosto',
  'september' => 'Septiembre',
  'october' => 'Octubre',
  'november' => 'Noviembre',
  'december' => 'Diciembre',
  'not_a_valid_file_extension_we_only_accept_support' => 'No es una extensi&#243;n de archivo v&#225;lida. S&#243;lo aceptamos: {support}',
  'not_a_valid_image_we_only_accept_the_following_file_extensions_support' => 'No es una imagen v&#225;lida. Nosotros solo aceptamo las siguientes extensiones de archivos: {support}',
  'unable_to_move_the_image' => 'No se puede mover la imagen.',
  'unable_to_move_the_file' => 'No se puede mover el archivo.',
  'unable_to_upload_the_image' => 'No se puede subir la imagen.',
  'upload_failed_server_cannot_handle_files_larger_then_file_size' => 'Error de subida. Servidor no puede manejar archivos m&#225;s grande que: {file_size}',
  'upload_failed_server_cannot_handle_files_size_larger_then_file_size' => 'Error de subida. Servidor no puede manejar archivos ({size}) m&#225;s grande que: {file_size}',
  'upload_failed_your_file_size_is_larger_then_our_limit_file_size' => 'Error de subida. Tu archivo ({size}) es m&#225;s grande que nuestro l&#237;mite: {file_size}',
  'uploaded_file_is_not_valid' => 'El archivo subido no es v&#225;lido.',
  'unable_to_connect_to_ftp_host' => 'No se puede conectar al host de FTP.',
  'ftp_password_hash_does_not_match_with_server_hash' => 'FTP password hash does not match with server hash
La contrase&#241;a hash del ftp no coincide con el hash del servidor.',
  'unable_to_login_to_ftp_server' => 'No se puede acceder al servidor FTP.',
  'unable_to_connect_to_ftp_base_directory_make_sure_the_setting_for_ftp_directory_path_has_the_correct_path' => 'No se puede conectar a FTP directorio base. Aseg&#250;rese de que el escenario de "la ruta del directorio FTP" tiene el camino correcto.',
  'paypal_email' => 'Email de PayPal',
  'paypal_is_an_electronic_money_service_which_allows_you_to_make_payment_to_anyone_online' => 'PayPal es un servicio de dinero electr&#243;nico que le permite hacer el pago a cualquier persona que se encuentre en l&#237;nea. Usted puede elegir pagar con su tarjeta de cr&#233;dito, tarjeta de d&#233;bito, cuenta bancaria, o saldo de PayPal y realizar compras con seguridad sin revelar su n&#250;mero de tarjeta de cr&#233;dito o informaci&#243;n financiera. Todas las tarjetas de cr&#233;dito y de d&#233;bito son aceptadas como Visa, Mastercard, American Express, Switch y Solo (adem&#225;s de muchas m&#225;s) ..',
  'the_email_that_represents_your_paypal_account' => 'El correo electr&#243;nico que representa a su cuenta PayPal.',
  '2checkout_vendor_id_number' => 'ID del Suplidor en 2Checkout',
  '2checkout_secret_word' => 'Palabra Secreta de 2Checkout',
  'your_numerical_vendor_id' => 'ID num&#233;rico de tu suplidor.',
  'the_secret_word_as_set_within_the_look_and_feel_page_of_your_2checkout_account' => 'La palabra secreta que figura en la p&#225;gina "Look and Feel" de su cuenta de 2Checkout.',
  'unable_to_create_a_watermark_resource' => 'No se puede crear un recurso de marca de agua.',
  'originally_posted_by' => 'Publicado originalmente por',
  'search_results_for' => 'Buscar resultados para',
  'any' => 'Todos',
  'upgrade_taking_place' => 'Actualizaci&#243;n en Proceso',
  'content_is_empty' => 'El Contenido est&#225; vac&#237;o',
  'the_content_of_this_item_is_identical_to_something_you_have_added_before_please_try_again' => 'El contenido de este art&#237;culo es id&#233;ntico a lo que agregastes antes. Por favor, int&#233;ntalo de nuevo.',
  'try_again_in_1_minute' => 'Trata de nuevo en 1 minuto.',
  'try_again_in_time_minutes' => 'Trata de nuevo en {time} minutos.',
  'month' => 'Mes',
  'day' => 'D&#237;a',
  'year' => 'A&#241;o',
  'am' => 'am',
  'pm' => 'pm',
  'language_packages' => 'Idiomas',
  'manage' => 'Administrar',
  'profile' => 'Perfil',
  '1_second_ago' => 'hace un segundo',
  'total_seconds_ago' => 'hace {total} segundos',
  '1_minute_ago' => 'hace un minuto',
  'total_minutes_ago' => 'hace {total} minutos',
  '1_hour_ago' => 'hace una hora',
  'total_hours_ago' => 'hace {total} horas',
  'today' => 'Hoy',
  'yesterday' => 'Ayer',
  'move_this_block' => 'Mover este Bloque',
  'online' => 'En L&#237;nea',
  'none' => '(ninguno)',
  'cancel_lowercase' => 'Cancelar',
  'setting_can_move_on_a_y_and_x_axis' => '<title>Arrastre y suelte Bloques</title><info>Seleccione esto a <b>Si</b> si usted permite a los usuarios mover bloques sobre un Y or X axis dentro de las zonas donde puedan mover bloques (p.ej. Su propio perfil)  De forma predeterminada, s&#243;lo permiten a los usuarios moverse bloques en una  Y axis permitiendo a los usuarios mover bloques en cualquier lugar, les dar&#225; la libertad pero puede causar que el dise&#241;o de su sitio pueda ser destruido.</info>',
  'block' => 'Bloque',
  'full_name_is_online' => '{full_name} est&#225; en linea.',
  'setting_resize_images' => '<title>Resize Images</title><info>Si usted permite c&#243;digo HTML en el sitio y los usuarios intentan agregar im&#225;genes puede activar esta opci&#243;n para establecer un m&#225;ximo de ancho/altura en ciertas &#225;reas (por ej Comentarios Generales News Feed).

<b>Aviso:</b> Si se activa esto a&#241;adir&#225; una sobrecarga adicional al script.</info>',
  'you_cannot_write_more_then_limit_characters' => 'No puedes escribir m&#225;s de {limit} caracteres!',
  'you_have_limit_character_s_left' => 'Tienes de l&#237;mite {limit} caracteres.',
  'welcome_email_content' => 'Gracias por unirse a nuestra comunidad!',
  'welcome_email_subject' => 'Bienvenido a Facesnights, Red Social Nocturna',
  'monday' => 'Lunes',
  'tuesday' => 'Martes',
  'wednesday' => 'Mi&#233;rcoles',
  'thursday' => 'Jueves',
  'friday' => 'Viernes',
  'saturday' => 'S&#225;bado',
  'sunday' => 'Domingo',
  'view_less' => 'Ver menos',
  'select_a_file_to_upload' => 'Seleccione el archivo a subir.',
  'clear' => 'Eliminar estado',
  'clear_your_current_status' => 'Limpie su estado',
  'not_a_valid_file_extension_we_only_allow_ext' => 'No es una extensi&#243;n de archivo v&#225;lido. S&#243;lo permitimos: {ext}',
  'opps_something_went_wrong' => 'Lo sentimos! Algo sali&#243; mal. No se pudo completar su solicitud. Estamos buscando la soluci&#243;n a este problema. Por favor, actualiza la p&#225;gina y vuelve a intentarlo.',
  'fill_in_a_proper_url' => 'Proporciona un URL apropiado.',
  'url' => 'URL',
  'message' => 'Mensaje',
  'image' => 'Imagen',
  'provide_a_proper_image_path' => 'Proporcione una ruta de la imagen adecuada.',
  'not_a_valid_password' => 'No es una contrase&#241;a v&#225;lida.',
  'invalid_url' => 'URL Inv&#225;lido.',
  'provide_a_numerical_value' => 'Proporciona un valor num&#233;rico.',
  'provide_a_valid_price' => 'Proporciona un precio v&#225;lido.',
  'provide_a_valid_year_eg_1982' => 'Proporciona un a&#241;o v&#225;lido. (ej. 1982)',
  'setting_mail_smtp_port' => '<title> Puerto SMTP </title> <info> &#191;Qu&#233; puerto utilizar para enviar correo con SMTP? Por defecto es 25 </info>',
  'setting_conver_time_to_string' => '<title>Time to String</title><info>Time to String</info>',
  'setting_global_welcome_time_stamp' => '<title>Fecha y hora de la Bienvenida Global</title><info>Fecha y hora de la Bienvenida Global</info>',
  'his' => 'su',
  'her' => 'su',
  'setting_no_more_ie6' => '<title>Detectar IE6</title><info>Con esta funci&#243;n activada que guiar&#225; a aquellos usando IE6 para actualizar a un navegador compatible.

Esta caracter&#237;stica es alimentado por <a href="http://www.ie6nomore.com/" target="_blank">IE6 No m&#225;s</a>

<b>Note:</b> Los temas que ofrecemos de forma predeterminada requiere Internet Explorer 7 o superior, sin embargo, otros temas podr&#237;an funcionar bien con IE6, ya que se reduce al tema que ha instalado.</info>',
  'warning' => 'Aviso!',
  'you_are_using_an_outdated_browser' => 'Usted est&#225; utilizando un navegador obsoleto',
  'for_a_better_experience_using_this_site_please_upgrade_to_a_modern_web_browser' => 'Para una mejor experiencia de uso de este sitio, por favor, actualiza tu navegador.',
  'get_firefox' => 'Obtener Firefox',
  'get_internet_explorer' => 'Obtener Internet Explorer',
  'get_safari' => 'Obtener Safari',
  'get_google_chrome' => 'Obtener Google Chrome',
  'menu_core_new_sample' => 'Nuevo Ejemplo',
  'menu_core_sub_menu' => 'Sub Menu',
  'setting_resize_embed_video' => '<title>Resize Embedded Videos</title><info>Active esta funci&#243;n para cambiar el tama&#241;o de los v&#237;deos incrustados se adapte a su tema por defecto de los sitios en las zonas donde se ha dise&#241;ado para arreglar videos flash (por ejemplo, el perfil de los usuarios).

Tenga en cuenta que activar esta funci&#243;n ser&#225; una carga extra.

Utilice esta funci&#243;n con precauci&#243;n, ya que es experimental.
</info>',
  'translate' => 'Traducir',
  'setting_footer_watch_time_stamp' => '<title>Footer Bar Time Stamp</title><info>Footer Bar Time Stamp</info>',
  'setting_categories_to_show_at_first' => '<title>N&#250;mero de categor&#237;as para mostrar en un primer momento</title><info>Este ajuste le indica cu&#225;ntas categor&#237;as se muestran en un primer momento. Si la lista de categor&#237;as es superior a este valor los extras se oculta y una "Ver m&#225;s" opci&#243;n se mostrar&#225; en su lugar, lo que permite al usuario visualizar las categor&#237;as ocultas.

a "View Less" option will be available to provide the full "accordion" effect.</info>',
  'translating_name' => 'Traduciendo: {name}',
  'sample_phrase' => 'Frase de Muestra',
  'setting_global_site_title' => '<title>Titulo del Sitio</title><info>Esto se muestra en cada p&#225;gina como el t&#237;tulo de su sitio.</info>',
  'uploading' => 'Subiendo',
  'setting_css_edit_id' => '<title>CSS Editar ID#</title><info>CSS Editar ID#</info>',
  'setting_footer_bar_tool_tip_time_stamp' => '<title>Footerbar Tooltip Timestamp</title><info>Este es el sello de hora que se muestra cuando se cierne sobre la marca de tiempo peque&#241;o en la barra de pie de p&#225;gina.</info>',
  'what_s_on_your_mind' => '&#191;Qu&#233; est&#225;s haciendo?',
  'currency' => 'Moneda',
  'currency_manager' => 'Administrar Moneda',
  'add_currency' => 'A&#241;adir Moneda',
  'u_s_dollars' => 'U.S. Dollars',
  'euros' => 'Euros',
  'pounds_sterling' => 'Libras Esterlinas',
  'currencies' => 'Monedas',
  'custom_currency_sek' => 'Corona sueca',
  'setting_group_currency' => '<title>Moneda</title><info>Moneda</info>',
  'setting_exchange_rate_api_key' => '<title>Tipo de Cambio API</title><info>Para obtener los &#250;ltimos tipos de cambio de las monedas que se utilizan hay que conectarse a un sitio web de tercero. Para inscribirse en un pa&#237;s libre clave de API van <a href="http://www.exchangerate-api.com/api-key">aqu&#237;</a>.</info>',
  'setting_group_cdn_content_delivery_network' => '<title>CDN (Content Delivery Network)</title><info>CDN (Content Delivery Network)</info>',
  'setting_amazon_access_key' => '<title>Amazon Clave Acceso</title><info>A&#241;adir tu clave Amazon.</info>',
  'setting_amazon_secret_key' => '<title>Amazon Clave Secreta</title><info>A&#241;adir tu clave secreta Amazon.</info>',
  'setting_amazon_bucket' => '<title>Amazon Bucket Nombre</title><info>Este se crear&#225; autom&#225;ticamente por el script. Deje esta configuraci&#243;n a menos que desee crear manualmente un bucket en Amazon.</info>',
  'setting_amazon_bucket_created' => '<title>Amazon Bucket Creada</title><info>Este valor se actualiza autom&#225;ticamente por el script. S&#243;lo modificar esta configuraci&#243;n para fines de depuraci&#243;n.</info>',
  'setting_allow_cdn' => '<title>Activar CDN (Beta)</title><info>Seleccione esto a "Si" si usted quiere usar CDN. Note que esta caracteristica est&#225; en "Beta".</info>',
  'money_field_only_accepts_numbers_and_point' => 'Los campos de dinero s&#243;lo puede tener un n&#250;mero y un punto.
Ejemplos v&#225;lidos:
12.43
15
0.65',
  'only_one_point_is_allowed' => 'En los campos de dinero un solo punto se permite, ejemplos v&#225;lidos:
23.12
19.54
30',
  'money_fields_are_required' => 'Si un campo de dinero se establece, los dem&#225;s son obligatorios. Puedes dejar todo vac&#237;o o no.',
  'setting_cdn_cname' => '<title>CDN URL (Opcional)</title><info>Si su proveedor de CDN le permite crear un registro CNAME puede agregar el dominio aqu&#237;. Ejemplo: (http://cdn.yoursite.com/)</info>',
  'setting_force_https_secure_pages' => '<title>P&#225;ginas seguras con HTTPS</title><info>Si el servidor tiene soporte para HTTPS se puede activar esta funci&#243;n para asegurar ciertas p&#225;ginas, como las p&#225;ginas de configuraci&#243;n de inicio de sesi&#243;n, de registro y cuenta.</info>',
  'try_again_in_time_seconds' => 'Intentalo de nuevo {tiempo} segundos.',
  'try_again_in_1_second' => 'Intalo de nuevo en 1 segundo.',
  'setting_global_genders' => '<title>Generos</title><info>Este ajuste controla los g&#233;neros utilizados en esta comunidad. Para agregar un nuevo g&#233;nero que hay que rellenar con 3 valores separados por una barra vertical "|" (sin comillas). Utilice los g&#233;neros masculino y femenino por defecto que ofrecemos como ejemplos.
  El primer valor debe ser un n&#250;mero &#250;nico de identificaci&#243;n num&#233;rica. Para hombres y mujeres que utilizan los n&#250;meros 1 y 2. Se aconseja ir hacia arriba desde all&#237;. El campo de segunda debe ser una frase que primero debe agregar utilizando nuestro gestor de idioma. Una vez que se agrega una frase que le da varios ejemplos sobre c&#243;mo utilizar la frase. Nosotros vamos a usar el "texto" m&#233;todo, que es b&#225;sicamente el nombre de la variable de la frase y la forma en que se conectan a esta palabra espec&#237;fica. As&#237;, el 2 &#186; valor tiene que ser una frase que identifica a este g&#233;nero. Para hombres y mujeres que utilizan &#233;l y para ella. El valor de tercero identifica el g&#233;nero y tambi&#233;n debe ser una frase muy parecida a la 2 &#186; valor. Para hombres y mujeres que utilizan hombres y mujeres a llenar este valor.</info>',
  'all' => 'todo',
  'time_separator' => 'en&#160;',
  'setting_phpfox_total_users_online_mark' => '<title>Informacion del Total de Usuarios Online</title><info>Informacion del Total de Usuarios Online</info>',
  'setting_phpfox_total_users_online_history' => '<title>Informacion de la Historia Total de Usuarios Online</title><info>Informacion de la Historia Total de Usuarios Online</info>',
  'your_website_has_surpassed_its_limit_on_how_many_active' => 'Tu sitio web super&#243; su l&#237;mite en el n&#250;mero de usuarios activos que puede tener en l&#237;nea a la vez. A continuaci&#243;n encontrar&#225;s un registro de cu&#225;ntos usuarios tienes y una marca de tiempo de cuando ocurri&#243;. Se aconseja para que puedas actualizar tu cuenta y no te encuentres con estas interrupciones en el futuro.',
  'limit_warning' => 'Limitar Alerta',
  'online_usage_log' => 'Registro de uso Online',
  'timestamp' => 'Fecha y hora',
  'users' => 'Usuarios',
  'setting_phpfox_is_hosted' => '<title>Hospedado</title><info>Hospedado</info>',
  'setting_phpfox_max_users_online' => '<title>M&#225;ximo de Usuarios Online</title><infoM&#225;ximo de Usuarios Online</info>',
  'saving' => 'Guardando...',
  'loading_text_editor' => 'Cargando editor de texto',
  'setting_enabled_edit_area' => '<title>Utiliza la opci&#243;n Editar &#193;rea</title><info>Activar esta opci&#243;n para utilizar <a href="http://www.cdolivet.com/index.php?page=editArea">Editar &#193;rea</a> cuando edite c&#243;digo (HTML, PHP etc...) en el Panel de Admin. Esta caracter&#237;stica transforma una forma convencional en un editor de c&#243;digo.</info>',
  'setting_group_ip_infodb' => '<title>IP InformacionDB</title><info>Herramientas gratuitas de golocalizacion de IP </info>',
  'setting_ip_infodb_api_key' => '<title>IP InformacionDB clave API </title><info>IP InformacionDB es una herramienta gratuita que nosotros usamos para encontrar informacion util de los usuarios basada en su IP.Ingresa tu clave gratuita API,que se puede obtener <a href="http://ipinfodb.com/register.php">aqu&#237;</a>.</info>',
  'setting_load_jquery_from_google_cdn' => '<title>Load jQuery desde Google CDN</title><info>Al activar esta opci&#243;n se carga jQuery de JavaScript relacionados con los archivos de los servidores de Google CDN. M&#225;s informaci&#243;n se puede encontrar <a href="http://code.google.com/apis/libraries/devguide.html">aqu&#237;</a>.</info>',
  'setting_jquery_google_cdn_version' => '<title>jQuery Version en Google CDN</title><info>Definir la versi&#243;n de jQuery que est&#225; disponible en <a href="http://code.google.com/apis/libraries/devguide.html#jquery">Google CDN</a> servers.</info>',
  'setting_jquery_ui_google_cdn_version' => '<title>jQuery UI Version on Google CDN</title><info>Definir la versi&#243;n de jQuery UI que est&#225; disponible en <a href="http://code.google.com/apis/libraries/devguide.html#jqueryUI">Google CDN</a> servidores.</info>',
  'setting_friends_only_community' => '<title>S&#243;lo amigos de la Comunidad</title><info>Al activar esta opci&#243;n algunos sectores (ej. blogs, fotos, etc ..), que por defecto solo muestra los elementos de la lista de miembros y su amigos. <b>Note:</b> Para que esto funcione debes habilitar la opci&#243;n <b>Secci&#243;n Punto de privacidad de navegaci&#243;n
</b></info>',
  'setting_site_wide_ajax_browsing' => '<title>Sitio amplio de navegaci&#243;n AJAX</title><info>Al activar esta opci&#243;n, los usuarios podr&#225;n navegar por ciertas &#225;reas del sitio usando AJAX. Mediante el uso de AJAX s&#243;lo cargar los datos necesarios para la p&#225;gina espec&#237;fica que se muestra. Esto ahorra ancho de banda y puede mejorar el rendimiento general de sus servidores debido a la reducci&#243;n del n&#250;mero de peticiones a los servidores.</info>',
  'setting_section_privacy_item_browsing' => '<title>Secci&#243;n Punto de privacidad de navegaci&#243;n</title><info>Al activar esta opci&#243;n permitir&#225; a los usuarios navegar por algunas secciones que permiten la configuraci&#243;n de privacidad. Por defecto, solo mostrar los elementos p&#250;blicos en lo que llamamos secciones (por ej Blogs, Encuestas, etc .. Discos). Con esta opci&#243;n activada vamos a mostrar los elementos que el usuario que est&#225; viendo sobre la base de la configuraci&#243;n de privacidad art&#237;culos. Tenga en cuenta que esta opci&#243;n requiere un servidor con equilibrio de carga y en muchos casos varios servidores SQL de la misma para apoyar este tipo de consulta en una comunidad activa.</info>',
  'setting_date_field_order' => '<title>Formato de fecha del Calendario</title><info>El formato para analizar y mostar las fechas. 
MDY = Mes/Dia/A&#241;o
DMY = Dia/Mes/A&#241;o
YMD = A&#241;o/Mes/Dia</info>',
  'setting_use_jquery_datepicker' => '<title>Usar Datepicker</title><info>Seleccione esto a "Si" para usar un selector en todas las &#225;reas que requieran los usuarios para seleccionar una fecha.</info>',
  'name' => 'Nombre',
  'in_queue' => 'En la cola de',
  'more_queued_than_allowed' => 'Por favor, s&#243;lo selecciona {iQueueLimit} archivos',
  'stopped' => 'Detenido',
  'manage_activity_points' => 'Administrar Puntos de Actividad',
  'multiple_selection' => 'Multiple Seleccion',
  'radio' => 'Radio',
  'checkbox' => 'Casilla de verificaci&#243;n',
  'setting_cdn_amazon_https' => '<title>Activar soporte de HTTPS</title><info>Seleccione esto a "Si" si el usuario est&#225; en una p&#225;gina segura para usar HTTPS con Amazon S3 los temas. Nota que usted tendr&#225; que crear su propio certificado para trabajar con Amazon S3 ya que no proporcionan apoyo a esto por defecto. </info>',
  'upload_problems' => '&#191;Problemas al subir? Prueba el <a href="{link}">cargador b&#225;sico</a> (trabaja sobre los ordenadores y navegadores web m&#225;s antiguos).',
  'user_setting_can_design_dnd' => '&#191;Pueden los miembros de este grupo de usuarios permitir&#225; al dise&#241;ador del sitio para arrastrar y soltar los bloques en todo el sitio? (Estos cambios afectan a todo el sitio y esta caracter&#237;stica est&#225; dirigida a los administradores del sitio)',
  'menu_core_create_a_list_a441eadc1389cdf0ffe6c4f8babdd66e' => 'Crear una lista',
  'setting_twitter_consumer_key' => '<title>Consumer Key</title><info>Escribe tu Twitter consumer key.</info>',
  'setting_twitter_consumer_secret' => '<title>Consumer Secret</title><info>Escribe tu Twitter consumer secret.</info>',
  'setting_allow_html_in_activity_feed' => '<title>Permitir HTML en Actividad Reciente</title><info>.Si se habilita esta opci&#243;n te permitir&#225; HTML en la actividad reciente y los comentarios conectados recientes.</info>',
  'setting_disable_hash_bang_support' => '<title>AJAX Buscador - Desactivar Hash-Bang URL</title><info>Si tu tienes "Sitio Wide AJAX Buscar" nos permiti&#243; prestar apoyo a una funci&#243;n proporcionada con HTML5 que permite el cambio de la ruta de la URL sin tener que recargar la p&#225;gina. Para los navegadores que no tienen soporte para esta funci&#243;n se utiliza un retroceso hash-bang URL. Si no desea permitir el uso de URL hash-bang es activar esta opci&#243;n y para los navegadores que no tienen soporte HTML 5 no ser&#225; capaz de utilizar su funcionalidad de navegaci&#243;n por los sitios AJAX. Actualmente todos los navegadores Internet Explorer no tiene soporte para esta funci&#243;n HTML5 para que por defecto utiliza el m&#233;todo de reserva.</info>',
  'search_dot' => 'Buscar...',
  'account_info' => 'Informaci&#243;n',
  'edit_profile' => 'Editar perfil',
  'add_new_block' => 'A&#241;adir nuevo bloque',
  'disable_dnd' => 'Desactivar DnD',
  'dnd_mode' => 'Modo DnD',
  'back' => 'Volver',
  'home' => 'Inicio',
  'add' => 'A&#241;adir',
  'log_back_in_as_global_full_name' => 'Vuelva a entrar como {global_full_name}',
  'edit_page' => 'Editar Pagina',
  'login_as_page' => 'Entrar como p&#225;gina',
  'enable_dnd_mode' => 'Activar modo DnD',
  'disable_dnd_mode' => 'Desactivar modo DnD',
  'view_more' => 'Ver mas',
  'displaying_of_total' => '{displaying} de {total}',
  'select_all' => 'Seleccionar todo',
  'un_select_all' => 'Deseleccionar todo',
  'with_selected' => 'Con lo Seleccionado',
  'clear_all_selected' => 'Eliminar lo seleccionado',
  'all_time' => 'Siempre',
  'this_month' => 'Este mes',
  'this_week' => 'Esta semana',
  'upcoming' => 'Pr&#243;ximo',
  'sort' => 'Ordenar',
  'show' => 'Mostrar',
  'when' => 'Cuando',
  'align_left' => 'Alinear a la izquierda',
  'align_center' => 'Alinear al centro',
  'align_right' => 'Alinear a la derecha',
  'bullets' => 'Balas',
  'ordered_list' => 'Lista ordenada',
  'setting_display_older_ie_error' => '<title>IE8 o superior Check</title><info>Por defecto el script requiere IE8 o superior. Mostraremos a usuarios un aviso si ellos usan una versi&#243;n m&#225;s vieja y un enlace para mejorar tu navegador. Desactiva esto si no quieres mostrar una advertencia</info>',
  'ie8_or_higher_warning' => 'Parece que usas una versi&#243;n m&#225;s vieja del Explorador de Internet. Este sitio requiere al Explorador de Internet 8 o m&#225;s alto. Actualica tu navegador <a href="http://www.microsoft.com/ie/" target="_blank">aqui</a> hoy para disfrutar totalmente de todas las maravillas de este sitio.',
  'himself' => 'el',
  'herself' => 'ella',
  'said' => 'dijo...',
  'loading' => 'Cargando',
  'module_installer' => 'Instalador Core',
  'phpfox_installer' => 'Instalador',
  'menu_core_juegos_fad58de7366495db4650cfefac2fcd61' => 'Juegos',
  'menu_core_carteles_fad58de7366495db4650cfefac2fcd61' => 'Carteles',
  'setting_disable_ie_warning' => '<title>Desactivar IE Warning</title><info>Nos mostrar&#225; una advertencia para aquellos que utilizan Internet Explorer 7 o inferior. Habilitar esta opci&#243;n si no desea visualizar esta advertencia. </info>',
  'menu_core_tv_fad58de7366495db4650cfefac2fcd61' => 'TV',
  'menu_core_home_4ee1a589029a67e7f1a00990a1786f46' => 'Inicio',
  'menu_core_soporte_251d164643533a527361dbe1a7b9235d' => 'Soporte',
  'menu_privacy' => 'Privacy',
  'setting_cdn_service' => '<title>CDN Service</title><info>Select what CDN service you would like to use.</info>',
  'setting_enable_amazon_expire_urls' => '<title>Enable Amazon Expiring URLs</title><info>If this setting is enabled and "Amazon Expire Timeout" is higher than zero, all paths to images taken from Amazon S3 will include a signature set to expire.<br />
If this setting is enabled images uploaded to S3 will be set to private. If this setting is later disabled those images will remain private and they will not show on your site until you manually revert their privacy.</info>',
  'setting_amazon_s3_expire_url_timeout' => '<title>Amazon Expire Timeout</title><info>How many seconds will the urls to the images be valid for.</info>',
  'site_statistics' => 'Site Statistics',
  'setting_official_launch_of_site' => '<title>Official Launch Date (Month/Day/Year)</title><info>This is the day your site was launched. It is used to create statistics for the site to build daily averages. The format is <b>Month/Day/Year</b>.</info>',
  'total' => 'Total',
  'daily_average' => 'Daily Average',
  'building_site_stats_please_hold' => 'Building site stats. Please hold...',
  'setting_use_md5_for_file_names' => '<title>Use MD5 for File Names</title><info>If enabled the script will use an md5 hash for the file names of every uploaded file.

If you disable it extra checks will be added to try to preserve the original name of the file. If an item with the same name already exists the new one will have a number added at the end.</info>',
  'setting_no_follow_on_external_links' => '<title>Add rel="nofollow" on External Links</title><info>If enabled this feature provides a way for webmasters to tell search engines to not follow any external links.</info>',
  'setting_rackspace_username' => '<title>Rackspace Username</title><info>Enter your Rackspace username.</info>',
  'setting_rackspace_key' => '<title>Rackspace API Key</title><info>Enter your Rackspace API key.</info>',
  'setting_rackspace_container' => '<title>Rackspace Container</title><info>Enter your Rackspace container.</info>',
  'setting_rackspace_url' => '<title>Rackspace Container URL</title><info>Enter your Rackspace Container URL.</info>',
  'mobile_search' => 'Search...',
  'error' => 'Error',
  'user_setting_can_gift_points' => 'Can members of this user group gift activity points?',
  'purchase' => 'Purchase',
  'fromrow_torow_of_totalrows_results' => '{fromRow}-{toRow} of {totalRows} Results',
  'gift_sent_successfully' => 'Gift sent successfully',
  'you_are_about_to_gift_activity_points' => 'You are about to gift activity points to the user <strong>{full_name}</strong>. These points will be taken from your activity points. <br />	At this moment you have <strong>{current}</strong> points available to gift.',
  'you_only_have_one_point_available' => 'You only have one point available, do you want to give it away to {full_name}?',
  'gift_points' => 'Gift Points',
  'how_many_points_do_you_want_to_gift_away' => 'How many points do you want to gift away?',
  'unfortunately_you_do_not_have_enough_points_to_gift_away' => 'Unfortunately you do not have enough points to gift away, but you can earn more points by being more active in the site.',
  'setting_keep_files_in_server' => '<title>Keep Files In Server</title><info>After a file has been uploaded to the CDN, should we delete the original file in this server?</info>',
  'setting_google_api_key' => '<title>Google API Key</title><info>Google offers many services that require an API key (like the Places service), enter your Google API key here.

More information on how to get an API key can be found <a href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">here</a>.</info>',
); ?>