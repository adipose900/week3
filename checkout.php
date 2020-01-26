<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="07.css">
    <title>Document</title>
</head>

<body>
    <h1>
        Checkout
    </h1>
    <?php
    //$cart = $_POST["cart"];
    echo '<p>You ordered $cart</p>';
    ?>
    <form action="confirm.php" method="POST">
        <p>Please enter your address</p>
        <input name="address" type="text">
        <p>Please enter your city</p>
        <input name="city" type="text">
        <p>Please enter your state</p>
        <input name="state" type="text">
        <p></p>
        <button name="submit" id="submit" type="submit">Order</button>
    </form>
    <form action = storepage.php method = "POST">
        <button name="back" id="back" type="submit" onclick>Back</button>
    </form>
</body>

</html>