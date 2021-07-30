<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews - Lorem Ipsum</title>
    <link href="style.css" rel="stylesheet">
   
</head>
<body id="reviews">
    <header class="wrapper">
        <a href="index.php">
            <img src="images/companyLogo.png" width="458" height="129" alt="Company Name">    
        </a>
    </header>
    <nav>
        <ul class="wrapper">
            <li><a class="home" href="index.php">Home</a></li>
            <li><a class="products" href="products.php">Products</a></li>
            <li><a class="services" href="services.php">Services</a></li>
            <li><a class="reviews" href="reviews.php">Reviews</a></li>
            <li><a class="contact" href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main class="wrapper">
        <section id="column1">
            <h1>Reviews</h1>
            <?php
            echo date("D d M Y");
            ?>
            <p>Lorem sit amet consectetur adipisicing elit. Veritatis eligendi officiis accusantium voluptates laborum doloremque expedita necessitatibus incidunt dolor, aliquam esse voluptatum, quae ipsum itaque minus alias ipsa totam. Unde..</p>
           
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus vel iste facere nobis sapiente neque molestias ab vitae, aperiam dolorum in nostrum hic repellat optio laboriosam, accusantium ipsam fugiat soluta.
            </p>
        </section>
        <section id="column2">
            <h2>Cooking</h2>
            <img src="images/cooking.jpg" width="500" height="330" alt="Cooking">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique itaque possimus aperiam nulla molestiae impedit iusto illum expedita. voluptates nihil optio! Maiores commodi incidunt delectus cum expedita!</p>
        </section>
    </main>
    <footer>
        <div class="wrapper">
            <p> &copy; <?= date("Y"); ?>  Lorem Ipsum</p>
           <div class="socialMedia">
               <img src="images/instagram.png" width="25" height="25" alt="instagram">
               <img src="images/facebook.png" width="25" height="25" alt="facebook">
               <img src="images/paypal.png" width="25" height="25" alt="paypal">
               <img src="images/youtube.png" width="25" height="25" alt="youtube">
               <img src="images/twitter.png" width="25" height="25" alt="twitter">
           </div>
        </div>
    </footer>
</body>
</html>