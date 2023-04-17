<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
<h1>BadWords</h1>
<p>inserisci un testo e una parola da censurare</p>
<form action="resultPage.php" method="GET">
    <input type="text" name="text" placeholder="Inserisci un testo" style="width: 600px; margin-bottom: 1em;" required>

    <br>

    <input type="text" name="word" placeholder="Inserisci una parola" required>
    

    <input type="submit">
</form>

    
</body>
</html>