<?php include('../include/incTop.php'); ?>
<body>
<?php include('../include/incHeader.php'); ?>

<!-- sub-wrap -->
<div class="sub-wrap myService">
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
						<h1>통합조회<span>나의 투자내역과 상환 스케줄을 확인 할 수 있습니다.</span></h1>
					</div><!-- .simple-heading end -->
					<ul class="breadcrumb">
						<li><a href="/index.php">Home</a></li>
						<li>MY 서비스</li>
						<li><span class="active">통합조회</span></li>
					</ul><!-- .breadcrumb end -->
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .page-content end -->
	<!-- //visual -->

	<div class="cont-type1 bg-type2">
		<div class="container2">
			<div class="box-cont2">
				<p class="copy5"><strong class="name">박상희</strong> 회원님 반갑습니다.</p>
				<div class="tbl-type7">
					<dl class="line1" id="myInvestMoney">
						<dt>투자수취계좌</dt>
						<dd>우리은행/1002-904-804935</dd>
					</dl>
				</div>
				<div class="btn-absol">
					<a class="btn btn-medium btn-centered btn-type4" href="/individual/enterAccount.php">
						<span>정보수정</span>
					</a>
				</div>
				
			</div>

			
			<h3 class="tit04">나의 투자 예치금 
				<a class="btn btn-medium btn-centered btn-type5" href="/myService/investmentTransactions.php">
					<span>거래내역 보기</span>
				</a>
			</h3>
			<div class="box-cont2">
				<h4 class="tit05">예치금 정보</h4>
				<div class="tbl-type4">
					<dl>
						<dt>보유금액</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>출금신청중</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>투자진행중</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>출금가능금액</dt>
						<dd>-</dd>
					</dl>
				</div>
				
				<h4 class="tit05">예치금 출금 요청</h4>
				<div class="form-wrap form-type1 mt-0">
					<input type="number" /> 원
					<span class="btn-area">
						<a class="btn btn-medium btn-centered btn-type2" href="/myService/depositComplete.php">
							<span>예치금 출금신청</span>
						</a>
					</span>
				</div>
				
				<ul class="list-type2 mt-20">
					<li>- 출금 신청일 기준, 다음 영업일에 일괄 입금합니다.</li>
					<li>- 예치금 출금 신청을 하시면 출금 신청 금액이 나의 환급 계좌로 입금됩니다.</li>
				</ul>

				<h4 class="tit05">예치금 입금안내</h4>
				<div class="tbl-type6">
					<dl>
						<dt>은행명/계좌</dt>
						<dd>우리은행/1002-904-804935</dd>
					</dl>
					<dl>
						<dt>예금주</dt>
						<dd>30CUT 박상희</dd>
					</dl>
				</div>
			</div>

			<h3 class="tit04">나의 투자 상품</h3>
			<div class="box-cont2">
				<table class="tbl-type3 mb-0">
					<tr>
						<th>투자상품</th>
						<th>투자일</th>
					</tr>
					<tr>
						<td><a href="#">30CUT 1호 포트폴리오 투자 (Cut-201512-A)</a></td>
						<td>2015-12-05</td>
					</tr>
					<tr>
						<td><a href="#">30CUT 3호 포트폴리오 투자 (Cut-201512-B)</a></td>
						<td>2015-12-22</td>
					</tr>
				</table>
			</div>

			<h3 class="tit04">나의 채권별 상환 스케줄
				<a class="btn btn-medium btn-centered btn-type5" onclick="layer_open('layer2');return false;">
					<span>상환스케줄보기</span>
				</a>
			</h3>
			<div class="box-cont2">
				<h4 class="tit05">상환 진행 중 <span>1</span> 건</h4>

				<div class="tbl-type5">
					<dl>
						<dt>채권</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>투자금</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>차수 / 만기</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>금리 (연환산)</dt>
						<dd>-</dd>
					</dl>
					<dl>
						<dt>누적상환금</dt>
						<dd>-</dd>
					</dl>
				</div>

				<h4 class="tit05">상환 완료 <span>0</span> 건</h4>
				<div class="tbl-type5 no-data">
					<p class="no-data-copy">진행중인 상환 기록이 없습니다.</p>	
				</div>
			</div>


		</div>
	</div>


</div>
<!-- // sub-wrap -->

<?php include('../include/incFooter.php'); ?>

<div class="layer">
	<div class="bg"></div>
	<div id="layer2" class="pop-layer">
		<div class="pop-container">
			<h1 class="pop-tit">상환스케줄 보기</h1>
				<div class="pop-cont">
					<p class="copy2 mt-0">Cut-201512-B  만기일 2016-10-05</p>
					<div class="tbl-type5 mt-10">
						<dl>
							<dt>채권</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>상환일</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>차수 / 만기</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>금리 (연환산)</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>입금액</dt>
							<dd>-</dd>
						</dl>
					</div>
					<div class="tbl-type5 mt-10">
						<dl>
							<dt>채권</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>상환일</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>차수 / 만기</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>금리 (연환산)</dt>
							<dd>-</dd>
						</dl>
						<dl>
							<dt>입금액</dt>
							<dd>-</dd>
						</dl>
					</div>
					<p class="copy2">관리자문의 : admin@30cut.com<br />전화번호 : 1661-0301</p>

				<div class="btn-r">
					<a href="javascript:void(0);" class="cbtn"><img src="/img/main/pop_close.png" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="/js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="/js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
<script src='/owl-carousel/owl.carousel.min.js'></script><!-- Carousels script -->
<script src="/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="/js/include.js"></script><!-- custom js functions -->
<script type="text/javascript">
function layer_open(el){

	var temp = $('#' + el);
	var bg = temp.prev().hasClass('bg');

	if(bg){
		$('.layer').fadeIn();
	}else{
		temp.fadeIn();
	}

	if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
	else temp.css('top', '0px');
	if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
	else temp.css('left', '0px');

	temp.find('a.cbtn').click(function(e){
		if(bg){
			$('.layer').fadeOut();
		}else{
			temp.fadeOut();
		}
		e.preventDefault();
	});

	$('.layer .bg').click(function(e){
		$('.layer').fadeOut();
		e.preventDefault();
	});

}

</script>
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
