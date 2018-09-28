<link rel="stylesheet" href="style.css">
<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']=="Admin")
{
        echo "Welcam back adminas!<br><a href='logout.php'>Atsijungti</a>";
}
else
        echo "Ne ten pataikei =D";
?>