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

  .menu-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #d68b00;
  }

  .search-input {
    padding: 10px;
    border: 2px solid #d68b00;
    border-radius: 5px;
    font-size: 16px;
    width: 200px;
    margin-right: 10px;
  }

  .category-title {
    font-size: 20px;
    margin-bottom: 10px;
    color: #d68b00;
  }

  .button {
    padding: 10px 20px;
    background-color: #d68b00;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #b26400;
  }
</style>
</head>
<body>
<div class="container">
  <div class="menu-title">MENU</div>
  <input type="text" class="search-input" id="searchInput" placeholder="Search...">
  <button class="button" onclick="searchItem()">Search</button>
  <div class="category-title">Snacks Categories</div>
  <div class="category-buttons">
    <button class="button" onclick="showCategory('Pastry')">Pastry</button>
    <button class="button" onclick="showCategory('Snack')">Snack</button>
  </div>
</div>
<script>
  function showCategory(category) {
    alert('You selected ' + category + ' category!');
  }

  function searchItem() {
    var searchInput = document.getElementById("searchInput").value;
    alert('You searched for: ' + searchInput);
  }
</script>
</body>
</html>
