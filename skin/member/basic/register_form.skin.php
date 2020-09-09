<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원정보 입력/수정 시작 { -->

<div class="register">
<script src="<?php echo G5_JS_URL ?>/jquery.register_form.js"></script>
<?php if($config['cf_cert_use'] && ($config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
<script src="<?php echo G5_JS_URL ?>/certify.js?v=<?php echo G5_JS_VER; ?>"></script>
<?php } ?>

	<form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
	<input type="hidden" name="w" value="<?php echo $w ?>">
	<input type="hidden" name="url" value="<?php echo $urlencode ?>">
	<input type="hidden" name="agree" value="<?php echo $agree ?>">
	<input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
	<input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
	<input type="hidden" name="cert_no" value="">
	<?php if (isset($member['mb_sex'])) {  ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php }  ?>
	<?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면  ?>
	<input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
	<input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
	<?php }  ?>
	
	<div id="register_form" class="form_01">   
	    <div class="register_form_inner">
	        <h2>사이트 이용정보 입력</h2>
	        <ul>
	            <li>
	                <label for="reg_mb_id">
	                	아이디<strong class="sound_only">필수</strong>
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
						<span class="tooltip">영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.</span>
	                </label>
	                <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id" <?php echo $required ?> <?php echo $readonly ?> class="frm_input full_input <?php echo $required ?> <?php echo $readonly ?>" minlength="3" maxlength="20" placeholder="아이디">
	                <span id="msg_mb_id"></span>
	            </li>
	            <li class="half_input left_input margin_input">
	                <label for="reg_mb_password">비밀번호<strong class="sound_only">필수</strong></label>
	                <input type="password" name="mb_password" id="reg_mb_password" <?php echo $required ?> class="frm_input full_input <?php echo $required ?>" minlength="3" maxlength="20" placeholder="비밀번호">
				</li>
	            <li class="half_input left_input">
	                <label for="reg_mb_password_re">비밀번호 확인<strong class="sound_only">필수</strong></label>
	                <input type="password" name="mb_password_re" id="reg_mb_password_re" <?php echo $required ?> class="frm_input full_input <?php echo $required ?>" minlength="3" maxlength="20" placeholder="비밀번호 확인">
	            </li>
	        </ul>
	    </div>
	
	    <div class="tbl_frm01 tbl_wrap register_form_inner">
	        <h2>개인정보 입력</h2>
	        <ul>
	            <li>
	                <label for="reg_mb_name">이름<strong class="sound_only">필수</strong></label>
	                <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>" <?php echo $required ?> <?php echo $readonly; ?> class="frm_input full_input <?php echo $required ?> <?php echo $readonly ?>" size="10" placeholder="이름">
	                <?php
	                if($config['cf_cert_use']) {
	                    if($config['cf_cert_ipin'])
	                        echo '<button type="button" id="win_ipin_cert" class="btn_frmline">아이핀 본인확인</button>'.PHP_EOL;
	                    if($config['cf_cert_hp'])
	                        echo '<button type="button" id="win_hp_cert" class="btn_frmline">휴대폰 본인확인</button>'.PHP_EOL;
	
	                    echo '<noscript>본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.</noscript>'.PHP_EOL;
	                }
	                ?>
	                <?php
	                if ($config['cf_cert_use'] && $member['mb_certify']) {
	                    if($member['mb_certify'] == 'ipin')
	                        $mb_cert = '아이핀';
	                    else
	                        $mb_cert = '휴대폰';
	                ?>
	  
	                <div id="msg_certify">
	                    <strong><?php echo $mb_cert; ?> 본인확인</strong><?php if ($member['mb_adult']) { ?> 및 <strong>성인인증</strong><?php } ?> 완료
	                </div>
	                <?php } ?>
	                <?php if ($config['cf_cert_use']) { ?>
	                <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                <span class="tooltip">아이핀 본인확인 후에는 이름이 자동 입력되고 휴대폰 본인확인 후에는 이름과 휴대폰번호가 자동 입력되어 수동으로 입력할수 없게 됩니다.</span>
	                <?php } ?>
	            </li>
	            <?php if (false) {  ?>
	            <li>
	                <label for="reg_mb_nick">
	                	닉네임<strong class="sound_only">필수</strong>
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
						<span class="tooltip">공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)<br> 닉네임을 바꾸시면 앞으로 <?php echo (int)$config['cf_nick_modify'] ?>일 이내에는 변경 할 수 없습니다.</span>
	                </label>
	                
                    <input type="hidden" name="mb_nick_default" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>">
                    <input type="text" name="mb_nick" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>" id="reg_mb_nick" required class="frm_input required nospace full_input" size="10" maxlength="20" placeholder="닉네임">
                    <span id="msg_mb_nick"></span>	                
	            </li>
	            <?php }  ?>
	
	            <li>
	                <label for="reg_mb_email">E-mail<strong class="sound_only">필수</strong>
	                
	                <?php if ($config['cf_use_email_certify']) {  ?>
	                <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
					<span class="tooltip">
	                    <?php if ($w=='') { echo "E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다."; }  ?>
	                    <?php if ($w=='u') { echo "E-mail 주소를 변경하시면 다시 인증하셔야 합니다."; }  ?>
	                </span>
	                <?php }  ?>
					</label>

	                <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
	                <input type="text" name="mb_email" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>" id="reg_mb_email" class="frm_input email full_input" size="70" maxlength="100" placeholder="E-mail">
	            
	            </li>
	
	            <?php if ($config['cf_use_homepage']) {  ?>
	            <li>
	                <label for="reg_mb_homepage">홈페이지<?php if ($config['cf_req_homepage']){ ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <input type="text" name="mb_homepage" value="<?php echo get_text($member['mb_homepage']) ?>" id="reg_mb_homepage" <?php echo $config['cf_req_homepage']?"required":""; ?> class="frm_input full_input <?php echo $config['cf_req_homepage']?"required":""; ?>" size="70" maxlength="255" placeholder="홈페이지">
	            </li>
	            <?php }  ?>
	
	            <li>
	            <?php if ($config['cf_use_tel']) {  ?>
	            
	                <label for="reg_mb_tel">전화번호(000-1111-2222 형식으로 입력하세요)<?php if ($config['cf_req_tel']) { ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <input type="text" name="mb_tel" value="<?php echo get_text($member['mb_tel']) ?>" id="reg_mb_tel" <?php echo $config['cf_req_tel']?"required":""; ?> class="frm_input full_input <?php echo $config['cf_req_tel']?"required":""; ?>" maxlength="20" placeholder="전화번호">
	            <?php }  ?>
				</li>
				<li>
	            <?php //if ($config['cf_use_hp'] || $config['cf_cert_hp']) {  ?>
	                <label for="reg_mb_hp">휴대폰번호(000-1111-2222 형식으로 입력하세요)<?php if ($config['cf_req_hp']) { ?><strong class="sound_only">필수</strong><?php } ?></label>
	                
	                <input type="text" name="mb_hp" value="<?php echo get_text($member['mb_hp']) ?>" id="reg_mb_hp" <?php echo ($config['cf_req_hp'])?"required":""; ?> class="frm_input full_input <?php echo ($config['cf_req_hp'])?"required":""; ?>" maxlength="20" placeholder="휴대폰번호">
	                <?php if ($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
	                <input type="hidden" name="old_mb_hp" value="<?php echo get_text($member['mb_hp']) ?>">
	                <?php } ?>
	            <?php //}  ?>
	            </li>
				<!-- 커스터마이징 영역 Start -->
				<li>
					<label for="reg_mb_1">면허번호</label>
	                <input type="text" name="mb_1" value="<?php echo get_text($member['mb_1']) ?>" id="reg_mb_1" class="frm_input full_input " maxlength="20" placeholder="면허번호">
				</li>
				<li>
					<label for="reg_mb_2">직위</label>
	                <input type="text" name="mb_2" value="<?php echo get_text($member['mb_2']) ?>" id="reg_mb_2" class="frm_input full_input " maxlength="20" placeholder="직위">
				</li>
				<li>
					<label for="reg_mb_3">근무처</label>
	                <input type="text" name="mb_3" value="<?php echo get_text($member['mb_3']) ?>" id="reg_mb_3" class="frm_input full_input " maxlength="20" placeholder="근무처">
				</li>
				<li>
					<label for="reg_mb_4">출신학교</label>
	                <input type="text" name="mb_4" value="<?php echo get_text($member['mb_4']) ?>" id="reg_mb_4" class="frm_input " maxlength="20" placeholder="출신학교">
				</li>
				<li>
					<label for="reg_mb_5">졸업연도</label>
	                <input type="text" name="mb_5" value="<?php echo get_text($member['mb_5']) ?>" id="reg_mb_5" class="frm_input" maxlength="20" placeholder="출신학교">
				</li>
				<!-- 커스터마이징 영역 End -->
	            <?php if ($config['cf_use_addr']) { ?>
	            <li>
	            	<label>주소</label>
					<?php if ($config['cf_req_addr']) { ?><strong class="sound_only">필수</strong><?php }  ?>
	                <label for="reg_mb_zip" class="sound_only">우편번호<?php echo $config['cf_req_addr']?'<strong class="sound_only"> 필수</strong>':''; ?></label>
	                <input type="text" name="mb_zip" value="<?php echo $member['mb_zip1'].$member['mb_zip2']; ?>" id="reg_mb_zip" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input twopart_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="5" maxlength="6"  placeholder="우편번호">
	                <button type="button" class="btn_frmline" onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소 검색</button><br>
	                <input type="text" name="mb_addr1" value="<?php echo get_text($member['mb_addr1']) ?>" id="reg_mb_addr1" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input frm_address full_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="50"  placeholder="기본주소">
	                <label for="reg_mb_addr1" class="sound_only">기본주소<?php echo $config['cf_req_addr']?'<strong> 필수</strong>':''; ?></label><br>
	                <input type="text" name="mb_addr2" value="<?php echo get_text($member['mb_addr2']) ?>" id="reg_mb_addr2" class="frm_input frm_address full_input" size="50" placeholder="상세주소">
	                <label for="reg_mb_addr2" class="sound_only">상세주소</label>
	                <br>
	                <input type="text" name="mb_addr3" value="<?php echo get_text($member['mb_addr3']) ?>" id="reg_mb_addr3" class="frm_input frm_address full_input" size="50" readonly="readonly" placeholder="참고항목">
	                <label for="reg_mb_addr3" class="sound_only">참고항목</label>
	                <input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($member['mb_addr_jibeon']); ?>">
	            </li>
	            <?php }  ?>
	        </ul>
	    </div>
	
	    <div class="tbl_frm01 tbl_wrap register_form_inner">
	        <h2>기타 개인설정</h2>
	        <ul>
				<!-- Customizing Options Start -->
				<li class="reg_mb_img_file">
	                <label for="reg_mb_img" class="frm_label">
	                	회원이미지
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                	<span class="tooltip">이미지 크기는 가로 <?php echo $config['cf_member_img_width'] ?>픽셀, 세로 <?php echo $config['cf_member_img_height'] ?>픽셀 이하로 해주세요.<br>
	                    gif, jpg, png파일만 가능하며 용량 <?php echo number_format($config['cf_member_img_size']) ?>바이트 이하만 등록됩니다.</span>
	                </label>
	                <input type="file" name="mb_img" id="reg_mb_img">
	
	                <?php if ($w == 'u' && file_exists($mb_img_path)) {  ?>
	                <img src="<?php echo $mb_img_url ?>" alt="회원이미지">
	                <input type="checkbox" name="del_mb_img" value="1" id="del_mb_img">
	                <label for="del_mb_img">삭제</label>
	                <?php }  ?>
	            
	            </li>
				<!-- Customizing Options End -->
	            <?php if ($config['cf_use_signature']) {  ?>
	            <li>
	                <label for="reg_mb_signature">서명<?php if ($config['cf_req_signature']){ ?><strong class="sound_only">필수</strong><?php } ?></label>
	                <textarea name="mb_signature" id="reg_mb_signature" <?php echo $config['cf_req_signature']?"required":""; ?> class="<?php echo $config['cf_req_signature']?"required":""; ?>"   placeholder="서명"><?php echo $member['mb_signature'] ?></textarea>
	            </li>
	            <?php }  ?>
	
	            <?php if ($config['cf_use_profile']) {  ?>
	            <li>
	                <label for="reg_mb_profile">자기소개</label>
	                <textarea name="mb_profile" id="reg_mb_profile" <?php echo $config['cf_req_profile']?"required":""; ?> class="<?php echo $config['cf_req_profile']?"required":""; ?>" placeholder="자기소개"><?php echo $member['mb_profile'] ?></textarea>
	            </li>
	            <?php }  ?>
	
	            <?php if (false) {  ?>
	            <li>
	                <label for="reg_mb_icon" class="frm_label">
	                	회원아이콘
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                	<span class="tooltip">이미지 크기는 가로 <?php echo $config['cf_member_icon_width'] ?>픽셀, 세로 <?php echo $config['cf_member_icon_height'] ?>픽셀 이하로 해주세요.<br>
gif, jpg, png파일만 가능하며 용량 <?php echo number_format($config['cf_member_icon_size']) ?>바이트 이하만 등록됩니다.</span>
	                </label>
	                <input type="file" name="mb_icon" id="reg_mb_icon">
	
	                <?php if ($w == 'u' && file_exists($mb_icon_path)) {  ?>
	                <img src="<?php echo $mb_icon_url ?>" alt="회원아이콘">
	                <input type="checkbox" name="del_mb_icon" value="1" id="del_mb_icon">
	                <label for="del_mb_icon">삭제</label>
	                <?php }  ?>
	            
	            </li>
	            <?php }  ?>
	
	            <?php if (false) {  ?>
	            <li class="reg_mb_img_file">
	                <label for="reg_mb_img" class="frm_label">
	                	회원이미지
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                	<span class="tooltip">이미지 크기는 가로 <?php echo $config['cf_member_img_width'] ?>픽셀, 세로 <?php echo $config['cf_member_img_height'] ?>픽셀 이하로 해주세요.<br>
	                    gif, jpg, png파일만 가능하며 용량 <?php echo number_format($config['cf_member_img_size']) ?>바이트 이하만 등록됩니다.</span>
	                </label>
	                <input type="file" name="mb_img" id="reg_mb_img">
	
	                <?php if ($w == 'u' && file_exists($mb_img_path)) {  ?>
	                <img src="<?php echo $mb_img_url ?>" alt="회원이미지">
	                <input type="checkbox" name="del_mb_img" value="1" id="del_mb_img">
	                <label for="del_mb_img">삭제</label>
	                <?php }  ?>
	            
	            </li>
	            <?php } ?>

	            <!-- <li class="chk_box">
		        	<input type="checkbox" name="mb_mailling" value="1" id="reg_mb_mailling" <?php echo ($w=='' || $member['mb_mailling'])?'checked':''; ?> class="selec_chk">
		            <label for="reg_mb_mailling">
		            	<span></span>
		            	<b class="sound_only">메일링서비스</b>
		            </label>
		            <span class="chk_li">정보 메일을 받겠습니다.</span>
		        </li> -->
	
				<?php if ($config['cf_use_hp']) { ?>
		        <li class="chk_box">
		            <input type="checkbox" name="mb_sms" value="1" id="reg_mb_sms" <?php echo ($w=='' || $member['mb_sms'])?'checked':''; ?> class="selec_chk">
		        	<label for="reg_mb_sms">
		            	<span></span>
		            	<b class="sound_only">SMS 수신여부</b>
		            </label>        
		            <span class="chk_li">휴대폰 문자메세지를 받겠습니다.</span>
		        </li>
		        <?php } ?>
	
		        <?php if (isset($member['mb_open_date']) && $member['mb_open_date'] <= date("Y-m-d", G5_SERVER_TIME - ($config['cf_open_modify'] * 86400)) || empty($member['mb_open_date'])) { // 정보공개 수정일이 지났다면 수정가능 ?>
		        <!-- <li class="chk_box">
		            <input type="checkbox" name="mb_open" value="1" id="reg_mb_open" <?php //echo ($w=='' || $member['mb_open'])?'checked':''; ?> class="selec_chk">
		      		<label for="reg_mb_open">
		      			<span></span>
		      			<b class="sound_only">정보공개</b>
		      		</label>      
		            <span class="chk_li">다른분들이 나의 정보를 볼 수 있도록 합니다.</span>
		            <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
		            <span class="tooltip">
		                정보공개를 바꾸시면 앞으로 <?php //echo (int)$config['cf_open_modify'] ?>일 이내에는 변경이 안됩니다.
		            </span>
		            <input type="hidden" name="mb_open_default" value="<?php //echo $member['mb_open'] ?>"> 
		        </li>		         -->
		        <?php } else { ?>
	            <!-- <li>
	                정보공개
	                <input type="hidden" name="mb_open" value="<?php //echo $member['mb_open'] ?>">
	                <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                <span class="tooltip">
	                    정보공개는 수정후 <?php //echo (int)$config['cf_open_modify'] ?>일 이내, <?php //echo date("Y년 m월 j일", isset($member['mb_open_date']) ? strtotime("{$member['mb_open_date']} 00:00:00")+$config['cf_open_modify']*86400:G5_SERVER_TIME+$config['cf_open_modify']*86400); ?> 까지는 변경이 안됩니다.<br>
	                    이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.
	                </span>
	                
	            </li> -->
	            <?php }  ?>
	
	            <?php
	            //회원정보 수정인 경우 소셜 계정 출력
	            if( $w == 'u' && function_exists('social_member_provider_manage') ){
	                social_member_provider_manage();
	            }
	            ?>
	            
	            <?php if ($w == "" && $config['cf_use_recommend']) {  ?>
	            <li>
	                <label for="reg_mb_recommend" class="sound_only">추천인아이디</label>
	                <input type="text" name="mb_recommend" id="reg_mb_recommend" class="frm_input" placeholder="추천인아이디">
	            </li>
	            <?php }  ?>
	
	            <!-- <li class="is_captcha_use">
	                자동등록방지 -->
	                <?php // echo captcha_html(); ?>
	            <!-- </li> -->
	        </ul>
	    </div>
	</div>
		<div class="content mb-0">
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active input-style-1-inactive">분류</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="mb_6">
                        <option value="default" disabled>선택하기</option>
                        <option value="cbvet">개업수의사</option>
                        <option value="cbpublicofficer">충정북도 공무원</option>
                        <option value="publicofficer">시군 공무원</option>
                        <option value="institution">기타 기관</option>
                        <option value="education">교육 기관</option>
                        <option value="vet">수의사</option>
                        <!-- cbvet, cbpublicofficer, publicofficer, institution, education, vet -->
                    </select>
                </div>
                <div class="row mb-0" id="cbvet_list">
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box1-fac-radio" type="radio" name="mb_7" value="sangdang">
                            <label for="box1-fac-radio">청주시 상당구</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box3-fac-radio" type="radio" name="mb_7" value="cheongwon">
                            <label for="box3-fac-radio">청주시 청원구</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box5-fac-radio" type="radio" name="mb_7" value="chungjusi">
                            <label for="box5-fac-radio">충주시</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box7-fac-radio" type="radio" name="mb_7" value="boeun">
                            <label for="box7-fac-radio">보은군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box9-fac-radio" type="radio" name="mb_7" value="youngdong">
                            <label for="box9-fac-radio">영동군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box11-fac-radio" type="radio" name="mb_7" value="jincheon">
                            <label for="box11-fac-radio">진천군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box13-fac-radio" type="radio" name="mb_7" value="eumseong">
                            <label for="box13-fac-radio">음성군</label>
                        </div>                                                                        
                    </div>
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box2-fac-radio" type="radio" name="mb_7" value="seowon">
                            <label for="box2-fac-radio">청주시 서원구</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box4-fac-radio" type="radio" name="mb_7" value="heungdeok">
                            <label for="box4-fac-radio">청주시 흥덕구</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box6-fac-radio" type="radio" name="mb_7" value="jecheon">
                            <label for="box6-fac-radio">제천시</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box8-fac-radio" type="radio" name="mb_7" value="okcheon">
                            <label for="box8-fac-radio">옥천군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box10-fac-radio" type="radio" name="mb_7" value="jeungpyeong">
                            <label for="box10-fac-radio">증평군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box12-fac-radio" type="radio" name="mb_7" value="goesan">
                            <label for="box12-fac-radio">괴산군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box14-fac-radio" type="radio" name="mb_7" value="danyang">
                            <label for="box14-fac-radio">단양군</label>
                        </div>                      
                    </div>
                </div>
                <div class="row mb-0" id="cbpublicofficer_list" style="display:<?php echo ($member["mb_6"] == "cbpublicofficer") ? null : "none" ?>">
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box15-fac-radio" type="radio" name="mb_7" value="cbpolist_1">
                            <label for="box15-fac-radio">도청 동물방역과</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box17-fac-radio" type="radio" name="mb_7" value="cbpolist_3">
                            <label for="box17-fac-radio">동물위생시험소 방역과</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box19-fac-radio" type="radio" name="mb_7" value="cbpolist_5">
                            <label for="box19-fac-radio">동물위생시험소 중부지소</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box21-fac-radio" type="radio" name="mb_7" value="cbpolist_7">
                            <label for="box21-fac-radio">동물위생시험소 북부지소</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box23-fac-radio" type="radio" name="mb_7" value="cbpolist_9">
                            <label for="box23-fac-radio">충청북도 보건환경연구원</label>
                        </div>                        
                    </div>
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box16-fac-radio" type="radio" name="mb_7" value="cbpolist_2">
                            <label for="box16-fac-radio">도청 축수산과</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box18-fac-radio" type="radio" name="mb_7" value="cbpolist_4">
                            <label for="box18-fac-radio">동물위생시험소 축산물검사과</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box20-fac-radio" type="radio" name="mb_7" value="cbpolist_6">
                            <label for="box20-fac-radio">동물위생시험소 남부지소</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box22-fac-radio" type="radio" name="mb_7" value="cbpolist_8">
                            <label for="box22-fac-radio">동물위생시험소 음성축산물검사소</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0" id="publicofficer_list" style="display:<?php echo ($member["mb_6"] == "publicofficer") ? null : "none" ?>">
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box24-fac-radio" type="radio" name="mb_7" value="polist_1">
                            <label for="box24-fac-radio">청주시</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box26-fac-radio" type="radio" name="mb_7" value="polist_3">
                            <label for="box26-fac-radio">제천시</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box28-fac-radio" type="radio" name="mb_7" value="polist_5">
                            <label for="box28-fac-radio">옥천군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box30-fac-radio" type="radio" name="mb_7" value="polist_7">
                            <label for="box30-fac-radio">증평군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box32-fac-radio" type="radio" name="mb_7" value="polist_9">
                            <label for="box32-fac-radio">괴산군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box34-fac-radio" type="radio" name="mb_7" value="polist_11">
                            <label for="box34-fac-radio">단양군</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box25-fac-radio" type="radio" name="mb_7" value="polist_2">
                            <label for="box25-fac-radio">충주시</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box27-fac-radio" type="radio" name="mb_7" value="polist_4">
                            <label for="box27-fac-radio">보은군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box29-fac-radio" type="radio" name="mb_7" value="polist_6">
                            <label for="box29-fac-radio">영동군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box31-fac-radio" type="radio" name="mb_7" value="polist_8">
                            <label for="box31-fac-radio">진천군</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box33-fac-radio" type="radio" name="mb_7" value="polist_10">
                            <label for="box33-fac-radio">음성군</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0" id="institution_list" style="display:<?php echo ($member["mb_6"] == "institution") ? null : "none" ?>">
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box35-fac-radio" type="radio" name="mb_7" value="ins_1">
                            <label for="box35-fac-radio">식품의약품안전처</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box37-fac-radio" type="radio" name="mb_7" value="ins_3">
                            <label for="box37-fac-radio">한국생명공학연구원</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box36-fac-radio" type="radio" name="mb_7" value="ins_2">
                            <label for="box36-fac-radio">질병관리본부</label>
                        </div>
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box38-fac-radio" type="radio" name="mb_7" value="ins_4">
                            <label for="box38-fac-radio">한국식품안전관리인증원</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0" id="education_list" style="display:<?php echo ($member["mb_6"] == "education") ? null : "none" ?>">
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box39-fac-radio" type="radio" name="mb_7" value="edu_1">
                            <label for="box39-fac-radio">교육기관</label>
                        </div>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                <div class="row mb-0" id="vet_list" style="display:<?php echo ($member["mb_6"] == "vet") ? null : "none" ?>">
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box40-fac-radio" type="radio" name="mb_7" value="vet_1">
                            <label for="box40-fac-radio">일반수의사</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fac fac-radio fac-default mb-1"><span></span>
                            <input id="box41-fac-radio" type="radio" name="mb_7" value="vet_2">
                            <label for="box41-fac-radio">공수의사</label>
                        </div>
                    </div>
                </div>
			</div>
	<div class="btn_confirm">
	    <a href="<?php echo G5_URL ?>" class="btn_close">취소</a>
	    <button type="submit" id="btn_submit" class="btn_submit" accesskey="s"><?php echo $w==''?'회원가입':'정보수정'; ?></button>
	</div>
	</form>
</div>
<script>
$(function() {
    $("#reg_zip_find").css("display", "inline-block");

    <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
    // 아이핀인증
    $("#win_ipin_cert").click(function() {
        if(!cert_confirm())
            return false;

        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php";
        certify_win_open('kcb-ipin', url);
        return;
    });

    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
    // 휴대폰인증
    $("#win_hp_cert").click(function() {
        if(!cert_confirm())
            return false;

        <?php
        switch($config['cf_cert_hp']) {
            case 'kcb':
                $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                $cert_type = 'kcb-hp';
                break;
            case 'kcp':
                $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                $cert_type = 'kcp-hp';
                break;
            case 'lg':
                $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                $cert_type = 'lg-hp';
                break;
            default:
                echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                echo 'return false;';
                break;
        }
        ?>

        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>");
        return;
    });
    <?php } ?>
});

// submit 최종 폼체크
function fregisterform_submit(f)
{
    // 회원아이디 검사
    if (f.w.value == "") {
        var msg = reg_mb_id_check();
        if (msg) {
            alert(msg);
            f.mb_id.select();
            return false;
        }
    }

    if (f.w.value == "") {
        if (f.mb_password.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password.focus();
            return false;
        }
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("비밀번호가 같지 않습니다.");
        f.mb_password_re.focus();
        return false;
    }

    if (f.mb_password.value.length > 0) {
        if (f.mb_password_re.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password_re.focus();
            return false;
        }
    }

    // 이름 검사
    if (f.w.value=="") {
        if (f.mb_name.value.length < 1) {
            alert("이름을 입력하십시오.");
            f.mb_name.focus();
            return false;
        }

        /*
        var pattern = /([^가-힣\x20])/i;
        if (pattern.test(f.mb_name.value)) {
            alert("이름은 한글로 입력하십시오.");
            f.mb_name.select();
            return false;
        }
        */
    }

    <?php if($w == '' && $config['cf_cert_use'] && $config['cf_cert_req']) { ?>
    // 본인확인 체크
    if(f.cert_no.value=="") {
        alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
        return false;
    }
    <?php } ?>

    // 닉네임 검사
    // if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
    //     var msg = reg_mb_nick_check();
    //     if (msg) {
    //         alert(msg);
    //         f.reg_mb_nick.select();
    //         return false;
    //     }
    // }

    // E-mail 검사
    // if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
    //     var msg = reg_mb_email_check();
    //     if (msg) {
    //         alert(msg);
    //         f.reg_mb_email.select();
    //         return false;
    //     }
    // }

    <?php if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {  ?>
    // 휴대폰번호 체크
    var msg = reg_mb_hp_check();
    if (msg) {
        alert(msg);
        f.reg_mb_hp.select();
        return false;
    }
    <?php } ?>

    if (typeof f.mb_icon != "undefined") {
        if (f.mb_icon.value) {
            if (!f.mb_icon.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원아이콘이 이미지 파일이 아닙니다.");
                f.mb_icon.focus();
                return false;
            }
        }
    }

    if (typeof f.mb_img != "undefined") {
        if (f.mb_img.value) {
            if (!f.mb_img.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원이미지가 이미지 파일이 아닙니다.");
                f.mb_img.focus();
                return false;
            }
        }
    }

    if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
        if (f.mb_id.value == f.mb_recommend.value) {
            alert("본인을 추천할 수 없습니다.");
            f.mb_recommend.focus();
            return false;
        }

        var msg = reg_mb_recommend_check();
        if (msg) {
            alert(msg);
            f.mb_recommend.select();
            return false;
        }
    }

    <?php echo chk_captcha_js();  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

jQuery(function($){
	//tooltip
    $(document).on("click", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeIn(400).css("display","inline-block");
    }).on("mouseout", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeOut();
    });
});

function checkCategory() {
	var cat = "<?php echo (isset($member["mb_7"]) ? $member["mb_7"] : null) ?>";
	if(cat) {
		$('input[type=radio]').each(function(item, el){
			if($(el).val() == cat) {
				$(el).attr("checked", true);
				$(el).parent(".fac-radio").addClass("fac-red");
			}
		});
	}
}
checkCategory();

var mb_6_list = ['cbvet_list', 'cbpublicofficer_list', 'publicofficer_list', 'institution_list', 'education_list', 'vet_list'];
$('select[name="mb_6"]').change(function(e){
	console.log(e.target.value);
	mb_6_list.forEach(function(item){
		$('#'+item).hide();
	});
	$('#' + e.target.value + '_list').show();
});

</script>

<!-- } 회원정보 입력/수정 끝 -->