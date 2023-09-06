<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <title>Php-Badwords</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Connettiti!</h1>
        <!-- con action indico il secondo file, con method se si tratta di GET o POST -->
        <form action="process.php" method="post" class="row g-3 justify-content-center">
            <div class="card p-4" style="width: 22rem" ;>
                <div class="col-12">
                    <label for="mail" class="form-label">Email</label>
                    <!-- con il name rendo richiamabile il contenuto della mail al secondo file -->
                    <input type="email" name="mail" class="form-control" id="mail">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <!-- con il name rendo richiamabile il contenuto della password al secondo file -->
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="col-12 pt-4">
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>