<?php
    session_start();
    echo $_SESSION['username'];
    if(!isset($_SESSION['username'])){
        header('Location: interaction.html');
        exit;
    }
?><!DOCTYPE html>
<html>
  <head>
    <title>ROOH Ek muheem|ROOH NIT KKR|ROOH|ROOH NIT Kurukshetra</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ROOH is a social and cultural society of Kurukshetra.ROOH is run by students of NIT kurukshetra,Haryana.">
    <meta name="keywords" content="ROOH,ROOH ek muheem, Child sponsorship organizations,Social and cultural society kurukshetra">
      <meta name="author" content="Varun kumar" >
      <link rel="shortcut icon" href="images/logo.jpg">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/landing-page.css" rel="stylesheet">
      <link href="css/carousel.css" rel="stylesheet">
      <script src="js/json2.js" type="text/javascript"></script>
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/questions_comments_script.js" type="text/javascript"></script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56338110-1', 'auto');
  ga('send', 'pageview');

    </script>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt="ROOH Ek muheem" class="logo"/></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who we are <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="members.html">Members</a></li>
                <!--
                <li><a href="#">Helping Hands</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support Us <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="sponsor_a_child.html">Sponsor a Child</a></li>
                <li><a href="helping_hands.html#make_donation">Make Donation</a></li>
                <li><a href="helping_hands.html">Helping Hands</a></li>
                <li><a href="contact.html#show_your_support">Show your support</a></li>
                <!--
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
          
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="bookshelf.html">Bookshelf</a></li>
            <li class="active"><a href="interaction.html">Interaction</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div id="interaction">
        
            <div class="container">
                <code>Welcome <?php echo $_SESSION['username']; ?>!</code>
                
                
                <form action="logout.php" method="post">
                    <input type="submit" value="Logout"/>
                </form>
                
            
      
        
            <div id="post_a_question">
                <a href="#reply_a_question">Reply a question</a><br><br>
                <form action="post_a_question.php" method="post" name="post_a_question_form">
                      <p>Post your Question</p>
                      <textarea  style="width:100%;"name="question" autofocus required placeholder="Feel free to ask your query. You will be replied with most suitable answer." ></textarea>
                      <input type="submit" value="post"/>
                </form>
            </div>
        
      
          <div id="id01">
          </div>
      
      
          <div id="reply_a_question">
              <form action="reply_a_question.php" method="post" name="reply_a_question_form">
                      <p>Reply a question</p>
                      <label>Enter question id: <input type="text" name="qid" placeholder="e.g. 10" required/></label><br>
                      <textarea style="width:100%;" name="comment"  required placeholder="Please Make sure that you are replying to a correct question id"></textarea>
                      <input type="submit" value="Reply"/>
              </form>
          </div>
       </div>
    </div>
   
   <div class="container" id="footer">
      <center>
        <p>ROOH Ek muheem...</p>
        <p>Social and Cultural Society, NIT Kurukshetra</p>
        <p>
          <a href="http://www.facebook.com/roohkkr" target="_blank"><button type="button" class="btn btn-xs btn-danger">Like Us</button></a>
            <a href="http://goo.gl/forms/nqIzU2RWka" target="_blank"><button type="button" class="btn btn-xs btn-default">Feedback</button></a>
       
            <a href="http://goo.gl/forms/jU6jsmIg6x" target="_blank"><button type="button" class="btn btn-xs btn-success">Donate Now</button></a>
        
        </p>
     </center>
    </div>

     
      <!------------------------------------------------------------------------------------------------------------------- -->
    <!------------------------------------------------------------------------------------------------------------------- --> 
    <script src="js/jquery.js" type="text/javascript"></script>
    
    <script src="js/bootstrap.js"></script>
    
  </body>
</html>