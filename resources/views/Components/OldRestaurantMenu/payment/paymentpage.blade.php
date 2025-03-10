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

  .payment-method {
    background-color: #d2b48c;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    transition: transform 0.2s;
  }

  .payment-method:hover {
    transform: scale(1.05);
  }

  .payment-method img {
    width: 50px;
    border-radius: 10px;
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
    <h1>Payment Method</h1>
  </div>

  <div class="payment-method" onclick="selectPayment('BCA')">
    <img src="bca.png" alt="BCA">
    <div>BCA</div>
    <div>1784 **** ****</div>
  </div>
  <div class="payment-method" onclick="selectPayment('BNI')">
    <img src="bni.png" alt="BNI">
    <div>BNI</div>
    <div>4387 **** ****</div>
  </div>
  <div class="payment-method" onclick="selectPayment('Mandiri')">
    <img src="mandiri.png" alt="Mandiri">
    <div>Mandiri</div>
    <div>3246 **** ****</div>
  </div>
  <div class="payment-method" onclick="selectPayment('BRI')">
    <img src="bri.png" alt="BRI">
    <div>BRI</div>
    <div>6921 **** ****</div>
  </div>

  <div class="row">
    <button class="button" onclick="next()">Next</button>
  </div>

</div>

<script>
  var selectedPaymentMethod = '';

  function selectPayment(method) {
    selectedPaymentMethod = method;
    var paymentMethods = document.querySelectorAll('.payment-method');
    paymentMethods.forEach(function (element) {
      element.classList.remove('selected');
    });
    document.querySelector('.payment-method[data-method="' + method + '"]').classList.add('selected');
  }

  function next() {
    if (selectedPaymentMethod !== '') {
      // Your logic to proceed to the next step
      // For example, redirect to another page or perform some action
      console.log("Selected payment method:", selectedPaymentMethod);
    } else {
      alert('Please select a payment method.');
    }
  }

  function next() {
    window.location.href = "finish.blade.php";
  }
</script>
</body>
</html>
