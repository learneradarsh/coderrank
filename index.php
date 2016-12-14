<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>CodeRRank || HOME</title>
    <?php include_once 'logo_shortcut_icon.php'; ?>
    <meta property="og:title" content="Join CodeRRank to know your different profiles of different platforms." />
    <meta property="og:url" content="http://www.coderrank.in" />
    <meta property="og:image" content="images/logo.png"/>
    <meta property="og:description" content="Code@ter is a Competitive Programming  Website having some new features like Questions in hindi also,and Clash Of Geeks." />
    <meta property="og:site_name" content="Code@ter.com" />
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" herf="css/font.css"/>
    <link rel="stylesheet" href="main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css"/>
    <link rel="stylesheet" href="css/bootstrap-social/assets/css/font-awesome.css"/>
  </head>
<body>
<?php include_once 'header.php'; ?>
<!--main doc start -->
<div class="page-header container">
  <h1>CodeRRank&nbsp;&nbsp;<small>{ Get Rank with CodeRRank }</small></h1>
</div>
<?php 
$chk1 =$_GET['q'];
$chk2=$_GET['q1'];
$print=$_GET[q2]; 
if($chk1 != null)
{
echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><center><strong>User Already Registered</strong></center></div>";
}
else if($chk2 != null)
{
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><center><strong>User successfully registered.&nbsp;Please Check your email for activation link.</strong></center></div>";
}
else if($print!=null)
{
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><center><strong>Your account has been successfully activated.You can now login.</strong></center></div>";
}
?>
<div class="jumbotron container">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="hot-panel">
            <form class="form" method="post" action="register.php" enctype="multipart/form-data" name="form_signup" id="form_signup">
                <p align="center"><?php include_once 'coderrank_logo.php'; ?></p>
                <div class="form-group" style="margin-top: 12px;">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" maxlenght="100" required/> 
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" maxlength="150" required/>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" maxlength="150" required/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block"><strong>SignUp</strong></button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
    </div>
</div>
<!-- main doc end-->
<!-- script files ---->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--- script files closed -->
<!--start footer-->
<?php include_once 'footer.php';  ?>
<!--End Footer-->

</body>
</html>
