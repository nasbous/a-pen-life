<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<main>

    <div class="form-container">
        <div class="background-image"></div>
        <div class="form">
            <form action="process_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
</main>
</body>
</html>
