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
<div id="page">
<div id="wrapper">

    <div id="footer-bar" class="footer-bar-1">
        <a href="index.html" class="active-nav"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="index-components.html"><i class="fa fa-star"></i><span>Features</span></a>
        <a href="index-pages.html"><i class="fa fa-heart"></i><span>Pages</span></a>
        <a href="index-search.html"><i class="fa fa-search"></i><span>Search</span></a>
        <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Settings</span></a>
    </div>

    <div class="page-content header-clear-small">
    
        <div class="single-slider slider-boxed owl-carousel owl-no-dots">
            <div class="card rounded-m shadow-l">
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
            </div>

            <div class="card rounded-m shadow-l">
                <div class="card-bottom text-center mb-0">
                    <h1 class="color-white font-700 mb-n1">Elite Quality</h1>
                    <p class="color-white opacity-80 mb-4">Mobile Website, App or PWA Ready.</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
                <img class="img-fluid" src="images/pictures/29.jpg">
            </div>
        </div>    

        <div class="single-slider owl-carousel owl-no-dots">
            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-0">Call to Actions</h1>
                    <p class="text-center color-highlight mt-n1 font-12">Sticky comes Prepared for You</p>
                    <p class="boxed-text-xl mt-n3">
                        Call to action are highly important, but we can't choose a style for you, so we created a few!
                    </p>
                    <a href="#" class="btn btn-m btn-center-l bg-red2-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mb-4">Swipe Left to Begin</a>
                </div>
            </div>

            <div class="card card-style">
                <div class="content">
                    <h1 class="text-center mb-0">Let's get Social</h1>
                    <p class="text-center color-highlight mt-n1 font-12">Follow & Get in Touch with Us</p>
                    <p class="boxed-text-xl mt-n3">
                        It's easy. Just add your links and you're ready to go. Social links are wildely available in Sticky
                    </p>
                    <p class="text-center pb-2">
                        <a href="#" class="icon icon-s rounded-s shadow-xl color-white bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon icon-s rounded-s shadow-xl color-white bg-phone ml-2 mr-2"><i class="fa fa-phone"></i></a>
                        <a href="#" class="icon icon-s rounded-s shadow-xl color-white bg-twitter"><i class="fab fa-twitter"></i></a>
                    </p>
                </div>
            </div>

            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-0">This or That?</h1>
                    <p class="text-center color-highlight mt-n1 font-12">Which is your Favorite?</p>
                    <p class="boxed-text-xl mt-n3">
                        Multiple choices are awesome, highlighting them is even easier with our Call to Actions
                    </p>
                    <p class="text-center mt-n3 mb-0 pb-0">
                        <a href="#" class="btn btn-m bg-green1-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mb-4 mt-3">Call Now</a>
                        <a href="#" class="icon icon-m rounded-s opacity-40 color-theme ml-3 mr-3">or</a>
                        <a href="#" class="btn btn-m bg-red2-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mb-4 mt-3">GET A QUOTE</a>
                    </p>
                </div>
            </div>

            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-0">Direct Action</h1>
                    <p class="text-center color-highlight mt-n1 mb-2 font-12">Invite Users to Tap Button</p>
                    <p class="boxed-text-xl">
                         Make a button stand out at the top of your page so it's easily accessible as a first option.
                    </p>
                    <a href="#" class="btn btn-m btn-center-l bg-red2-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mb-4">Purchase today for $25</a>
                </div>
            </div>
        </div>
        
        <div class="card card-style">
            <div class="content mb-0">
                <h1 class="text-center mb-0">Packed with Goodies</h1>
                <p class="text-center color-highlight font-11 mt-n1">The Absolute Best Products & Care for You</p>
                <p class="boxed-text-xl mt-n3">
                    Over 10 years of Experience in Building Gorgeous Products only for you! We are Envato Elite.
                </p>
                <div class="divider"></div>
            </div>
            <div class="row mr-2 ml-2 mb-0">
                <div class="col-6 text-center">
                    <i class="fa fa-trophy color-yellow1-dark fa-3x"></i>
                    <h2 class="mt-3 mb-1">Future Proof</h2>
                    <p>Built to last, with the latest quality code</p>
                </div>
                <div class="col-6 text-center">
                    <i class="fab fa-cloudscale color-highlight fa-3x"></i>
                    <h2 class="mt-3 mb-1">Powerful</h2>
                    <p>Speed, Features and Flexibility all in One!</p>
                </div>
                <div class="col-6 text-center">
                    <i class="fa fa-check color-green1-dark fa-3x"></i>
                    <h2 class="mt-3 mb-1">Easy to Use</h2>
                    <p>Customers love our work for it's ease.</p>
                </div>
                <div class="col-6 text-center">
                    <i class="fa fa-life-ring color-blue2-dark fa-3x"></i>
                    <h2 class="mt-3 mb-1">Customer Care</h2>
                    <p>We treat others like we want to be treated.</p>
                </div>
            </div>
        </div>

        <div class="double-slider owl-carousel owl-no-dots">
            <div class="item">
                <div data-card-height="250" class="card rounded-m shadow-l bg-13">
                    <div class="card-bottom text-center">
                        <h2 class="color-white font-900 mb-0">EazyMobile</h2>
                        <p class="text-center mb-3">
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                        </p>
                        <a href="#" class="btn btn-s btn-full text-uppercase font-900 bg-red2-dark rounded-s mr-2 ml-2 mb-2">Purchase</a>
                    </div>
                    <div class="card-overlay bg-gradient"></div>
                </div>
            </div>
            <div class="item">
                <div data-card-height="250" class="card rounded-m shadow-l bg-27">
                    <div class="card-bottom text-center">
                        <h2 class="color-white font-900 mb-0">UltraMobile</h2>
                        <p class="text-center mb-3">
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                        </p>
                        <a href="#" class="btn btn-s btn-full text-uppercase font-900 bg-red2-dark rounded-s mr-2 ml-2 mb-2">Purchase</a>
                    </div>
                    <div class="card-overlay bg-gradient"></div>
                </div>
            </div>
            <div class="item">
                <div data-card-height="250" class="card rounded-m shadow-l bg-17">
                    <div class="card-bottom text-center">
                        <h2 class="color-white font-900 mb-0">KolorMobile</h2>
                        <p class="text-center mb-3">
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                        </p>
                        <a href="#" class="btn btn-s btn-full text-uppercase font-900 bg-red2-dark rounded-s mr-2 ml-2 mb-2">Purchase</a>
                    </div>
                    <div class="card-overlay bg-gradient"></div>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-4">
                <h1 class="text-center mb-0">Care & Quality</h1>
                <p class="text-center color-highlight font-11 mt-n1 pb-0">No stone left unturned, no aspect overlooked.</p>
                <p class="text-center font-20 mt-n2">
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                </p>
                <div class="single-slider slider-boxed owl-carousel owl-no-dots">
                    <h2 class="text-center font-300 line-height-xl content mb-0 mt-0">
                        The code is always great with any Enabled template, the customer support that wins me over always.
                    </h2>
                    <h2 class="text-center font-300 line-height-xl content mb-0 mt-0">
                        The best support I have ever had, it's so good I purchased another theme. Highlighy Recommended.
                    </h2>
                </div>          
                <a href="#" class="btn btn-m btn-center-l text-uppercase font-900 bg-red2-dark rounded-sm shadow-xl mt-4 mb-0">More Testimonials</a>
            </div>
        </div>

        <div class="double-slider owl-carousel owl-no-dots">
            <div class="item">
                <div data-card-height="180" class="card rounded-m shadow-l bg-18">
                    <div class="card-top ml-3 mt-3">
                        <i class="fa fa-bolt fa-4x color-red2-dark"></i>
                    </div>
                    <div class="card-bottom ml-3">
                        <h2 class="color-white font-900 mb-0">Performance</h2>
                        <p class="color-white font-11 mt-n1 mb-2">Fast and feature filled</p>
                    </div>
                    <div class="card-overlay bg-black opacity-80"></div>
                </div>
            </div>
            <div class="item">
                <div data-card-height="180" class="card rounded-m shadow-l bg-14">
                    <div class="card-top ml-3 mt-3">
                        <i class="fa fa-trophy fa-4x color-blue2-dark"></i>
                    </div>
                    <div class="card-bottom ml-3">
                        <h2 class="color-white font-900 mb-0">Elite Care</h2>
                        <p class="color-white font-11 mt-n1 mb-2">Built by the Best for You</p>
                    </div>
                    <div class="card-overlay bg-black opacity-80"></div>
                </div>
            </div>
            <div class="item">
                <div data-card-height="180" class="card rounded-m shadow-l bg-3">
                    <div class="card-top ml-3 mt-3">
                        <i class="fa fa-star fa-4x color-yellow1-dark"></i>
                    </div>
                    <div class="card-bottom ml-3">
                        <h2 class="color-white font-900 mb-0">Quality</h2>
                        <p class="color-white font-11 mt-n1 mb-2">Built with Care and Detail</p>
                    </div>
                    <div class="card-overlay bg-black opacity-80"></div>
                </div>
            </div>
        </div>
        
        <div class="card card-style">
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
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <h1 class="text-center mb-0">Get Sticky Today</h1>
                <p class="text-center color-highlight font-11 mt-n1 pb-0">Tons of Awesome Features just for You.</p>
                <p class="boxed-text-xl mt-n3">
                    Fast, easy to use and filled with features. Get Sticky Today and give your site the Mobile Feeling it deserves.
                </p>
                <a href="#" class="btn btn-m btn-center-l text-uppercase font-900 bg-red2-dark rounded-sm shadow-xl mb-4">Purchase Now - $25</a>
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

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?>
    	<h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>">
    		<a href="javascript:history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sound_only">뒤로가기</span></a> <?php echo get_head_title($g5['title']); ?>
    	</h2>
    <?php } ?>
