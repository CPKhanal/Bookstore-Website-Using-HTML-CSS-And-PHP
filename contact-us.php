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

  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="display-4 mb-4">Contact Us</h2>
          <p class="lead">Have a question or feedback? We'd love to hear from you!</p>

          <form action="connect2.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Your Message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
          </form>

        </div>
        <div class="col-lg-6">
          <h3 class="mb-4">Our Location</h3>
          <p class="lead">Visit our bookstore at the following address:</p>
          <address>
            33 City Center Drive<br>
            Mississauga, ON L5B 2N5<br>
            Canada
          </address>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <?php include 'footer.php' ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>