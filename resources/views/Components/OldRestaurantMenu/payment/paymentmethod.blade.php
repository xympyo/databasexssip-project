<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Method</title>
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

  .payment-method {
    background-color: #c7b198;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .button {
    background-color: #6c5ce7;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #4834d4;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Payment Method</h2>
  <div class="payment-method">BCA<br>1784 ********</div>
  <div class="payment-method">BNI<br>4387 ********</div>
  <div class="payment-method">Mandiri<br>3246 ********</div>
  <div class="payment-method">BRI<br>6921 ********</div>
  <button class="button" onclick="next()">Next</button>
</div>

<script>
  function next() {
    // You can add your logic here to proceed to the next step
    // For example, you can redirect to another page using window.location.href
    window.location.href = "next_step.html"; // Redirect to the next step
  }
</script>
</body>
</html>
