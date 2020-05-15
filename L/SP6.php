<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>

	<!-- 主視覺 -->
	<div class="Visul_Img">
		<img src="images/basic/visul/NP1.jpg" alt="" class="img-responsive">
	</div>

	<!-- Content -->
	<section id="MainContent" class="">
		<div class="container">
			<div class="row">
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- PageTitle -->
					<h2 class="PageTitle">轉寄友人</h2>
					<!-- function -->
					<?php require('include_functiontop.php'); ?>
					<!-- 內容：意見信箱 -->
					<div class="ContentPage QP_wrap">
						<p>如果您有任何問題，可本信箱直接向我們反映，我們將儘速回答您的問題或轉請相關單位處理，並竭誠歡迎您的建言，謝謝。<br><span class="Text_Red">信件新增表單 此符號 * 為必填欄位</span></p>
						<!-- QP page -->
						<div class="QP">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>您的姓名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputContact" placeholder="請輸入聯絡人">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>您的電子信箱</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入電子郵件">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>好友的電子信箱</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入電子郵件">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>給好友的話(50字以內)</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="請輸入內容" id="inputContent"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
									<div class="col-md-5">
										<input type="password" class="form-control" id="inputCaptcha" placeholder="驗證碼">
									</div>
									<div class="col-md-5">
										<span class="captcha"><img src="images/basic/code.bmp"></span>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> 重新產生</button>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-volume-up"></i> 語音播放</button>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10 col-sm-12">
										<button type="submit" class="btn BTN_Cancel">取消</button>
										<button type="submit" class="btn BTN_Send">送出</button>
									</div>
								</div>
							</form>
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