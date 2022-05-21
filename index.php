<?php
include "./metodos.php";
include "./conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./packages/dataTables/css/1dataTablesB5.css"></link>
    <link rel="stylesheet" href="./packages/dataTables/css/2fixedHeaderB.css"></link>
    <link rel="stylesheet" href="./packages/dataTables/css/3responsiveB.css"></link>
    <link rel="stylesheet" href="./packages/css/bootstrap5.css"></link>
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Super Heroes</h1>
                <table id="tabla" class="table">
                    <thead>
                        <th>id</th>
                        <th>nombre</th>
                        <th>slug</th>
                        <th>imagen</th>
                    </thead>
                    <tbody>

                    <?php
                         $obj=new metodos();
                         $sql="SELECT * FROM informacion";
                         $datos=$obj->mostrarDatos($sql); 
                        foreach($datos as $key): 
                     ?>

<tr>
                            <td><?= $key['id'] ?></td>
                            <td><?= $key['nombre_heroe'] ?></td>
                            <td><?= $key['slug']?></td>
                            <td><?= $key['imagen'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/datatable.js"></script>
    <script src="./packages/js/bootstrap5.js"></script>
    <script src="./packages/dataTables/js/1jqueryDataTables.js"></script>
    <script src="./packages/dataTables/js/2dataTablesB5.js"></script>
    <script src="./packages/dataTables/js/3dataTablesFixedHeader.js"></script>
    <script src="./packages/dataTables/js/4dataTablesResponsive.js"></script>
    <script src="./packages/dataTables/js/5responsiveBootstrap.js"></script>
    <script src="./packages/dataTables/dataTableEsRes.js"></script>
</body>
</html>