<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cepi Café</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #b9a3d0;
    color: #2a1a5e;
  }

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  .header {
    text-align: center;
    margin-bottom: 40px;
  }

  .header h1 {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .sub-header {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .section {
    margin-bottom: 40px;
  }

  .cards {
    display: flex;
    justify-content: center;
    gap: 20px;
  }

  .card {
    width: 200px;
    background-color: #f4a261;
    color: #fff;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .button {
    padding: 10px 20px;
    background-color: #6c5ce7;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #4834d4;
  }

  .footer {
    text-align: center;
    margin-top: 40px;
  }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <h3>Cepi Order</h3>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <h2>Cepi's Menu</h2>
        </div>
    </div>

  <div class="header">
    <h1>Beverages Categories</h1>
  </div>

  <div class="section">
    <div class="cards">
      <div class="card">
        <img src="smoothie.png" alt="Smoothies">
        <p>Smoothies</p>
        <p>RP 35.000</p>
        <button class="button" onclick="addToCart('Smoothies')">Add to cart</button>
      </div>
      <div class="card">
        <img src="lemonade.png" alt="Lemonade">
        <p>Lemonade</p>
        <p>RP 25.000</p>
        <button class="button" onclick="addToCart('Lemonade')">Add to cart</button>
      </div>
      <div class="card">
        <img src="icetea.png" alt="Ice tea">
        <p>Ice tea</p>
        <p>RP 20.000</p>
        <button class="button" onclick="addToCart('Ice tea')">Add to cart</button>
      </div>
      <div class="card">
        <img src="vanillalatte.png" alt="Vanilla Latte">
        <p>Vanilla Latte</p>
        <p>RP 30.000</p>
        <button class="button" onclick="addToCart('Vanilla Latte')">Add to cart</button>
      </div>
      <div class="card">
        <img src="hotchocolate.png" alt="Hot Chocolate">
        <p>Hot Chocolate</p>
        <p>RP 30.000</p>
        <button class="button" onclick="addToCart('Hot Chocolate')">Add to cart</button>
      </div>
    </div>
    <button class="button" onclick="next()">Next</button>
  </div>

<script>
  function addToCart(item) {
    alert('Added ' + item + ' to cart');
  }

  function next() {
    window.location.href = "descriptionmenu.blade.php";
  }
  
</script>
</body>
</html>
