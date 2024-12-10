
<?php
// Informations de connexion à la base de données
$host = "localhost";  // Hôte MySQL
$dbname = "OptiPrice";  // Nom de la base de données
$username = "root";  // Nom d'utilisateur de la base de données
$password = "";  // Mot de passe (si vide, c'est par défaut pour localhost)

try {
    // Créer une connexion PDO à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Gestion des erreurs
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
