<div class="jumbotron jumbotron-fluid cover cover--register">
    <div class="container">
        <h1 class="display-3">Rejestracja</h1>
    </div>
</div>
<?php
getModel('Register');
if (!empty($_POST)) {
    $register = new Register($_POST['email'], $_POST['password1'], $_POST['password2'], $_POST['name'], $_POST['surname']);
    if ($register->registerUser()) {
        echo "Rejestracja powiodła się";
    } else {
        echo "Coś poszło nie tak";
    }
}
?>
<div class="container content">
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Imię</label>
            <div class="input-group Name">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="inputName" pattern=".{4,}" name="name"
                       title="Minimum 4 znaki" required>
            </div>
        </div>

        <div class="form-group">
            <label for="surname">Nazwisko</label>
            <div class="input-group Name">
                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                <input type="text" class="form-control" name="surname" pattern=".{4,}" name="name"
                       title="Minimum 4 znaki" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone">Hasło</label>
            <div class="input-group phone">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password1">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone">Powtórz hasło:</label>
            <div class="input-group phone">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password2">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Adres Email</label>
            <div class="input-group email">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>
            <input class="btn btn-outline-success my-2" type="submit" value="Wyślij"/>
    </form>
</div>





