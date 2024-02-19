<?php

if(!$_POST){
    echo "Error 405 Method Mot Allowed";die;
}
/*
Name: Mohamed
phone: 01011415
city: Alex
Delevery tax: 50 EGP
Product: Laptop
Price: 15000 EGP
price after Vat: 17100 EGP
Discount Percentage: 20 %
Discount Value: 3420 EGP
price after discount: 13680 EGP
Total Price: 13730 EGP
*/

$name = $_POST['name'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$city = $_POST['city'];

define('vat',0.14);
switch ($city) {
    case 'Cairo':
        $delivery = 0;
        break;
    case 'Alex':
        $delivery = 50;
        break;
    default:
        $delivery = 200;
        break;
}

switch ($product) {
    case 'Laptop':
        $price = 15000;
        $discount = 0.2;
        break;
    case 'Mobile':
        $price = 12000;
        $discount = 0.1;
        break;
    case 'TV':
        $price = 10000;
        $discount = 0.05;
        break;
    default:
        $price = 250;
        $discount = 0;
        break;
}
$vat = $price * vat;
$priceAfterVat = $price + $vat;
$discountValue = $priceAfterVat * $discount;
$priceAfterDiscount = $priceAfterVat - $discountValue; 
$totalPrice = $priceAfterDiscount + $delivery;
?>

<!doctype html>
<html lang="en">

<head>
    <title>Invoice</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-success text-center">Invoice</h1>
            </div>
            <div class="col-4 offset-4">
                <ul class="alert alert-success">
                    <li>Name: <?= $name ?></li>
                    <li>Phone: <?= $phone ?></li>
                    <li>City: <?= $city ?></li>
                    <li>Delivery Tax: <?= $delivery ?> <b>EGP</b></li>
                    <li>Product: <?= $product ?></li>
                    <li>Price: <?= $price;?> <b>EGP</b></li>
                    <li>Vat: <?= vat * 100 ;?> <b>%</b></li>
                    <li>price after Vat: <?= $priceAfterVat; ?> <b>EGP</b></li>
                    <li>Discount Percentage: <?= $discount * 100 ;?> <b>%</b></li>
                    <li>Discount Value: <?= $discountValue;?> <b>EGP</b></li>
                    <li>price after discount: <?= $priceAfterDiscount;?> <b>EGP</b></li>
                    <li>Total Price: <?= $totalPrice;?> <b>EGP</b></li>
                </ul>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
