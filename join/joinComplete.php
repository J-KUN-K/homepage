<?php include('../include/incTop.php'); ?>
<body>
<?php include('../include/incHeader.php'); ?>

<!-- sub-wrap -->
<div class="sub-wrap aboutUs">
	<!-- visual -->
	<!-- .page-content start -->
	<div class="page-content dark custom-img-background page-title-1 page-title sub-visual">
		<div class="container">
			<!-- .row start -->
			<div class="row">
				<!-- .col-md-12 start -->
				<div class="col-md-12 triggerAnimation animated" data-animate='fadeInUp'>
					<!-- .simple-heading start -->
					<div class="simple-heading mb-30">
						<h1>회원가입완료</h1>
					</div><!-- .simple-heading end -->
					<ul class="breadcrumb">
						<li><a href="/index.php">Home</a></li>
						<li>회원가입</li>
						<li><span class="active">회원가입완료</span></li>
					</ul><!-- .breadcrumb end -->
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .page-content end -->
	<!-- //visual -->
	
	<div class="cont-type1 bg-type2 complete-cont">
		<div class="container">
			<div class="box-cont1">
				<div class="row mb-0">
					<!-- .col-md-4 start -->
					<div class="col-md-12">
						<div class="service-box-3 triggerAnimation animated centered" data-animate='fadeInUp'>
							<div class="icon-container ">
								<img src="/img/common/icoCheckComplete.png" alt="" class="triggerAnimation animated" data-animate='zoomIn' />
							</div>
							<h3 class="tit">회원가입을 환영합니다.<br />고객님의 개인정보를 입력해주세요.</h3>
							<p class="copy">입력하지 않으시면, 투자 및 대출이 불가합니다.</p>
							<div class="btn-area">
								<a class="btn btn-big btn-centered btn-type1" href="/individual/enterAccount.php">
									<span>개인정보 입력하기</span>
								</a>
							</div>
							<p class="copy">관리자문의 : admin@30cut.com<br />전화번호 : 1661-0301</p>
				
						</div><!-- .service-box-3 end -->
					</div><!-- .col-md-4 end -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .page-content end -->
</div>
<!-- // sub-wrap -->

<?php include('../include/incFooter.php'); ?>

<script src="/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="/js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="/js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
<script src='/owl-carousel/owl.carousel.min.js'></script><!-- Carousels script -->
<script src="/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="/js/include.js"></script><!-- custom js functions -->

<script>
	/* <![CDATA[ */
	jQuery(document).ready(function ($) {
		'use strict';

		$('#owl-testimonial').owlCarousel({
			items: 5,
			navigation: true,
			pagination: false,
			navigationText: ["", ""],
			itemsCustom: [
				[0, 1],
				[600, 1],
				[800, 1],
				[1000, 2],
				[1200, 2]
			]
		});

		// CLIENTS CAROUSEL START
		$('#client-carousel').owlCarousel({
			items: 5,
			navigation: true,
			pagination: false,
			navigationText: ["", ""],
			itemsCustom: [
				[0, 2],
				[600, 3],
				[1000, 5],
				[1200, 5]
			]
		});

	});
	/* ]]> */
</script>
</body>
</html>
