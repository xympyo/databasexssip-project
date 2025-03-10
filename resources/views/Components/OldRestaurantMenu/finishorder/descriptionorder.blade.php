<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Information</title>
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
    text-align: left;
    max-width: 300px;
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
  window.onload = setOrderInfo;
</script>
</body>
</html>
