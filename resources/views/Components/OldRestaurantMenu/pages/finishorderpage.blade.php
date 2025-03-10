<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cepi Order</title>
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

  .info {
    margin-bottom: 20px;
  }

  .button {
    background-color: #6c5ce7;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .button:hover {
    background-color: #5f4bb6;
  }
</style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="row">
        <h3>Cepi Order</h3>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <h2>Cepi's Menu</h2>
        </div>
    </div>

  <h2>Thank You For The Order!</h2>
  <div class="order-number" id="orderNumber">Order Number: <span id="number">0</span></div>

  <div class="info">
    <p>Pick-up time</p>
    <p id="pickupTime">8:00 AM</p>
  </div>
  <div class="info">
    <p>Name</p>
    <p id="customerName">Mark</p>
  </div>
  <div class="info">
    <p>Phone Number</p>
    <p id="phoneNumber">+6281201234184</p>
  </div>
  <div class="info">
    <p>Pick-up location</p>
    <p id="pickupLocation">Cepi Cafe<br>Bekasi, Indonesia</p>
  </div>
  <button class="button" onclick="backHome()">Back Home</button>
</div>
<script>
  // Simulated order data (replace with actual order data)
  var order = {
    pickupTime: "8:00 AM",
    customerName: "Mark",
    phoneNumber: "+6281201234184"
  };

  // Get the element where the order number will be displayed
  const orderNumberElement = document.getElementById('number');

  // Function to generate and display a random order number
  function generateOrderNumber() {
    // Generate a random order number between 1000 and 9999
    const orderNumber = Math.floor(Math.random() * 9000) + 1000;
    // Update the order number in the HTML
    orderNumberElement.textContent = orderNumber;
  }

  // Function to set order information
  function setOrderInfo() {
    document.getElementById("pickupTime").textContent = order.pickupTime;
    document.getElementById("customerName").textContent = order.customerName;
    document.getElementById("phoneNumber").textContent = order.phoneNumber;
  }

  // Function to navigate back to home page
  function backHome() {
    // Redirect to the home page
    window.location.href = "home.html";
  }

  // Call setOrderInfo() when the page loads
  window.onload = function() {
    generateOrderNumber();
    setOrderInfo();
  };
</script>
</body>
</html>
 