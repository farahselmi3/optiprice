<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - OptiPrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            color: #fff;
        }

        .container {
            width: 90%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .container button {
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            background-color: #6a11cb;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .container button:hover {
            background-color: #2575fc;
        }

        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        .back-button {
            margin-top: 15px;
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            background-color: #6a11cb;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }

        .back-button:hover {
            background-color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form id="login-form">
            <input type="text" id="login" placeholder="Login" required>
            <input type="password" id="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        <div class="error" id="error-message"></div>
    </div>
    <a href="compte%20.php" class="back-button">⬅ Retour</a>

    <script>
        const form = document.getElementById('login-form');
        const loginInput = document.getElementById('login');
        const passwordInput = document.getElementById('password');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Empêche la soumission du formulaire

            // Réinitialiser le message d'erreur
            errorMessage.textContent = '';

            // Vérifier les champs
            if (!loginInput.value.trim()) {
                errorMessage.textContent = 'Veuillez saisir votre login.';
                return;
            }

            if (!passwordInput.value.trim()) {
                errorMessage.textContent = 'Veuillez saisir votre mot de passe.';
                return;
            }

            // Si tout est valide
            alert('Connexion réussie !');
            // Vous pouvez rediriger vers une autre page ici
        });
    </script>
</body>
<?php
// Paramètres de connexion à la base de données
$host = "localhost"; // Hôte
$dbname = "OptiPrice"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

</html>