<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
      
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <!------ Include the above in your HEAD tag ---------->

     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleLogin.css') ?>">
 </head>  
 <body>  
 <div class="main">
      <div class="container">  
      <center>
               <div class="middle">
                    <div id="login">
                         <form method="post" action="<?php echo base_url(); ?>Dashboard/login_validation">
                              <fieldset class="clearfix">
                              <p ><span class="fa fa-user"></span><input type="text"  name="username"  Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                              <p><span class="fa fa-lock"></span><input type="password"  name="password" Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                                   <div>
                                        <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Forgot password?</a></span>
                                        <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" name="insert" value="Login"></span>
                                   </div>

                              </fieldset>
                              <div class="clearfix"></div>
                         </form>

                         <div class="clearfix"></div>

                    </div> <!-- end login -->
                    <div class="logo">LOGO
                         
                         <div class="clearfix"></div>
                    </div>
                    
               </div>
     </center> 
      </div>  
      </div>  
 </body>  
 </html>  