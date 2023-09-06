<!DOCTYPE html>
<html>

<head>
    <title>I tuoi dati</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        // Se i dati sono stati importati corettamente:
        if (isset($_POST['mail']) && isset($_POST['password'])) {
            // Il contenuto di mail e password viene importato nelle relative variabili
            $mail = $_POST['mail'];
            $password = $_POST['password'];

            // Stampo la mail e il numero dei suoi caratteri
            echo "<h2>La tua Mail:</h2>";
            echo "<p>$mail</p>";
            echo "<p>Lunghezza: " . strlen($mail) . " caratteri</p>";

            // Qualsiasi sia la password visualizzerò solo " *** "
            $password_censured = '***';

            // Stampa la password censurata e il numero dei suoi caratteri
            echo "<h2>La tua password:</h2>";
            echo "<p>$password_censured</p>";
            echo "<p>Lunghezza: " . strlen($password) . " caratteri</p>";
        } else {
            // Altrimenti stampa questo messaggio di errore
            echo "<p>Errore: Assicurati di aver inserito sia la mail che la password.</p>";
        }
        ?>
    </div>
</body>

</html>