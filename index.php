<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Cupcakes</title>
</head>
<body>
<div class="form-row">
    <div class="form-group col-md-6">
        <h2>Cupcake Fundraiser</h2>
        <form action="index.php" method="post">

            <label for="validationCustom03"><p>Your name: <p></p></label>

            <input type="text" class="form-control" name ="name" id="name" placeholder="Please input your name." required>

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
            <input class="btn btn-success" type="submit" name="submit" Value="Order"/>
            <br>

        </form>
        <?php

        $name = $_POST['name'];
        if(isset($_POST['submit'])){
            if(!empty($_POST['flavor'])) {
                echo "<br>Thank you,  ". $_POST['name']. " ,for your order!<br />";
                $count = count($_POST['flavor']);
                $total = $count * 3.50;

                echo "<br>Order Summary: ";
                foreach($_POST['flavor'] as $selected) {
                    echo "<p><li>".$selected ."</p>";
                }
                echo "Order Total: $".$total." ";
            }
            else{
                echo "<b>Please at least one flavor.</b>";
            }
        }
        ?>

    </div>
</div>

</body>
</html>

