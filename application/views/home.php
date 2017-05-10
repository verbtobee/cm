			<main class="content">
				<div class="slider">
					<ul class="slides">
						<li>
							<div class="container">
								<img src="<?php echo base_url(); ?>assets/dummy/ระบบจัดเก็บเอกสาร.gif" alt="โปรแกรมจัดเก็บเอกสาร">
								<div class="slide-caption">
									<h2 class="slide-title">มันไม่ง่ายเลย เมื่อต้องการหาเอกสารด่วน แต่หาไม่เจอ</h2>
									<small class="slide-subtitle"><b>DOCDEPOT</b> สุดยอด<b>โปรแกรมจัดเก็บเอกสาร</b> ที่ได้รับความนิยมในขณะนี้</small>
									<div class="slide-summary">
										<p>ค้นหาง่าย สะดวก รวดเร็ว คุณไม่ต้องวุ่นวายกับการจัดเก็บเอกสารกองโต เหนื่อยไหมที่ต้องการใช้เอกสารเร่งด่วน แต่ต้องเสียเวลาในการค้นหานาน</p>
									</div>
									<a href="<?php echo base_url(); ?>คุณสมบัติโปรแกรมจัดเก็บเอกสาร" class="button">ดูรายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</li>
						<li>
							<div class="container">
								<img src="<?php echo base_url(); ?>assets/dummy/ดาวน์โหลดโปรแกรมจัดเก็บเอกสาร_ฟรี.gif" alt="ดาวน์โหลดโปรแกรมจัดเก็บเอกสารฟรี">
								<div class="slide-caption">
									<h2 class="slide-title"><?php echo $promotion->title; ?></h2>
									<small class="slide-subtitle"><?php echo $promotion->subtitle; ?></small>
									<div class="slide-summary">
										<p><?php echo $promotion->body; ?></p>
									</div>
									<a href="<?php echo base_url(); ?>โปรแกรมจัดเก็บเอกสาร" class="button">ดาวน์โหลดฟรี</a>
								</div>
							</div>
						</li>
						<li>
							<div class="container">
								<img src="<?php echo base_url(); ?>assets/dummy/โปรแกรมจัดเก็บเอกสาร.gif" alt="โปรแกรมจัดเก็บเอกสาร">
								<div class="slide-caption">
									<h2 class="slide-title"><?php echo $first_article->title; ?></h2>
									<small class="slide-subtitle">ข่าวสารน่าอ่าน ทันสมัย ไม่ตกเทรนด์</small>
									<div class="slide-summary">
										<p><?php echo $first_article->subtitle; ?></p>
									</div>
									<a href="<?php echo base_url(); ?>จำหน่ายระบบการจัดเก็บเอกสาร/<?php echo $first_article->category_name; ?>/<?php echo $first_article->title; ?>" class="button">อ่านเพิ่มเติม</a>
								</div>
							</div>
						</li>
					</ul> <!-- .slides -->
				</div> <!-- .slider -->

				<div class="fullwidth-block about-section">

					<div class="container">
					
						<?php 
							$keyword = array("ระบบจัดเก็บเอกสาร","โปรแกรมจัดเก็บเอกสาร","คุณสมบัติโปรแกรมจัดเก็บเอกสาร","โปรแกรมจัดการเอกสาร","ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร","ระบบการจัดเก็บเอกสาร","จำหน่ายระบบการจัดเก็บเอกสาร","ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์");
							$random_keys1 = array_rand($keyword,1);
						?>

						<div class="row">

							<div class="col-md-6 wow fadeInUp">
								<h2>ทำไมถึงเลือกใช้โปรแกรมของเรา</h2>
								<p class="leading">เราเชื่อว่า ฝีมือการพัฒนาซอฟต์แวร์ของโปรแกรมเมอร์ไทย ไม่น้อยหน้าชาติใดในโลก</p>
								<p>
									ด้วยประสบการณ์การทำงานของทีมงาน ที่เคยผ่านงานทั้งภาครัฐ และเอกชนมาไม่น้อยกว่า 10 ปี ผสมผสานกับไอเดียใหม่ ๆ ที่พร้อมตกผลึกผลงานที่มีคุณภาพออกสู่สายตาลูกค้า
									เราจึงมั่นใจว่าซอฟต์แวร์ที่ลูกค้าได้รับ จะตรงตามความต้องการมากที่สุดและมีความพึงพอใจในการใช้ซอฟต์แวร์ของเรา
								</p>
								<p>
									การพัฒนาซอฟต์แวร์<b>โปรแกรมจัดเก็บเอกสาร</b>ให้ตรงตามวัฒนธรรมไทยและความคุ้นเคยของคนไทย จึงเป็นสิ่งที่เราคำนึงถึงเป็นอันดับแรก รวมทั้งการบริการหลังการขายอันน่าประทับใจ
									เพราะเราเชื่อว่าความสัมพันธ์อันดีกับลูกค้ามีค่ากว่าผลกำไรที่เราได้รับเสมอ
								</p>
								<p>การส่งเสริมผู้ผลิตซอฟต์แวร์ของคนไทย โดยเฉพาะ <a href="http://www.verb2bee.com/%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%9A%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3">โปรแกรมจัดเก็บเอกสาร</a> จะนำมาซึ่งภาษีที่รัฐจัดเก็บมาเพื่อพัฒนาประเทศ มากกว่าที่จะสนับสนุนซอฟต์แวร์ต่างประเทศซึ่งมีราคาค่อนข้างแพง เราขอขอบคุณที่ไม่ลืมกัน</p>
								<h2><font color="#fff"><b><?php echo $keyword[$random_keys1]; ?></b></font></h2>

							</div>

							<div class="col-md-6">
								<h2 class="wow fadeInRight">บทความล่าสุด</h2>
								<hr class="separator">
								<ul class="feature-list">
									<?php $i=0; foreach ($latest_article as $item) { $i=$i+1; ?>
									<li class="wow fadeInRight">
										<?php 
											if ($i == 1) { $icon = 'icon-money-globe'; }
											if ($i == 2) { $icon = 'icon-server-lock'; }
											if ($i == 3) { $icon = 'icon-person-time'; }
											
											$random_keys = array_rand($keyword,1);
											
										?>
										<i class="<?php echo $icon; ?>"></i>
										<h3><a href="<?php echo base_url(); ?>จำหน่ายระบบการจัดเก็บเอกสาร/<?php echo $item->category_name; ?>/<?php echo $item->title; ?>"><?php echo $item->title; ?></a> <font color="#fff"><b><?php echo $keyword[$random_keys]; ?></b></font></h3>
										<p><?php echo $item->subtitle.' ...'; ?></p>
									</li>
									<?php } ?>
								</ul>
							</div>

						</div> <!-- .row -->

					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
			</main> <!-- .content -->