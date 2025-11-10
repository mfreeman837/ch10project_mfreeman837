<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Building a Dynamic Form with PHP</title>

  <link rel="stylesheet" href="styles/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
  <!-- Fancy MacOS Style Gradient Background -->
  <div class="splotch splotch1"></div>
  <div class="splotch splotch2"></div>
  <div class="splotch splotch3"></div>
  <div class="splotch splotch4"></div>

  <div class="main">
    <h1>Building a Dynamic Form with PHP</h1>
    <p>Created by Michael Freeman</p>
    <p>November 10th, 2025</p>

    <form action="confirm.php" method="POST">
      <label for="fname">First Name:</label>
      <input type="text" name="fname" id="fname" required pattern="[A-Za-z\s]+" /><br>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required /><br>

      <label for="message">Message:</label>
      <textarea name="message" id="message" required></textarea><br>

      <input type="submit" value="Submit" />
    </form>
  </div>
</body>
</html>