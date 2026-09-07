<!DOCTYPE html>
<html>
<head>
    <title>Game Tebak Angka</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #e8dfd1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .game {
            width: 420px;
            background-color: #fdfaf5;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(80, 60, 40, 0.15);
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: #5c4632;
            font-size: 28px;
        }

        .subtitle {
            color: #8a7563;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .stats {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .stat {
            flex: 1;
            background-color: #f1e7d9;
            padding: 12px;
            border-radius: 10px;
        }

        .stat span {
            display: block;
            font-size: 11px;
            color: #8a7563;
            margin-bottom: 5px;
        }

        .stat b {
            color: #5c4632;
        }

        .instruction {
            background-color: #f6efe5;
            padding: 13px;
            border-radius: 10px;
            color: #6b5744;
            font-size: 14px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #cbbba0;
            border-radius: 10px;
            font-size: 15px;
            text-align: center;
            margin-bottom: 12px;
            background-color: #fffdf9;
            outline: none;
        }

        input:focus {
            border-color: #9b8064;
        }

        button {
            width: 100%;
            padding: 13px;
            background-color: #7b6048;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5c4632;
        }

        .hasil {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f1e7d9;
            border-radius: 10px;
            color: #5c4632;
        }

        .current {
            font-size: 11px;
            color: #8a7563;
            letter-spacing: 1px;
        }

        .number {
            font-size: 28px;
            font-weight: bold;
            margin: 5px;
        }

        .footer {
            margin-top: 20px;
            font-size: 11px;
            color: #a08d7b;
        }
    </style>
</head>

<body>

<div class="game">

<?php
     
     echo "<h2>Game Tebak Angka</h2>";
     echo "<div class='subtitle'>Tebak angka yang telah dipilih</div>";

     $x = rand(1,50);
    // echo "$x<br>";
?>

    <div class="stats">
        <div class="stat">
            <span>LEVEL</span>
            <b>1</b>
        </div>

        <div class="stat">
            <span>RANGE</span>
            <b>1 - 50</b>
        </div>

        <div class="stat">
            <span>KESEMPATAN</span>
            <b>5</b>
        </div>
    </div>

    <div class="instruction">
        Masukkan angka dari 1 sampai 50
    </div>

<?php

     if (isset($_POST['tebak']))
        {
            $tebakan = $_POST['tebak'];

            echo "<div class='hasil'>";
            echo "<div class='current'>CURRENT NUMBER</div>";
            echo "<div class='number'>$tebakan</div>";

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

            echo "</div>";
        }
?>

<form method="post">
    <input 
        type="number" 
        name="tebak" 
        min="1" 
        max="50" 
        required 
        placeholder="Masukkan angka..."
    >

    <button type="submit">Tebak</button>
</form>

<div class="footer">
    Game Tebak Angka
</div>

</div>

</body>
</html>