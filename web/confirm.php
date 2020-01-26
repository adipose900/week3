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
    <h1>Confirm your order</h1>
    <?php
    $address = sanitize($_POST["address"]);
    $city = sanitize($_POST["city"]);
    $state = sanitize($_POST["state"]);
    echo "<p>Shipping to $address, $city, $state";

    function sanitize($input)
    {
      if (isset($input)) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
      } else
        return 'error';
    }
    ?>

</body>

</html>