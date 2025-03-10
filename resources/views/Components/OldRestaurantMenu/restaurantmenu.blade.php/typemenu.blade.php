<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cafe Menu</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }

  .section {
    text-align: center;
    margin-bottom: 40px;
  }

  .section-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .items {
    display: flex;
    justify-content: center;
    gap: 20px;
  }

  .item {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .item img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .item-name {
    color: #333;
    font-size: 18px;
    margin-bottom: 5px;
  }

  .item-description {
    color: #666;
    font-size: 14px;
    text-align: center;
    margin-bottom: 20px;
  }

  .button {
    padding: 10px 20px;
    background-color: #6c5ce7;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .section:not(:first-child) {
    display: none;
  }

  .description {
    margin-bottom: 20px;
  }
</style>
</head>
<body>
<div class="container">
  <div class="section">
    <h2 class="section-title">BEVERAGES</h2>
    <p class="description">Treat yourself to a moment of bliss with our exquisite range of beverages, expertly prepared to tantalize your taste buds and soothe your soul</p>
    <div class="items">
      <div class="item">
        <img src="coffee.png" alt="coffee">
        <div class="item-name">Coffee</div>
      </div>
      <div class="item">
        <img src="tea.png" alt="tea">
        <div class="item-name">Tea</div>
      </div>
      <div class="item">
        <img src="non_coffee.png" alt="non-coffee">
        <div class="item-name">Non-coffee</div>
      </div>
    </div>
    <button class="button" onclick="next('beverages')">Next</button>
  </div>
  <div class="section">
    <h2 class="section-title">SNACKS</h2>
    <p class="description">Celebrate the art of snacking at our cafe, where our curated selection of treats offers something for every craving, from savory to sweet, ensuring a delightful experience with every nibble crafted to complement your beverage of choice</p>
    <div class="items">
      <div class="item">
        <img src="sandwich.png" alt="sandwich">
        <div class="item-name">Sandwich</div>
      </div>
      <div class="item">
        <img src="pastries.png" alt="pastries">
        <div class="item-name">Pastries</div>
      </div>
    </div>
    <button class="button" onclick="next('snacks')">Next</button>
  </div>
</div>
<script>
  function next(section) {
    if (section === 'beverages') {
      document.querySelector('.section:nth-child(1)').style.display = 'none';
      document.querySelector('.section:nth-child(2)').style.display = 'block';
    } else if (section === 'snacks') {
      document.querySelector('.section:nth-child(2)').style.display = 'none';
      alert('Thank you for exploring our menu!');
    }
  }
</script>
</body>
</html>
