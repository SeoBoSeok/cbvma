<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// include_once(G5_THEME_MOBILE_PATH.'/head.php');
include_once(G5_THEME_MOBILE_PATH.'/cbvmahead.php');
?>
    <!-- End of Page Content--> 
    <div class="page-content header-clear-small">
        
        <div class="card card-style preload-img" data-src="images/pictures/18.jpg" data-card-height="130">
            <div class="card-center ml-3">
                <h1 class="color-white mb-0">Search</h1>
                <p class="color-white mt-n1 mb-0">It's a functional search system.</p>
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
                    <div data-filter-item data-filter-name="all products eazy mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/32s.jpg" alt="img">
                        <h1>Eazy | Mobile Website</h1>
                        <p>
                            Eazy Mobile, a best seller and trending item, loved by all. 
                        </p>
                        <a href="#" data-menu="menu-transaction" class="bg-highlight">VIEW</a>
                    </div>      

                    <div data-filter-item data-filter-name="all products eazy mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/29s.jpg" alt="img">
                        <h1>Eazy | Cordova App</h1>
                        <p>
                            Eazy is also available as <br> a Cordova & PhoneGap App. 
                        </p>
                        <a href="tel:0432685677" class="bg-highlight">VIEW</a>
                    </div>        

                    <div data-filter-item data-filter-name="all products mega mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/27s.jpg" alt="img">
                        <h1>Mega | Mobile Website</h1>
                        <p>
                            Mega Powerful, Mega Feature Filled, Easy to Use. 
                        </p>
                        <a href="tel:043-268-5677" class="bg-highlight">VIEW</a>
                    </div>   

                    <div data-filter-item data-filter-name="all products mega mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/28s.jpg" alt="img">
                        <h1>Mega | Cordova App</h1>
                        <p>
                            Mega is also available as <br> a Cordova & PhoneGap App. 
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>        

                    <div data-filter-item data-filter-name="all products ultra mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/26s.jpg" alt="img">
                        <h1>Ultra | Mobile Website</h1>
                        <p>
                            Ultra Powerful and Fast Mobile Website, an absolute best seller. 
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>   

                    <div data-filter-item data-filter-name="all products ultra mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/25s.jpg" alt="img">
                        <h1>Ultra | Cordova App</h1>
                        <p>
                            Ultra is also available as <br> a Cordova & PhoneGap App. 
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>    

                    <div data-filter-item data-filter-name="all products kolor mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/24s.jpg" alt="img">
                        <h1>Kolor | Mobile Website</h1>
                        <p>
                            Kolor is creative, beautiful, and offers beautiful colors.
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>   

                    <div data-filter-item data-filter-name="all products kolor mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/23s.jpg" alt="img">
                        <h1>Kolor | Cordova App</h1>
                        <p>
                            Kolor is also available as <br> a Cordova & PhoneGap App. 
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>       

                    <div data-filter-item data-filter-name="all products vinga mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/22s.jpg" alt="img">
                        <h1>Vinga | Mobile Website</h1>
                        <p>
                            Simplicity and Elegance at it's best. Vinga is very fast.
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>   

                    <div data-filter-item data-filter-name="all products vinga mobile"  class="search-result-list">
                        <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/21s.jpg" alt="img">
                        <h1>Vinga | Cordova App</h1>
                        <p>
                            Vinga is also available as <br> a Cordova & PhoneGap App. 
                        </p>
                        <a href="#" class="bg-highlight">VIEW</a>
                    </div>      
                    <div class="search-no-results disabled">
                        <h3 class="bold top-10">Nothing found...</h3>
                        <span class="under-heading font-11 opacity-70 color-theme">There's nothing matching the description you're looking for, try a different keyword.</span>
                    </div>
                </div>
            </div>

            <div class="search-trending card card-style">
                <div class="content mb-2">
                    <h3>Trending Searches</h3>
                    <p class="font-11 mt-n2">What others are Searching for.</p>
                </div>
                <div class="list-group list-custom-small mr-3 ml-3">
                    <a href="#">
                        <span class="font-400 color-blue2-dark">All Products</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="#">
                        <span class="font-400 color-blue2-dark">Eazy Mobile</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="#">
                        <span class="font-400 color-blue2-dark">Mega Mobile</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="#">
                        <span class="font-400 color-blue2-dark">Ultra Mobile</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="#">
                        <span class="font-400 color-blue2-dark">Kolor Mobile</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                    <a href="#" class="border-0">
                        <span class="font-400 color-blue2-dark">Vinga Mobile</span>
                        <i class="color-gray2-dark fa fa-angle-right"></i>
                    </a>        
                </div>
            </div>
        </div>

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