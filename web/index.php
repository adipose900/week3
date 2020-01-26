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
    <?php
    session_start();
    $_SESSION["water"] = 0;
    $_SESSION["pop"] = 0;
    $_SESSION["milk"] = 0;
    ?>
    <div id="store">
        <h1>
            Please click on all the drinks you want to buy
        </h1>
        <form action="checkout.php" method="POST">
            <input type="button" value="water" onclick="addWater()">
            <input type="button" value="pop" onclick="addPop()">
            <input type="button" value="milk" onclick="addMilk()">
            <p></p>
            <input type="button" value="Cart" onclick="cart()" method="POST">


            <button name="submit" id="submit" onclick = "cart()" type="submit">Checkout</button>
        </form>
    </div>
    <div hidden id="cart">
        <h1>Cart</h1>
        <div id="stuff"></div>

    </div>

    <input hidden id="back" type="button" value="Back" onclick="back()" method="POST">
    <script>
        $water = 0;
        $milk = 0;
        $pop = 0;

        function back() {
            document.getElementById("store").style.display = "block";
            document.getElementById("cart").style.display = "none";
            document.getElementById("back").style.display = "none";
        }

        function cart() {
            document.getElementById("cart").style.display = "block";
            document.getElementById("back").style.display = "block";
            document.getElementById("store").style.display = "none";

            document.getElementById("cart").innerHTML = $water + " waters, " + $pop + " pops, " + $milk + " milks.";
        }

        function addWater() {
            <?php
            $_SESSION["water"]++;
            ?>
            $water++;
            console.log($water);
        }

        function addMilk() {
            $milk++;
            <?php
            $_SESSION["milk"]++;
            ?>
        }

        function addPop() {
            $pop++;
            <?php
            $_SESSION["pop"]++;
            ?>
        }
    </script>
</body>

</html>
