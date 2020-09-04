<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.cbvma.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
// include_once(G5_LIB_PATH.'/poll.lib.php');
// include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
// include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">
<!-- <div id="wrapper"> -->
    <?php
        parse_str($_SERVER['QUERY_STRING'], $output);
    ?>
    <div id="footer-bar" class="footer-bar-1">
        <a href="/" class="<?= (!isset($output["p"])) ? "active-nav" : ""; ?>"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="?p=components" class="<?= ($output["p"] == "components") ? "active-nav" : ""; ?>"><i class="fa fa-star"></i><span>Features</span></a>
        <a href="?p=pages" class="<?= ($output["p"] == "pages") ? "active-nav" : ""; ?>"><i class="fa fa-heart"></i><span>Pages</span></a>
        <a href="?p=search" class="<?= ($output["p"] == "search") ? "active-nav" : ""; ?>"><i class="fa fa-search"></i><span>Search</span></a>
        <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Settings</span></a>
    </div>

    <!-- <div id="container"> -->
    <?php if (!defined("_INDEX_")) { ?>
    	<h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>">
    		<a href="javascript:history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sound_only">뒤로가기</span></a> <?php echo get_head_title($g5['title']); ?>
    	</h2>
    <?php } ?>
