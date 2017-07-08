<div class="jumbotron jumbotron-fluid cover cover--login">
    <div class="container">
        <h1 class="display-3">Logowanie</h1>
    </div>
</div>
<?php
getModel('Login');
if (!empty($_POST)) {
    $login = new Login($_POST['email'], $_POST['password']);
    if ($login->checkUser()) {
        reload();
    } else {
        echo "Coś poszło nie tak";
    }
}
?>
<div class="container content">
    <form action="" method="POST">
        <div class="form-group">
            <label for="inputEmail">Adres Email</label>
            <div class="input-group email">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone">Hasło</label>
            <div class="input-group phone">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <input class="btn btn-outline-primary my-2" type="submit" value="Zaloguj"/>
    </form>
</div>