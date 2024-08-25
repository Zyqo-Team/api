<?php
header('Content-Type: application/json');

// Liste der erlaubten IP-Adressen
$allowedIPs = [
    "123.45.67.89",
    "51.195.61.62"
];

// IP-Adresse aus der URL abrufen
$serverIp = isset($_GET['ip']) ? $_GET['ip'] : '';

// Überprüfen, ob die IP-Adresse erlaubt ist
$isAllowed = in_array($serverIp, $allowedIPs);

// JSON-Antwort erstellen
$response = [
    "Allowed" => $isAllowed,
    "ReceivedIp" => $serverIp
];

// JSON-Antwort zurückgeben
echo json_encode($response);
?>