<?php
    require_once 'conexion/conexion.php';
    $conn = Database::connect();
    
    $sql = "SELECT * FROM documentos";
    $res = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Subir documentos al servidor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Subir al servidor</h2>
                    <form action="logica/procesar.php" method="post" enctype="multipart/form-data">
                        <label for=""> Seleccione imagen:</label>
                        <input type="file" name="imagen" id=""><br>
                        <label for=""> Seleccione documento:</label>
                        <input type="file" name="documento" id=""><br>
                        <!-- boton de enviar -->
                        <input type="submit" value="Enviar" name="Enviar" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Datos</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- titulos de la tabla -->
                            <th scope="col">ID</th>
                            <th scope="col">Nombre Imagen</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_object($res)){
                            $id = $row->id;
                            $nomimg = $row->nombre_img;
                            $doc = $row->nombre_doc;
                            ?>
                        <tr>
                            <th><?php echo $id; ?></th>
                            <td>
                                <a href="<?php echo 'img/'.$nomimg; ?>"><i class="icon-picture"></i></a>
                                <a href="logica/delete.php?idimg=<?php echo $id; ?>"><i class="icon-trash-empty"></i></a>
                            </td>
                            <td>
                                <a href="<?php echo 'documentos/'.$doc; ?>"><i class="icon-doc-text"></i></a>
                                <a href="logica/delete.php?iddoc=<?php echo $id; ?>"><i class="icon-trash-empty"></i></a>
                            </td>
                            <td>
                                <a href="logica/delete.php?id=<?php echo $id; ?>"><i class="icon-trash-empty"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>