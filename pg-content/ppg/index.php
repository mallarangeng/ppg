<?php
include_once 'class/function.php';
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
</head>


<body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><font class="hijau"><strong>PPG ADMIN</strong></font></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
          	   <li>
              <a href="">Home</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Profile &nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="index.php?r=transaksi&pg=rekap_data">Visi</a></li>
                 <li><a href="index.php?r=transaksi&pg=rekap_data">Struktur Org</a></li>
                <li class="divider"></li>
                <li><a href="index.php?page=pem_show">Misi</a></li>
                
               
               </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Kegiatan &nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="index.php?r=transaksi&pg=trans_show">Program Kerja</a></li>
                 <li><a href="index.php?r=koordinator&pg=koor_data">Kemandirian</a></li>
            
               </ul>
            </li>
              <li>
              <a href="#teamppg">Team PPG</a>
            </li>
             <li>
              <a href="#contact">Kontak Kami</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
                       <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Help<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="">About</a></li>
                <li><a href="">Setting</a></li>
                </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
      <!--BODY
      !-->
    
    <div class="container-fluid">
      <br>
<p>
<br>
<div class="alert alert-success" role="alert">Selamat datang Pak Hendri :)
      <a href="#" class="alert-link"><i> Anda butuh uang tunai ??? Samaaaa :) :) </i></a>
    </div>
      <?php
                                if (!isset($_GET['r'])){
                                    include('view/konten/konten.php');
                                }else{
                                    $r  = $_GET['r'];
                                    $pg = $_GET['pg'];
                                        include "view/".$r.'/'.$pg.".php";
                                }
                            ?>


  
      </div>

      <footer>
      <div class="container-fluid">
        <hr>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top"></a></li>          
            </ul>
            <p><a href="" rel="nofollow"	>PPG Tangerang Barat 2015 - <?php echo date('Y'); ?></a> Design Build With <a href="https://github.com/twbs/bootstrap" target="_blank" rel="nofollow">Framework Bootstrap</a></p>

          </div>
        </div>

      </footer> 
    </div>


</body>
</html>
