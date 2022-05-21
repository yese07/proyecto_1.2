<?php include("template/cabecera.php"); ?>
<?php
include ("administrador/config/bd.php");
$sentenciaSQL= "SELECT * FROM producto";
$resultado = mysqli_query($mysqli, $sentenciaSQL);

?>
        
<?php while($producto=mysqli_fetch_assoc($resultado)){?>
<div class="col-md-3">
    <div class="card">
    <img class="card-img-top" src="./img/<?php echo $producto ['imagen']; ?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $producto ['nombre']; ?></h4>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
    </div>
</div>
</div>

<?php  } ?>

<?php include("template/pie.php"); ?>