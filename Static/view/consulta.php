
<?php  include 'Static/controller/db.php';?>
<?php  include 'includes/header.php';?>

<table class="table-danger">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Servicio</th>
            <th>Costo</th>
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
            </tr>
    <?php   }   ?>
    
</table>
<?php  include 'includes/footer.php'; ?>