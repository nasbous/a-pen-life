<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C'est un succès !</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<main>
    <div class="form-container">
        <div class="background-image"></div>
        <div class="form-success">
            <h2 class='success-message'>Merci pour votre message</h2>
            <p>Je l'ai bien reçu :</p>
            <ul>
                <li><strong>Nom :</strong> <?php echo htmlspecialchars($_GET['name']); ?></li>
                <li><strong>Email :</strong> <?php echo htmlspecialchars($_GET['email']); ?></li>
                <li><strong>Message :</strong> <?php echo htmlspecialchars($_GET['message']); ?></li>
            </ul>
            <form action="index.html">
    <input type="submit" value="RETOUR">
</form>
        </div>
    </div>
</main>

</body>
</html>
