<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.cbvma.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
// include_once(G5_LIB_PATH.'/poll.lib.php');
// include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
// include_once(G5_LIB_PATH.'/popular.lib.php');
$mb_dir = substr($member['mb_id'],0,2);
$icon_file = '/data/member_image/'.$mb_dir.'/'.get_mb_icon_name($member['mb_id']).'.gif';
?>
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">
    <div id="menu-sidebar-left-1" class="bg-white menu menu-box-left" data-menu-width="320" style="width: 320px; display: block;">
        <div class="d-flex">
            <!-- <a href="#" class="flex-fill icon icon-m text-center color-facebook border-bottom border-right"><i class="fab font-12 fa-facebook-f"></i></a>
            <a href="#" class="flex-fill icon icon-m text-center color-twitter border-bottom border-right"><i class="fab font-12 fa-twitter"></i></a>
            <a href="#" class="flex-fill icon icon-m text-center color-instagram border-bottom border-right"><i class="fab font-12 fa-instagram"></i></a>
            <a href="#" class="flex-fill icon icon-m text-center color-whatsapp border-bottom border-right"><i class="fab font-12 fa-whatsapp"></i></a>
            <a href="#" class="flex-fill icon icon-m text-center color-linkedin border-bottom border-right"><i class="fab font-12 fa-linkedin-in"></i></a> -->
            <a href="#" class="close-menu flex-fill icon icon-m text-right pr-3 color-red2-dark border-bottom"><i class="fa font-12 fa-times"></i></a>
        </div>
        <?php
            if(!empty($member["mb_id"])) {
        ?>
        <div class="pl-3 pr-3 pt-3 mt-4 mb-2">
            <div class="d-flex">
                <div class="mr-3">
                    <img src="<?=$icon_file ?>" width="60">
                </div>
                <div class="flex-grow-1">
                    <h1 class="font-22 font-700 mb-0"><?=$member["mb_name"] ?></h1>
                    <p class="mt-n2 font-16 font-400"><?=$member["mb_3"] ?></p>
                </div>
                <a class="mt-n2 font-16 font-400" href="/bbs/logout.php">로그아웃</a>
            </div>
        </div>
        <?php
        }
        ?>

        <div class="mr-3 ml-3">
            <!-- <span class="text-uppercase font-900 font-11 opacity-30">Navigation</span> -->
            <div class="list-group list-custom-small list-icon-0">
                <a href="/">
                    <i class="fa font-14 fa-star color-yellow1-dark"></i>
                    <span>Home</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a href="/?p=board&bo_table=notice">
                    <i class="fa font-14 fa-cog color-blue2-dark"></i>
                    <span>정책공지</span>
                    <span class="badge bg-red2-dark">NEW</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a href="/?p=board&bo_table=free">
                    <i class="fa font-14 fa-file color-brown1-dark"></i>
                    <span>회원공지</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a href="/?p=pageAccount">
                    <i class="fa font-14 fa-user color-green1-dark"></i>
                    <span>개인정보수정</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <!-- <a href="#" class="border-0">
                    <i class="fa font-14 fa-image color-teal-dark"></i>
                    <span>Contact</span>
                    <i class="fa fa-angle-right"></i>
                </a>         -->
            </div>
        </div>
        
        <!-- <div class="mr-3 ml-3 mt-4">
            <span class="text-uppercase font-900 font-11 opacity-30">SOCIAL LINKS</span>
            <div class="list-group list-custom-small list-icon-0">
                <a href="#">
                    <i class="fab font-14 fa-facebook-f color-facebook"></i>
                    <span>Facebook</span>
                    <i class="fa fa-link"></i>
                </a>        
                <a href="#">
                    <i class="fab font-14 fa-twitter color-twitter"></i>
                    <span>Twitter</span>
                    <i class="fa fa-link"></i>
                </a>        
                <a href="#" class="border-0">
                    <i class="fab font-14 fa-instagram color-instagram"></i>
                    <span>Instagram</span>
                    <i class="fa fa-link"></i>
                </a>        
            </div>
        </div>        
        
        <div class="mr-3 ml-3 mt-4 pt-2">
            <span class="text-uppercase font-900 font-11 opacity-30">Account Settings</span>
            <div class="list-group list-custom-small list-icon-0">
                <a data-toggle-theme="" data-trigger-switch="sidebar-12-switch-1" href="#">
                    <i class="fa font-14 fa-moon color-gray2-dark"></i>
                    <span>Dark Mode</span>
                    <div class="custom-control scale-switch ios-switch">
                        <input type="checkbox" class="ios-input" id="sidebar-12-switch-1">
                        <label class="custom-control-label" for="sidebar-12-switch-1"></label>
                    </div>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a data-trigger-switch="sidebar-12-switch-2" href="#">
                    <i class="fa font-14 fa-circle color-green1-dark"></i>
                    <span>Active Mode</span>
                    <div class="custom-control scale-switch ios-switch">
                        <input type="checkbox" class="ios-input" id="sidebar-12-switch-2" checked="">
                        <label class="custom-control-label" for="sidebar-12-switch-2"></label>
                    </div>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a data-trigger-switch="sidebar-12-switch-3" href="#" class="border-0">
                    <i class="fa font-14 fa-bell color-blue2-dark"></i>
                    <span>Notifications</span>
                    <div class="custom-control scale-switch ios-switch">
                        <input type="checkbox" class="ios-input" id="sidebar-12-switch-3" checked="">
                        <label class="custom-control-label" for="sidebar-12-switch-3"></label>
                    </div>
                    <i class="fa fa-angle-right"></i>
                </a>        
            </div>
        </div> -->
    </div>
<!-- <div id="wrapper"> -->
    <?php
        parse_str($_SERVER['QUERY_STRING'], $output);
    ?>
    <div id="footer-bar" class="footer-bar-1">
        <a href="/" class="<?= (!isset($output["p"])) ? "active-nav" : ""; ?>"><i class="fa fa-home"></i><span>홈</span></a>
        <a href="#" data-menu="board-type" class="<?= ($output["p"] == "components") ? "active-nav" : ""; ?>"><i class="fa fa-bell"></i><span>Notice</span></a>
        <a href="#" data-menu="member-book"><i class="fa fa-users"></i><span>Member</span></a>
        <a href="?p=search" class="<?= ($output["p"] == "search") ? "active-nav" : ""; ?>"><i class="fa fa-search"></i><span>Search</span></a>
        <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Settings</span></a>
    </div>

    <!-- <div id="container"> -->
    <?php if (!defined("_INDEX_")) { ?>
    	<h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>">
    		<a href="javascript:history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sound_only">뒤로가기</span></a> <?php echo get_head_title($g5['title']); ?>
    	</h2>
    <?php } ?>

    <div class="header header-demo header-logo-center">
        <a href="/" class="header-logo">Enabled<span class="color-highlight"> Mobile</span></a>
        <a href="#" data-menu="menu-sidebar-left-1" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="?p=pageAccount" class="header-icon header-icon-4"><i class="fas fa-user"></i></a>
    </div>
