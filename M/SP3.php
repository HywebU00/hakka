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
					<h2 class="PageTitle">文物介紹</h2>
					<!-- function -->
					<?php require('include_functiontop.php'); ?>
					<!-- 內容：內部控制專區 -->
					<div class="ContentPage CP">
						<!-- Meta -->
						<div class="Meta pull-left">
							<div class="MetaDep"><i class="icon-tags"></i><span>發佈單位：</span><a href="">人事室</a></div>
							<div class="MetaDay"><i class="icon-calendar"></i><span>發布日期：</span>2015/10/15</div>
							<div class="MetaUpdate"><i class="icon-calendar"></i><span>更新日期：</span>2015/10/15</div>			
						</div>
						<!-- function with Public share -->
						<?php require('include_functiontop_public.php'); ?>
						<div class="Main_Info Rolling">
							<!-- 圖片Rolling -->
							<div id="contentFlow" class="ContentFlow">
							    <!-- should be place before flow so that contained images will be loaded first -->
							    <div class="loadIndicator"><div class="indicator"></div></div>
							    <div class="flow">
							        <div class="item">
							            <img class="content" src="images/upload/pics/01.jpg" />
							            <div class="caption">MAC LED</div>
							        </div>
							        <div class="item">
							            <img class="content" src="images/02.jpg"/>
							            <div class="caption">MAC Destop</div>
							        </div>
							        <div class="item">
							            <img class="content" src="images/h03.jpg"/>
							            <div class="caption">MAC Login</div>
							        </div>
							        <div class="item">
							            <img class="content" src="images/upload/pics/04.jpg"/>
							            <div class="caption">九州酒場</div>
							        </div>

							        <div class="item">
							            <img class="content" src="images/upload/pics/05.jpg"/>
							            <div class="caption">九州廟宇</div>
							        </div>
							        <div class="item">
							            <img class="content" src="images/upload/pics/06.jpg"/>
							            <div class="caption">九份咖啡</div>
							        </div>
							        <div class="item">
							            <img class="content" src="images/upload/pics/07.jpg"/>
							            <div class="caption">新公園櫻花</div>
							        </div>
							        <div class="item">
							            <img class="content" src="images/upload/pics/08.jpg"/>
							            <div class="caption">火燒雲</div>
							        </div>
							    </div>
							    <div class="globalCaption"></div>
							    <div class="scrollbar">
							        <div class="slider"><div class="position"></div></div>
							    </div>
							</div>
							<!-- 解說 -->
							<div class="Text">
								<h3>客家油紙傘</h3>
								<div class="More"><a href="CP3.php" title="">看更多介紹</a></div>
								<p>油紙傘在客家人的生活中扮演著重要的角色，除了實用性的遮風避雨用途外，更是一種帶有寓意。是一種吉祥的象徵，因為客家話的「油紙」，諧音為「有子」，也就是有子嗣的意思；所以客家的男孩在 16 歲成年禮時，父母會贈與一對紙傘而「傘」字中有四個人，又代表人丁興旺，傘型又是中國最圓滿的圓形，所以在女兒出嫁時，父母也會贈與一對紙傘，預祝百子千孫。</p>
								<p>其中大陸師傅黃玉堂與地方仕紳古阿珍合作經營的「廣珍昌紙傘廠」，名盛一時，維持了34年之久。而紙傘廠均以「廣」字命名，如「廣振興」、「廣德興」、「廣榮興」、「廣美興」等，藉以顯明源自廣東的不忘本精神。在民國50年代塑膠製的洋傘發明之前，美濃紙傘業曾創下年產量兩萬把、產值四千萬的輝煌歷史。然而，經營型態仍多以家庭（族）工廠為主。</p>
								<p>留傳至今已有八十餘載的美濃紙傘產業雖屢次克服逆境，突圍重生，但因第二代與第三代匠師多已過世或年邁，紙傘製作技藝瀕臨失傳，以難度最高的傘骨部分來說，該部分的技術原集中於屏東縣高樹鄉東興村，因臺灣工資上揚，80年代即外移至大陸。在競爭激烈的紙傘市場中，為省時省工而改採簡省的方式製作的紙傘愈來愈多。</p>
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