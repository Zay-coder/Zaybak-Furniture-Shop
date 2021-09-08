<?php

include('header.php');

if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');

}
?>

<body>

<!--first slider-->
<div class="container-fluid p-0">
    <div class="site-slider">
        <div class="slider-one">
            <div>
                <img src="images/item-1.jpg" class="img-fluid" alt="Banner1">
            </div>
            <div>
                <img src="images/item-2.jpg" class="img-fluid" alt="Banner2">
            </div>
            <div>
                <img src="images/item-3.jpg" class="img-fluid" alt="Banner3">
            </div>
        </div>
        <div class="slider-btn">
            <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
            <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
        </div>
    </div>
</div>
<script>
    // first slider
    $('.slider-one')
        .not('.slick-initialized')
        .slick({
            autoplay:true,
            autoplaySpeed:3000,
            dots:true,
            prevArrow:'.site-slider .slider-btn .prev',
            nextArrow:'.site-slider .slider-btn .next'
        });


    // second slider
    $('.slider-two')
        .not('.slick-initialized')
        .slick({
            prevArrow:'.site-slider-two .prev',
            nextArrow:'.site-slider-two .next',
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplaySpeed: 3000
        });

</script>

<!--/first slider-->
<h2 class="bg-cyan gugi text-white" style="margin-top: 15px">Available Products :</h2>
<!--products-->
<div class="container-fluid my-5">
    <div class="" id="pagination">

    </div>
    <div class="col-md-12">
        <div class="row show_data">

        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function(){

        load_data();
        function load_data(page){


            $.ajax({
                url: "ajax/load_data.php",
                method: "POST",
                data:{page:page},
                dataType:"JSON",
                success:function(data){
                    $(".show_data").html(data.output);
                    $("#pagination").html(data.pagination);
                }
            });
        }

        $(document).on("click", ".pagination a",function(event){
            event.preventDefault();
            var id  = $(this).attr("id");
            load_data(id);
        });




        function show_mycart(){
            $.ajax({
                url: "ajax/show_mycart.php",
                method:"POST",
                dataType:"JSON",
                success:function(data){
                    $("#cart").text(data.da);
                }
            });
        }

    });






    $(document).on("click",".add_cart", function(event){
        event.preventDefault();
        var id = $(this).attr("id");
        var name = $("#name"+id+"").val();
        var price = $("#price"+id+"").val();
        var quantity = $("#quantity"+id+"").val();
        var action = "add";


        $.ajax({
            url: "ajax/cart_action.php",
            method:"POST",
            dataType:"JSON",
            data: {id:id,name:name,price:price,quantity:quantity,action:action},
            success:function(data){

            }
        });


    });


</script>
<!--/products-->
<h2 class="bg-cyan gugi text-white" style="margin-top: 15px">Coming Soon :</h2>
<!--second slider-->
<div class="container-fluid">
    <div class="site-slider-two px-md-4">
        <div class="row slider-two text-center">
            <div class="col-md-2 product pt-md-5 pt-4">
                <img src="images/id-9-cat-1.jpg" alt="Product 1">
                <span class="border site-btn btn-span">SOFA & CHAIRS</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
                <img src="images/id-9-cat-2.jpg" alt="Product 2">
                <span class="border site-btn btn-span">FURNITURE & DECOR</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
                <img src="images/id-9-cat-3.jpg" alt="Product 3">
                <span class="border site-btn btn-span">LAMP & LIGHTING</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
                <img src="images/id-9-cat-4.jpg" alt="Product 4">
                <span class="border site-btn btn-span">SOUND & LIFE</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
                <img src="images/id-9-cat-5.jpg" alt="Product 5">
                <span class="border site-btn btn-span">APPLIANCES</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
                <img src="images/id-9-cat-6.jpg" alt="Product 6">
                <span class="border site-btn btn-span">DESKS & STANDS</span>
            </div>
        </div>
        <div class="slider-btn">
            <span class="prev position-top"><i class="fas fa-chevron-left fa-2x text-secondary"></i></span>
            <span class="next position-top right-0"><i
                        class="fas fa-chevron-right fa-2x text-secondary"></i></span>
        </div>
    </div>
</div>
<script>
    $('.slider-two')
        .not('.slick-initialized')
        .slick({
            prevArrow:'.site-slider-two .prev',
            nextArrow:'.site-slider-two .next',
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplaySpeed: 3000
        });


</script>


<!--/second slider-->
<h2 class="bg-cyan gugi text-white" style="margin-top: 15px">Meet the Team :</h2>
<!--the team-->
<div class="container">
    <di class="row clearfix">
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="images/charbeldaoud.png" alt="CEO" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-instagram"></i></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Charbel Daoud</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">Owner</li>
                            <li class="new_price">CEO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="images/eliaschamoun.png" alt="Manager" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Elias chamoun</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">Manager</li>
                            <li class="new_price">Team Leader</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="images/alexandra.png" alt="HR" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Alexandra Kodjabachi</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">HR</li>
                            <li class="new_price">Quality Insurance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="images/doggo.jpg" alt="dog" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Doggo</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">Lives in the shop</li>
                            <li class="new_price">Good boy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
<!--/the team-->

</body>
<footer>
    <div class="container-fluid">
        <div class="row bg-cyan">
            <div class="col-md-6 col-xs-6 footer-info">
                <span>Powered by <b>Zay-coder</b></span>
            </div>
            <div class="col-md-6 col-xs-6 footer-info">
                <a href="https://www.facebook.com" class=" float-right"><img
                            src="images/fb.png" style="margin-left: 8px"></a>
                <a href="https://www.twitter.com" class=" float-right"><img
                            src="images/twitter.png"
                            style="margin-left: 8px"></a> <a href="https://www.instagram.com" class=" float-right"><img
                            src="images/insta.png"
                            style="margin-left: 8px"></a> <a href="https://www.linkedin.com" class=" float-right"><img
                            src="images/in.png"
                            style="margin-left: 8px"></a>
            </div>
        </div>
</footer>
</html>



