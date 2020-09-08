<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 138;
$thumb_height = 80;
$list_count = (is_array($list) && $list) ? count($list) : 0;
$divisor_count = 4;
$start_page_num = $list_count ? '1' : '0';
$is_show_next_prev = ($list_count > 4) ? 1 : 0;
?>
<div class="content front">
<?php
    for ($i=0; $i<$list_count; $i++) {
?>
    <div class="working-hours">
        <p class="p2 <?php if ($list[$i]['icon_new']) echo "color-white bg-red2-dark"; ?>">
        <?php
            echo $list[$i]['subject'];
        ?>
        </p>
        <p class="<?php if ($list[$i]['icon_new']) echo "color-white bg-red2-dark"; ?>"><?php echo date('m.d', strtotime($list[$i]['datetime'])) ?></p>
    </div>
<?php
    }
?>
</div>

<!-- <div class="working-hours day-monday">          <p class="p2 color-white bg-red2-dark">농림축산식품부 동물병원 과태료 상향...</p>    <p class="color-white bg-red2-dark">08.26</p></div>
<div class="working-hours day-tuesday">         <p class="p2">동물병원 진료부‧처방내역공개 관련 가이...</p>   <p>08.25</p></div>
<div class="working-hours day-wednesday">       <p class="p2">유효기간이 지난 약제의 폐기방법 관련 안...</p> <p>08.18</p></div>
<div class="working-hours day-thursday">        <p class="p2">「의료 폐기물 처리 담당자 교육」이수 홍보...</p>  <p>08.14</p></div>
<div class="working-hours day-friday">          <p class="p2">｢마약류관리법｣주요 준수사항 알림</p>    <p>08.14</p></div>
<div class="working-hours day-saturday">        <p class="p2">동물병원 진료 연결 소셜커머스 가입 금...</p>  <p>08.14</p></div> -->