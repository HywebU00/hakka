<script  src="assets/js/jquery-1.11.2.js"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/module/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.lazyload.min.js"></script>
<script src="assets/js/BS3JS.min.js"></script>
<script type="text/javascript" src="assets/module/fullcalendar-2.3.1/fullcalendar.min.js"></script>
<!-- full calendar -->

<!-- slick  -->
<script src="assets/module/slick/slick.js"></script>
<!-- slick 自訂 -->
<script src="js/slick-addscripts.js"></script> 
<!-- header offcanvas -->	
<script src="assets/js/bootstrap.offcanvas.js"></script>

<!-- 送select選單內容至select框內 -->	
<script type="text/javascript">
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>

<!-- 左右主選單 點一個秀一個-->
<script type="text/javascript">
	$(function(){
		$('#Header .navbar-header .pull-right').click(function(){
			$(this).parent().siblings().eq(1).removeClass('in');
		});

		$('#Header .navbar-header .pull-left').click(function(){
			$(this).parent().siblings().eq(0).removeClass('in');
		});
	})
</script>

<!-- 解決 Accordion 點擊後會跳掉的問題-->
<script type="text/javascript">
	// $(function(){
	// 	$('.panel-heading').click(function(){
	// 		$(this).parent().siblings().children(1).removeClass('in');
	// 		$(this).next().addClass('in');
	// 		return false;
	// 	});
	// })

	$(function(){
		$('.panel-heading').mouseover(function(){
			$(this).next().addClass('in');
			$(this).parent().siblings().children(1).removeClass('in');
			return false;
		});
	})

</script>

<!-- Open Fatfooter-->
<script type="text/javascript">
	$(document).ready(function() {
	    $(".FatFooterBtn").click(function() {
	        $('#FatFooter>div>nav>ul>li>ul').slideToggle(function() {
	            if ($(this).is(':visible')) {
	                document.getElementById("FatFooterBtn").value = "收合";
	            } else {
	                document.getElementById("FatFooterBtn").value = "展開";
	            }
	        });
	        $(this).toggleClass('close');
	    });
	});
</script>

<!-- Coverflow-->
<script language="JavaScript" type="text/javascript" src="assets/module/contentflow/contentflow.js"></script>
<script tyle="text/javascript">
	var cf = new ContentFlow('contentFlow', {
		reflectionColor: "#000000" 
		,startItem:2 //起始item，預設是中間
		,endOpacity:0.1 //後面item透明度
		,visibleItems:2 //後面顯示item數量
		,maxItemHeight:0 //最大高度
		,relativeItemPosition:"center"
	});
</script>

<!-- Tab-->
<script type="text/javascript">
	$(function () {
          // 預設顯示第一個 Tab
          var _showTab = 0;
          var $defaultDiv = $('div.tabs').eq(_showTab).addClass('active');
          $($defaultDiv.find('a').attr('href')).siblings('div.tab_container').hide();

          // 當 li 頁籤被點擊時...
          // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
          $('div.tabs').click(function () {
              // 找出 li 中的超連結 href(#id)
              var $this = $(this),
              _clickTab = $this.find('a').attr('href');
              // 把目前點擊到的 li 頁籤加上 .active
              // 並把兄弟元素中有 .active 的都移除 class
              $this.addClass('active').siblings('.active').removeClass('active');
              // 淡入相對應的內容並隱藏兄弟元素
              $(_clickTab).stop(false, true).fadeIn().siblings('div.tab_container').hide();

              return false;
          })
          $("#font_l").trigger('click');
      });
</script>
<!-- Tab 自訂-->
<script type="text/javascript">
	function Focus(id) {
		$("#" + id).trigger('click');
		document.getElementById(id).focus();
	}
</script>


<!-- scrollUp-->
<script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script> 
<!-- scrollUp 自訂-->     
<script type="text/javascript">
	$(function () {
		$.scrollUp({
		    scrollName: 'scrollUp', // Element ID
		    topDistance: '300', // Distance from top before showing element (px)
		    topSpeed: 300, // Speed back to top (ms)
		    animation: 'fade', // Fade, slide, none
		    animationInSpeed: 200, // Animation in speed (ms)
		    animationOutSpeed: 200, // Animation out speed (ms)
		    scrollText: 'Scroll to top', // Text for element
		    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		});
	});
</script>


<script type="text/javascript">
	$(function(){
		$(".FontSmall").click(
			function(){
				$(".ContentPage").css({fontSize:"90%"});
				$("h1").css({fontSize:"30px"});
				$("h2").css({fontSize:"26px"});
				$("h3").css({fontSize:"20px"});
				$("h4").css({fontSize:"16px"});
				$("h5").css({fontSize:"11px"});
				$("h6").css({fontSize:"11px"});
				$(".Block0 .MainLink ul li a").css({fontSize:"1em"});
				$("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"0.9em"});
				return false;
				}
		)
		$(".FontMidium").click(
			function(){
				$(".ContentPage").css({fontSize:"100%"});
				$("h1").css({fontSize:"32px"});
				$("h2").css({fontSize:"1.8em"});
				$("h3").css({fontSize:"24px"});
				$("h4").css({fontSize:"20px"});
				$("h5").css({fontSize:"0.813em"});
				$("h6").css({fontSize:"0.813em"});
				$(".Block0 .MainLink ul li a").css({fontSize:"1.2em"});
				$("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"1em"});
				return false;
				}
		)
		$(".FontLarge").click(
			function(){
				$(".ContentPage").css({fontSize:"110%"});
				$("h1").css({fontSize:"43px"});
				$("h2").css({fontSize:"36px"});
				$("h3").css({fontSize:"30px"});
				$("h4").css({fontSize:"23px"});
				$("h5").css({fontSize:"19px"});
				$("h6").css({fontSize:"17px"});
				$(".Block0 .MainLink ul li a").css({fontSize:"1.4em"});
				$("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"1.2em"});
				return false;	
				}
		)
	})
</script>

<!-- dropdownHover-->
<script src="js/bootstrap-hover-dropdown.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
</script>
<script type="text/javascript">
	$(function () {
		$('ul.nav').children('li.dropdown').keyup(
			function(){
				$(this).children().show();
				$(this).siblings().focus(function(){
					$(this).hide()
				});
			});
		$('ul.nav').children('li.dropdown').keyup(	
			function(){
				$(this).siblings().children('ul').hide();
			});
		$('ul.nav li.dropdown li:last>a').focusout(
			function(){
				$('ul.nav li.dropdown ul').hide();
		})
	});
</script>
<!--第三節點-->
<script>
	(function($){
		$(document).ready(function(){
			$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
		        event.preventDefault();
		        event.stopPropagation();
		        $(this).parent().siblings().removeClass('open');
		        $(this).parent().toggleClass('open');
		    });
		});
	})(jQuery);
</script>


<script type="text/javascript">
	$(function () {
		$('.FAQ dd').hide();
    	$('.FAQ dd:first-of-type').show();
    	$('.FAQ dt:first-of-type').addClass("Answerclose");

		$('.FAQ dt').click(function() {
			$('.FAQ dd').slideUp();
			$('.FAQ dt').removeClass("Answerclose");

			$(this).next().slideDown();
			$(this).addClass("Answerclose");
			return false;
		});
	});
</script>

<!--fancy box-->
<script type="text/javascript" src="js/fancyBox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
	$(function(){
	    /* Button helper. Disable animations, hide close button, change title type and content */
	    $('.fancybox-buttons').fancybox({
	        openEffect  : 'none',
	        closeEffect : 'none',

	        prevEffect : 'none',
	        nextEffect : 'none',

	        closeBtn  : false,

	        helpers : {
	            title : {
	                type : 'inside'
	            },
	            buttons : {}
	        },

	        afterLoad : function() {
	            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
	        }
	    });
	})
</script>
