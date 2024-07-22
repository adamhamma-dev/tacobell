<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js" defer></script>
    <title>Contact LTS</title>
</head>

<body>
    <header class="header">
        <h1 class="header__h1">Little Taco Shop</h1>
        <nav class="header__nav">
            <ul class="header__ul">
                <li><a href="index.html">home</a></li>
                <li><a href="/#menu">menu</a></li>
                <li><a href="hours.html">hours</a></li>
                <li><a href="about.html">about</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <figure>
            <img src="../images/tacos_close_up_1000x649.png" alt="close tacos image" width="1000" height="649">
            <figcaption class="offscreen">little taco shop taco</figcaption>
        </figure>
    </section>

    <main class="main">
        <h2>Our Location</h2>

        <article class="main__article contact">
            <?php
            // Include the database connection file
            include_once 'db_connect.php';

            // Query to fetch contact information
            $query = "SELECT * FROM contact_info LIMIT 1"; // Assuming you have a table named 'contact_info'
            $stmt = $db->query($query);
            $contactInfo = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <p><?php echo $contactInfo['address']; ?></p>
            <br>
            <p type="tel">phone: <?php echo $contactInfo['phone']; ?></p>
        </article>

        <hr>

        <article class="main__article">
            <h2 class="contact__h2">Contact Form</h2>
            <form action="submit_contact.php" class="contact__form" method="post">
                <fieldset class="contact__fieldset">
                    <legend class="offscreen">Send us a message</legend>
                    <p class="contact__p">
                        <label class="contact_label" for="name">Name:</label>
                        <input class="contact__input" type="text" name="name" id="name" placeholder="Your name" required>
                    </p>
                    <p class="contact__p">
                        <label class="contact_label" for="email">Email:</label>
                        <input class="contact__input" type="email" name="email" id="email" placeholder="Your email" required>
                    </p>
                    <p class="contact__p">
                        <label class="contact_label" for="message">Your message:</label>
                    </p>
                    <p class="contact__p">
                        <textarea class="contact__textarea" name="message" id="message" cols="30" rows="10" placeholder="Type your message here" required></textarea>
                    </p>
                </fieldset>
                <button class="contact__buttons" type="submit">Send</button>
                <button class="contact__buttons" type="reset">Reset</button>
            </form>
        </article>
    </main>

    <footer class="footer">
        <p>
            <span class="nowrap"> Copyright &copy; <time id="year"></time></span>
            <span class="nowrap"> Little Taco Shop</span>
        </p>
    </footer>

</body>

</html>
