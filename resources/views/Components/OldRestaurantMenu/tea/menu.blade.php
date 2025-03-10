<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tea Menu</title>
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
  <div class="item" onclick="addToCart('Green Tea', 20000)">
    <img src="green_tea.jpg" alt="Green Tea">
    <div class="item-name">Green Tea</div>
    <div class="item-price">RP 20,000</div>
  </div>
  <div class="item" onclick="addToCart('Earl Grey Tea', 25000)">
    <img src="earl_grey_tea.jpg" alt="Earl Grey Tea">
    <div class="item-name">Earl Grey Tea</div>
    <div class="item-price">RP 25,000</div>
  </div>
  <div class="item" onclick="addToCart('Iced Tea', 30000)">
    <img src="iced_tea.jpg" alt="Iced Tea">
    <div class="item-name">Iced Tea</div>
    <div class="item-price">RP 30,000</div>
  </div>
  <div class="item" onclick="addToCart('Chamomile Tea', 25000)">
    <img src="tea.png" alt="Chamomile Tea">
    <div class="item-name">Chamomile Tea</div>
    <div class="item-price">RP 25,000</div>
  </div>
</div>
<script>
  function addToCart(itemName, price) {
    alert('Added ' + itemName + ' to cart. Total price: RP ' + price);
  }
</script>
</body>
</html>
