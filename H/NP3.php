<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>

	<!-- 主視覺 -->
	<div class="Visul_Img">
		<img src="images/basic/visul/NP2.jpg" alt="" class="img-responsive">
	</div>

	<!-- Content -->
	<section id="MainContent" class="">
		<div class="container">
			<div class="row">
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- PageTitle -->
					<h2 class="PageTitle">參觀資訊</h2>
					<!-- function -->
					<?php require('include_functiontop.php'); ?>
					<!-- 內容：參觀資訊 -->
					<div class="ContentPage Visit_Info">
						<a href="" class="Item_BTN Miaoli" title=""><span>苗栗園區</span></a>
						<a href="" class="Item_BTN Liutui" title=""><span>六堆園區</span></a>
					</div>
				</article>
			</div>
		</div>
	</section>
	<!-- 相關連結 -->
	<?php require_once('include_BannerSlide.php'); ?>
	<!-- fatfooter -->
	<?php require_once('include_fatfooter.php'); ?>
	<!-- footer -->
	<?php require_once('include_footer.php'); ?>
	<!-- jQuery -->
	<?php require_once('include_jq.php'); ?>
</body>
</html>