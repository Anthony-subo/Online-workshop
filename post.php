<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products atWhite Store | Ecommerce wWebsite Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpackpath.bootstrapcdn.com/font-
    awesome/4.7.0/css/font-awesome.min,css">
</head>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
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
    <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?> </p>
    <?php endif ?>
    <form action="upload.php"
                  method="post"
                  enctype="multipart/form-data">

                <label for="text">Caption:</label>
                <textarea ></textarea><br>
               <label for="text">Choose a photo:</label>
                <input type="file"
                        name="my_image">
                <label for="text">price:</label>
                        <input type="number">       
                <input type="submit"
                       name="submit"
                       value="Upload"> 
    </form>
        
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