<?php
require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

$total_price = 0; // Initialize total price
$total_discount=0;
?>
<link rel="stylesheet" href="cart.css">
<main style= " max-width: 1500px;width: 80%;margin: 30px auto;display: flex;flex-direction: column; ">
    <h1><?php echo $all_cart->num_rows; ?> Items</h1>
    <hr>
</main>

<?php

while($row_cart = $all_cart->fetch_assoc()) {
    $product_id = $row_cart['product_id'];
    $sql_product = "SELECT * FROM product WHERE product_id = $product_id";
    $result_product = $conn->query($sql_product);
    $product = $result_product->fetch_assoc();

    // Add product price to total
    $total_price += $product['price'];

    // Display product details
    ?>
    <div class="card" style= " height:  150px; border: 1px solid lightgray; margin: 20px;display: flex; ">
        <div class="images" style=" width: 20%; ">
            <img src="<?php echo $product["product_image"]; ?>" alt="" style = " width: 100%; height: 100%; object-fit: cover; ">
        </div>

        <div class="caption"  style=" line-height: 3em;margin-left: 30px;position: relative;width: 75%;height: 100%;display: flex; flex-direction: column; justify-content: center; " >
             <div class="pr" style="font-size: 1.5rem;" >
             <p class="rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </p>
            <p class="product_name"><?php echo $product["product_name"]; ?></p>
            <p class="price" style=" position: absolute; top: 5%; right: 5%; " ><b>$<?php echo $product["price"]; ?></b></p>
            <p class="discount"><b><del>$<?php echo $product["discount"]; ?></del></b></p>
             </div>
            <button class="remove" data-id="<?php echo $product["product_id"]; ?>">Remove from Cart</button>
        </div>
    </div>
    <?php
}

?>
<section >
        <div class="total">
            <h1>TOTAL: $<?php echo number_format($total_price, 2); ?></h1> <!-- Display total price -->
        </div>
        </div>
        <div class="checkbtn">
        <button><a href="checkout.php">CHECKOUT</a></button>
        </div>
       
    </section>




<script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>

<script>
    var removeButtons = document.querySelectorAll(".remove");
    removeButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            var cart_id = button.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    location.reload(); // Reload the page after removing item
                }
            }
            xml.open("GET", "connection.php?cart_id=" + cart_id, true);
            xml.send();
        });
    });
</script>
