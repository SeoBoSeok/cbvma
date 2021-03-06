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
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
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
                <input type="text" class="border-0" placeholder="검색어를 입력해주세요. " data-search>
                <a href="#" class="disabled"><i class="fa fa-times-circle color-red2-dark"></i></a>
            </div>   

            <div class="search-results disabled-search-list card card-style shadow-l">
                <div class="content">
                    <script>
                        $('#preloader').removeClass('preloader-hide');
                    </script>
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
                        <a href="#" data-menu="menu-transaction-details" data-id="<?=$row["mb_id"]?>" data-name="<?=$row["mb_name"]?>" data-img="<?php echo $icon_file ?>" data-tel="<?php echo $row["mb_tel"] ?>" data-hp="<?php echo $row["mb_hp"] ?>" data-mb2="<?php echo $row["mb_2"] ?>" data-mb3="<?php echo $row["mb_3"] ?>" data-mb4="<?php echo $row["mb_4"] ?>" data-mb5="<?php echo $row["mb_5"] ?>" class="bg-highlight">VIEW</a>
                    </div>      
                    <?php
                        echo "<script>$('#preloader').removeClass('preloader-hide');</script>";
                    }
                    ?>      
                    <!-- <div class="search-no-results disabled">
                        <h3 class="bold top-10">Nothing found...</h3>
                        <span class="under-heading font-11 opacity-70 color-theme">There's nothing matching the description you're looking for, try a different keyword.</span>
                    </div> -->
                </div>
            </div>
        </div>    
    </div>
    <!-- End of Page Content-->
    <div id="menu-transaction-details" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="480" style="height: 480px; display: block;">
            <div class="menu-title"><h1></h1><p class="color-highlight" id="menuMb_mb2"><?php //echo $row["mb_2"] ?></p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
            <div class="divider divider-margins mb-1 mt-3"></div>
            <div class="content">
                <div class="row mb-0">
                    <div class="col-3" id="menuMb_img">
                        <img src="" width="80" height="80" class="rounded-xl objectfit">
                    </div>
                    <div class="col-9 pl-4">
                        <div class="d-flex">
                            <div><p class="font-700 color-theme">회원</p></div>
                            <div class="ml-auto"><p><?= $_section[$_REQUEST["category"]] ?></p></div>
                        </div>
                        <div class="d-flex">
                            <div><p class="font-700 color-theme">연락처</p></div>
                            <div class="ml-auto"><p><a href="tel:" id="menuMb_tel"></a></p></div>
                        </div>
                    </div>
                </div>
                <div class="divider mt-3 mb-3"></div>
                <div class="row mb-0">
                    <div class="col-6"><h4 class="font-16">근무처</h4></div>
                    <div class="col-6"><h4 class="font-16 text-right" id="menuMb_mb3"></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6"><h4 class="font-16 mt-1">졸업연도</h4></div>
                    <div class="col-6"><h4 class="font-16 text-right mt-1" id="menuMb_mb4"></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6"><h4 class="font-16 mt-1">직위</h4></div>
                    <div class="col-6"><h4 class="font-16 text-right mt-1 color-red2-dark" id="menuMb_mb21"></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6"><h4 class="font-16 mt-1">핸드폰</h4></div>
                    <div class="col-6"><h4 class="font-16 text-right mt-1 color-green1-dark"><a href="tel:" id="menuMb_hp"></a></h4></div>
                    <div class="divider divider-margins w-100 mt-2 mb-3"></div>
                    <div class="col-12"><a href="#" class="close-menu btn btn-full btn-m bg-highlight rounded-sm text-uppercase font-800">close</a></div>
                </div>
            </div>
        </div>
<?php
    include_once(G5_THEME_MOBILE_PATH.'/cbvmatail.php');
?>