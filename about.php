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

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="display-4 mb-4">About Our Bookstore</h1>
          <p class="lead">Welcome to our bookstore! We are passionate about books and strive to provide a wide selection of titles to cater to every reader's interest.</p>
          <p class="lead">At our bookstore, you can find a diverse range of genres including fiction, non-fiction, mystery, romance, science fiction, and more.</p>
          <p class="lead">In addition to buying books, we also provide a platform for book enthusiasts to sell their gently used books. Whether you're looking to declutter your bookshelf or find a new home for your beloved titles, our bookstore is the perfect place to connect with fellow book lovers.</p>
        </div>
        <div class="col-lg-6">
          <img src="images/book-lover.png" class="img-fluid rounded" alt="Bookstore Image">
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <?php include 'footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>