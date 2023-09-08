<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>

	<!-- 主視覺 -->
	<div class="Visul_Img">
		<img src="images/basic/visul/LP1.jpg" alt="" class="img-responsive">
	</div>

	<!-- Content -->
	<section id="MainContent" class="">
		<div class="container">
			<div class="row">
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- PageTitle -->
					<h2 class="PageTitle">展覽回顧</h2>
					<!-- function -->
					<?php require('include_functiontop.php'); ?>
					<!-- 歷史查詢 -->
					<div class="Search_Bar History">
						<form class="form-horizontal">
							<h3>歷史展覽查詢</h3>
							<div class="form-group">
								<div class="col-md-9">
									<div class="form-group">
										<div class="col-md-12">
											<label for="inputName" class="col-md-4 control-label">展覽名稱</label>
											<div class="col-xs-12 col-sm-12 col-md-8">
												<input type="text" class="form-control" id="inputName" placeholder="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<label for="inputName" class="col-md-4 control-label">展覽期間</label>
											<!--取這邊-->
											<div class="col-md-4 CatchMe">
												<div class="col-xs-12 col-sm-12 input-group date">
													<input type="date" class="form-control" value="">
													<div class="input-group-addon">
														<span class="icon-calendar"></span>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="col-xs-12 col-sm-12 input-group date">
													<input type="date" class="form-control" value="">
													<div class="input-group-addon">
														<span class="icon-calendar"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 BTN">
									<a href="" title="" type="button" class="BTN_SearchMore">搜尋歷史展覽</a>
								</div>
							</div>
						</form>
						<div class="Search_Type">
							<button type="button" class="btn btn-default active">所有展館</button>
							<button type="button" class="btn btn-default">常設館</button>
							<button type="button" class="btn btn-default">有展館</button>
							<button type="button" class="btn btn-default">台灣館</button>
							<button type="button" class="btn btn-default">兒童館</button>
							<button type="button" class="btn btn-default">文創館</button>
							<button type="button" class="btn btn-default">第五特展室</button>
							<button type="button" class="btn btn-default">其他展區</button>
						</div>
					</div>
					<!-- 內容：內部控制專區 -->
					<div class="ContentPage List_wrap">
						<!-- page top -->
						<?php require_once('include_pagetop.php'); ?>
						<!-- list page -->
						<div class="List Expo_Review">
							<div class="Data_Title">
								<span>展覽名稱</span>
								<span>展期(起)	-	展期(迄)</span>
							</div>
							<ol>
								<li>
									<a href="" title="">
										<span class="Expo_Name">「延異-演繹客家服飾新風格」(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">【地方・記憶・時間流─紀實攝影與當代藝術的對話】(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
								<li>
									<a href="" title="">
										<span class="Expo_Name">藏富客庄-茶語特展(已撤展)</span>
										<span class="Expo_Date">2015/08/15	-	2015/10/11</span>
									</a>
								</li>
							</ol>
						</div>
						<!-- page bottom -->
						<?php require_once('include_pagebottom.php'); ?>
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