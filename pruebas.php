<!DOCTYPE html>
<html>
<head>
	<title>PRUEBAS</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-primary">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>

<div>


<form style="width: 90%; background-color: #fff; padding: 10px;  border-radius: 10px; margin-left: auto; margin-right: auto; margin-top: 20px;">
	<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
	<label for="email">Ciudad:</label>
<select name="cars" class="custom-select">
    <option selected>Custom Select Menu</option>
    <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
<label for="email">FOTO:</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php 
if (isset($_POST['user'])) {
$mysqli=new mysqli('localhost','root','','hands');
if ($mysqli->connect_errno) {
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
}
$consulta_user = "SELECT * FROM usuarios WHERE Celular='$usern' LIMIT 1";
$resultado_user = mysqli_query($mysqli, $consulta_user);
$fila_user = mysqli_fetch_array($resultado_user);

//GUARDAR USER
$servername = "localhost";
        $database = "hands";
        $username = "root";
        $password = "";
$conn = mysqli_connect($servername, $username, $password, $database);


$pagos = "INSERT INTO clientes (nombre, apellido, email,pass, foto, fecha, estado) VALUES ('$escogido','$porcentaje', '$estado_pago', now(),'$codigo_escogido', '$usuario', '$foto_pago')";
if (mysqli_query($conn, $pagos)) {
      echo "Pago success";
  }
}

?>
</body>
</html>