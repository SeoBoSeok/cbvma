<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// include_once(G5_THEME_MOBILE_PATH.'/head.php');
include_once(G5_THEME_MOBILE_PATH.'/cbvmahead.php');
?>
<!-- 메인화면 최신글 시작 -->
    <div class="page-content">
        <div class="single-slider owl-carousel owl-no-dots">
            <div class="card shadow-l mb-0" style="border-radius: 0;">
                <div class="card-bottom text-left pad-30 pt-30 cbvbannerfilter">
                    <h1 class="color-white font-700 mb-3 padl-20 font-35">충청북도 수의사회</h1>
                    <p class="color-white opacity-80 mb-4 padl-20 font-500">회원들과 함께 소통하고 화합하는
                        <br>새로운 충청북도 수의사회를 희망합니다.
                    </p>
                    <a class="main-guide-file" href="https://cbvma.kr/?p=pdfviewer&filePath=/data/file/free/2077742899_gzLihc0p_fab755b00a384b89c2b50e7e0fe370de5d21c6b2.pdf"><i class="far fa-3x fa-file-pdf"><p class="main-guide-file__font">이용방법</p></i></a>
                </div>
                <img class="img-fluid gray25" src="images/pictures/main_img.jpg">
            </div>
            <div class="card shadow-l mb-0" style="border-radius: 0;">
                <div class="card-bottom text-left pad-30 pt-30 cbvbannerfilter">
                    <h1 class="color-white font-700 mb-3 padl-20 font-35">충청북도 수의사회</h1>
                    <p class="color-white opacity-80 mb-4 padl-20 font-500">회원들과 함께 소통하고 화합하는
                        <br>새로운 충청북도 수의사회를 희망합니다.
                    </p>
                    <a class="main-guide-file" href="https://cbvma.kr/?p=pdfviewer&filePath=/data/file/free/2077742899_gzLihc0p_fab755b00a384b89c2b50e7e0fe370de5d21c6b2.pdf"><i class="far fa-3x fa-file-pdf"><p class="main-guide-file__font">이용방법</p></i></a>
                </div>
                <img class="img-fluid gray25" src="images/pictures/main_img_second.jpg">
            </div>
        </div>
        <div class="row text-center mb-4" style="width:100%; margin-left:0; margin-right: 0;">
            <a href="#" data-menu="member-book" class="col-3 pl-0 pr-0 cbvmainquickmenu bg-orange-light">
                <div class="cbvmainquickmenu_wrap">
                    <img class="width80" src="images/icon01.svg">
                    <p>회원리스트</p>
                </div>
            </a>
            <a href="#" data-menu="member-search" class="col-3 pr-0 pl-0 cbvmainquickmenu bg-yellow1-dark">
                <div class="cbvmainquickmenu_wrap">
                    <img class="width80 height60" style="margin-top: 17px; margin-bottom: 8px;" src="images/icon02.svg">
                    <p>회원검색</p>
                </div>
            </a>
            <a href="/?p=board&bo_table=free" class="col-3 pr-0 pl-0 cbvmainquickmenu bg-mint-dark">
                <div class="cbvmainquickmenu_wrap pl-0">
                    <i class="fa fa-file color-white fa-2x"  style="margin-top: 20px; margin-bottom: 10px;" ></i>
                    <p>정책공지</p>
                </div>
            </a>
            <a href="/?p=board&bo_table=notice" class="col-3 pr-0 pl-0 cbvmainquickmenu bg-dark2-light">
                <div class="cbvmainquickmenu_wrap">
                    <img class="" style="width: 50px; margin-top: 10px; margin-bottom: 5px;" src="images/icon04.svg">
                    <p>회원공지</p>
                </div>                
            </a>
        </div>
        <div class="row text-center mb-0">
            <!-- <a href="#" data-menu="member-book" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-3 bg-orange-light tl-left">
                    <h1 class="pt-4 pl-4 text-white">회원리스트</h1>
                    <p class="font-16 pl-4 opacity-50 mb-0 text-white">Member</p>
                    <img class="height80 width80 main-image--right" src="images/icon01.svg">
                </div>
            </a>
            <a href="#" data-menu="member-search" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3 bg-yellow1-dark tl-left">
                    <h1 class="pt-4 pl-4 text-white">회원검색</h1>
                    <p class="font-16 pl-4 opacity-50 mb-0 text-white">Search</p>
                    <img class="height60 width80 main-image--right" src="images/icon02.svg">
                </div>
            </a>
            <a href="/?p=board&bo_table=free" class="col-6 pr-0">
                <div class="card card-style mr-2 bg-mint-dark tl-left">
                    <h1 class="pt-4 pl-4 text-white">정책공지</h1>
                    <p class="font-16 pl-4 opacity-50 mb-0 text-white">Policy</p>
                    <i class="fa fa-file color-white fa-2x margin-top--20 main-image--right2"></i>
                </div>
            </a>
            <a class="col-6 pl-0" href="/?p=board&bo_table=notice">
                <div class="card card-style ml-2 pl-0 bg-dark2-light tl-left">
                    <h1 class="pt-4 pl-4 text-white">회원공지</h1>
                    <p class="font-16 pl-4 opacity-50 mb-0 text-white">Notice</p>
                    <img class="height80 width80 main-image--right" src="images/icon04.svg">
                </div>
            </a> -->
        </div>
        <div class="card card-style mb-3">
            <div class="d-flex">
                <div class="pl-3 ml-2 align-self-center">
                    <h1 class="pt-4">공지사항</h1>
                    <p class="font-15 opacity-50 mt-n2 mb-4">충청북도 수의사회의 최신소식을 확인하세요.</p>
                </div>
                <div class="ml-auto mr-3 mb-4 align-self-center">
                <i class="fa fa-plus"></i>
                </div>
            </div>
            <?php
            echo latest('theme/cbvma', "free", 8, 25);
            ?>
        </div>
    </div>

<!-- 메인화면 최신글 끝 -->
<script>
$(window).bind("pageshow", function(event) {
    if (event.originalEvent.persisted) {
        document.location.reload();
    }
});
</script>
<?php
include_once(G5_THEME_MOBILE_PATH.'/cbvmatail.php');
?>