<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstore Register&Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .mychange
        {
            background: #9DA9A0;
        }

        li a
        {
            color: white;
        }

        .footer
        {
            background: #9DA9A0;
        }

        .footer p
        {
            color: whitesmoke;
        }

        .footer li
        {
            color: ghostwhite;
        }

        .toapi
        {
            display: inline-block;
            background: #EE7B30;
            color: #fff;
            padding: 8px 30px;
            margin: 10px 0;
            border-radius: 30px;
            border: none;
            transition: background 0.5s;
            cursor: pointer;
            width: 93%;
        }

        .toapi img
        {
            margin: -60px 5px -60px 0px;
            height: auto;
            width: 30px;
        }

        .toapi:hover
        {
            background: #563434;
        }

        #facebook
        {
            background: dodgerblue;
            width: 87%;
        }

        #facebook:hover
        {
            background: #563434;
        }

    </style>
</head>
<body>

    <div class="mychange">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="myimages/devstorelogo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="menuitems">
                        <li> <a href="index.html" id="inactive">Home</a> </li>
                        <li> <a href="" id="inactive">Products</a> </li>
                        <li> <a href="" id="inactive">About</a> </li>
                        <li> <a href="" id="inactive">Contact</a> </li>
                        <li> <a href="account.php" id="active">Account</a> </li>
                    </ul>
                </nav>
                <img src="myimages/cart.png" width="30px" height="30px">
                <img src="myimages/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <!-- Below the navigation bar, the main operation is performed. -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="myimages/homeback7.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>

                        <form action="" id="loginform">
                            <input type="text" placeholder="Username/Email">
                            <input type="password" placeholder="Password">
                            <input type="checkbox" name="rememberme" value="know" id="diff">Remember Me
                            <button type="submit" class="btn">Login &#8594;</button>
                            <a href="">Forgot Password?</a>
                            <button type="submit" class="toapi"><img src="myimages/smallgoogle.png">Login Via Google &#8594;</button>
                            <button type="submit" class="toapi" id="facebook"><img src="myimages/smallfb.png">Login Via facebook &#8594;</button>
                        </form>
                        <form action="" id="registerform">
                            <input type="text" placeholder="Full Name">
                            <input type="email" placeholder="Email">
                            <input type="number" placeholder="Phone Number">
                            <input type="password" placeholder="Create Password">
                            <input type="password" placeholder="Confirm Password">
                            <button type="submit" class="btn">Register &#8594;</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Section begins from here -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download our App for Android and ios.</p>
                    <div class="app-logo">
                        <img src="myimages/playstore.png">
                        <img src="myimages/appstore.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="myimages/devstorelogo.png">
                    <p>Our mission is to continually raise the bar of the customer
                        experience by using the technology.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Terms and Conditions</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>

            <hr>
            <p class="copyright">Copyright &copy; Pravesh Poudel, 2021</p>
            <div class="footerBottom">
                <p> Design By: <span style="color: white">@Pravesh Poudel</span>
                    <a href="https://facebook.com/praveshpaudel.96"> <img src="myimages/fb16.png" alt="Image loading failed.">
                        <a href="https://www.instagram.com/prawes_p5/"> <img src="myimages/insta16x16.png" alt="Image loading failed.">
                            <a href="https://np.linkedin.com/in/praveshpoudel"> <img src="myimages/linkdin16x16.png" alt="Image loading failed.">
                </p>
            </div>
        </div>
    </div>

    <!--JavaScript written for the menu icon(onclick 'menutoggle()' functionality) -->
    <script>
        var menuitems = document.getElementById("menuitems");
        menuitems.style.maxHeight = "0px";

        function menutoggle()
        {
            if(menuitems.style.maxHeight == "0px")
            {
                menuitems.style.maxHeight = "200px";
            }
            else
            {
                menuitems.style.maxHeight = "0px";
            }
        }
    </script>

    <!--JavaScript for Toggle the form. -->
    <script>
        var loginform = document.getElementById("loginform");
        var registerform = document.getElementById("registerform");
        var indicator = document.getElementById("indicator");

        function register()
        {
            registerform.style.transform = "translateX(0px)";
            loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";

        }

        function login()
        {
            registerform.style.transform = "translateX(300px)";
            loginform.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }

    </script>

</body>
</html>