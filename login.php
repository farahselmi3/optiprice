<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OptiPrice - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="shared-styles.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #8B5CF6 0%, #6366F1 100%);
        }
        
        .container {
            background: rgba(255, 255, 255, 0.95);
            max-width: 400px;
            text-align: center;
            padding: 2rem;
        }
        
        .logo {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #8B5CF6, #6366F1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 2rem;
        }
        
        .button-group {
            display: grid;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .button.secondary {
            background: var(--background);
            color: var(--text-primary);
            border: 2px solid var(--border);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="logo">OptiPrice</h1>
        <div class="button-group">
            <a href="compte%20.php" class="button">
                <i class="fas fa-user"></i>
                Se connecter
            </a>
            <a href="app.html" class="button secondary">
                <i class="fas fa-rocket"></i>
                Essayer gratuitement
            </a>
        </div>
    </div>
</body>
</html>
