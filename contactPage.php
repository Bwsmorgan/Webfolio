<?php include 'contactPageMailer.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact | Brendan Morgan</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./contactPage.css">

</head>

<body style="margin: 0;">

    <nav>
        <a href="./index.html" class="internalLink">HOME</a>
        
        <a href="./index.html#projectsPage"
        class="internalLink" >PROJECTS</a>
        
        <a href="./about.html"class="internalLink">ABOUT</a>
        
        <a href="./contactPage.php"class="internalLink">CONTACT</a>

        <a href="#" class="externalLink"><i class="fab fa-instagram" style="font-size: 1.33em;"></i></a>

        <a href="https://www.linkedin.com/in/brendan-morgan-a043a8190/" target="_blank" class="externalLink" ><img class="linkedin_logo" src="./Images/Media Icons/linkedinLogo1.png" alt="linkedin_logo" style="height: 19px;width: 19px;"></a>
    </nav>
    
    <header>

        <h1 style="text-align: center;font-size: 50pt;">CONTACT ME</h1>

    </header>

    <section style="text-align: center;">

        <p style="margin: -10px 30px 0 30px;"><em>Thank you for taking the time to visit my website! If you'd like to chat, feel free to contact me.</em> </p><br>

        <i class="far fa-envelope"><span style="margin-left: 10px;margin-right: 20px; font-family:'Bodoni Moda', serif;">bwsmorgan@gmail.com</span></i>

        <i class="fas fa-phone-square" style="font-weight:bold"><span style="margin-left: 10px;font-family:'Bodoni Moda',serif;font-size: 10.5pt; font-weight:normal;">(289) 892-4533</span></i>
        
    </section>


    <div style="box-sizing: border-box; width: 100vw; height: 40vh; display: inline-block; margin-top: 20px; text-align: center;">

        <section>

            <form action="contactPage.php" method="POST" id="form">
            
                <input type="text" name="sendersName" id="name" placeholder=" Enter your name" size="75" required style="padding: 3px; margin-bottom: 10px;font-family:'Bodoni Moda';" ><br>
            
                <input type="email" name="sendersEmail" id="email" placeholder=" Enter your email" size="75" required style="padding: 3px; margin-bottom: 10px;font-family:'Bodoni Moda';"><br>

                <textarea name="message" id="message" cols="75" rows="9" placeholder=" Your message" style="margin-top: 3px;font-family:'Bodoni Moda';resize:none;"></textarea>
                <br>

                <input type="submit" name="submit" value="submit" id="submit" style="width: 10rem;font-family:'Bodoni Moda';">

                <?php echo $alert; ?>

            </form>
        </section>
    </div>

    <footer style="text-align: center;margin-top: 50px; font-size: 10pt;">
    &copy 2021 Brendan Morgan

    </footer>
    
</body>
</html>

