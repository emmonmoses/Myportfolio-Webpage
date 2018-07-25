<?php
/**
 * Created by PhpStorm.
 * User: Emmon Moses
 * Date: 15/11/2016
 * Time: 09:45 AM
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="Css/Main.css" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<form action="Index.php" method="post">
<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
           <!-- <a class="navbar-brand" href="index.php">
                <h3>Emmon</h3>
                <h3>Moses</h3>
            </a>-->
            <?php
            //require_once("../My Profile/connection.php");
            //$views   = mysqli_query($con,'select * from guests');
            ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">HOME</a></li>
                <li><a href="#about">ABOUT ME</a></li>
                <li><a href="#experience">EXPERIENCE</a></li>
                <li><a href="#portfolio">MY WORKS</a></li>
                <li><a href="#contact">CONTACTS</a></li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<section id="intro" class="intro">
    <div class="slogan">
        <h2>WELCOME TO <span class="text_color">MY PROFILE</span> </h2>
    </div>
    <br>
    <div class="page-scroll">
	<h3>Download</h3>
   <a href="../My Profile/download2.php?download_file=MY COVER LETTER NEW.doc">
    <input type="button" value="COVER LETTER" class="btn BTN-SUCCESS"></a>
    
   <a href="../My Profile/download.php?download_file=MY RESUME.doc">
    <input type="button" value="CURRICULUM VITAE" class="btn BTN-SUCCESS"></a>
    </div>   

    </section>
<section id="about" class="home-section bg-gray">
    <div class="container" id="Item">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">
                    About Me
                </h2>
            </div>
            <div class="col-sm-2">
                <img src="Images/IMG_0335.JPG" height="130" width="160" class="img-circle img-responsive">
            </div>
            <div class="col-sm-4">
                 <p>I was born on the 24<sup>th</sup> January, 1992, a last born in the family of eight. I started my education around 1997 completed my primary
                level education in 2006 then later joined Maseno National School KISUMU in February 2007. </p>
                <p>Having gone through four years of studies in high school I completed my Secondary level education at Lions High School in 2010
                with a mean grade of A plain then later joined Catholic University of Eastern Africa in August 

            </div>
            <div class="col-sm-4">
               <p>My passion in computer science was built through projects and motivations from lecturers and other students. I did a computer science
                timetabling system as my final year project. It was a web based application aimed at scheduling units within the department without collision.</p>
                <p>After going through challenges and struggles, I completed my coursework by July 2015.I later graduated with a first class honors in
                    3<sup>rd</sup> October, 2015.</p>
            </div>
        </div>
    </div>
</section>
<section id="experience" class="home-section bg-gray">
    <div class="container" id="Item">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">
                  Experience
                </h2>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>INSTITUTIONS</b></div>
                    <div class="panel-body">
                        <div id="" align="center">
                            <p><b>May-July 2014 : KENYA POWER & LIGHTING CO.LTD</b></br>
                            </p>
                            <p><b>August-December 2014 : IBM RESEARCH LAB AFRICA</b></br>
                            </p>
                            <p><b>May-July 2015 : SAROVA PANAFRIC HOTEL</b></br>
                            </p>
                            <p><b>January 2016-To Date : CONSUMER INSIGHT AFRICA</b>
                            </p>
                        </div>
                      <p>In <b>IBM Research Lab Africa</b> I was in a team of seven, which was developing a solution that would help kenyan investors to invest in different
                                investment opportunities. My major role in the team was developing  web portal and writing queries. The internship was for three months
                      that is from 1<sup>th</sup>August, 2014 to 31<sup>th</sup> December, 2014.</p>
                            <p>
                                I joined<b> Consumer Insight Africa</b> on the 13<sup>th</sup> January, 2016 as an IT intern(programmer trainee). In Consumer Insight I have developed a web application.
                                The application has four major modules among other functionalities. One of the module is time log that keeps track of time taken by  specific employee to do certain
                                task. The other module is for room reservation that helps in reserving meeting rooms in the company.The third one is for requesting the company's transport services for internal use by the employees.
                                Finally, is the leave module,that is used in applying and managing the staffs leave days.
                      </p>
                            <p>I am also responsible in providing IT support.</p>
                            <p>
                                I joined <b> Kenya Power & Lighting CO.LTD</b> 1<sup>st</sup> May, 2014 as an IT intern. In Kenya Power & Lighting CO.LTD I am developing a web application.
                                The application has three major modules. One of the module is time log that keeps track of time taken by  specific employee to do certain
                                task. The other module is a room reservation that helps in reserving meeting rooms in the company.And the last module is for reserving transport services for internal use by the employees.
                            </p>
                            <p>I was also responsible in providing IT support.</p>
                            <p>
                                I joined <b>Sarova Panafric Hotel</b> 1<sup>st</sup> May, 2015 as an IT intern. In Sarova Panafric Hotel I am developing a web application.
                                The application has three major modules. One of the module is time log that keeps track of time taken by  specific employee to do certain
                                task. The other module is a room reservation that helps in reserving meeting rooms in the company.And the last module is for reserving transport services for internal use by the employees.
                            </p>
                            <p>I was also responsible in providing general IT support.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>SKILLS</b></div>
                    <div class="panel-body">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 91%">
                                100% pHp,ADOBE DREAMWEAVER CC,DRUPAL,pHp STORM,MySQL
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 91%">
                                90% HTML5
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%">
                                80% BOOTSTRAP
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%">
                                70% JQUERY
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 55%">
                                65% C#
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 55%">
                                45% ANGULAR JS
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 55%">
                                30% CODEIGNITER
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 40%">
                                25% LARAVEL5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="home-section bg-gray">
    <div class="container" id="Item">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">
                    Portfolio
                </h2>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>MY WORKS</b></div>
                    <div class="panel-body">
            <div class="col-sm-6">
                <img src="Images/ciaport.png" class="img-rounded img-responsive" height="374" width="603">
                <p>Consumer Insight Portal</p>
                </div>
            <div class="col-sm-6">
                <img src="Images/transport.png" class="img-rounded img-responsive" height="374" width="603">

                <p>Transport Portal</p></div>
            <div class="col-sm-6">
                <img src="Images/leave.png" class="img-rounded img-responsive" height="374" width="603">
                <p>Leave Management Portal</p> </div>
        </div>
    </div>
                </div>
</section>
<section id="contact" class="home-section bg-gray">
    <div class="container" id="Item">
        <div class="row">
            <div class="col-sm-12" >
                <h2 class="title text-center">
                    Contact Me
                </h2>
            </div>
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Leave a Message Here:</b></div>
                        <div class="panel-body">
                            <?php
                            require_once("../My Profile/connection.php");
                            $Error="";
                            $val = "";
                            //Start of Inserting into DB//
                            if(isset($_POST['submit'])) {
                                $val = $_GET['value'];
                                $mail = $_POST['Email'];
                                $subjects = $_POST['Subject'];
                                $message = $_POST['Message'];
                                $query = mysqli_query($con,"insert into contacts(Email,Subject,Message) VALUES('$mail','$subjects','$message')");
                                echo "<span class='myclass'>Message Sent Successfully</span>";
                            }
                            else{
                                $Error="Your Message has not been sent,please try again";
                            }
                            //End of Insert into DB//

                            //Sending//
                            $save = '';
                            if($save){
                                $mail = $_POST['Email'];
                                $subjects = $_POST['Subject'];
                                $message = $_POST['Message'];
                                $query = mysqli_query($con,"insert into contacts(Email,Subject,Message) VALUES('$mail','$subjects','$message')");
                                $save = mysqli_query($con,$query);
                                $mail_msg = $send_contact = "";
                                $sending_src = $from['Email'];
                                $send_contact = $cont['Email'];
                                $headers  = "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                $to = 'oemmon@yahoo.com';
                                $subject = $title['Subject'];
                                $msg='<div style=\"color:black\">".$message."</div>';

                                $headers .= "From:".$sending_src. "\r\n" .
                                    "Cc: emmononyango@gmail.com";
                                if(mail($to,$subject,$msg,$headers)){
                                    $mail_msg = 'Your message has been sent Successfully.';
                                }
                                else{
                                    $mail_msg = 'Error Sending Message.';
                                }
                                $info = "";
                            }
                            ?>
                            <div class="col-sm-12" id="contacts">
                                <b>Mobile:</b> +254714964780 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <b>Email:</b> oemmon@yahoo.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <b>Postal Address:</b> P.O.BOX 556-00502,KAREN NAIROBI,KENYA.
                            </div>
                            <div class="col-sm-12">

                                <div class="col-sm-8">
                                    <label><h3>Email:</h3></label><br>&nbsp;&nbsp;<input type="email" name="Email" class="input-lg col-sm-4" pattern="[^ @]*@[^ @]*" placeholder="Enter your email" required=""><br>
                                </div>
                                <div class="col-sm-8">
                                    <label><h3>Subject:</h3></label><br>&nbsp;&nbsp;<input type="text" placeholder="Enter your email subject" name="Subject" class="input-lg col-sm-4">
                                </div>
                                <div class="col-sm-8">
                                    <label><h3>Message:</h3></label><br>&nbsp;&nbsp;<textarea rows="4" cols="50" style="height: 200px;width: auto" name="Message" placeholder="Type your Message here" class="input-lg col-sm-4" required=""></textarea>
                                <br>
                                </div>
                                <div class="col-sm-8">
                               <?php echo'<input type="submit" formaction="Index.php?value=$val" name="submit" value="SEND MESSAGE" class="btn-success"/>';?>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </div>
</section>
<div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
    </button>
    <!-- <a class="navbar-brand" href="index.php">
         <h3>Emmon</h3>
         <h3>Moses</h3>
     </a>-->
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
       <!-- <li class="active"><p>copyright2016@oemmon.com</p></li>-->
        <li class="active"><a href="http://www.facebook.com/oemmon/">
        <img src="Images/face.png">FACEBOOK</a></li>
        <li><a href="https://twitter.com/oemmon">
        <img src="Images/twit.png">TWITTER</a></li>
        <li><a href="https://www.linkedin.com/in/emmon-moses-b9719863?trk=nav_responsive_tab_profile_pic">
        <img src="Images/linkd.png">LINKED IN</a></li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- Core JavaScript Files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
</form>
</body>
</html>