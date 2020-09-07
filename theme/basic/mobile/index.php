<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// include_once(G5_THEME_MOBILE_PATH.'/head.php');
include_once(G5_THEME_MOBILE_PATH.'/cbvmahead.php');
?>
<!-- 메인화면 최신글 시작 -->
    <div class="page-content">
    
        <div class="single-slider owl-carousel owl-no-dots">
            <div class="card shadow-l">
                <div class="card-bottom text-left pad-30">
                    <h1 class="color-white font-700 mb-3 padl-20 font-35">충청북도 수의사회</h1>
                    <p class="color-white opacity-80 mb-4 padl-20 font-500">회원들과 함께 소통하고 화합하는
                        <br>새로운 충청북도 수의사회를 희망합니다.
                    </p>
                </div>
                <img class="img-fluid gray25" src="images/pictures/main_img.jpg">
            </div>
            <!-- <div class="card rounded-m shadow-l">
                <div class="card-bottom text-center mb-0">
                    <h1 class="color-white font-700 mb-n1">StickyMobile</h1>
                    <p class="color-white opacity-80 mb-4">The Menu Everyone Requested.</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
                <img class="img-fluid" src="images/pictures/13.jpg">
            </div>
            <div class="card rounded-m shadow-l">
                <div class="card-bottom text-center mb-0">
                    <h1 class="color-white font-700 mb-n1">Carefuly Built</h1>
                    <p class="color-white opacity-80 mb-4">Flexibility, Speed, Ease of Use.</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
                <img class="img-fluid" src="images/pictures/28.jpg">
            </div> -->
        </div>
        <div class="row text-center mb-0">
            <a href="pages.html" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-3">
                    <img class="height80 mt-4" src="images/icon01.svg">
                    <h1 class="pt-4">회원리스트</h1>
                    <p class="font-15 opacity-50 mt-n2">List</p>
                </div>
            </a>
            <a href="splash.html" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3">
                    <img class="height60" src="images/icon02.svg">
                    <h1 class="pt-4">회원검색</h1>
                    <p class="font-15 opacity-50 mt-n2">Search</p>
                </div>
            </a>
            <a href="media.html" class="col-6 pr-0">
                <div class="card card-style mr-2">
                    <i class="fa fa-file color-magenta2-dark fa-4x mt-4"></i>
                    <h1 class="pt-4">자료실</h1>
                    <p class="font-15 opacity-50 mt-n2">Board</p>
                </div>
            </a>
            <a class="col-6 pl-0" href="#">
                <div class="card card-style ml-2 pl-0">
                    <img class="height80 mt-4" src="images/icon04.svg">
                    <h1 class="pt-4">내정보</h1>
                    <p class="font-15 opacity-50 mt-n2">My Page</p>
                </div>
            </a>
        </div>
        <div class="card card-style mb-3">
            <div class="d-flex">
                <div class="pl-3 ml-2 align-self-center">
                    <h1 class="pt-4">공지사항</h1>
                    <p class="font-15 opacity-50 mt-n2 mb-4">충청북도 수의사회의 최신소식을 확인하세요.</p>
                </div>
                <div class="ml-auto mr-4 align-self-center">
                    <img class="height50 mt-1" src="images/icon03.svg">
                </div>
            </div>
            <?php
            // $sql = " select bo_table
            //             from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
            //             where a.bo_device <> 'pc' ";
            // $sql .= " order by b.gr_order, a.bo_order ";
            // $result = sql_query($sql);
            // for ($i=0; $row=sql_fetch_array($result); $i++) {
            //     echo latest('theme/basic', "notice", 12, 25);
            // }
            ?>
            <div>
            <div class="content front">

                <!-- To set open and Close Hours Open custom.js and search for "SET OPENING HOURS BELOW" -->
                <!-- Only setting the code below will not make the system work automatically-->

                <div class="working-hours day-monday">          <p class="p2 color-white  bg-red2-dark">농림축산식품부 동물병원 과태료 상향.../p>    <p class="color-white bg-red2-dark">08.26</p></div>
                <div class="working-hours day-tuesday">         <p class="p2">동물병원 진료부‧처방내역공개 관련 가이...</p>   <p>08.25</p></div>
                <div class="working-hours day-wednesday">       <p class="p2">유효기간이 지난 약제의 폐기방법 관련 안...</p> <p>08.18</p></div>
                <div class="working-hours day-thursday">        <p class="p2">「의료 폐기물 처리 담당자 교육」이수 홍보...</p>  <p>08.14</p></div>
                <div class="working-hours day-friday">          <p class="p2">｢마약류관리법｣주요 준수사항 알림</p>    <p>08.14</p></div>
                <div class="working-hours day-saturday">        <p class="p2">동물병원 진료 연결 소셜커머스 가입 금...</p>  <p>08.14</p></div>

                </div>
            </div>
            <!-- <table class="table table-borderless text-center shadow-l" style="overflow: hidden;">
                <thead>
                    <tr class="bg-gray1-dark">
                        <th scope="col" class="color-theme">Brand</th>
                        <th scope="col" class="color-theme">Device</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-dark1-light">
                        <th scope="row">Apple</th>
                        <td>iPhone</td>
                    </tr>
                    <tr class="bg-dark1-light">
                        <th scope="row">Android</th>
                        <td>Pixel</td>
                    </tr>
                    <tr class="bg-dark1-light">
                        <th scope="row">Nope</th>
                        <td>Nope</td>
                    </tr>
                </tbody>
            </table> -->
        </div>
        <!-- <div class="card card-style">
            <div class="content mt-0 mb-0">
                <div class="list-group list-custom-large">
                    <a href="#" data-toggle-theme data-trigger-switch="switch-4" class="border-0">
                        <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                        <span class="font-600">Dark Mode</span>
                        <strong>Sticky will Remember</strong>
                        <div class="custom-control scale-switch ios-switch">
                            <input data-toggle-theme-switch type="checkbox" class="ios-input" id="switch-4">
                            <label class="custom-control-label" for="switch-4"></label>
                        </div>
                        <i class="fa fa-angle-right"></i>
                    </a>    
                </div>
            </div>
        </div>    -->
    </div>

<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/cbvmatail.php');
?>