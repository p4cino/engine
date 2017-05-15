<?php
getModel('Login');
if (!empty($_POST)) {
    $login = new Login($_POST['email'], $_POST['password']);
    if($login->checkUser()){
        reload();
    }
    else{
        echo "Coś poszło nie tak";
    }
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Panel logowania</legend>
        <div>
            <label for="login">E-mail: </label>
            <input type="text" name="email"/>
        </div>
        <div>
            <label for="password">Hasło: </label>
            <input type="password" name="password"/>
        </div>
        <input type="submit" value="Zaloguj"/>
    </fieldset>
</form>