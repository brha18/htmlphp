<h3>5.	Skapa en undersida som kan förstöra sessionen.</h3>
<?php

// echo"Incoming<br>";
// var_dump($_SESSION);

$status=session_destroy();
if ($status = true) {
    echo "<br>Sessionen nere<br>";
}
// echo"<br>Outgoinging<br>";
// var_dump($_SESSION);
?>
