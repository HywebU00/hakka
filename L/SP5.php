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
					<h2 class="PageTitle">意見信箱</h2>
					<!-- function -->
					<?php require('include_functiontop.php'); ?>
					<!-- 內容：意見信箱 -->
					<div class="ContentPage QP_wrap">
						<p>親愛的來賓您好:<br>歡迎您使用民意信箱，為維護您的權益，避免浪費行政資源，請務必詳閱以下說明，再行撰寫：<br>
							<ol>
								<li>請您務必於來信資料中填寫真實姓名及聯絡方式（聯絡電話或電子郵件信箱），作為受理依據。</li>
								<li>因應101 年10 月1 日個人資料保護法施行，您填寫的資料，僅提供承辦單位業務上聯繫使用，不對外公開或作為其他用途；但如您所陳內容涉及其他單位權責，基於行政機關各有法定職掌與專業分工，將轉請該單位處理並逕行回復，因此您的個人基本資料（如姓名、聯絡電話、聯絡地址、電子郵件地址等），將隨同電子郵件內容一併轉知權責單位。</li>
								<li>依據「行政院及所屬各機關處理人民陳情案件要點」第14 點規定，人民陳情案件有下列情形之一者，得不予處理：
									<ol>
										<li>無具體內容或未具真實姓名或聯絡方式者。</li>
										<li>同一事由，經予適當處理，並已明確答復後，而仍一再陳情者。</li>
										<li>非陳情事項之主管機關，接獲陳情人以同一事由已分向各主管機關陳情者。</li>
									</ol>
								</li>
								<li>回覆作業時間需3個工作天。</li>
							</ol>
						</p>
						<p>如果您有任何問題，可本信箱直接向我們反映，我們將儘速回答您的問題或轉請相關單位處理，並竭誠歡迎您的建言，謝謝。<br><span class="Text_Red">信件新增表單 此符號 * 為必填欄位</span></p>
						<!-- QP page -->
						<div class="QP">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>園區別</label>
									<div class="col-md-10">
										<label class="radio-inline"><input type="radio" name="optradio">苗栗園區</label>
										<label class="radio-inline"><input type="radio" name="optradio">六堆園區</label>
									</div>
								</div>
								<div class="form-group">
									<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputContact" placeholder="請輸入聯絡人">
									</div>
								</div>
								<div class="form-group">
									<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>聯絡電話</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputContact" placeholder="請輸入聯絡電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>電子郵件</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入電子郵件">
									</div>
								</div>
								<div class="form-group">
									<label for="inputSubject" class="col-md-2 control-label"><span class="required">*</span>信件主旨</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputSubject" placeholder="請輸入信件主旨">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>內容</label>
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
									<label for="inputCaptcha" class="col-md-2 control-label">附件</label>
									<div class="col-md-5">
										<input type="file" class="form-control" id="inputFile" placeholder="">
									</div>
									<div class="col-md-5">
										<button type="submit" class="btn BTN_Upload"><i class="icon-upload-1"></i> 上傳</button>
										<span>附件大小上限100MB</span>
									</div>
								</div>

								<!-- 2019-0718 -->
								<div class="form-group">
									<label for="inputCaptcha" class="col-md-2 control-label">附件</label>
									<div class="col-md-10">
										<div class="col-md-6 upload_grp">
											<input type="text" class="form-control" id="inputFile" placeholder="尚未選擇任何檔案" readonly="">
											<div class="upload_btn">
										        <!-- <span>選擇檔案</span> -->
										        <label for="" class="">選擇檔案</label>
										        <input type="file" class="check_file" />
										    </div>
										</div>
										<div class="col-md-4">
											<span>附件大小上限100MB</span>
										</div>
										<div class="col-md-12">
											<span>可上傳的檔案格式(txt, doc, docx, xls, xlsx, pdf, jpg, jpeg, gif, png, bmp)</span>
										</div>
									</div>
								</div>
								<!-- 2019-0718 -->
								
								<div class="form-group">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>隱私權聲明</label>
									<div class="col-md-10">
										<div class="textBox">
											<p>個人資料之蒐集、處理及利用<br>公務機關名稱：客家委員會客家文化發展中心</p>
											<ol>
												<li>蒐集目的<br>
													客家委員會客家文化發展中心(以下簡稱本網站)等相關服務、業務推廣、統計研究及其他公務機關法定職務必要範圍之利用。
												</li>
												<li>本網站於使用者的個人資料收集<br>
													謹遵守中華民國「電腦處理個人資料保護法」之規定，除非取得您的同意或其他法令之特別規定，本網站絕不會將您的個人資料任意提供出售、交換、或出租給其他團體、個人或私人企業。但有下列情形者除外：<br>
													<ul>
														<li>配合司法單位合法的調查。</li>
														<li>配合相關職權機關依職務需要之調查或使用。</li>
														<li>基於善意相信揭露為法律需要，或為維護和改進網站服務而用於管理。</li>
													</ul>
													個人資料之類別：姓名、性別、電子信箱、電話等頁面所載之個人資料，及使用本網站時由伺服器所自動留存之資料。
												</li>
												<li>個人資料利用之期間、地區、對象及方式<br>
													<ul>
														<li>利用期間：服務終止後6個月。</li>
														<li>利用地區：中華民國境內及依法令所為之國際傳輸。</li>
														<li>利用對象：前揭所載公務機關或依法令規定提供與事業主管機關或其第三方。</li>
														<li>利用方式：以數位檔案或實體紙本形式蒐集、處理及利用蒐集目的必要範圍內之利用。</li>
														當事人得行使之權利及方式：依個人資料保護法第3條規定，享有查詢或請求閱覽、請求製給複製本、請求補充或更正、請求停止蒐集、處理或利用、請求刪除之權利；可向前揭所載公務機關所在地址親自辦理或以書面通知後，由公務機關依法處理。<br>
														當事人拒絕提供對其權益之影響：為意見信箱頁面之「選填」項目，不影響使用網站之權利，惟可能導致部分功能或服務無法提供。
													</ul>
												</li>
												<li>服務變更及通知<br>
													您同意本網站保留於任何時間點，不經通知隨時修改、暫時或永久停止繼續提供本服務（或其任一部分）的權利。如依法或其他相關規定須為通知時，本網站得以包括但不限於：張貼於本服務網頁、電子郵件，或其他現在或未來合理之方式通知您，包括本服務條款之變更。但若您違反本服務條款，以未經授權的方式存取本服務，或於註冊時所提供之資料不正確或未更新，您將不會收到前述通知。當您經由授權的方式存取本服務，您即同意本服務所為之任何及所有給您的通知，均視為送達。
												</li>
												<li>本網站資料之保護<br>
													本網站主機均設有防火牆、防毒系統等相關各項資訊安全設備及必要的安全防護措施，加以保護網站及您的個人資料。<br>採用嚴格的保護措施，只由經過授權的人員才能接觸您的個人資料，如因業務需要有必要委託本館以外相關單位提供服務時，本網站亦會嚴格要求其遵守保密義務。
												</li>
												<li>隱私權保護政策<br>
													本網站相當重視隱私權的保護。關於您的特定資料，將依本網站「隱私權保護政策」保護與規範。您了解並同意當您使用本服務時，本服務可依據「隱私權保護政策」之規範進行您個人資料的蒐集與利用，如線上活動及網路調查等。<br>
													如果您對「客家委員會客家文化發展中心」之隱私權保護政策有任何疑問，歡迎與我們聯絡。
												</li>
											</ol>
										</div>
										<div class="checkbox text-center">
											<label><input type="checkbox">我已詳細閱讀，並同意接受以上內容。</label>
										</div>
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