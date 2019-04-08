<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Cupcakes</title>
</head>
<body>


<form action ="index.php" method ="get">


    <div class="form-row">
        <div class="form-group col-md-6">
            <h2>Cupcake Fundraiser</h2>
            <p>Your name :</p>
            <input type="text" class="form-control" id="name" placeholder="Please input your name.">
            <br>
            <p>Cupcake flavors:</p>

            <input type="checkbox" value = "The Grasshopper" name ="flavor[]"> The Grasshopper<br>
            <input type="checkbox" value = "Whiskey Maple Bacon" name ="flavor[]"> Whiskey Maple Bacon<br>
            <input type="checkbox" value = "Carrot Walnut" name ="flavor[]"> Carrot Walnut<br>
            <input type="checkbox" value = "Salted Caramel Cupcake" name ="flavor[]"> Salted Caramel Cupcake<br>
            <input type="checkbox" value = "Red Velvet" name ="flavor[]"> Red Velvet<br>
            <input type="checkbox" value = "Lemon Drop" name ="flavor[]"> Lemon Drop<br>
            <input type="checkbox" value = "Tiramisu" name ="flavor[]"> Tiramisu<br>
            <br>
            <input class="btn btn-success" type="submit" value="Order">


        </div>
    </div>
</form>
</body>
</html>

<?php
