<?php
getModel('CinemaProfile');
$profile = new CinemaProfile(1);

foreach ($profile->getAllMovies() as $index){
    print_r($index);
    echo "<br /><br /><br /><br />";
}
?>
<br/>
