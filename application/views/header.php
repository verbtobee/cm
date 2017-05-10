<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="<?php echo $keywords; ?>">
		<meta name="author" content="โปรแกรมจัดเก็บเอกสาร">
		
		<title><?php echo $title; ?></title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/js/ie-support/html5.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ie-support/respond.js"></script>
		<![endif]-->
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-61318246-1', 'auto');
		  ga('send', 'pageview');
		
		</script>

	</head>

	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="top-header">
					<div class="container">
						สนใจ <a href="<?php echo base_url(); ?>โปรแกรมจัดเก็บเอกสาร"><b>โปรแกรมจัดเก็บเอกสาร</b>  หรือ<strong>รับเขียนโปรแกรม</strong>ตามความต้องการของลูกค้า</a> <font color="orange">☻</font> <a href="tel:0944827374">โทรหาเรา: <b>(094) 482-7374</b></a>

						<nav class="member-navigation pull-right">
							<?php if($this->bitauth->logged_in()) { ?>
								<?php if($this->bitauth->is_admin()) { ?>
									<a href="<?php echo base_url(); ?>backend/administrator/category"><i class="fa fa-user"></i> ยินดีต้อนรับ คุณ <?php echo $this->session->userdata('user_name'); ?></a>
								<?php } else { ?>
									<a href="<?php echo base_url(); ?>backend/administrator/profile"><i class="fa fa-user"></i> ยินดีต้อนรับ คุณ <?php echo $this->session->userdata('user_name'); ?></a>
								<?php } ?>
							<?php } else { ?>
								<a href="<?php echo base_url(); ?>backend/administrator/register/free"><i class="fa fa-user"></i> ลงทะเบียน</a>
							<?php } ?>
							<?php if($this->bitauth->logged_in()) { ?>
								<a href="<?php echo base_url(); ?>backend/administrator/signout"><i class="fa fa-sign-out"></i> ออกจากระบบ</a>
							<?php } else { ?>
								<a href="<?php echo base_url(); ?>backend/administrator"><i class="fa fa-lock"></i> เข้าสู่ระบบ</a>
							<?php } ?>
						</nav> <!-- .member-navigation -->
						
					</div> <!-- .container -->
				</div> <!-- .top-header -->

				<div class="bottom-header">
					<div class="container">
						<a href="<?php echo base_url(); ?>ระบบจัดเก็บเอกสาร" class="branding pull-left">
							<img height="60" width="250" src="<?php echo base_url(); ?>assets/images/โปรแกรมจัดเก็บเอกสาร.png" alt="โปรแกรมจัดเก็บเอกสาร" class="logo-icon"> 
							<h2 class="site-description">&nbsp;&nbsp;&nbsp;จำหน่าย <b>โปรแกรมจัดเก็บเอกสาร</b></h2>
						</a> <!-- #branding -->
						
						<nav class="main-navigation pull-right">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item<?php if ($active == 'home') { echo ' current-menu-item'; } ?>"><a href="<?php echo base_url();?>ระบบจัดเก็บเอกสาร"><?php if ($active == 'home') { echo '<b>'; } ?>หน้าแรก<?php if ($active == 'home') { echo '</b>'; } ?></a></li>
								<li class="menu-item<?php if ($active == 'product') { echo ' current-menu-item'; } ?>"><a href="<?php echo base_url();?>โปรแกรมจัดเก็บเอกสาร"><?php if ($active == 'product') { echo '<b>'; } ?>โปรแกรมจัดเก็บเอกสาร<?php if ($active == 'product') { echo '</b>'; } ?></a></li>
								<li class="menu-item<?php if ($active == 'book') { echo ' current-menu-item'; } ?>"><a href="<?php echo base_url();?>โปรแกรมจัดการเอกสาร"><?php if ($active == 'manual') { echo '<b>'; } ?>คู่มือการใช้งาน<?php if ($active == 'manual') { echo '</b>'; } ?></a></li>
								<li class="menu-item<?php if ($active == 'program') { echo ' current-menu-item'; } ?>"><a href="<?php echo base_url();?>รับเขียนโปรแกรม"><?php if ($active == 'program') { echo '<b>'; } ?><font color="red">รับเขียนโปรแกรม</font><?php if ($active == 'program') { echo '</b>'; } ?></a></li>
								<li class="menu-item<?php if ($active == 'article') { echo ' current-menu-item'; } ?>"><a href="<?php echo base_url();?>ระบบการจัดเก็บเอกสาร/เรื่องทั่วไป"><?php if ($active == 'article') { echo '<b>'; } ?>บทความ<?php if ($active == 'article') { echo '</b>'; } ?></a></li>
								<li class="menu-item<?php if ($active == 'contact') { echo ' current-menu-item'; } ?>"><a href="<?php echo base_url();?>ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์"><?php if ($active == 'contact') { echo '<b>'; } ?>ติดต่อเรา<?php if ($active == 'contact') { echo '</b>'; } ?></a></li>
							</ul>
						</nav> <!-- .main-navigation -->
					</div> <!-- .container -->
				</div> <!-- .bottom-header -->
			</header> <!-- .site-header -->