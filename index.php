<?php
include("conexion.php");
$sql = "SELECT * FROM QKf_wpforms_db";
$request = mysqli_query($conexion, $sql);

if (!$request) {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/icons.png" type="image/x-icon">
    <title>Registros - Webinar</title>
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1 class="title-text">Registros - Webinar Alter Business</h1>
            <img src="images/icons.png" alt="Logo" class="logo-home">
            <div class="input-group">
                <input type="search" placeholder="Buscar...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Exportar como: &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Correo electrónico <span class="icon-arrow">&UpArrow;</span></th>
                        <th> País <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha de registro <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($request) {
                        // Recorre los resultados
                        while ($fila = mysqli_fetch_assoc($request)) {
                            $datos = unserialize($fila['form_value']); 
                            echo "<tr>";
                            echo "<td>" . $fila['form_id'] . "</td>";
                            echo "<td>" . ($datos['Nombre'] ?? 'N/A') . "</td>"; 
                            echo "<td>" . ($datos['Apellido'] ?? 'N/A') . "</td>"; 
                            echo "<td>" . ($datos['Correo'] ?? 'N/A') . "</td>"; 
                            echo "<td>" . ($datos['País'] ?? 'N/A') . "</td>"; 

                            echo "<td>" . $fila['form_date'] . "</td>";
                            echo "</tr>";
                        }
                    }

                    ?>


                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>

</body>

</html>