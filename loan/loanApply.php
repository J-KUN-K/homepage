<?php include('../include/incTop.php'); ?>
<body>
<?php include('../include/incHeader.php'); ?>

<!-- sub-wrap -->
<div class="sub-wrap loan">
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
						<h1>대출<span>이자의 <strong>30% 인하 혜택</strong>과 함께 월 상환액을 대폭 낮출 수 있습니다.</span></h1>
					</div><!-- .simple-heading end -->
					<ul class="breadcrumb">
						<li><a href="/index.php">Home</a></li>
						<li>대출</li>
						<li><span class="active">대출신청</span></li>
					</ul><!-- .breadcrumb end -->
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .page-content end -->
	<!-- //visual -->
	
	<div class="cont-type1 bg-type2">
		<div class="container">
			<h3 class="tit03">대출 신청서</h3>
			<ul class="list-type2">
				<li>※ 대출 신청을 위해 아래의 고객 정보를 입력해 주십시오.</li>
				<li><strong>※ 고객 본인이 신용등급을 조회하시기 때문에 신용조회 기록이 남지 않습니다. </strong></li>
			</ul>
			<p class="top-copy"><strong>*</strong> 필수 입력사항</p>
			<div class="form-wrap form-type1">
				
				<dl>
					<dt><strong>*</strong> 이름</dt>
					<dd><input type="text" /> <span class="copy">필수입력 항목입니다.</span></dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 주민등록번호 앞 6자리</dt>
					<dd><input type="text" /> <span class="copy">주민등록상의 번호를 정확하게 입력해주세요.</dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 성별</dt>
					<dd><span class="radio-wrap"><input type="radio" /> 남자</span><span class="radio-wrap"><input type="radio" /> 여자</span></dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 이메일주소</dt>
					<dd><input type="email" /></dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 거주지역</dt>
					<dd><select>
							<option>선택</option>
							<option>서울</option>
							<option>경기</option>
							<option>인천</option>
							<option>부산</option>
							<option>강원</option>
							<option>대구</option>
							<option>경북</option>
							<option>경남</option>
							<option>울산</option>
							<option>대전</option>
							<option>충남</option>
							<option>충북</option>
							<option>광주</option>
							<option>전남</option>
							<option>전북</option>
							<option>제주</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 직업구분</dt>
					<dd><select>
								<option>선택</option>
								<option>근로소득자</option>
								<option>개인사업자</option>
								<option>법인사업자</option>
								<option>연금소득자</option>
							</select>
					</dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 연소득</dt>
					<dd><input type="number" /> 만원</dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 희망 대출액</dt>
					<dd><input type="number" /> 만원</dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 희망 대출 만기</dt>
					<dd><select>
							<option>선택</option>
							<option>3개월</option>
							<option>6개월</option>
							<option>12개월</option>
							<option>18개월</option>
							<option>24개월</option>
							<option>30개월</option>
							<option>36개월</option>
							</select>
					</dd>
				</dl>
				<dl>
					<dt><strong>*</strong> 30CUT을 처음 접한 경로</dt>
					<dd><select>
							<option>선택</option>
							<option>배너광고</option>
							<option>페이스북</option>
							<option>신문기사</option>
							<option>포털검색</option>
							<option>지인추천</option>
							<option>방송</option>
							<option>기타</option>
							</select>
					</dd>
				</dl>
				<div class="copy-box1">
					<ul class="list-type3">
						<li>휴대폰과 이메일 주소가 정확하지 않으면 대출 진행이 불가능합니다.</li>
						<li>본인 명의의 휴대폰이 아닌 경우 대출 진행이 불가능 합니다. </li>
					</ul>	
					<p class="copy2">30CUT은 대출 심사 목적으로만 개인정보를 수집하고 있습니다.</p>
					<ul class="list-type3 mt-20">
						<li>대출 신청 시 신용조회 기록이 남지 않습니다. </li>
						<li>대출 신청 시 신용등급에는 영향이 전혀 없습니다.</li>
						<li>대출 신청서를 제출 하시면 심사 후 문자 메시지 (신용인증송부 동의) 와 ‘추가 질문’ 이메일을 전송하여 드립니다.</li>
					</ul>	
				</div>

				<div class="btn-area">
					<a class="btn btn-big btn-centered btn-type1" href="/loan/loanComplete.php">
						<span>제출하기</span>
					</a>
				</div>
			</div>
		</div>
	</div>

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
