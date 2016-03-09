<?php
include_once 'class/function.php';
?>

<title>PPG Tangerang Barat</title>
<link id="favicon" rel="shortcut icon" href="images/favicon/favicon.png" />
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>bootstrap/source-sans-pro/source-sans-pro.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>bootstrap/css/custom.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
  	<link href="<?php echo base_url(); ?>jquery/jquery-ui.css" rel="stylesheet" type="text/css" />  
	<script src="<?php echo base_url(); ?>jquery/jquery-ui.js"></script>
 	<link href="<?php echo base_url(); ?>images/favicon/favicon.png" rel="shortcut icon" />


<div class="color-line"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="text-center m-b-md">
                <h3>LOGIN SYSTEM</h3>
                <small>
                    
            </small>
             </div>
            <div class="hpanel">
                <div class="panel-body">
                           <form action="?op=in" method="post" id="loginForm" role="form">
                            <div class="form-group">
                                <label class="control-label" for="username">USERNAME</label>
                                <input type="text" placeholder="Username" title="Please enter you username" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">PASSWORD</label>
                                <input type="password" title="Please enter your password" placeholder="Password" name="password" id="password" class="form-control" required>
                            </div>
                            <input class="btn btn-success btn-block" type="submit" name="login" value="Login"> 
                            </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            2015 - <?PHP echo date ('Y'); ?> - PPG Tangerang Barat
        </div>
    </div>
</div>

