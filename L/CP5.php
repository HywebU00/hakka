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
			                        <div class="calendar">
			                            <table>
			                                <thead>
			                                    <tr>
			                                        <th>週一</th>
			                                        <th>週二</th>
			                                        <th>週三</th>
			                                        <th>週四</th>
			                                        <th>週五</th>
			                                        <th>週六</th>
			                                        <th>週日</th>
			                                    </tr>
			                                </thead>
			                                <tbody>
			                                    <tr>
			                                        <td class="past">
			                                            <span class="date"><a href="#">26</a></span>
			                                        </td>
			                                        <td class="past">
			                                            <span class="date"><a href="#">27</a></span>
			                                        </td>
			                                        <td class="past">
			                                            <span class="date"><a href="#">28</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告1</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">1</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告1</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">2</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告1</span>
			                                            </a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">3</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告1</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">4</a></span>
			                                        </td>
			                                    </tr>
			                                    <tr>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">5</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">6</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>3</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">7</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>3</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">8</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>3</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">9</a></span>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">10</a></span>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動1</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">11</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">【六堆園區】「伯公您好</span>
			                                            </a>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">年度農事學堂–插秧體驗</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>3</span></a>
			                                        </td>
			                                    </tr>
			                                    <tr>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">12</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">13</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">14</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">15</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動1</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">16</a></span>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">17</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td class="past">
			                                        	<span class="date"><a href="#">18</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                    </tr>
			                                    <tr>
			                                        <td class="now">
			                                        	<span class="date"><a href="#">19</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動3</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">20</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動3</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">21</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動3</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">22</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">六堆園區活動3</span>
			                                            </a>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>2</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">23</a></span>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">24</a></span>
			                                            <a href="#" class="Miaoli">
			                                                <span class="fc-title">苗栗園區活動3</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">25</a></span>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">「伯公您好神」客家音樂</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">「藝起來寫客家詩書法大</span>
			                                            </a>
			                                            <a href="#" class="Liutui">
			                                                <span class="fc-title">「藝起來寫客家詩書法大</span>
			                                            </a>
			                                            <a href="#" class="more">
			                                                <span class="fc-title">尚有2則活動</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>5</span></a>
			                                        </td>
			                                    </tr>
			                                    <tr>
			                                        <td>
			                                        	<span class="date"><a href="#">26</a></span>
			                                        </td>
			                                        <td>
			                                            <span class="date"><a href="#">27</a></span>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">28</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">29</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">30</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">31</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                        <td>
			                                        	<span class="date"><a href="#">1</a></span>
			                                            <a href="#" class="Hakka">
			                                                <span class="fc-title">中心活動公告2</span>
			                                            </a>
			                                            <a href="" class="rwd"><span>1</span></a>
			                                        </td>
			                                    </tr>
			                                </tbody>
			                            </table>
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