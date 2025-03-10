<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Cart</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #8c7561;
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

  .item {
    background-color: #8c7561;
    color: white;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .item img {
    width: 50px;
    border-radius: 50%;
  }

  .item-title {
    font-size: 16px;
    font-weight: bold;
  }

  .price {
    font-size: 14px;
  }

  .quantity {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80px;
  }

  .button {
    background-color: #8c7561;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 14px;
  }

  .button:hover {
    background-color: #6c5ce7;
  }
</style>
</head>
<body>
<div class="container">
  <div class="item">
    <div class="item-details">
      <img src="espresso.png" alt="Espresso">
      <div class="item-title">Espresso</div>
    </div>
    <div class="quantity">
      <button class="button" onclick="decreaseQuantity(this)">-</button>
      <span>1</span>
      <button class="button" onclick="increaseQuantity(this)">+</button>
    </div>
    <div class="price">RP 25.000</div>
  </div>
  <div class="item">
    <div class="item-details">
      <img src="espresso.png" alt="Espresso">
      <div class="item-title">Espresso</div>
    </div>
    <div class="quantity">
      <button class="button" onclick="decreaseQuantity(this)">-</button>
      <span>1</span>
      <button class="button" onclick="increaseQuantity(this)">+</button>
    </div>
    <div class="price">RP 25.000</div>
  </div>
</div>
<script>
  function increaseQuantity(button) {
    var quantityElement = button.parentElement.querySelector('span');
    var currentQuantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = currentQuantity + 1;
  }

  function decreaseQuantity(button) {
    var quantityElement = button.parentElement.querySelector('span');
    var currentQuantity = parseInt(quantityElement.textContent);
    if (currentQuantity > 1) {
      quantityElement.textContent = currentQuantity - 1;
    }
  }
</script>
</body>
</html>
