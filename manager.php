<?php

    session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,600;0,700;0,800;0,900;1,500&family=Poppins:ital,wght@0,200;0,300;0,600;0,700;1,400&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="manager.css">
    
</head>
<body>
    
     
    <nav>
        <div class="menu-icon" >
            <i class="uil uil-bars" onclick="settingToggle()"></i>
        </div>
        <div class="container">
            <div class="left">
                <h1>Notes</h1> <h2>|</h2> <h1>Password</h1> <span>Manager</span>
            </div>
            <div class="right">
                <ul>
                    <li class="active"> 
                        <div class="head-l">      
                            <h1>How It Works</h1>
                            <i class="icn uil uil-angle-up"></i>
                        </div>
                        <div class="sub-menu">
                            <div class="sub1">
                                <h1>OVERVIEW</h1>
                                <div class="sub2">
                                    <article>
                                         <a href="">Intro to Lastpass</a>
                                        <p>Simplify password management and protect your identity while online</p>
                                    </article>
                                    <article>
                                        <a href="">Password Manager</a>
                                        <p>Remember fewer passwords, log in faster and increase your online security</p>
                                    </article>
                                    <article>
                                        <a href="">Password Vault</a>
                                        <p>An encrypted safe location for all your passwords,notes,files and more</p>
                                    </article>
                                    <article>
                                        <a href="">Save and Autofill</a>
                                        <p>Save new accounts while on-the-go and fill passwords & forms with one click</p>
                                    </article>
                                </div>
                            </div>
                            <div class="sub1">
                                <h1>CORE FEATURE</h1>
                                <div class="sub2">
                                    <article>
                                        <a href="">Password Generator</a>
                                        <p>Create secure passwords using our built-in generator tool. Try it now for free!</p>
                                    </article>
                                    <article>
                                        <a href="">Dark Web Monitoring</a>
                                        <p>Auotmatically monitor and detect if your information has been exposed online</p>
                                    </article>
                                    <article>
                                        <a href="">Security Dashboard</a>
                                        <p>A central place to check the health and safer of your accounts</p>
                                    </article>
                                
                                </div>
                            </div>
                        </div>
                    
                    </li>
                    <li class="active">
                        <div class="head-l">
                            <h1>Personal</h1>
                            <i class="icn uil uil-angle-up"></i>
                        </div>
                        
                        <div class="sub-menu">
                            <div class="sub1">
                                <h1>INDIVIDUAL & FAMILY PLANS</h1>
                                <div class="sub2">
                                    <article>
                                        <i class="uil uil-usd-circle"></i> <a href="">Premium</a>
                                        <p>Unlimited device type access, dark web monitoring, security dashboard, emergency access and more</p>
                                    </article>
                                    <article>
                                        <i class="uil uil-smile-beam"></i> <a href="">Families</a>
                                        <p>Secure password management and sharing for your entire family</p>
                                    </article>
                            </div>
                        </div>
                        </div>
                    </li>
                    <li class="active"> 
                        <div class="head-l">
                        
                            <h1>Bussiness</h1>
                            <i class="icn uil uil-angle-up"></i>
                        </div>
                        
                        <div class="sub-menu">
                            <div class="sub1">
                                <h1>BUSINESS PLANS PLANS</h1>
                                <div class="sub2">
                                    <article>
                                        <i class="uil uil-crosshair"></i> <a href="">Teams</a>
                                        <p>Password management and secure password sharing for groups</p>
                                    </article>
                                    <article>
                                        <i class="uil uil-crosshairs"></i> <a href="">Business</a>
                                        <p>Simple and secure password management for your business.</p>
                                    </article>
                                    </article>
                                    <article>
                                        <i class="uil uil-chart-pie"></i> <a href="">Enterprise</a>
                                        <p>Scalable comprehensive password and ldentity management</p>
                                    </article>
                            </div>
                        </div>
                        <div class="sub1">
                            <h1>BUSINESS ADD-ONS</h1>
                            <div class="sub2">
                                <article>
                                    <i class="uil uil-code-branch"></i> <a href="">Single Sign-On (SSO)</a>
                                    <p>Give access and password protection with Single Sign-On for cloud apps.</p>
                                </article>
                                <article>
                                    <i class="uil uil-data-sharing"></i> <a href="">Multifactor Authentication (MFA)</a>
                                    <p>Challenge each login attempt by adding extra layers of security for access</p>
                                </article>
                        </div>
                    </div>
                    </div>
                    </li>
                    <li class="active"> 
                        <div class="head-l">
                            <h1>Resources</h1>
                            <i class="icn uil uil-angle-up"></i>
                        </div>
                        
                        <div class="sub-menu">
                            <div class="sub1">
                                <h1>SUPPORT</h1>
                                <div class="sub2">
                                    <article>
                                        <i class="uil uil-server-alt"></i> <a href="">Resource Center</a>
                                        <p>Everyting you need--ebooks to case studies--to improve your digital security</p>
                                    </article>
                                    <article>
                                        <i class="uil uil-cloud-question"></i> <a href="">Support & Documentation</a>
                                        <p>Instant access o our library of self-help resources and the Notes|PasswordManager Community</p>
                                    </article>
                                    <article>
                                        <i class="uil uil-shield-exclamation"></i> <a href="">Security Architecture</a>
                                        <p>Our zero-knowledge security model keeps your data private--even from us.</p>
                                    </article>
                            </div>
                        </div>
                        </div>

                    </li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
            <div class="last">
        
                <div class="profile-logo" >
                    <img src="profile-small.png" onclick="togfun()" alt="">
                </div>
                <div class="profile-contain">
                        <div class="profile-img">
                            <div class="pro-img">
                                <img src="profile-small.png" alt="">
                            </div>
                            <h1><?php echo implode($_SESSION['first']) ?> <?php echo implode($_SESSION['last']) ?> </h1>
                            <span><?php echo implode($_SESSION['email']) ?> </span>
                            <a href="" class="accn">Manage Your Account</a>
                        </div>
                        <div class="add-accn">
                            <i class="add-icon uil uil-user-plus"></i> <a href="">Add another account</a>
                        </div>
                        <div class="sign-out">
                            <a href="logout.php">Sign out</a>
                        </div>
                        <div class="policy">
                            <a href="">Privacy Policy</a>
                            <span><i class="uil uil-bright"></i></span>
                            <a href="">Terms of Service</a>
                        </div> 
                </div>
            </div>
        </div>
    </nav>


    <section class="manager-contain">
        <div class="manage-container snake-border">

            <div class="left-manager animl">
                <div class="head-manage">
                    <h1>Secure Your Notes<span>|</span>Password For Free</h1>
                    <p>Store Your Notes and Password Without any Hesitation</p>
                </div>     
                <div class="btn-manage">
                    <a href="noteblock.php" class="btnn btn-man">Notes</a>
                    <a href="" class="btnn btn-man">Password</a>
                </div>
            </div>
            <div class="right-manager animr">
                <img src="store.png" alt="">
            </div>
        </div>
        </section>

    
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
</body>
</html>
