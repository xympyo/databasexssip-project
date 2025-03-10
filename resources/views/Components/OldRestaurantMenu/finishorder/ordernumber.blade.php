<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You</title>
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
    background-color: #8c7561;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 300px;
  }

  .order-number {
    background-color: #6c5ce7;
    color: white;
    font-size: 20px;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Thank You For The Order!</h2>
  <div class="order-number" id="orderNumber">Order Number: <span id="number">0</span></div>
</div>
<script>
  // Get the element where the order number will be displayed
  const orderNumberElement = document.getElementById('number');

  // Function to generate and display a random order number
  function generateOrderNumber() {
    // Generate a random order number between 1000 and 9999
    const orderNumber = Math.floor(Math.random() * 9000) + 1000;
    // Update the order number in the HTML
    orderNumberElement.textContent = orderNumber;
  }

  // Call the function to generate the initial order number
  generateOrderNumber();
</script>
</body>
</html>
