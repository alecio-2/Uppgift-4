<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <!-- Viewport meta tag för responsivitet -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakter - 3D Zone</title>
   <!-- Länk till CSS-fil -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
 <!-- Banner sektion -->
 <section class="banner">
    <!-- Banner med länk till hemsidan -->
    <a href="index.html"><h1>3D Zone</h1></a>
  </section>
  
  <!-- Navigation sektion -->
  <div class="container">
    <!-- Navigeringsmeny -->
    <nav class="menu">
      <ul>
        <!-- Länkar till webbplatsens andra sidor-->
        <li><a href="About.html">Om mig</a></li>
        <li><a href="index.html">Hem</a></li>
        <li><a href="Tutorials.html">Tutorials</a></li>
        <li><a href="DIY.html">DIY</a></li>
        <li><a href="News.html">Nyheter</a></li>
        <li><a href="Media.html">Multimedia</a></li>
      </ul>
    </nav>
  </div>

   <!-- Main sektion-->
  <main>
    <section class="confirmation">
    <!-- Rubrik med bekräftelse -->
    <h2>Tack för att du kontaktade oss!</h2>
        <p>Vi återkommer till dig så snart som möjligt.</p>
        
        <!-- Lista med information som skickats -->
        <h3>Här är den information du skickat:</h3>
      <ul>
        <!-- Hämtar information från formuläret -->
        <li><strong>Namn:</strong> <?php echo $_POST["name"]; ?></li> 
        <li><strong>E-post:</strong> <?php echo $_POST["email"]; ?></li>
        <li><strong>Ämne:</strong> <?php echo $_POST["subject"]; ?></li>
        <li><strong>Meddelande:</strong> <?php echo $_POST["message"]; ?></li>
      </ul>
    </section>
  </main>
  
  <!-- Footer sektion -->
  <div class="container">
    <footer>
      <!-- Copyright notis -->
      <p>&copy; 2023 3D Zone. Alla rättigheter förbehållna.</p>
      <!-- Navigeringsmeny för footer sektionen -->
      <nav class="footer-nav">
        <ul>
          <!-- Länkar till webbplatsens andra sidor-->
          <li><a href="Contact.html">Kontakt</a></li>
          <li><a href="TermsOfUse.html">Användarvillkor</a></li>
          <li><a href="PrivacyPolicy.html">Sekretesspolicy</a></li>
        </ul>
      </nav>
    </footer>
  </div>
</body>

</html>