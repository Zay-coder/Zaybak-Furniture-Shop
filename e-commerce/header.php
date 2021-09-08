<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>E-COMMERCE WEBSITE</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-cyan">
    <h1 class="text-white gugi">Zaybak Furniture Store <i class="fas fa-chair"></i><i class="fas fa-couch"><i class="fas fa-splotch"></i></i></h1>
    <div class="mr-auto"></div>
    <ul class="text-white navbar-nav">
        <li class="nav-item"
        <div >
            <?php if (isset($_SESSION['user'])) : ?>
                <strong class="gugi"><?php echo $_SESSION['user']['username']; ?></strong>

                <small >
                    <i style="color: black;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    <br>
                    <a href="welcome.php?logout='1'" style="color:black">logout</a>

                </small>

            <?php endif ?>


        </div>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="cart.php">Cart<span id="cart" class="badge badge-warning mx-2"></span></a>
        </li>
        <?php if (isAdmin()) : ?>
        <li class="nav-item">
            <a class="nav-link text-white" href="add_new_product.php">Add New Product</a>
        </li>
        <?php endif; ?>


    </ul>

</nav>

<script type="text/javascript">
    $(document).ready(function () {

        show_mycart();

        function show_mycart() {
            $.ajax({
                url: "ajax/show_mycart.php",
                method: "POST",
                dataType: "JSON",
                success: function (data) {
                    $(".get_cart").html(data.out);
                    $("#cart").text(data.da);
                }
            });
        }

        setInterval(show_mycart, 1000);

    });
</script>

</body>
</html>