<!DOCTYPE html>
<html>
<head>
	<title>Mi Gestor de Proyectos | phpGrid</title>
  <link rel="stylesheet" href="./css/style.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

</head>
<body>

<style>
.centered {
  background: rgb(163,160,160);
background: linear-gradient(180deg, rgba(163,160,160,1) 35%, rgba(186,177,177,0.9051995798319328) 100%);
  border-radius: 10px 10px 10px;
    margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align:center;
    padding: 30px;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}

</style>

<div class="centered">
<h1>Mi Administrador de Gestor de Proyectos</h1>

<a href="manager/clients.php" target="_new">Entrar como Manager</a> | <a href="employee/tasks.php" target="_new">Entrar como empleado</a>
</div>

<div class="footer"><strong>Fernando Lago</strong> | phpGrid &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>
