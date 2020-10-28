<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyOnlineMeal.com</title>
    <link rel="stylesheet" href="homepage/css/style.css">
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <img src="homepage/img/log.jpg" alt="MyOnlineMeal.com">
        </div>

        <ul>
            <li class="items"><a href="">Home</a></li>
            <li class="items"><a href="">Services</a></li>
            <li class="items"><a href="">About Us</a></li>
            <li class="items"><a href="">Contact Us</a></li>

        </ul>

        <div>
            <button id="login_btn">Login</button>
        </div>

    </nav>
    <section id="home">
        <h1 class="h-primary">Welcome to MyOnlineMeal.com</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sed libero nesciunt unde </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt </p>
        <p>Lorem ipsum dolor sit amet consectetur </p>
        <button class="btn" href="./welcome">Order Now</button>
    </section>

    <hr>
    
    <section class="service-conatiner">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="homepage/img/bug.jpg" alt="">
                <h2 class="h-secondary center">Chicken Burger</h2>
                <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas temporibus molestiae,
                    eos totam quia nulla ipsum labore repellat libero eligendi.</p>
            </div>
            <div class="box">
                <img src="homepage/img/piz.jpg" alt="">
                <h2 class="h-secondary center">Mixed Pizza</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas temporibus molestiae, eos totam quia
                    nulla ipsum labore repellat libero eligendi.</p>
            </div>
            <div class="box">
                <img src="homepage/img/ste.jpg" alt="">
                <h2 class="h-secondary center">Steak with Wine</h2>
                <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas temporibus molestiae,
                    eos totam quia nulla ipsum labore repellat libero eligendi.</p>
            </div>
            <div class="box">
                <img src="homepage/img/del.jpg" alt="">
                <h2 class="h-secondary center">Delivery</h2>
                <p class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas temporibus molestiae,
                    eos totam quia nulla ipsum labore repellat libero eligendi.</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our supporting partners</h1>
        <div id="clients">
            <div class="client-item">
                <img src="homepage/img/log1.jpg" alt="">
            </div>
            <div class="client-item">
                <img src="homepage/img/log2.jpg" alt="">
            </div>
        </div>

    </section>

    <hr>
    <section id="contact">
        <h1 class="h-primary center"> Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter you name">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter you email">
                </div>
                <label for="phone">Phone no:</label>
                <input type="phone" name="phone" id="phone" placeholder="Enter you phone number">
                <label for="message">Message:</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button class="btn">Submit</button>

            </form>
        </div>

    </section>

    <footer>
        <div class="center">
            Copyright&copy; www.MyOnineMeal.com. All rights reserved.
        </div>
    </footer>
</body>

</html>