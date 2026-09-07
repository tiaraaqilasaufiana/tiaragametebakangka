<!DOCTYPE html>
<html>
<head>
    <title>Game Tebak Angka</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 100px;
        }

        .game {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
        }

        input {
            padding: 10px;
            width: 200px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="game">

<?php
     
     echo "<h2>Game Tebak Angka</h2>";
     echo "Level: 1<br>";
     echo "Masukkan angka dari 1 sampai 50<br>";
     echo "Kesempatan: 5 kali<br><br>";
     
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

</div>

</body>
</html>