
<?php  include 'Static/controller/db.php';?>
<?php  include 'includes/header.php';?>

<table class="table-danger">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Servicio</th>
            <th>Costo</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
        </tr>
    </thead>

    <?php
        $sql = "select *from servicios";
        $exec = mysqli_query($conn, $sql);
        while ($rows=mysqli_fetch_array($exec) ) {
    ?>
            <tr>
                <th> <?php echo $rows ['id']; ?> </th>
                <th> <?php echo $rows ['nombre']; ?> </th>
                <th> <?php echo $rows ['precio'];  ?> </th>
                <th><a href="eliminar.php?id= <?php echo $rows ['id']; ?>"><img src="./Static/img/iconoEliminar.png"></a></th>

                <th><a href="actualizar.php?id= <?php echo $rows ['id']; ?>"><img src="./Static/img/iconActu.png"></a></th>
            </tr>
    <?php   }   ?>
    
</table>
<?php  include 'includes/footer.php'; ?>
