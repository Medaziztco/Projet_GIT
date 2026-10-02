<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$articles = ["imprimante", "tablette", "cables HDMI", "stylet"];

if (isset($articles)) {
    echo "<h1>Liste des articles</h1>";

    echo "<ul>";

    foreach ($articles as $value) {
        echo "<li>$value</li>";
    }

    echo "</ul>";
}
else {
    echo "<h1>Aucun article à afficher</h1>";
}

?>
</body>
</html>