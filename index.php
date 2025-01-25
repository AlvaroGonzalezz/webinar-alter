
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
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Zinzu Chan Lee</td>
                        <td> Seoul </td>
                        <td> 17 Dec, 2022 </td>
                        <td> <strong> Mexico </strong></td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>

</body>

</html>
