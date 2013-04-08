<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $exif_data = exif_read_data("z.jpg");
        echo '<pre>';
        echo "Model aparatu: " . @$exif_data["Make"] . " " . @$exif_data["Model"] . "\n";
        echo "Rozdzielczość obrazu: " . @$exif_data['COMPUTED']['Width'] . "x" .
        @$exif_data['COMPUTED']['Height'] . "\n";
        echo "Data utworzenia pliku: " . @$exif_data['DateTimeDigitized'] . "\n";
        echo "Rozmiar pliku: " . round((@$exif_data['FileSize'] / 1024), 2) . "KB";

        echo "<br /> <br /> <br />";
        echo "Cała zawartość funkcji: \n";
        print_r($exif_data);
        echo '</pre>';
        ?>
    </body>
</html>
