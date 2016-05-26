<?php
	if($this->session->userdata('username') == FALSE && $this->session->userdata('password') == FALSE)
	{
		redirect("primary/login");
	}
  // Turn off all error reporting
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PT POS INDONESIA">
    <meta name="author" content="SUMAPALA || Temmy Rustandi Hidayat">
    <meta name="keyword" content="POS, PT, Indonesia, Kurir, online, POS Online, Kurir Online">
    <link rel="shortcut icon" href="<?php echo site_url(); ?>img/pic/pos2.png">

    <title>Agen - PT POS INDONESIA</title>
	
	<!-- SCRIPT JS -->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<?php echo (isset($map) ? $map['js'] : ''); ?>
	
	<!-- END -->
	
	<!-- Bootstrap CSS -->    
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" /> 
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>

  <body class="bg-main-content">
  
	<script>
		function konfirmasi(pesan)
		{
			var konfirm = confirm(pesan);
			
			if(konfirm == false)
			{
				return false;
			}
		}
		
		function formatangka1(objek)
   {
      a = objek.value;
      b = a.replace(/[^\d]/g,"");
      c = "";
      panjang = b.length;
      j = 0;
      for (i = panjang; i > 0; i--) {
        j = j + 1;
        if (((j % 3) == 1) && (j != 1)) {
          c = b.substr(i-1,1) + "." + c;
        } else {
          c = b.substr(i-1,1) + c;
        }
      }
      objek.value = c;
   }
	</script>

  <!-- container section start -->
  <section id="container">
      <header class="header dark-bg">
            <!--<div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>-->

            <!--logo start-->
            <a href="<?php echo base_url(); ?>" class="logo">PT POS INDONESIA |</a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <a href="<?php echo base_url()?>primary">
                            Beranda
                        </a>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <!--<span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>-->
                            <span class="username"><?php echo $this->session->userdata('name'); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <!--<li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>-->
                            <li>
                                <a href="<?php echo base_url() ?>primary/logout" onclick="return confirm('Anda yakin akan logout?');"><i class="icon_key_alt"></i> Log Out</a>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      
      <!--main content start-->
      <section id="main-content-agen">

          <?php
          if ($this->session->flashdata('alert') == TRUE) {
              $msg = $this->session->flashdata('alert');
              ?>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                   aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"><?php echo $msg['title']; ?></h4>
                          </div>
                          <div class="modal-body">
                            <?php echo $msg['msg']; ?>
                          </div>
                          <div class="modal-footer">
                            <button data-dismiss="modal" class="btn <?php echo($msg['status'] == 0 ? 'btn-danger' : 'btn-primary'); ?>" type="button">Close
                            </button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->
              <?php
          }
          ?>
          <section class="wrapper">            
              <!--overview start-->
			
			<?php
				include("parameter.php");
			?>
			
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>js/scripts.js"></script>
	
	<!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url(); ?>js/<?php echo (isset($edit) ? 'vendor/' : ''); ?>validation.js"></script>
	
	
	<script src="<?php echo base_url(); ?>js/vendor/jquery.sortelements.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/jquery.bdt.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/jquery.simplePagination.js"></script>
    <script src="<?php echo base_url(); ?>js/chosen.jquery.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.dateselector.js"></script>

	<script>
	$('.dateselector-basic').dateSelector();
	$('.dateselector-bs').dateSelector({
		cssFramework: 'bootstrap',
	});
	$('.dateselector-fdt').dateSelector({
		cssFramework: 'foundation',
	});
	$('.dateselector-times').dateSelector({
	   showTime: true,
		hoursStep: 2,
		minutesStep: 15,
		secondsStep: 30
	});
	</script>
	
	

	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>
	
	<script>
			$(function() {
				$("#pagging").simplePagination({
					previousButtonClass: "btn btn-danger",
					nextButtonClass: "btn btn-danger"
				});


			});
	</script>
	
	
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>

  </body>
</html>
