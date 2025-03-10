<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Item</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e2c8a3;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background-color: #f5deb3;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 300px;
  }

  .item-img {
    width: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .item-title {
    font-size: 20px;
    margin-bottom: 10px;
    color: #8c7561;
  }

  .item-description {
    font-size: 16px;
    margin-bottom: 10px;
    color: #8c7561;
  }

  .rating {
    color: #ffcc00;
    margin-bottom: 10px;
  }

  .total-price {
    font-size: 18px;
    margin-bottom: 10px;
    color: #8c7561;
  }

  .quantity {
    width: 40px;
  }

  .button {
    background-color: #8c7561;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #6c5ce7;
  }
</style>
</head>
<body>
<div class="container">
  <img src="fruit_salad.png" alt="Fruit Salad" class="item-img">
  <div class="item-title">Fruit Salad</div>
  <div class="rating">⭐⭐⭐⭐/5</div>
  <div class="item-description">
    Refresh your palate with our refreshing fruit salad. Packed with a colorful array
    of fresh fruits and drizzled with a light dressing, each bite of our fruit salad
    is a burst of freshness and vitality, perfect for a healthy and delicious snack.
  </div>
  <div class="total-price">
    TOTAL PRICE <br>
    <span id="totalPrice">RP 25.000</span>
  </div>
  <button onclick="decreaseQuantity()">-</button>
  <input type="text" class="quantity" id="quantity" value="1" readonly>
  <button onclick="increaseQuantity()">+</button>
  <button class="button" onclick="addToCart()">Add to cart</button>
</div>
<script>
  function addToCart() {
    var quantity = document.getElementById("quantity").value;
    alert('Added ' + quantity + ' Fruit Salad(s) to cart!');
  }

  function increaseQuantity() {
    var quantityInput = document.getElementById("quantity");
    var quantity = parseInt(quantityInput.value);
    quantityInput.value = quantity + 1;
  }

  function decreaseQuantity() {
    var quantityInput = document.getElementById("quantity");
    var quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
      quantityInput.value = quantity - 1;
    }
  }
</script>
</body>
</html>
