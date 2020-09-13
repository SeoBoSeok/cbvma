<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/get_data.lib.php');
include_once(G5_THEME_MOBILE_PATH.'/cbvmahead.php');
// 회원아이콘 경로
$mb_icon_path = G5_DATA_PATH.'/member/'.substr($member['mb_id'],0,2).'/'.get_mb_icon_name($member['mb_id']).'.gif';
$mb_icon_url  = G5_DATA_URL.'/member/'.substr($member['mb_id'],0,2).'/'.get_mb_icon_name($member['mb_id']).'.gif';

// 회원이미지 경로
$mb_img_path = G5_DATA_PATH.'/member_image/'.substr($member['mb_id'],0,2).'/'.get_mb_icon_name($member['mb_id']).'.gif';
$mb_img_url  = G5_DATA_URL.'/member_image/'.substr($member['mb_id'],0,2).'/'.get_mb_icon_name($member['mb_id']).'.gif';

$register_action_url = G5_HTTPS_BBS_URL.'/cbvmaregister_form_update.php';
?>
    <form name="fregisterform" id="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="POST" autocomplete="off">
    <input type="hidden" name="mb_name" value="<?php echo $member['mb_name'] ?>">
    <input type="hidden" name="w" value="u">
    <input type="hidden" name="url" value="<?php echo $urlencode ?>">
    <input type="hidden" name="agree" value="<?php echo $agree ?>">
    <input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
    <input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
    <input type="hidden" name="cert_no" value="">
    <?php if (isset($member['mb_sex'])) { ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php } ?>
    <?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면 ?>
    <input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
    <input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
    <?php } ?>
    <div class="page-content mt-3">
        
         <div class="card card-style">
            <div class="d-flex content">
                <div class="flex-grow-1">
                    <div>
                        <h1 class="font-700 mb-1"><?php echo $member["mb_name"] ?></h1>
                        <p class="mb-0 pb-1 pr-3">
                            <input type="file" name="mb_img" id="reg_mb_img" class="uploadBtn">
                            <span class="frm_info">
                                이미지 크기는 가로 <?php echo $config['cf_member_img_width'] ?>픽셀, 세로 <?php echo $config['cf_member_img_height'] ?>픽셀 이하로 해주세요.<br>
                                gif, jpg, png파일만 가능하며 용량 <?php echo number_format($config['cf_member_img_size']) ?>바이트 이하만 등록됩니다.
                            </span>
                        </p>
                    </div>
                </div>
                <div>
                    <?php if (file_exists($mb_img_path)) {  ?>
                        <img src="<?php echo $mb_img_url ?>" data-src="<?php echo $mb_img_url ?>" width="80" class="rounded-circle mt- shadow-xl preload-img">
                        <input type="checkbox" name="del_mb_img" value="1" id="del_mb_img">
	                    <label for="del_mb_img">삭제</label>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <h2>개인정보 수정</h2>
                <p class="mb-3">
                    <!-- This contains basic profile fields, easily editable, set to disable or pre-populate with useful information. -->
                </p>
                <div class="input-style input-style-2 has-icon input-required">
                    <i class="input-icon fa fa-user"></i>
                    <span class="color-highlight input-style-1-active">면허번호</span>
                    <em>(required)</em>
                    <input type="text" name="mb_id" class="form-control" value="<?php echo get_text($member['mb_id']) ?>" readonly="readonly">
                </div> 
                <div class="input-style input-style-2 has-icon input-required mt-4">
                    <i class="input-icon fa fa-at"></i>
                    <span class="color-highlight input-style-1-active">이메일 주소</span>
                    <em>(required)</em>
                    <input type="email" class="form-control" name="mb_email" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>">
                </div> 
                <div class="input-style input-style-2 has-icon input-required mt-4">
                    <i class="input-icon fa fa-phone"></i>
                    <span class="color-highlight input-style-1-active">전화번호</span>
                    <em>(required)</em>
                    <input type="phone" class="form-control" name="mb_tel" value="<?php echo get_text($member['mb_tel']) ?>">
                </div>
                <div class="input-style input-style-2 has-icon input-required mt-4">
                    <i class="input-icon fa fa-phone"></i>
                    <span class="color-highlight input-style-1-active">휴대폰번호</span>
                    <input type="phone" class="form-control" name="mb_hp" value="<?php echo get_text($member['mb_hp']) ?>">
                </div>
                <div class="input-style input-style-2">
                    <span class="color-highlight input-style-1-active">면허번호</span>
                    <em>(required)</em>
                    <input type="text" name="mb_1" class="form-control" value="<?php echo get_text($member['mb_1']) ?>">
                </div>                
                <div class="input-style input-style-2 has-icon">
                    <i class="input-icon fa fa-user"></i>
                    <span class="color-highlight input-style-1-active">직위</span>
                    <em>(required)</em>
                    <input type="text" name="mb_2" class="form-control" value="<?php echo get_text($member['mb_2']) ?>">
                </div>
                <div class="input-style input-style-2 has-icon">
                    <i class="input-icon fa fa-user"></i>
                    <span class="color-highlight input-style-1-active">근무처</span>
                    <em>(required)</em>
                    <input type="text" name="mb_3" class="form-control" value="<?php echo get_text($member['mb_3']) ?>">
                </div>
                <div class="input-style input-style-2 row">
                    <div class="col-6">
                        <span class="color-highlight cbvmaCustomInputCol6 input-style-1-active">출신학교</span>
                        <input type="text" name="mb_4" class="form-control" value="<?php echo get_text($member['mb_4']) ?>">
                    </div>
                    <div class="col-6">
                        <span class="color-highlight cbvmaCustomInputCol6 input-style-1-active">졸업연도</span>
                        <input type="text" name="mb_5" class="form-control" value="<?php echo get_text($member['mb_5']) ?>">
                    </div>
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active input-style-1-inactive">분류</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="mb_6">
                        <option value="default" disabled>선택하기</option>
                        <option value="cbvet" <?php echo ($member["mb_6"] == "cbvet") ? "selected" : null; ?>>개업수의사</option>
                        <option value="cbpublicofficer">충정북도 공무원</option>
                        <option value="publicofficer">시군 공무원</option>
                        <option value="institution">기타 기관</option>
                        <option value="education">교육 기관</option>
                        <option value="vet">수의사</option>
                        <!-- cbvet, cbpublicofficer, publicofficer, institution, education, vet -->
                    </select>
                </div>
                <div class="row mb-0" id="cbvet_list" style="display:<?php echo ($member["mb_6"] == "cbvet") ? null : "none" ?>">
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
            <div class="content mb-0">
                <h2 class="mb-0">비밀번호 수정</h2>
                <p class="mb-3">
                    <!-- Activate options or set different elements here that are different from basic fields. -->
                </p>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">비밀번호</span>
                    <em>(required)</em>
                    <input type="password" class="form-control" name="mb_password" id="reg_mb_password" placeholder="" value="">
                </div> 
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">비밀번호 확인</span>
                    <em>(required)</em>
                    <input type="password" class="form-control" name="mb_password_re" id="reg_mb_password_re" placeholder="" value="">
                </div> 
                <button type="submit" class="btn btn-full bg-green1-dark btn-m text-uppercase rounded-lg shadow-l mb-3 mt-4 font-900">수정하기</button>
            </div>
        </div>         
            
        <!-- <div class="card card-style">
            <div class="content mb-2">
                <h2>Social Profiles</h2>
                <p>
                    Activate options or set different elements here that are different from basic fields.
                </p>
                <div class="list-group list-custom-small list-icon-0">      
                    <a href="#">
                        <i class="fab font-14 fa-facebook-f rounded-s color-facebook"></i>
                        <span>Facebook</span>
                        <span class="badge text-uppercase bg-green1-dark">Connected</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>        
                    <a href="#">
                        <i class="fab font-14 fa-twitter rounded-s color-twitter"></i>
                        <span>Twitter</span>
                        <span class="badge text-uppercase bg-green1-dark">Connected</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>        
                    <a href="#">
                        <i class="fab font-14 fa-instagram rounded-s color-instagram"></i>
                        <span>Instagram</span>
                        <span class="badge text-uppercase bg-red2-dark">ACCOUNT ERROR</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>        
                    <a class="border-0" href="#">
                        <i class="fab font-14 fa-linkedin-in rounded-s color-linkedin"></i>
                        <span>LinkedIn</span>
                        <span class="badge text-uppercase bg-yellow1-dark">PENDING APPROVAL</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>        
                </div>
            </div>
        </div> -->
    </div>
    <!-- End of Page Content-->
    </form>
    <script>
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

        if (f.w.value == '') {
            if (f.mb_password.value.length < 3) {
                alert('비밀번호를 3글자 이상 입력하십시오.');
                f.mb_password.focus();
                return false;
            }
        }

        if (f.mb_password.value != f.mb_password_re.value) {
            alert('비밀번호가 같지 않습니다.');
            f.mb_password_re.focus();
            return false;
        }

        if (f.mb_password.value.length > 0) {
            if (f.mb_password_re.value.length < 3) {
                alert('비밀번호를 3글자 이상 입력하십시오.');
                f.mb_password_re.focus();
                return false;
            }
        }

        // 이름 검사
        if (f.w.value=='') {
            if (f.mb_name.value.length < 1) {
                alert('이름을 입력하십시오.');
                f.mb_name.focus();
                return false;
            }
        }

        // 닉네임 검사
        if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
            var msg = reg_mb_nick_check();
            if (msg) {
                alert(msg);
                f.reg_mb_nick.select();
                return false;
            }
        }

        // E-mail 검사
        if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
            var msg = reg_mb_email_check();
            if (msg) {
                alert(msg);
                f.reg_mb_email.select();
                return false;
            }
        }

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

        if (typeof(f.mb_recommend) != 'undefined' && f.mb_recommend.value) {
            if (f.mb_id.value == f.mb_recommend.value) {
                alert('본인을 추천할 수 없습니다.');
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
        // document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }

	var uploadFile = $('.filebox .uploadBtn');
	uploadFile.on('change', function(){
		if(window.FileReader){
			var filename = $(this)[0].files[0].name;
		} else {
			var filename = $(this).val().split('/').pop().split('\\').pop();
		}
		$(this).siblings('.fileName').val(filename);
    });
    
    $('input[type=radio]').click(function(e){
        $('input[type=radio]').each(function(item, el){
            $(el).parent(".fac-radio").removeClass('fac-red');
        })
        // $('input[type=radio]').removeClass("fac-default");
        $(e.target).parent(".fac-radio").addClass("fac-red");
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
<?php
    include_once(G5_THEME_MOBILE_PATH.'/cbvmatail.php');
?>    