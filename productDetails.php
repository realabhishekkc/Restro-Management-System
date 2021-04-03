<?php
    session_start();
    $title = "Products";
    include_once('include/header.php');
    require ('classes/product.class.1.php');
    $product = new Product();
    $productID = $_GET['id'];
    $details = $product->selectProduct($productID);
?>
<div class="inner-products">
    <div class="overlay-inner">
    </div>
</div>
<section>
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3">View Menu</h3>                
            </div>
        </div>
    </section>
    <!-- products -->
    <section>
    <style>
        input[type=text] {
            width: 250px;
            display: block;
            transition: width 0.4s ease-in-out;
            border-radius: 32px/50px;
            border-color: #007bff;
        }
        input#search {
            margin: 0 auto;
        }
        input[type=text]:focus {
            width: 100%;
        }
        #here{
            width: 100%;
            height: auto;
            border: 1px solid grey;
            display: none;
        }
        .card{
            margin-right: 0 !important;
            border-radius: 0;
            border: none;
            background-color: #f7f7f7;
        }
        .pdd-side{
            margin: 30px 0 30px !important;
            padding: 0 !important;
        }
    </style>
    
        <div class="container">
                <script>
                    $(document).ready(function(e){
                        $("#search").keyup(function(){
                            $("#here").show();
                            var x = $(this).val();
                            $.ajax({
                                type: 'GET',
                                url: 'fetch.php',
                                data: 'query='+x,
                                success: function(data)
                                {
                                    $("#here").html(data);
                                }
                                
                            });
                        });
                    });
                </script>
                <div class="search">
                    <input class="form-control" type="text" name="search" placeholder="Search your product here..." id="search">
                </div>
                <div id="here"> </div>

            <div class="row">
                <div class="col-lg-6 mb-4 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto">
                        <img class="card-img-top" style="height:500px; width: auto; border-radius: 0;" src="images/product-images/<?php echo $details[0]['p_image']; ?>" alt="Image Card">
                </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $details[0]['p_name']; ?></h5>
                            <p class="card-text"><?php echo $details[0]['p_description']; ?></p>
                            <p class="card-text text-justify">Price: Rs. <?php echo $details[0]['p_price']; ?></p>
                            <tr>
                            <td><p class="card-text text-justify">Quantity: <input class='text-center iquantity' type='number' placeholder='1' value='$value[Quantity]' min='1' max='10'></td>
                            </tr>
                            <a href="product-confirm.php?id=<?php echo $details[0]['p_id']; ?>" class="btn btn-primary float-right" style="color: #fff !important;"><i class="fa fa-shopping-cart"></i> Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

        var iprice=document.getElementsById('$details[0]['p_price']');
        var iquantity=document.getElementsByClassName('iquantity');

        function subTotal()
        {
            for(i=0;i<i)
        }

        </script>
    </section>
    <!-- Products End -->
</section>
<?php include_once('include/footer.php');?>
</html>