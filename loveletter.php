<?php
$name = "My Love"; // You can change the name
$date = date("F d, Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Love Letter</title>
    <style>
        body{
            background: #ffe6e6;
            font-family: Arial, sans-serif;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .letter{
            background:white;
            padding:40px;
            width:500px;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
            line-height:1.6;
        }
        h1{
            text-align:center;
            color:#d6336c;
        }
        .date{
            text-align:right;
            font-size:14px;
            color:gray;
        }
        .signature{
            margin-top:30px;
            text-align:right;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="letter">
    <div class="date"><?php echo $date; ?></div>

    <h1>Love Letter</h1>

    <p>Dear <?php echo $name; ?>,</p>

    <p>
    From the moment you came into my life, everything felt brighter and more meaningful. 
    Your smile gives me peace, and your presence makes every day special.
    </p>

    <p>
    I may not always find the perfect words, but I want you to know that 
    you mean so much to me. Thank you for being my happiness, my comfort,
    and my inspiration.
    </p>

    <p>
    No matter what happens, I will always appreciate every moment we share.
    You are one of the best things that ever happened to me.
    </p>

    <div class="signature">
        With Love,<br>
        <?php echo "Your Forever"; ?>
    </div>
</div>

</body>
</html>