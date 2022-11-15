<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-The Online clothing Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


    
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <a href="carts.php"> <img src="i4.png" width="30px" height="30px"></a>
            <!-- <img src="i4.png" width="30px" height="30px"> -->
            <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">

       
    </div>
</div>

</div>
    
    <div class="small-container">
        <div class="row row-2">
<h2>All Products</h2>
<select>
    <option>Default Shorting</option>
    <option>Short by price</option>
    <option>Short by popularity</option>
    <option>Short by rating</option>
    <option>Short by sale</option>
</select>

        </div>
        <div class="row">
            <form action="cart.php" method="POST">
            <div class="col-4">
                <img src="img/b1.webp">
                <h4>Black Oversized T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o" ></i>
                </div>
               <input type="hidden" name="Item_Name" value="Black Oversized T-shirt">
               <input type="hidden" name="Price" value="$50">
               <p>$50</p>
               <button name="add"class=" btn btn-success ">ADD CART</button>
            </div>

            </form>

            <form action="cart.php" method="POST">
            <div class="col-4">
                <img src="img/c1.jpg">
                <h4>High Waisted cargo pants</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <input type="hidden" name="Item_Name" value="High Waisted cargo pants">
               <input type="hidden" name="Price" value="3050">
            </div>
            <button name="add"class=" btn btn-success ">ADD CART</button>
            </form>

            <form action="cart.php" method="POST">
            <div class="col-4">
                <img src="img/c2.jpg">
                <h4>New woolean shirts for men</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <input type="hidden" name="Item_Name" value=">New woolean shirts for men">
               <input type="hidden" name="Price" value="300">
            </div>
            <button name="add"class=" btn btn-success ">ADD CART</button>
            </form>
            <form action="cart.php" method="POST">
            <div class="col-4">
                <img src="img/k.jpg">
                <h4>Kurthaa </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o" ></i>
                </div>
                <input type="hidden" name="Item_Name" value=">kurthaaa">
               <input type="hidden" name="Price" value="2500">
            </div> 
            <button name="add"class=" btn btn-success ">ADD CART</button>
            </form>
        </div>

                <div class="row">
                <form action="cart.php" method="POST">

                    <div class="col-4">
                        <img src="img/s1.webp">
                        <h4>Casual Shoes For Men</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <input type="hidden" name="Item_Name" value=">Casual Shoes For Men">
               <input type="hidden" name="Price" value="2000">
                    </div>
                    <button name="add"class=" btn btn-success ">ADD CART</button>
            </form>
        
        <form action="cart.php" method="POST">

                    <div class="col-4">
                        <img src="img/s2.jpg">
                        <h4>New Winter Sweater</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <input type="hidden" name="Item_Name" value=">New Winter Sweater">
               <input type="hidden" name="Price" value="1500">
                    </div>
                    <button name="add"class=" btn btn-success ">ADD CART</button>
            </form>
                    <div class="col-4">
                        <img src="img/s5.jpeg">
                        <h4>Fashion Women Casual Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$60</p>
                    </div>
               
                    <div class="col-4">
                        <img src="img/cargoo.webp">
                        <h4>new cargo truser pant</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>$40</p>
                    </div> </div>
                    <div class="row">
                        <div class="col-4">
                            <img src="img/shirt.jpg">
                            <h4>Former Trouser For Men</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>$20</p>
                        </div>
                        <div class="col-4">
                            <img src="img/s6.webp">
                            <h4>Motorcycle Jacket</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>$80</p>
                        </div>
                        <div class="col-4">
                            <img src="img/s7.jpg">
                            <h4>sky Blue Heavy Cotton Kurti</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>$30</p>
                        </div>
                   
                        <div class="col-4">
                            <img src="img/s8.jpg">
                            <h4>green Cargo Pant size 20-30</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o" ></i>
                            </div>
                            <p>$60</p>
                       
                        </div> </div>
                        <div class="page-btn">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            
                            <span>&#8594</span>


                        </div>
                    </div>

 
   
 
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>About Us</h3><br>
                        <p></p>
                    <div class="app-logo">
                        <!-- <img src="img/playstore.png" width="125px">
                        <img src="img/app.png" width="125px" > -->
                    </div>
                    </div>
                
                    <div class="footer-col-2">
                        <img src="logo.png" width="125px">
                    <p>Best Quality Provide<br> To The Customer</p>
                        
                    </div>
                <div class="footer-col-3">
                    <h3>Links For Get You More</h3>
                    <ul>
                        <li>Blog Post</li>
                        <li>Coupons</li>
                        <li>Return Policy</li>
                        <li>Affiliate</li>
                    </ul>
                    <div class="footer-col-4">
                        <h3>If you want to get more information follow us</h3>
                        <ul>
                        <li ><a href="https://www.facebook.com">FACEBOOK</a></li>
                            <li>Instagram</li>
                            <li>Twitter</li>
    
    
                       
                        </ul>
                </div>
        </div>
            
    <!-- js for toggle menu -->
    <script>
        var MenuItems=document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if( MenuItems.style.maxHeight == "0px")
{
    MenuItems.style.maxHeight = "200px";

}
    else{
        MenuItems.style.maxHeight = "0px";

    }    

        }
    </script>
                   
</body>
</html>