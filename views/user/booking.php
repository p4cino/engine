<?php
getModel('Booking');
$list = new Booking();
?>
<?php if ($list->getCinemaList() != false) { ?>

    <form action="#" method="POST">
        <select name="cinema">
            <?php
            foreach ($list->getCinemaList() as $cinema) {
                echo "<option value='" . $cinema['id'] . "'> " . $cinema['name'] . "</option>";
            }
            ?>
        </select><br/>
        <button type="submit">Click Me!</button>
    </form>

<?php } else {
    echo "brak kin";
}
?>