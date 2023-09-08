<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>

	<!-- 主視覺 -->
	<div class="Visul_Img">
		<img src="images/basic/visul/CP-Liutui.jpg" alt="" class="img-responsive">
	</div>

	<!-- Content -->
	<section id="MainContent" class="">
		<div class="container">
			<div class="row">
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- PageTitle -->
					<h2 class="PageTitle">文物介紹</h2>
					<!-- function with 我的收藏 -->
					<?php require('include_functiontop_Collect.php'); ?>
					<!-- 內容 -->
					<div class="ContentPage CP">
						<h2 class="">生活用品 - 傘架、割稻機</h2>
						<!-- Meta -->
						<div class="Meta pull-left">
							<div class="MetaDep"><i class="icon-tags"></i><span>發佈單位：</span><a href="">人事室</a></div>
							<div class="MetaDay"><i class="icon-calendar"></i><span>發布日期：</span>2015/10/15</div>
							<div class="MetaUpdate"><i class="icon-calendar"></i><span>更新日期：</span>2015/10/15</div>			
						</div>
						<!-- function with Public share -->
						<?php require('include_functiontop_public.php'); ?>
						<!-- 圖文 -->
						<div class="Main_Info">
							<!--照片展示-->
							<div class="row clearfix">
								<div class="col-md-6 col-sm-12">
									<div class="Muti_Slider Half">	
										<!--大圖-->
										<div class="slider-for">
											<div class="slide">
												<div class="imgBOX">
													<img src="images/foto/001.jpg" class="img-responsive">	
												</div>
											</div>
											<div class="slide">
												<div class="imgBOX">
													<img src="images/foto/002.jpg" class="img-responsive">	
												</div>
											</div>
											<div class="slide">
												<div class="imgBOX">
													<img src="images/foto/003.jpg" class="img-responsive">	
												</div>
											</div>
											<div class="slide">
												<div class="imgBOX">
													<img src="images/foto/004.jpg" class="img-responsive">	
												</div>
											</div>
											<div class="slide">
												<div class="imgBOX">
													<img src="images/foto/001.jpg" class="img-responsive">	
												</div>
											</div>
											<div class="slide">
												<div class="imgBOX">
													<img src="images/foto/002.jpg" class="img-responsive">	
												</div>
											</div>
										</div>
										<!--小圖-->
										<div class="slider-nav">
											<div><img src="images/foto/001.jpg" class="img-responsive"></div>
											<div><img src="images/foto/002.jpg" class="img-responsive"></div>
											<div><img src="images/foto/003.jpg" class="img-responsive"></div>
											<div><img src="images/foto/004.jpg" class="img-responsive"></div>
											<div><img src="images/foto/001.jpg" class="img-responsive"></div>
											<div><img src="images/foto/002.jpg" class="img-responsive"></div>
										</div>
									</div>
								</div>
								<div class="Book_Info col-md-6 col-sm-12">
									<h4>文物簡介</h4>
									<p>本油紙傘的發明，是中國南方先民為了抵擋南方充沛雨水的穿透，塗以桐油防水，以實用性為主，稱作原鄉傳統竹傘（原鄉傘），並沒有彩繪的步驟，後來因西式洋傘的傳入而沒落。 民國70年代，美濃紙傘因電視劇「星星知我心」及雜誌的報導而知名度大開，便改以彩繪紙傘增加其東方文化色彩，具有觀賞及收藏的價值，加上日本對於紙傘有著歷史的情誼，遂大量下訂單，而挽救了當時岌岌可危的紙傘技藝。當時，李鴻鈞已接下紙傘廠的經營，漸漸地把紙傘融入生活與藝術，更將紙傘文化重新孕育。</p>
									<p>基於發揚美濃油紙傘傳統工藝的理念，而打造「以傘結緣」的文化村，經過完善的規劃設計學習如何將當地社區文化與社區居民生活融合在一起，進而達到「社區文化化，文化社區化」。希望能以原鄉緣為圓心，在文化村寬敞的空間與多元化的內涵下，以推廣紙傘文化為根基，融合陶藝、文物、民俗、美食五大主軸，將客家風情以放射狀的圓無限延伸，這正是客家的精神所在。</p>
								</div>
							</div>
						</div>
						<!-- 下載列表 -->
						<div class="Link_Box">
							<section class="Download">
								<h3>附件下載</h3>
								<ol>
									<li><a href="" title="" class="DOC">園區開放時間檔案下載</a><span>更新日期：2016/03/16、檔案下載：2241次</span></li>
									<li><a href="" title="" class="XLS">園區開放時間檔案下載</a><span>更新日期：2016/03/16、檔案下載：2241次</span></li>
									<li><a href="" title="" class="PDF">園區開放時間檔案下載</a><span>更新日期：2016/03/16、檔案下載：2241次</span></li>
								</ol>
							</section>
							<section class="Links">
								<h3>相關連結</h3>
								<ol>
									<li><a href="" title="">客家文化發展中心</a></li>
									<li><a href="" title="">客家文化發展中心</a></li>
									<li><a href="" title="">客家文化發展中心</a></li>
								</ol>
							</section>
						</div>
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