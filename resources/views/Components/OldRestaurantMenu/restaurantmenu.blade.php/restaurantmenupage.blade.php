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
    background-color: #f4f1de;
    color: #264653;
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
    background-color: #2a9d8f;
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
    background-color: #e9c46a;
    color: #264653;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #f4a261;
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
    <h1>Brewing Happiness Since 2000 - Your Favorite Spot, Cepi Café</h1>
    <p class="sub-header">Step into our charming cafe, experience the magic of a vintage escape in our cozy cafe, where old-world charm meets modern comfort.</p>
    <p class="sub-header">Let the rustic decor and inviting ambiance wrap you in a blanket of comfort as you sip on our signature brews and savor homemade treats, making every visit a journey back in time.</p>
  </div>

  <div class="section">
    <h2>BEVERAGES</h2>
    <div class="cards">
      <div class="card">
        <img src="coffee.png" alt="Coffee">
        <p>Coffee</p>
      </div>
      <div class="card">
        <img src="tea.png" alt="Tea">
        <p>Tea</p>
      </div>
      <div class="card">
        <img src="non-coffee.png" alt="Non Coffee">
        <p>Non Coffee</p>
      </div>
    </div>
    <button class="button" onclick="nextBeverages()">Next</button>
  </div>

  <div class="section">
    <h2>SNACKS</h2>
    <div class="cards">
      <div class="card">
        <img src="sandwich.png" alt="Sandwich">
        <p>Sandwich</p>
      </div>
      <div class="card">
        <img src="pastries.png" alt="Pastries">
        <p>Pastries</p>
      </div>
    </div>
    <button class="button" onclick="nextSnacks()">Next</button>
  </div>
</div>

<script>
  function nextBeverages() {
    window.location.href = "beveragespage.blade.php";
  }

  function nextSnacks() {
    window.location.href = "snackpage.blade.php";
  }
</script>
</body>
</html>
