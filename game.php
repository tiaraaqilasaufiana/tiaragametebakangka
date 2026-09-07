<?php
     
     echo "<h2>Game Tebak Angka</h2>";
     echo "Level: 1<br>";
     echo "Masukkan angka dari 1 sampai 50<br><br>";
     
     $x = rand(1,50);
    // echo "$x<br>";

     if (isset($_POST['tebak']))
        {
            $tebakan = $_POST['tebak'];
            echo "Current Number: $tebakan<br><br>";

             if ($_POST['tebak'] == $x)
                {
                   echo "Tebakan benar!";
                } 
                elseif ($_POST['tebak'] < $x)
                {
                   echo "Tebakan terlalu rendah!";
                }
                else
                {
                   echo "Tebakan terlalu tinggi!";
                }
        }
?>
<form method="post">
    <input type="number" name="tebak" min="1" max="50" required placeholder="Masukkan angka">
    <button>Tebak</button>
</form>