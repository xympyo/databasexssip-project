<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
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
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    align-items: flex-start;
  }

  .card {
    background-color: #f5deb3;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    width: 200px;
  }

  .card img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .card button {
    background-color: #ff9966;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .card button:hover {
    background-color: #e57345;
  }
</style>
</head>
<body>
<div class="container">
  <div class="card">
    <img src="fruit_salad.jpg" alt="Fruit Salad">
    <div>Fruit Salad</div>
    <div>RP 40,000</div>
    <button onclick="addToCart('Fruit Salad')">+</button>
  </div>
  <div class="card">
    <img src="french_fries.jpg" alt="French Fries">
    <div>French Fries</div>
    <div>RP 30,000</div>
    <button onclick="addToCart('French Fries')">+</button>
  </div>
  <div class="card">
    <img src="bagel_with_cream_cheese.jpg" alt="Bagel with Cream Cheese">
    <div>Bagel with Cream Cheese</div>
    <div>RP 35,000</div>
    <button onclick="addToCart('Bagel with Cream Cheese')">+</button>
  </div>
  <div class="card">
    <img src="chicken_sandwich.jpg" alt="Chicken Sandwich">
    <div>Chicken Sandwich</div>
    <div>RP 50,000</div>
    <button onclick="addToCart('Chicken Sandwich')">+</button>
  </div>
</div>
<script>
  function addToCart(itemName) {
    alert('Added ' + itemName + ' to cart!');
  }
</script>
</body>
</html>
