<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Compte - OptiPrice</title>
    <!-- Add to head -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="shared-styles.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Créer un compte</h1>
    </div>
    <form style="display: grid; gap: 1rem; margin-top: 1rem;">
        <input class="input" type="text" placeholder="Nom complet">
        <input class="input" type="email" placeholder="Email">
        <input class="input" type="password" placeholder="Mot de passe">
        <button type="submit" class="button">
            <i class="fas fa-user-plus"></i>
            S'inscrire
        </button>
        <a href="login.php" class="button">
            <i class="fas fa-arrow-left"></i>
            Retour
        </a>
    </form>
</div>
</body>
<?php
// Connexion à la base de données
$host = "localhost"; // Adresse de l'hôte
$username = "root";  // Nom d'utilisateur MySQL
$password = "";      // Mot de passe MySQL
$dbname = "user_registration"; // Nom de la base de données

// Créer une connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validation des mots de passe
    if ($password !== $confirm_password) {
        echo "Les mots de passe ne correspondent pas.";
    } else {
        // Hacher le mot de passe pour plus de sécurité
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Préparer et exécuter la requête d'insertion
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
</html>
