<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Add User</title>
</head>
<body>
    <pre>
    <?php
    echo $_SERVER['REQUEST_METHOD']."\n";

    echo "post"."\n";
    print_r($_POST);
    
    echo "get"."\n";
    print_r($_GET);

    
    ?></pre>
    <header>
        <h1>USM</h1>
    </header>


    <div class="container">
        <form action="add_user_form.php" method="POST">

            <div class="form-group">
                <label for="fName" class="form-label">Nome</label>
                <input id="fName" name="firstName" class="form-control" type="text">
                <div class="invalid-feedback">
                    Inserire il Nome.
                </div>
            </div>
            <div class="form-group">
                <label for="lName" class="form-label">Cognome</label>
                <input id="lName" name="lastName" class="form-control" type="text">
                <div class="invalid-feedback">
                    Inserire il Cognome.
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" class="form-control" type="text">
                <div class="invalid-feedback">
                    Inserire un'email.
                </div>
            </div>
            <div class="form-group">
                <label for="bday" class="form-label">Data di Nascita</label>
                <input id="bday" name="birthday" class="form-control" type="date">
                <div class="invalid-feedback">
                    Inserire una data valida.
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Aggiungi</button>
        </form>

    </div>




</body>
</html>