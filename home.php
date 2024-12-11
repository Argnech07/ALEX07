<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
 <meta charset="utf-8">
<html>
    <head>

        <title>pedidos</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
    <?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
</div>
</div>
</div>
    </body>
  <?php
$host="127.0.0.1:3306";
$user="u306725765_nech";
$password="Argento07";
$db="u306725765_nech";
$con = new mysqli($host,$user,$password,$db);

    $enlace = mysqli_connect($host, $user, $password, $bd);

    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
?>
       
                        
                        
                
                
            </table>
        </div>
    </div>
    <script src="formulario.js"></script>
</body>
</html>
<?php
    if(isset($_POST['dem'])){
        $nombre =$_POST["nombre"];
        $domicilio=$_POST["domicilio"];
        $telefono=$_POST["telefono"];
        $pedido=$_POST["pedido"];
        $id= rand (1,99);

        $insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                    '$domicilio',
                                                    '$telefono',
                                                    '$pedido',
                                                    '$id')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
        }
    }
?>
<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tareas WHERE id = $id";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("Fallo el query");
        }
        $_SESSION['mensaje'] = 'La tarea se ha eliminado';
        $_SESSION['tipo_mensaje'] = 'danger';
        header("Location: index.php");
    }

?>
<head>
<meta charset="utf-8">
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #191919;
    color: white;
}
.main-wrapper{
    width:98%;
    
    background:#E0E4E5;
    border:1px solid #292929;
    padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Informacion de pedidos </h1>
<br><br>

<?php
    include("function.php");
?>
<table border="1" width="100%">
    <tr>
        <th width="20%">id</th>
        <th width="20%">Nombres</th>
        <th width="20%">domicilio</th>
        <th width="20%">telefono</th>
        <th width="20%">pedido</th>
        <th width="20%">eliminar</th>

    </tr>
<?php 
    $sql = "select * from datos";
    $result = db_query($sql);
    while($row = mysqli_fetch_object($result)){
    ?>
    <tr>
        <td><?php echo $row->id;?></td>
        <td><?php echo $row->nombre;?></td>
        <td><?php echo $row->domicilio;?></td>
        <td><?php echo $row->telefono;?></td>
        <td><?php echo $row->pedido;?></td>
        <td>
   <a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
    </tr>
    <?php } ?>
</table>
</div>
</body>
</html>