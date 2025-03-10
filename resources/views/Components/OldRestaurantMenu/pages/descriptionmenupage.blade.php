<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cepi Café</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #b9a3d0;
    color: #2a1a5e;
  }

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  .header {
    text-align: center;
    margin-bottom: 40px;
  }

  .header h1 {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .section {
    margin-bottom: 40px;
  }

  .cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .card {
    display: none;
    width: 100%;
    background-color: #f4a261;
    color: #fff;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
  }

  .card img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .button {
    padding: 10px 20px;
    background-color: #6c5ce7;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #4834d4;
  }

  .footer {
    text-align: center;
    margin-top: 40px;
  }

  .rating {
    color: gold;
    font-size: 16px;
  }

  .cart {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
  }

  .cart input {
    width: 40px;
    text-align: center;
    margin: 0 10px;
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
    <h1>Snacks Categories</h1>
  </div>

  <div class="section">
    <div class="cards">
      <div class="card" id="fruitSaladCard">
        <img src="fruit_salad.png" alt="Fruit Salad">
        <p>Fruit Salad</p>
        <p><span class="rating">★</span> 4,5/5</p>
        <p>Refresh your palate with our refreshing fruit salad. Packed with a colorful array of fresh fruits and drizzled with a light dressing, each bite of our fruit salad is a burst of freshness and vitality, perfect for a healthy and delicious snack</p>
        <p>Total Price: RP 25.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Fruit Salad')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>
      </div>
      
      <div class="card" id="smoothieCard">
        <img src="smoothies.png" alt="Smoothie">
        <p>Smoothie</p>
        <p><span class="rating">★</span> 4.7/5</p>
        <p>Indulge in our refreshing smoothies made from a blend of fresh fruits and natural ingredients. Whether you're craving something sweet or tangy, our smoothies are the perfect treat to beat the heat and revitalize your day.</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="frenchfriesCard">
        <img src="french_fries.png" alt="frenchfries">
        <p>Smoothie</p>
        <p><span class="rating">★</span> 4.7/5</p>
        <p>Indulge in the crispy goodness of our golden french fries. Hand-cut and perfectly seasoned, each fry is a bite of crunchy perfection, guaranteed to satisfy your cravings for a classic comfort food</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="chickensandwichCard">
        <img src="chicken_sandwich.png" alt="Chicken Sandwich">
        <p>Chicken Sandwich</p>
        <p><span class="rating">★</span> 4.9/5</p>
        <p>Enjoy the satisfying flavors of our chicken sandwich. Tender grilled chicken, fresh veggies, and tangy sauce nestled between slices of soft bread, each bite of our chicken sandwich is a perfect balance of savory and satisfying</p>
        <p>Total Price: RP 50.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="bagelwithcreamcheese">
        <img src="sandwich.png" alt="Bagel with cream cheese">
        <p>Bagel with cream cheese</p>
        <p><span class="rating">★</span> 4.6/5</p>
        <p>Start your day right with our classic bagel with cream cheese. Toasted to perfection and generously spread with creamy cheese, each bite of our bagel is a delightful combination of chewy texture and rich flavor, perfect for a satisfying breakfast</p>
        <p>Total Price: RP 35.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="chocolatebrownies">
        <img src="chocolate_brownies.png" alt="Chocolate brownies">
        <p>Chocolate brownies</p>
        <p><span class="rating">★</span> 4.4/5</p>
        <p>Dive into the indulgent decadence of our chocolate brownies. Moist and fudgy, each bite of our chocolatebrownies is a blissful experience, with rich chocolate flavor and chunks of gooey goodness in every mouthful</p>
        <p>Total Price: RP 35.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="cheesecake">
        <img src="cheesecake.png" alt="Cheesecake">
        <p>Cheesecake</p>
        <p><span class="rating">★</span> 4.3/5</p>
        <p>Creat yourself to the indulgent creaminess of our classic cheesecake. With a velvety smooth texture and rich flavor, each forkful of our cheesecake is a luxurious experience, tantalizing your taste buds with its decadent charm</p>
        <p>Total Price: RP 40.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="banana bread">
        <img src="banana_bread.png" alt="banana bread">
        <p>Banana bread</p>
        <p><span class="rating">★</span> 4.1/5</p>
        <p>Indulge in the buttery flakiness of our freshly baked croissant. Made with layers of delicate pastry, each bite of our croissant is a symphony of crispiness and melt-in-your-mouth goodness, perfect for a morning treat or afternoon delight</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="croissant">
        <img src="croissant.png" alt="croissant">
        <p>Croissant</p>
        <p><span class="rating">★</span> 4.55/5</p>
        <p>Indulge in the buttery flakiness of our freshly baked croissant. Made with layers of delicate pastry, each bite of our croissant is a symphony of crispiness and melt-in-your-mouth goodness, perfect for a morning treat or afternoon delight</p>
        <p>Total Price: RP 25.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="espresso">
        <img src="espresso.png" alt="espresso">
        <p>Espresso</p>
        <p><span class="rating">★</span> 4.76/5</p>
        <p>Experience the strong and full-bodied character of our espresso. Each sip of espresso is a fragment of coffee art, tantalizing your taste buds with rich aroma and deep flavors</p>
        <p>Total Price: RP 20.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="americano">
        <img src="americano.png" alt="americano">
        <p>Americano</p>
        <p><span class="rating">★</span> 4.46/5</p>
        <p>Enjoy the simple yet captivating freshness of our Americano. The blend of espresso diluted with hot water produces a coffee that enriches the taste without losing its original strength, providing a refreshing and awakening coffee experience</p>
        <p>Total Price: RP 25.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="cappucino">
        <img src="cappucino.png" alt="cappucino">
        <p>Cappucino</p>
        <p><span class="rating">★</span> 4.88/5</p>
        <p>Taste the perfect harmony between strong espresso, silky foamed milk, and a sprinkle of chocolate powder in our cappuccino. Each sip brings a smooth creaminess, blending the rich coffee aroma with the gentleness of milk, creating flavor perfection in every sip</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="latte">
        <img src="latte.png" alt="latte">
        <p>Latte</p>
        <p><span class="rating">★</span> 4.73/5</p>
        <p><Taste the perfect harmony between strong espresso, silky foamed milk, and a sprinkle of chocolate powder in our cappuccino. Each sip brings a smooth creaminess, blending the rich coffee aroma with the gentleness of milk, creating flavor perfection in every sip/p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="mocha">
        <img src="mocha.png" alt="mocha">
        <p>Mocha</p>
        <p><span class="rating">★</span> 4.66/5</p>
        <p>Indulge in the rich harmony of espresso and chocolate in our signature mocha, a velvety delight for your taste buds.</p>
        <p>Total Price: RP 35.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="affogato">
        <img src="coffee.png" alt="affogato">
        <p>Affogato</p>
        <p><span class="rating">★</span> 4.69/5</p>
        <p>Experience the perfect marriage of creamy gelato and bold espresso, as they intertwine to create a symphony of flavors in our classic affogato.</p>
        <p>Total Price: RP 40.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="greentea">
        <img src="green_tea.png" alt="greentea">
        <p>Green Tea</p>
        <p><span class="rating">★</span> 4.98/5</p>
        <p>Refresh your senses with the delicate notes of our premium green tea, a soothing elixir that transports you to a state of tranquility with every sip.</p>
        <p>Total Price: RP 20.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="chamomiletea">
        <img src="tea.png" alt="chamomiletea">
        <p>Chamomile Tea</p>
        <p><span class="rating">★</span> 4.73/5</p>
        <p>Drift away on a cloud of relaxation with our fragrant chamomile tea, a gentle infusion that calms the mind and soothes the soul</p>
        <p>Total Price: RP 25.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="earlgreytea">
        <img src="earl_grey_tea.png" alt="earlgreytea">
        <p>Earl Grey Tea</p>
        <p><span class="rating">★</span> 4.49/5</p>
        <p>Elevate your tea experience with the timeless elegance of our Earl Grey tea, boasting citrusy bergamot notes and a touch of sophistication.</p>
        <p>Total Price: RP 25.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="matchalatte">
        <img src="matchalatte.png" alt="matchalatte">
        <p>Matcha Latte</p>
        <p><span class="rating">★</span> 4.31/5</p>
        <p>Embark on a journey of pure bliss with our creamy matcha latte, crafted from finely ground green tea leaves for a vibrant and invigorating treat</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="hotchocolate">
        <img src="hotchocolate.png" alt="hotchocolate">
        <p>Hot Chocolate</p>
        <p><span class="rating">★</span> 4.87/5</p>
        <p>Indulge in the velvety richness of our decadent hot chocolate, a comforting embrace on chilly days that warms both body and soul.</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="vanillalatte">
        <img src="vanillalatte.png" alt="vanillalatte">
        <p>Vanilla Latte</p>
        <p><span class="rating">★</span> 4.69/5</p>
        <p>Savor the exquisite essence of vanilla in our non-coffee latte, a smooth and creamy delight that captivates with its subtle sweetness.</p>
        <p>Total Price: RP 30.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="lemonade">
        <img src="lemonade.png" alt="lemonade">
        <p>Lemonade</p>
        <p><span class="rating">★</span> 4.74/5</p>
        <p>Quench your thirst with the zesty tang of our refreshing lemonade, a burst of citrusy goodness that invigorates and revitalizes.</p>
        <p>Total Price: RP 25.000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>

        <div class="card" id="icedtea">
        <img src="lemon_tea.png" alt="icedtea">
        <p>Iced tea</p>
        <p><span class="rating">★</span> 4.59/5</p>
        <p>Beat the heat with our revitalizing iced teas, available in classic lemon or succulent peach flavors, each sip a refreshing oasis on a scorching day</p>
        <p>Total Price: RP 20 .000</p>
        <div class="cart">
          <button class="button" onclick="addToCart('Smoothie')">Add to cart</button>
          <input type="number" value="1" min="1">
        </div>
      </div>
      
      <!-- Tambahkan card lainnya di sini -->
    </div>
    <button class="button" onclick="next()">Next</button>
  </div>

  <div class="footer">
    <p>Back Home</p>
  </div>
</div>

<script>
  function addToCart(item) {
    alert('Added ' + item + ' to cart');
  }

  function showDescription(cardId) {
    // Sembunyikan deskripsi sebelumnya (jika ada)
    var allCards = document.querySelectorAll('.card');
    allCards.forEach(function(card) {
      card.style.display = 'none';
    });

    // Tampilkan deskripsi menu yang sesuai
    var selectedCard = document.getElementById(cardId);
    selectedCard.style.display = 'block';
  }

  function next() {
    window.location.href = "order.blade.php";
  }
</script>
</body>
</html>
