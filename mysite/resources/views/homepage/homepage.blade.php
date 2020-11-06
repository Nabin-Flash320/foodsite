<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyOnlineMeal.com</title>
    <link rel="stylesheet" href="homepage/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="homepage-container">
        <nav id="navbar">
            <div class="logo">
                <img src="homepage/img/log.jpg" alt="MyOnlineMeal.com">
            </div>

            <ul>
                <li class="items"><a href="{{ route('homepage') }}">Home</a></li>
                <li class="items"><a href="">Services</a></li>
                <li class="items"><a href="">About Us</a></li>
                <li class="items"><a href="">Contact Us</a></li>

            </ul>

            <div>
                <button id="signin_btn" >Sign up</button>
            </div>

            <div>
                <button id="login_btn" >Login</button>
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
    </div>
<!--Start singup page html.-->
    <link rel="stylesheet" href="signuppage/css/style.css">
    <div class="signup-form-container">
        <form class="forms" action="" method="post">
            <!--Header part of the signin form-->
            <div class="form-header">
                <div class="image">
                    <img src="signuppage/img/back.png" onclick="location.href='{{ route('homepage') }}'" alt="">
                </div>
                <h1>Sign up</h1>
            </div>
            <!--Body part of the sighin form-->
            <div class="form-body">
                <div class="horizontals">
                    <div class="form-datas lefts">
                        <!--firstname div-->
                        <label for="firstname" class="firstname-label">First name* </label>
                        <input type="text" class="input" name="firstname" placeholder="First name" required="required">
                    </div>
                    <div class="form-datas rights">
                        <!--lastname div-->
                        <label for="lastname" class="lastname-label">Last name </label>
                        <input type="text" class="input" name="lastname" placeholder="Last name">
                    </div>
                </div>
                <!--Email div-->
                <div class="form-datas">
                    <label for="email" class="email-label">Email*</label>
                    <input type="email" class="input" name="email" placeholder="Email" required="required">
                </div>
                <!--Password div-->
                <div class="form-datas">
                    <label for="password" class="password-label">Password*</label>
                    <input type="password" class="input" name="password" placeholder="Password" required="required">
                </div>
            </div>
            <!--Footer part of the sighin form-->
            <div class="form-footer">
                <span class="footer-span">* required</span>
                <button type="submit" class="signup-button">signup</button>
            </div>
        </form>
    </div>
<!--End signup page html-->

<!--Start login page html.-->
<link rel="stylesheet" href="loginpage/css/style.css">
    <div class="login-form-container">
        <div class="box2">
            <div class="head">
                <img src="signuppage/img/back.png" class="lgn-back" onclick="location.href='{{ route('homepage') }}'">
                <h1 >Login</h1>
            </div>
            <form class="form" action="">
              @csrf
                <input type="email" name="Email" placeholder="Email" required="required">
                <input type="password" name="Password" placeholder="Password" required="required">
                <input type="button" value="Log in" class="login-form-btn">
            </form>
            <br>
            <hr>
            <h3>
                or login with <a class="login" href="http://facebook.com">facebook</a>
            </h3>
        </div>
    </div>
<!--End login page html.-->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#signin_btn").click(function(){
                $(".homepage-container, .login-form-conatiner").fadeOut(0.1);
                $(".signup-form-container").show();
            });
        });
        $(document).ready(function(){
            $("#login_btn").click(function(){
                $(".homepage-container, .signup-form-conatiner").fadeOut(0.1);
                $(".login-form-container").show();
            });
        });
    </script>
</body>

</html>
