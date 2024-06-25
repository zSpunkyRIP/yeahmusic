<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Archivos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .file-list {
            list-style-type: none;
            padding: 0;
        }
        .file-list li {
            margin-bottom: 5px;
        }
        .file-list li a {
            text-decoration: none;
            color: #007bff;
        }
        .file-list li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Gestor de Archivos</h1>
</body>
    <div class="center-content">
        <div class="text-box">
            <?php
            function listdir($dir){
                $dirstring = "";
                $files = scandir($dir);
                foreach($files as $file) {
                    if ((pathinfo($file, PATHINFO_EXTENSION) == "php" || pathinfo($file, PATHINFO_EXTENSION) == "mp3" ||  pathinfo($file, PATHINFO_EXTENSION) == "txt") && $file != "index.php") {
                        $fileName = pathinfo($file, PATHINFO_FILENAME); // Obtiene el nombre del archivo sin la extensión
                        $dirstring .= "<li><a href='$dir/$file'>$fileName</a></li>";
                    }
                }
                return $dirstring;
            }
            echo '<h1>Sitios Webs</h1><ul>';
            echo listdir(".");
            ?>
        </div>
    </div>
</body>
</html>
