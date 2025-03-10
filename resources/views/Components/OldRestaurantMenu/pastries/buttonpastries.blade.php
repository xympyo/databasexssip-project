<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cepi Cafe</title>
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
    flex-direction: column;
    gap: 20px;
  }

  .menu-title {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .search-input {
    padding: 10px;
    border: 2px solid #8c7561;
    border-radius: 5px;
    font-size: 16px;
    width: 200px;
  }

  .category-title {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .category-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
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
  <div class="menu-title">MENU</div>
  <input type="text" class="search-input" id="searchInput" placeholder="Search...">
  <button class="button" onclick="searchItem()">Search</button>
  <div class="category-title">Pastries Categories</div>
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
