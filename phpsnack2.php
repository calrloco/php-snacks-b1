<?php
// function per controllo dati che richiamo al submit 
function checkdata($nome, $email, $age)
{
    if (
        strpos($email, '@') !== false
        && strpos($email, '.') !== false
        && strlen($nome) >= 3
        && is_numeric($nome) == false
        && is_numeric($age)
    ) {
        echo '<div class="alert alert-success" role="alert">Accesso Garantito</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Dati Sbagliati accesso negato</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 offset-4">
                <form method="GET">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nome</label>
                        <input name="nome" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="mail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else &#128514;</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Eta</label>
                        <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Inserire un numero</small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="alert alert-light col-6 offset-3 text-center" role="alert">
                    <!-- controllo e accesso 
                    al press di submit che richima checkdata -->
                    <?php
                    // uso isset perche submit non deve restituire un valore
                    if (isset($_GET['submit'])) {
                        $name = $_GET['nome'];
                        $mail = $_GET['mail'];
                        $eta = $_GET['eta'];
                        checkdata($name, $mail, $eta);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>