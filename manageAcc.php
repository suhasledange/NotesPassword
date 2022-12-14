<?php

    session_start();
    $con = mysqli_connect('localhost','root','');
    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);
    
    mysqli_select_db($con,'manager');
    $query = "select primg from registration where first='$first' && last='$last'";
    $res = mysqli_query($con,$query);
    $primg = mysqli_fetch_assoc($res);
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
<link rel="stylesheet" href="ACC.css">
    
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
                    <img class="proin" style="border-radius: 50%;" src="profile/<?php echo implode($primg) ?>" onclick="togfun()" alt="">
                </div>
                <div class="profile-contain">
                        <div class="profile-img">
                            <div class="pro-img">
                                <img class="proin" src="profile/<?php echo implode($primg)?>" alt="">
                            </div>
                            <h1><?php echo implode($_SESSION['first']) ?> <?php echo implode($_SESSION['last']) ?> </h1>
                            <span><?php echo implode($_SESSION['email']) ?> </span>
                            <a href="" class="accn">Manage Your Account</a>
                        </div>
                        <div class="add-accn">
                             <a href="noteblock.php">Notes</a>
                             <h1>|</h1>
                             <a href="passblock.php">Passwords</a>
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

    <?php 

    $query = "select * from registration where first='$first' && last='$last'";
    $qu = "select id from registration where first='$first' && last='$last'";
            $res = mysqli_query($con,$query);
            $rows = mysqli_fetch_assoc($res);
            $qur = mysqli_query($con,$qu);
            $i = mysqli_fetch_assoc($qur);
            $id = implode($i);
    ?>

    <section class="manager-contain">
        <div class="manage-container snake-border">
        
        <form class="form-cont " action="updateAcc.php" method="post" enctype="multipart/form-data">
        <div class="left-acc" onclick="document.getElementById('profile_btn').click()">
            <input hidden type="file" id="profile_btn" name="profile_img">
            <h1 class="up_btn">Change Profile Pic</h1>
            <input hidden type="text" name="id" value="<?php echo $id?>">
            <img src="profile/<?php echo implode($primg)?> " alt="">
        </div>
        <div class="right-acc form-con"> 
        <div class="lab">
            <label for="">First Name : </label>
            <input type="text" name="first" value="<?php echo $rows['first']?>">
        </div>  
        <div class="lab">
        <label for="">Last Name : </label>
        <input type="text" name="last" value="<?php echo $rows['last']?>">
        </div>  
        <div class="lab">
        <label for="">Email : </label>
        <input type="text" name="email" value="<?php echo $rows['email']?>">
        </div>  
        <div class="lab">
        <label for="">Password : </label>
        <input type="text" name="pass" value="<?php echo $rows['password']?>">
        </div>
        <button class="upda_btn" type="submit" name="updatesubmit">Update</button>
    </div>
        </form>

        </div>
        </section>

    
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
</body>
</html>
