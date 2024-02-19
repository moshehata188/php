<?php
// User Enter his name
// User Enter his phone
// user select product  [laptop = 15000, mobile = 12000, tv = 10000, tshirt = 250]
// user select city  [cairo=0, alex = 50, other = 200]
// discount ?? -- [laptop=0.2, mobile=0.1, tv=0.05,t-shirt=0]
// Vat : 14%
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contrainer">
        <div class="row">
            <div style="" class="col-12 mt-5">
                <h1 class="text-dark text-center h1">Products</h1>
            </div>
            <div class="offset-4 col-4">
                <form action="data.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="products">Products</label>
                        <select name="product" id="" class="form-control">
                            <option value="Laptop">Laptop</option>
                            <option value="TV">TV</option>
                            <option value="Mobile">Mobile</option>
                            <option value="T-shirt">T-shirt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" id="" class="form-control">
                            <option value="Cairo">Cairo</option>
                            <option value="Alex">Alex</option>
                            <option value="others">others</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded">Buy Now!</button>
                    </div>
                </form>
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
