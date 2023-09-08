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
					<h2 class="PageTitle">最新消息</h2>
					<!-- function with 我的收藏 -->
					<?php require('include_functiontop_Collect.php'); ?>
					<!-- 內容 -->
					<div class="ContentPage CP">
						<h2 class="">一般內容頁標題</h2>
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
							<!-- Come on! 放這邊! -->
						</div>
						<!-- table -->
						<div class="RWD_Table table-responsive">
							<table class="table table-hover">
								<tr>
									<th>時間</th>
									<th>景點</th>
									<th>簡介</th>
								</tr>
								<tr>
									<td width="15%">09:00~17:00</td>
									<td width="20%">六堆客家文化</td>
									<td width="65%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit harum aperiam et id veritatis amet dolores odit ipsa quod, neque necessitatibus, commodi illo deleniti optio aliquid minus. Dolorem error, illum.</td>
								</tr>
								<tr>
									<td>09:00~17:00</td>
									<td>六堆客家文化</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit harum aperiam et id veritatis amet dolores odit ipsa quod, neque necessitatibus, commodi illo deleniti optio aliquid minus. Dolorem error, illum.</td>
								</tr>
								<tr>
									<td>09:00~17:00</td>
									<td>六堆客家文化</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit harum aperiam et id veritatis amet dolores odit ipsa quod, neque necessitatibus, commodi illo deleniti optio aliquid minus. Dolorem error, illum.</td>
								</tr>
								<tr>
									<td>09:00~17:00</td>
									<td>六堆客家文化</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit harum aperiam et id veritatis amet dolores odit ipsa quod, neque necessitatibus, commodi illo deleniti optio aliquid minus. Dolorem error, illum.</td>
								</tr>
							</table>
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