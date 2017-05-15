<?php
getModel('Register');
if (!empty($_POST)) {
    $register = new Register($_POST['email'], $_POST['password1'], $_POST['password2'], $_POST['name'], $_POST['surname']);
    if($register->registerUser()){
        echo "Rejestracja powiodła się";
    }
    else{
        echo "Coś poszło nie tak";
    }
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Rejestracja</legend>
        <div>
            <label for="name">Imie: </label><br/>
            <input pattern=".{4,}" name="name" required title="Minimum 4 znaki">
        </div>
        <div>
            <label for="surname">Nazwisko: </label><br/>
            <input type="text" name="surname"/>
        </div>
        <div>
            <label for="password">Hasło: </label><br/>
            <input type="password" name="password1"/>
        </div>
        <div>
            <label for="password">Powtórz hasło: </label><br/>
            <input type="password" name="password2"/>
        </div>
        <div>
            <label for="email">Email: </label><br/>
            <input type="text" name="email"/>
        </div>
        <input type="submit" value="Wyślij"/>
    </fieldset>
</form>
