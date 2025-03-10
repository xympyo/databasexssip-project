<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Order</title>
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

  .row {
    margin-bottom: 20px;
  }

  input[type="text"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .button {
    background-color: #8c7561;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px;
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
    <h1>Detail Order</h1>
  </div>

  <div class="row">
    <input type="text" placeholder="Name">
  </div>
  <div class="row">
    <input type="text" placeholder="Phone Number">
  </div>
  <div class="row">
    <button class="button" onclick="next()">Next</button>
  </div>

</div>

<script>
  function next() {
    var name = document.querySelector('input[placeholder="Name"]').value;
    var phoneNumber = document.querySelector('input[placeholder="Phone Number"]').value;

    // Your logic to proceed to the next step
    // For example, redirect to another page or perform some action
    console.log("Name:", name);
    console.log("Phone Number:", phoneNumber);
  }

  function next() {
    window.location.href = "payment.blade.php";
  }
</script>
</body>
</html>
