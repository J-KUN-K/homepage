<?php include('../include/incTop.php'); ?>
<body>
<?php include('../include/incHeader.php'); ?>

<!-- sub-wrap -->
<div class="sub-wrap contact">
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
						<h1>연락하시는 곳<span><strong>30CUT</strong> 상품이나 서비스에 대한 궁금증이 있으면 말씀해주세요.</span></h1>
					</div><!-- .simple-heading end -->
					<ul class="breadcrumb">
						<li><a href="/index.php">Home</a></li>
						<li>고객지원</li>
						<li><span class="active">연락하시는곳</span></li>
					</ul><!-- .breadcrumb end -->
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .page-content end -->
	<!-- //visual -->

	<!-- .page-content start -->
	<div class="cont-type1 bg-type2 contact-cont1">
		<div class="container">
			
			<!-- .row start -->
			<div class="row">
				<!-- .col-md-4 start -->
				<div class="col-md-5">
					<div class="service-box-3 triggerAnimation animated" data-animate='fadeInUp'>
	 
						<h5>대출 / 투자 문의</h5>
						<dl class="mail">
							<dt>이메일</dt>
							<dd>admin@30cut.com</dd>
						</dl>
						<dl class="tel">
							<dt>전화</dt>
							<dd>1661-0301</dd>
						</dl>
						<dl class="fax">
							<dt>팩스</dt>
							<dd>02-2038-8976</dd>
						</dl>
						<dl class="time">
							<dt>운영시간</dt>
							<dd>평일 오전 09:00 ~ 오후 06:00</dd>
						</dl>
					</div><!-- .service-box-3 end -->
				</div><!-- .col-md-4 end -->

				<!-- .col-md-4 start -->
				<div class="col-md-5">
					<div class="service-box-3 triggerAnimation animated" data-animate='fadeInUp'>
			

						<h5>제휴 문의</h5>
						<dl class="mail">
							<dt>이메일</dt>
							<dd>admin@30cut.com</dd>
						</dl>
						<dl class="tel">
							<dt>전화</dt>
							<dd>1661-0301</dd>
						</dl>
						<dl class="fax">
							<dt>팩스</dt>
							<dd>02-2038-8976</dd>
						</dl>
						<dl class="time">
							<dt>운영시간</dt>
							<dd>평일 오전 09:00 ~ 오후 06:00</dd>
						</dl>
					</div><!-- .service-box-3 end -->
				</div><!-- .col-md-4 end -->

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
