<?php
// Einstiegspunkt - index.php

// Pfad zur index.html-Datei
$htmlFilePath = 'index.html';

// Überprüfen, ob die index.html existiert
if (file_exists($htmlFilePath)) {
    // Inhalte der index.html-Datei lesen
    $htmlContent = file_get_contents($htmlFilePath);

    // HTTP-Header für Content-Type setzen
    header('Content-Type: text/html');

    // Ausgabe des HTML-Inhalts
    echo $htmlContent;
} else {
    // Fehlermeldung anzeigen, wenn die index.html nicht gefunden wurde
    echo 'Die index.html-Datei konnte nicht gefunden werden.';
}
?>
