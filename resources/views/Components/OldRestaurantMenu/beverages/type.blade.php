<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beverages</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9d5b5;
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
    background-color: #fff;
    border: 1px solid #8c7561;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .item:hover {
    transform: translateY(-5px);
  }

  .item img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .button {
    padding: 10px 20px;
    background-color: #8c7561;
    color: #fff;
    border: none;
    border-radius: 5px;
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
  <div class="item">
    <img src="non_coffee.png" alt="non-coffee">
    <div>Non-coffee</div>
  </div>
  <div class="item">
    <img src="coffee.png" alt="coffee">
    <div>Coffee</div>
  </div>
  <div class="item">
    <img src="tea.png" alt="tea">
    <div>Tea</div>
  </div>
</div>
<button class="button" onclick="order()">Order Now</button>
<script>
  function order() {
    alert('Thank you for your order!');
  }
</script>
</body>
</html>
