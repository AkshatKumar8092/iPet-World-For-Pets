<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="css/cart_css.css">
    <link rel="shortcut icon" type="image/png" href="image/paw_logo.png">
</head>

<body>
    <h1>Products</h1>
    <div class="products">
        <div class="product">
            <img src="/image/product_01.jpg">
            <h2>Product 1</h2>
            <p>Rs.10.00</p>
            <a href="#" class="button">Add to Cart</a>
        </div>
        <div class="product">
            <img src="/image/product_02.jpg">
            <h2>Product 2</h2>
            <p>Rs.20.00</p>
            <a href="#" class="button">Add to Cart</a>
        </div>
        <div class="product">
            <img src="/image/product_03.jpg">
            <h2>Product 3</h2>
            <p>Rs.30.00</p>
            <a href="#" class="button">Add to Cart</a>
        </div>
        <div class="product">
            <img src="/image/product_04.jpg">
            <h2>Product 3</h2>
            <p>Rs.30.00</p>
            <a href="#" class="button">Add to Cart</a>
        </div>
        <div class="product">
            <img src="/image/product_05.jpg">
            <h2>Product 3</h2>
            <p>Rs.30.00</p>
            <a href="#" class="button">Add to Cart</a>
        </div>
        <div class="product">
            <img src="/image/product_06.jpg">
            <h2>Product 3</h2>
            <p>Rs.30.00</p>
            <a href="#" class="button">Add to Cart</a>
        </div>
    </div>
    <a href="invoice.php"><div class="cart">0</div></a>   
    <script>    
        const buttons = document.querySelectorAll('.button');
const cart = document.querySelector('.cart');
let cartCount = 0;

buttons.forEach(button => {
  button.addEventListener('click', () => {
    cartCount++;
    cart.textContent = `Cart: ${cartCount}`;
  });
});

    </script>