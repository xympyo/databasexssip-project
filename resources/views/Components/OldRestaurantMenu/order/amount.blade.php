<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
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

  .section {
    margin-bottom: 20px;
  }

  .input-field {
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

  .total {
    font-size: 18px;
    font-weight: bold;
  }
</style>
</head>
<body>
<div class="container">
  <div class="section">
    <label for="promoCode">Promo Code</label>
    <input type="text" id="promoCode" class="input-field">
    <button class="button" onclick="applyPromo()">Apply</button>
  </div>
  <div class="section">
    <div>Cost</div>
    <div class="cost total">RP 0.00</div>
  </div>
  <div class="section">
    <div>Discount</div>
    <div class="discount total">RP 0.00</div>
  </div>
  <div class="section">
    <div>Total</div>
    <div class="totalPrice total">RP 0.00</div>
  </div>
  <button class="button">Check Out</button>
</div>

<script>
  // Function to calculate the total cost, discount, and total price
  function calculateTotal() {
    var menuItems = [
      { name: "Espresso", price: 25000 },
      { name: "Latte", price: 30000 },
      // Add more menu items here as needed
    ];

    // Sample menu items, you can replace it with your actual menu items
    var selectedMenuItems = ["Espresso", "Latte"];

    var cost = selectedMenuItems.reduce(function (acc, currentItem) {
      var menuItem = menuItems.find(function (item) {
        return item.name === currentItem;
      });
      return acc + menuItem.price;
    }, 0);

    var discount = parseFloat(document.querySelector(".discount").textContent.split(" ")[1]) || 0;
    var totalPrice = cost - discount;

    document.querySelector(".cost").textContent = "RP " + cost.toLocaleString("id-ID", { minimumFractionDigits: 2 });
    document.querySelector(".totalPrice").textContent = "RP " + totalPrice.toLocaleString("id-ID", { minimumFractionDigits: 2 });
  }

  // Function to apply promo code
  function applyPromo() {
    var promoCode = document.getElementById("promoCode").value.toUpperCase();

    // Sample promo code, you can replace it with your actual promo codes
    var validPromoCodes = ["SUMMER10", "WINTER20"];
    var discountAmount = 0;

    if (validPromoCodes.includes(promoCode)) {
      if (promoCode === "SUMMER10") {
        discountAmount = 10000; // Discount Rp 10,000
      } else if (promoCode === "WINTER20") {
        discountAmount = 20000; // Discount Rp 20,000
      }

      document.querySelector(".discount").textContent = "RP " + discountAmount.toLocaleString("id-ID", { minimumFractionDigits: 2 });
    } else {
      alert("Invalid promo code!");
    }

    calculateTotal(); // Recalculate total after applying promo code
  }

  // Calculate total when the page loads
  window.onload = calculateTotal;
</script>
</body>
</html>
