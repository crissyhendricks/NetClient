<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>NetClient</title>
    <link rel="icon" type="image/png" href="<?php echo constant('URL'); ?>public/assets/earth.svg">
</head>

<body id='login'>
    <main class='login-main'>
        <div class="">
            <section class="text-center">
                <div class="login-card">
                    <h1>NetClient</h1>
                    <form action="<?php echo constant('URL') ?>login/signin" method="POST" class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        <label for="inputUser" class="sr-only">Name</label>
                        <input type="text" id="inputUser" name="inputUser" class="form-control mb-3" placeholder="Usuario" required="" autofocus="" >
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control mb-3" placeholder="Contraseña" required="">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        <p class="mt-5 mb-3 text-muted">© NetClient - Audax assessment</p>
                    </form>
                </div>
            </section>
            
        </div>
    </main>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>