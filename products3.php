<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpackpath.bootstrapcdn.com/font-
    awesome/4.7.0/css/font-awesome.min,css">
   
</head>
<body>
<div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/Carpentry tools background Royalty Free Vector Image.jpg" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <img src="images/envelope-solid.svg" width="30px" height="30px" >
            <img src="images/list-solid.svg"  class="memu-icon" 
            onclick="menutoggle()" width="30px" height="30px">
        </div>
    </div>
    <div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select >
            <option>Default Shorting</option>
            <option>Short by price</option>
            <option>short by popularity</option>
            <option >short by rating</option>
            <option >short by sale</option>
        </select>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="images/wallpaperflare.com_wallpaper (7).jpg" >
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            
    <a href="addpost.php">&#8592;</a>
    <?php
         $sql = "SELECT* FROM images ORDER BY ID DESC";
         $res = mysqli_query($conn, $sql);

         if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) { ?>
            
            <div class="alb">
                <img src="uploads/<?=$images['image']?>" >

            </div>
         <?php } }?>
         <p>$50.00</p>

          <!---------------footer----------->
          <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone</p> 
                        <div class="app-logo">
                            <img src="images/wallpaperflare.com_wallpaper (7).jpg" >
                            <img src="images/wallpaperflare.com_wallpaper (7).jpg" >
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/Carpentry tools background Royalty Free Vector Image.jpg">
                        <p> Our Purpose is To Sustain Make the Pleasure and
                            Benefits of a Funitures Accessible to the many </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful links</h3>
                        <ul>
                            <li>coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>joon Affiliate<li>coupons</li></li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>twitter</li>
                            <li>instagram</li>
                            <li>youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">made by katoni</p>
            </div>
         </div>

         
         <!----js fot toggle menu------>
         <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
                if (MenuItems.style.maxHeight == "opx")
                 {
                    MenuItems.style.maxHeight = "200px"
                }
                else
                {
                    MenuItems.style.maxHeight == "opx" ;
                }
            }
         </script>
</body>
</html>