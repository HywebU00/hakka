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
					<h2 class="PageTitle">園區精華</h2>
					<!-- function with 我的收藏 -->
					<?php require('include_functiontop_Collect.php'); ?>
					<!-- 內容 -->
					<div class="ContentPage CP">
						<!-- <h2 class="">活動行事曆</h2> -->
						<div class="Main_Info">
							<div class="row clearfix">
								<div class="col-md-12 col-sm-12">
									<div class="calendar_toolbar" style="background: url(images/basic/bg_Calendar_head.jpg) left top no-repeat; background-size: cover;"> 
										<section>
											<h2 class="Date">2018/03/19<br><span>March</span></h2>
				                            <div class="conference_status form-inline">
					                            <div class="status">
					                                <span class="all">全部</span>
					                                <span class="Hakka">客家發展中心</span>
					                                <span class="Miaoli">臺灣客家文化館</span>
					                                <span class="Liutui">六堆客家文化園區</span>
					                            </div>
					                        </div>
										</section>
				                        <div class="Month-Controler">
			                            	<button type="button" class="btn btn-default pre" onclick="preMonth()" onkeypress="preMonth()" title="上一個月"><i class="icon-left-open-big"></i>上一個月</button>
			                            	<button type="button" class="btn btn-default next" onclick="nextMonth()" onkeypress="nextMonth()" title="下一個月">下一個月<i class="icon-right-open-big"></i></button>
			                            </div>
			                        </div>
			                        <div class="Daily_Calendar">
			                            <section>
			                            	<a href="#" class="Hakka">
				                            	<div class="Area">客家文化發展中心</div>
				                            	<div class="Issue">中心活動</div>
				                            	<div class="Act_Info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quod, possimus omnis reprehenderit, voluptatibus nisi. Nesciunt, perferendis impedit, ullam repellendus ducimus eius id vero aut sed accusamus fugiat explicabo, non.</div>
				                            </a>
			                            </section>
			                            <section>
			                            	<a href="#" class="Miaoli">
				                            	<div class="Area">臺灣客家文化館</div>
				                            	<div class="Issue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate soluta nihil molestias mollitia voluptas perferendis in maiores commodi pariatur ipsum, quas reprehenderit numquam, atque deserunt. Facilis iste illum cupiditate!</div>
				                            	<div class="Act_Info">說故事比賽活動，09:00 - 15:30</div>
				                            </a>
			                            </section>
			                            <section>
			                            	<a href="#" class="Liutui">
				                            	<div class="Area">六堆客家文化園區</div>
				                            	<div class="Issue">「伯公您好神」客家音樂劇</div>
				                            	<div class="Act_Info">「伯公您好神」客家音樂劇，13:30 - 17:30</div>
				                            </a>
			                            </section>
			                            <section>
			                            	<a href="#" class="Miaoli">
				                            	<div class="Area">客家文化發展中心</div>
				                            	<div class="Issue">「藝起來寫客家詩書法大賽」複賽</div>
				                            	<div class="Act_Info">「藝起來寫客家詩書法大賽」複賽，09:00 - 14:00</div>
				                            </a>
			                            </section>
			                        </div>
								</div>
							</div>
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