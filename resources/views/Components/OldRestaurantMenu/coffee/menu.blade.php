<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coffee Menu</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #b9a3d0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .item {
    background-color: #ffd9a3;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    cursor: pointer;
    width: 200px;
  }

  .item:hover {
    transform: translateY(-5px);
  }

  .item img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .item-name {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 5px;
  }

  .item-price {
    font-size: 16px;
  }
</style>
</head>
<body>
<div class="container">
  <div class="item" onclick="addToCart('Espresso', 20000)">
    <img src="espresso.png" alt="Espresso">
    <div class="item-name">Espresso</div>
    <div class="item-price">RP 20,000</div>
  </div>
  <div class="item" onclick="addToCart('Latte', 30000)">
    <img src="latte.png" alt="Latte">
    <div class="item-name">Latte</div>
    <div class="item-price">RP 30,000</div>
  </div>
  <div class="item" onclick="addToCart('Mocha', 35000)">
    <img src="mocha.png" alt="Mocha">
    <div class="item-name">Mocha</div>
    <div class="item-price">RP 35,000</div>
  </div>
  <div class="item" onclick="addToCart('Americano', 25000)">
    <img src="americano.png" alt="Americano">
    <div class="item-name">Americano</div>
    <div class="item-price">RP 25,000</div>
  </div>
  <div class="item" onclick="addToCart('Cappucino', 30000)">
    <img src="cappucino.png" alt="Cappucino">
    <div class="item-name">Cappucino</div>
    <div class="item-price">RP 30,000</div>
  </div>
  <div class="item" onclick="addToCart('Affogato', 40000)">
    <img src="coffee.png" alt="Affogato">
    <div class="item-name">Affogato</div>
    <div class="item-price">RP 40,000</div>
  </div>
</div>
<script>
  function addToCart(itemName, price) {
    alert('Added ' + itemName + ' to cart. Total price: RP ' + price);
  }
</script>
</body>
</html>
