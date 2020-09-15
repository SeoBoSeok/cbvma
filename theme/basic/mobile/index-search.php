<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if (!$is_member) {
    goto_url('?p=login');
}
$_section = array(
    "cbvet" => "개업수의사",
    "cbpublicofficer" => "충청북도 공무원",
    "publicofficer" => "시도 공무원",
    "institution" => "기타 기관",
    "education" => "교육 기관",
    "vet" => "일반수의사"
);
// include_once(G5_THEME_MOBILE_PATH.'/head.php');
include_once(G5_THEME_MOBILE_PATH.'/cbvmahead.php');
?>
    <!-- End of Page Content--> 
    <div class="page-content header-clear-small">
        
        <div class="card card-style preload-img" data-src="images/pictures/18.jpg" data-card-height="130">
            <div class="card-center ml-3">
                <h1 class="color-white mb-0">Search</h1>
                <p class="color-white mt-n1 mb-0"><?= $_section[$_REQUEST["category"]] ?></p>
            </div>
            <div class="card-center mr-3">
                <a href="#" data-back-button class="btn btn-m float-right rounded-xl shadow-xl text-uppercase font-800 bg-highlight">Back Home</a>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div>
    
        <div class="search-page">
            
            <div class="search-box search-header bg-theme card-style mr-3 ml-3">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="What are you looking for? " data-search>
                <a href="#" class="disabled"><i class="fa fa-times-circle color-red2-dark"></i></a>
            </div>   

            <div class="search-results disabled-search-list card card-style shadow-l">
                <div class="content">
                    <?php
                        $sql = " select mb_id, mb_name, mb_email, mb_tel, mb_hp, mb_1, mb_2, mb_3, mb_4, mb_5, mb_6
                        from `{$g5['member_table']}`
                        where mb_6 = '{$_REQUEST["category"]}'";
                        // $sql .= " order by mb_no";

                        // $sql = " select bo_table
                        //             from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                        //             where a.bo_device <> 'pc' ";                    
                        $result = sql_query($sql);
                        for ($i=0; $row=sql_fetch_array($result); $i++) {
                            $mb_dir = substr($row['mb_id'],0,2);
                            $icon_file = '/data/member_image/'.$mb_dir.'/'.get_mb_icon_name($row['mb_id']).'.gif';
                    ?>
                    <div data-filter-item data-filter-name="all <?=$row["mb_name"]?> <?=$row["mb_2"]?> <?=$row["mb_3"]?> <?=$row["mb_4"]?>"  class="search-result-list">
                    <img class="shadow-l preload-img objectfit" width="80" height="80" src="<?php echo $icon_file ?>" data-src="<?php echo $icon_file ?>" alt="img">
                        <h1><?php echo $row["mb_name"]?> | <?php echo $row["mb_3"]?>, <?php echo $row["mb_2"]?></h1>
                        <p>
                            <?php echo $row["mb_4"]?> <?php echo $row["mb_5"]?><br />
                            <i class="fa fa-phone"></i> <?php echo $row["mb_tel"]?> 
                        </p>
                        <a href="#" data-menu="menu-transaction-<?php echo $row["mb_id"] ?>" class="bg-highlight">VIEW</a>
                    </div>      
                    <?php
                    }
                    ?>      
                    <div class="search-no-results disabled">
                        <h3 class="bold top-10">Nothing found...</h3>
                        <span class="under-heading font-11 opacity-70 color-theme">There's nothing matching the description you're looking for, try a different keyword.</span>
                    </div>
                </div>
            </div>

            <!-- <div class="card card-style">
                <div class="content mb-2">
                    <h3>Keywords Searches</h3>
                    <p class="font-11 mt-n2">What others are Searching for.</p>
                </div>
                <div class="list-group list-custom-small mr-3 ml-3">       
                    <a href="?p=search&category=cbvet">
                        <span class="font-400 color-blue2-dark">개업수의사</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="?p=search&category=cbpublicofficer">
                        <span class="font-400 color-blue2-dark">충청북도 공무원</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="?p=search&category=publicofficer">
                        <span class="font-400 color-blue2-dark">시도 공무원</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="?p=search&category=institution">
                        <span class="font-400 color-blue2-dark">기타 기관</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="?p=search&category=education" class="border-0">
                        <span class="font-400 color-blue2-dark">교육 기관</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>
                    <a href="?p=search&category=vet" class="border-0">
                        <span class="font-400 color-blue2-dark">일반수의사</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                </div>
            </div> -->
        </div>    
    </div>
    <!-- End of Page Content-->
    <?php
        $sql = " select mb_id, mb_name, mb_email, mb_tel, mb_hp, mb_1, mb_2, mb_3, mb_4, mb_5, mb_6
        from `{$g5['member_table']}`
        where mb_6 = '{$_REQUEST["category"]}'";
        // $sql .= " order by mb_no";

        // $sql = " select bo_table
        //             from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
        //             where a.bo_device <> 'pc' ";                    
        $result = sql_query($sql);
        for ($i=0; $row=sql_fetch_array($result); $i++) {
            $mb_dir = substr($row['mb_id'],0,2);
            $icon_file = '/data/member_image/'.$mb_dir.'/'.get_mb_icon_name($row['mb_id']).'.gif';
        ?>
        <div id="menu-transaction-<?php echo $row["mb_id"] ?>" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="480" style="height: 480px; display: block;">
            <div class="menu-title"><h1><?php echo $row["mb_name"] ?></h1><p class="color-highlight"><?php echo $row["mb_2"] ?></p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
            <div class="divider divider-margins mb-1 mt-3"></div>
            <div class="content">
                <div class="row mb-0">
                    <div class="col-3">
                        <img src="<?php echo $icon_file ?>" width="80" height="80" class="rounded-xl objectfit">
                    </div>
                    <div class="col-9 pl-4">
                        <!-- <div class="d-flex">
                            <div><p class="font-700 color-theme">지역</p></div>
                            <div class="ml-auto"><p><?php echo $row["mb_3"] ?></p></div>
                        </div> -->
                        <div class="d-flex">
                            <div><p class="font-700 color-theme">회원</p></div>
                            <div class="ml-auto"><p><?= $_section[$_REQUEST["category"]] ?></p></div>
                        </div>
                        <div class="d-flex">
                            <div><p class="font-700 color-theme">연락처</p></div>
                            <div class="ml-auto"><p><?php echo $row["mb_tel"] ?></p></div>
                        </div>
                    </div>
                </div>
                <div class="divider mt-3 mb-3"></div>
                <div class="row mb-0">
                    <div class="col-6"><h4 class="font-14">근무처</h4></div>
                    <div class="col-6"><h4 class="font-14 text-right"><?php echo $row["mb_3"] ?></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6"><h4 class="font-14 mt-1">졸업연도</h4></div>
                    <div class="col-6"><h4 class="font-14 text-right mt-1"><?php echo $row["mb_4"] ?> <?php echo $row["mb_5"] ?></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6"><h4 class="font-14 mt-1">직위</h4></div>
                    <div class="col-6"><h4 class="font-14 text-right mt-1 color-red2-dark"><?php echo $row["mb_2"] ?></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6"><h4 class="font-14 mt-1">핸드폰</h4></div>
                    <div class="col-6"><h4 class="font-14 text-right mt-1 color-green1-dark"><?php echo $row["mb_hp"] ?></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-3"></div>
                    <div class="col-12"><a href="#" class="close-menu btn btn-full btn-m bg-highlight rounded-sm text-uppercase font-800">close</a></div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- <div id="menu-transaction" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="480" style="height: 480px; display: block;">
        <div class="menu-title"><h1>이승근</h1><p class="color-highlight">원장</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-1 mt-3"></div>
        <div class="content">
            <div class="row mb-0">
                <div class="col-3">
                    <img src="images/profile/ko1.png" width="80" height="80" class="rounded-xl objectfit">
                </div>
                <div class="col-9 pl-4">
                    <div class="d-flex">
                        <div><p class="font-700 color-theme">지역</p></div>
                        <div class="ml-auto"><p>청주시 서원구</p></div>
                    </div>
                    <div class="d-flex">
                        <div><p class="font-700 color-theme">회원</p></div>
                        <div class="ml-auto"><p>개업수의사</p></div>
                    </div>
                    <div class="d-flex">
                        <div><p class="font-700 color-theme">연락처</p></div>
                        <div class="ml-auto"><p>043-268-5677</p></div>
                    </div>
                </div>
            </div>
            <div class="divider mt-3 mb-3"></div>
            <div class="row mb-0">
                <div class="col-6"><h4 class="font-14">근무처</h4></div>
                <div class="col-6"><h4 class="font-14 text-right">고려동물메디컬센터</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                <div class="col-6"><h4 class="font-14 mt-1">졸업연도</h4></div>
                <div class="col-6"><h4 class="font-14 text-right mt-1">경북대 85</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                <div class="col-6"><h4 class="font-14 mt-1">직위</h4></div>
                <div class="col-6"><h4 class="font-14 text-right mt-1 color-green1-dark">원장</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-3"></div>
                <div class="col-12"><a href="#" class="close-menu btn btn-full btn-m bg-highlight rounded-sm text-uppercase font-800">close</a></div>
            </div>
        </div>
    </div> -->
<?php
    include_once(G5_THEME_MOBILE_PATH.'/cbvmatail.php');
?>