<?php
     
     echo "<p>Game Tebak Angka</p>";
     $x = rand(1,5);
    // echo "$x<br>";

     if (isset($_POST['tebak']))
        {
            $tebakan = $_POST['tebak'];
            echo "$tebakan<br>";

             if ($_POST['tebak'] == $x)
                {
                   echo "Tebakan benar!";
                } 
                elseif ($_POST['tebak'] < $x)
                {
                   echo "Tebakan hampir benar!";
                }
                else
                {
                   echo "Tebakan terlalu jauh!";
                }
        }
?>
<form method="post">
    <input type="number" name="tebak" min="1" max="5">
    <button>Tebak</button>
</form>