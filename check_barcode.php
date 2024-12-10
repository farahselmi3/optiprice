<?php
header('Content-Type: application/json');

// Connexion à la base de données
$host = "localhost";
$dbname = "optiprice";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données POST
    $data = json_decode(file_get_contents('php://input'), true);
    $barcode = $data['barcode'] ?? '';

    if (empty($barcode)) {
        throw new Exception('Code-barres manquant');
    }

    // Rechercher le produit
    $stmt = $pdo->prepare("SELECT * FROM products WHERE barcode = ?");
    $stmt->execute([$barcode]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        echo json_encode([
            'success' => true,
            'product' => $product
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Produit non trouvé'
        ]);
    }

} catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode([
        'success' => false,
        'error' => 'Erreur lors de la recherche: ' . $e->getMessage()
    ]);
}
?>