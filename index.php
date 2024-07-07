<?php

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- header section -->
  <?php include  'header.php'; ?>

  <!-- Hero Section -->


  <!-- main section -->
  <div class="container mt-5">
    <div class="row">
      <!-- Cards Info -->
      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img id="book-img" src="books-img/30.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Can't Hurt Me</h5>
            <p class="card-text">Price: 40$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="Can't Hurt Me"/>
            <input type="hidden" name="Price"  value="40"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5" >
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/3.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Harry Potter</h5>
            <p class="card-text">Price: 45$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="Harry Potter"/>
            <input type="hidden" name="Price"  value="45"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php" method="post">
        <div class="card">
          <img src="books-img/31.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Psychology of Money</h5>
            <p class="card-text">Price: 50$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Psychology of Money"/>
            <input type="hidden" name="Price"  value="50"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/32.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">How to Win Friends and Influence People</h5>
            <p class="card-text">Price: 55$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="How to Win Friends and Influence People"/>
            <input type="hidden" name="Price"  value="55"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/33.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Think and Grow Rich</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="Think and Grow Rich"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/34.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Subtle Art of Not Giving a Fuck</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Subtle Art of Not Giving a Fuck"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>
      
      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/35.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Magic</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Magic"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/36.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The 48 Laws of Power</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The 48 Laws of Power"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>


      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/43.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Courage to be Disliked</h5>
            <p class="card-text">Price: 40$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Courage to be Disliked"/>
            <input type="hidden" name="Price"  value="40"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/38.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Laws of Human Nature</h5>
            <p class="card-text">Price: 45$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Laws of Human Nature"/>
            <input type="hidden" name="Price"  value="45"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php" method="post">
        <div class="card">
          <img src="books-img/39.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Deep Work</h5>
            <p class="card-text">Price: 50$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="Deep Work"/>
            <input type="hidden" name="Price"  value="50"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/40.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Influence The Psychology of Persuation</h5>
            <p class="card-text">Price: 55$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="Influence The Psychology of Persuation"/>
            <input type="hidden" name="Price"  value="55"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/41.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Chanakya Neeti</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="Chanakya Neeti"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/42.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">We Who Wrestle With God</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="We Who Wrestle With God"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>
      
      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/37.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Power of Discipline</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Power of Discipline"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>

      <div class="col-lg-3 py-5">
        <form action="manage-cart.php"  method="post">
        <div class="card">
          <img src="books-img/44.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">The Mountain is You</h5>
            <p class="card-text">Price: 60$</p>
            <button type="submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="Item_Name"  value="The Mountain is You"/>
            <input type="hidden" name="Price"  value="60"/>
          </div>
        </div>
        </form>
      </div>

    </div>
  </div>

  <!-- footer section -->
  <?php include 'footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>