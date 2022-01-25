
Gestor de Proyectos con Loging de Usuarios



En este apartado, vamos a reutilizar el gestor de proyectos que hemos creado con anterioridad.

A dicho gestor, le vamos a implementar un sistema de login de usuarios, en donde, por una parte encontramos el usuario de administración que tendrá acceso a la totalidad de la aplicación; y por otro lado tenemos la parte de obra, a la que entraran los trabajadores y donde sólo podran hacer las tareas básicas que les sean asignadas por los administradores.

Para la creacion de los loggins, tenemos que crear 4 elementos de loging que serán:

  sesiones1_loging  (este login corresponderá con el acceso de los administradores)
  sesiones1_loging2   (este login corresponderá con el acceso de los administradores)
  sesiones1_principal (este login corresponderá con el botón de logout y un mensaje de bienvenida)
  sesiones1_logout  (este login corresponderá con la salida de la aplicación)

El elemento de mayor dificultad lo encontramos a la hora introducir los enlaces correspondientes a cada uno de los logins; es decir, que el apartado de administración se conecte con el login de administración y viceversa. Para ello modificamos las direcciones de los archivos en los apartados.  header("Location: employee/tasks.php"); * y header("Location:manager/clients.php");

Por último, en el index.php enlazamos los logins con los apartados de administración y obra con el siguiente enlace:

a href="sesiones1_login.php" target="new">Entrar como Manager</a> | <a href="sesiones1_login2 .php" target="new">Entrar como empleado</a
