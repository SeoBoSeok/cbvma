<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// include_once(G5_THEME_MOBILE_PATH.'/head.php');
include_once(G5_THEME_MOBILE_PATH.'/cbvmahead.php');
?>
<!-- 메인화면 최신글 시작 -->
    <div class="page-content header-clear-small">
        
        <div class="row text-center mb-0">
            <a href="pages.html" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-3">
                    <i class="fa fa-file color-magenta2-dark fa-3x mt-5"></i>
                    <h1 class="pt-4">Pages</h1>
                    <p class="font-11 opacity-50 mt-n2">Endless Possibilities</p>
                    <p class="mb-0 pb-0 font-10 opacity-40">Tap to View</p>
                </div>
            </a>
            <a href="splash.html" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3">
                    <i class="fa fa-heart color-highlight fa-3x mt-5"></i>
                    <h1 class="pt-4">Starters</h1>
                    <p class="font-11 opacity-50 mt-n2">Landing, Splash, Walks</p>
                    <p class="mb-0 pb-0 font-10 opacity-40">Tap to View</p>
                </div>
            </a>
            <a href="media.html" class="col-6 pr-0">
                <div class="card card-style mr-2">
                    <i class="fa fa-image color-green1-dark fa-3x mt-5"></i>
                    <h1 class="pt-4">Media</h1>
                    <p class="font-11 opacity-50 mt-n2">Show your Work with Style</p>
                    <p class="mb-0 pb-0 font-10 opacity-40">Tap to View</p>
                </div>
            </a>
            <a class="col-6 pl-0" href="#" data-menu="menu-listed-menus">
                <div class="card card-style ml-2">
                    <i class="fa fa-star color-yellow1-dark fa-3x mt-5"></i>
                    <h1 class="pt-4">Menus</h1>
                    <p class="font-11 opacity-50 mt-n2">Powerful and Flexible </p>
                    <p class="mb-0 pb-0 font-10 opacity-40">Tap to Expand</p>
                </div>
            </a>
        </div>
        <a href="finance.html">
            <div class="card card-style mb-3">
                <div class="d-flex">
                    <div class="pl-3 ml-2 align-self-center">
                        <h1 class="pt-4">Finance Pages</h1>
                        <p class="font-11 opacity-50 mt-n2 mb-4">For all your Payment Purchases </p>
                    </div>
                    <div class="ml-auto mr-4 align-self-center">
                        <i class="fa fa-credit-card color-blue2-dark fa-3x mt-4 mb-4"></i>
                    </div>
                </div>
            </div>
        </a>
        <a href="store.html">
            <div class="card card-style">
                <div class="d-flex">
                    <div class="pl-3 ml-2 align-self-center">
                        <h1 class="pt-4">Commerce Pages</h1>
                        <p class="font-11 opacity-50 mt-n2 mb-4">Ready for your Conversion to a CMS </p>
                    </div>
                    <div class="ml-auto mr-4 align-self-center">
                        <i class="fa fa-shopping-bag color-brown1-dark fa-3x mt-4 mb-4"></i>
                    </div>
                </div>
            </div>
        </a>

        
        <div class="footer card card-style">
            <a href="#" class="footer-title"><span class="color-highlight">StickyMobile</span></a>
            <p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 pl-2 pr-2"></i> by Enabled</span><br><br>Powered by the best Mobile Website Developer on Envato Market. Elite Quality. Elite Products.</p>
            <div class="text-center mb-3">
                <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
                <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm mr-1 shadow-l bg-red2-dark"><i class="fa fa-share-alt"></i></a>
                <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark1-light"><i class="fa fa-angle-up"></i></a>
            </div>
            <p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.</p>
            <p class="footer-links"><a href="#" class="color-highlight">Privacy Policy</a> | <a href="#" class="color-highlight">Terms and Conditions</a> | <a href="#" class="back-to-top color-highlight"> Back to Top</a></p>
            <div class="clear"></div>
        </div>    

    
    </div>
    <!-- End of Page Content--> 
<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/cbvmatail.php');
?>