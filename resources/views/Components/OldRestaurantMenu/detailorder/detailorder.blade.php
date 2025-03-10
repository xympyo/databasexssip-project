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

  .input-field {
    width: 100%;
    padding: 10px;
    border: none;
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
  <h2>Detail Order</h2>
  <input type="text" id="name" class="input-field" placeholder="Name">
  <input type="text" id="phoneNumber" class="input-field" placeholder="Phone Number">
  <button class="button" onclick="next()">Next</button>
</div>

<script>
  function next() {
    var name = document.getElementById("name").value;
    var phoneNumber = document.getElementById("phoneNumber").value;

    // Example logic: Checking if name and phone number are filled
    if (name.trim() === "" || phoneNumber.trim() === "") {
      alert("Please fill in all fields.");
    } else {
      // Proceed to the next step
      alert("Name: " + name + "\nPhone Number: " + phoneNumber);
      // Add your logic here to proceed to the next step
      // For example, redirect to another page or perform further actions
      // window.location.href = "next_step.html";
    }
  }
</script>
</body>
</html>
