<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    <!-- </div> -->


<?php //echo poll('theme/basic'); // 설문조사 ?>
<?php //echo visit('theme/basic'); // 방문자수 ?>

<!-- 기존코드 삭제 -->

<!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->
    <div id="menu-settings" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="308">
        <div class="menu-title"><h1>Settings</h1><p class="color-highlight">Flexible and Easy to Use</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="list-group list-custom-small">
                <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ml-n1">
                    <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                    <span>Dark Mode</span>
                    <div class="custom-control scale-switch ios-switch">
                        <input data-toggle-theme-switch type="checkbox" class="ios-input" id="switch-dark-mode">
                        <label class="custom-control-label" for="switch-dark-mode"></label>
                    </div>
                    <i class="fa fa-angle-right"></i>
                </a>    
            </div>
            <div class="list-group list-custom-large">
                <a data-menu="menu-highlights" href="#">
                    <i class="fa font-14 fa-tint bg-green1-dark rounded-s"></i>
                    <span>Page Highlight</span>
                    <span class="badge bg-highlight color-white">HOT</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a data-menu="menu-backgrounds" href="#" class="border-0">
                    <i class="fa font-14 fa-cog bg-blue2-dark rounded-s"></i>
                    <span>Background Color</span>
                    <span class="badge bg-highlight color-white">NEW</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
            </div>
        </div>
    </div>
    <!-- Menu Settings Highlights-->
    <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="380" data-menu-effect="menu-over">
        <div class="menu-title"><h1>Highlights</h1><p class="color-highlight">Any Element can have a Highlight Color</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="highlight-changer">
                <a href="#" data-change-highlight="blue2"><i class="fa fa-circle color-blue2-dark"></i><span class="color-blue2-light">Default</span></a>
                <a href="#" data-change-highlight="red2"><i class="fa fa-circle color-red1-dark"></i><span class="color-red2-light">Red</span></a>    
                <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span class="color-orange-light">Orange</span></a>    
                <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span class="color-pink2-light">Pink</span></a>    
                <a href="#" data-change-highlight="magenta2"><i class="fa fa-circle color-magenta2-dark"></i><span class="color-magenta2-light">Purple</span></a>    
                <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span class="color-aqua-light">Aqua</span></a>      
                <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span class="color-teal-light">Teal</span></a>      
                <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span class="color-mint-light">Mint</span></a>      
                <a href="#" data-change-highlight="green2"><i class="fa fa-circle color-green2-dark"></i><span class="color-green2-light">Green</span></a>    
                <a href="#" data-change-highlight="green1"><i class="fa fa-circle color-green1-dark"></i><span class="color-green1-light">Grass</span></a>       
                <a href="#" data-change-highlight="yellow2"><i class="fa fa-circle color-yellow2-dark"></i><span class="color-yellow2-light">Sunny</span></a>    
                <a href="#" data-change-highlight="yellow1"><i class="fa fa-circle color-yellow1-dark"></i><span class="color-yellow1-light">Goldish</span></a>
                <a href="#" data-change-highlight="brown1"><i class="fa fa-circle color-brown1-dark"></i><span class="color-brown1-light">Wood</span></a>    
                <a href="#" data-change-highlight="dark1"><i class="fa fa-circle color-dark1-dark"></i><span class="color-dark1-light">Night</span></a>
                <a href="#" data-change-highlight="dark2"><i class="fa fa-circle color-dark2-dark"></i><span class="color-dark2-light">Dark</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="menu-settings" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
        </div>
    </div>    
    <!-- Menu Settings Backgrounds-->
    <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="310" data-menu-effect="menu-over">
        <div class="menu-title"><h1>Backgrounds</h1><p class="color-highlight">Change Page Color Behind Content Boxes</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer">
                <a href="#" data-change-background="none"><i class="bg-theme"></i><span>Default</span></a>
                <a href="#" data-change-background="plum"><i class="body-plum"></i><span class="color-plum-dark">Plum</span></a>
                <a href="#" data-change-background="magenta3"><i class="body-magenta3"></i><span class="color-magenta3-dark">Magenta</span></a>
                <a href="#" data-change-background="dark3"><i class="body-dark3"></i><span class="color-dark3-dark">Dark</span></a>
                <a href="#" data-change-background="violet"><i class="body-violet"></i><span class="color-violet-dark">Violet</span></a>
                <a href="#" data-change-background="red3"><i class="body-red3"></i><span class="color-red3-dark">Red</span></a>
                <a href="#" data-change-background="green3"><i class="body-green3"></i><span class="color-green3-dark">Green</span></a>
                <a href="#" data-change-background="sky"><i class="body-sky"></i><span class="color-sky-dark">Sky</span></a>
                <a href="#" data-change-background="pumpkin"><i class="body-pumpkin"></i><span class="color-pumpkin-dark">Orange</span></a>
                <a href="#" data-change-background="yellow3"><i class="body-yellow3"></i><span class="color-yellow3-dark">Yellow</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="menu-settings" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
        </div>
    </div>
    <!-- Menu Share -->
    <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="345" data-menu-effect="menu-over">
        <div class="menu-title mt-n1"><h1>Share the Love</h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="content mb-0">
            <div class="divider mb-0"></div>
            <div class="list-group list-custom-small list-icon-0">
                <a href="#" class="shareToFacebook">
                    <i class="font-18 fab fa-facebook color-facebook"></i>
                    <span class="font-13">Facebook</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToTwitter">
                    <i class="font-18 fab fa-twitter-square color-twitter"></i>
                    <span class="font-13">Twitter</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToLinkedIn">
                    <i class="font-18 fab fa-linkedin color-linkedin"></i>
                    <span class="font-13">LinkedIn</span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a href="#" class="shareToWhatsApp">
                    <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                    <span class="font-13">WhatsApp</span>
                    <i class="fa fa-angle-right"></i>
                </a>   
                <a href="#" class="shareToMail border-0">
                    <i class="font-18 fa fa-envelope-square color-mail"></i>
                    <span class="font-13">Email</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
    <!-- <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l <?php echo (!isMobile()) ? 'pc-view' : '' ?>"
         data-menu-height="350" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">충청북도 수의사회 모바일 전용 홈페이지 오픈</h4>
            <p>
            충청북도 수의사회 모바일 전용 홈페이지 오픈하였습니다. 많은 관심 부탁드립니다.
            </p>
            <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
            <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">나중에 추가</a>
            <div class="clear"></div>
        </div>
    </div>    -->

    <!-- Install instructions for iOS -->
    <!-- <div id="menu-install-pwa-ios" 
        class="menu menu-box-bottom menu-box-detached rounded-l <?php echo (!isMobile()) ? 'pc-view' : '' ?>"
         data-menu-height="320" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">충청북도 수의사회 모바일 전용 홈페이지 오픈</h4>
            <p>
            충청북도 수의사회 모바일 전용 홈페이지 오픈하였습니다. 많은 관심 부탁드립니다.
            </p>
            <div class="clear"></div>
            <a href="#" class="pwa-dismiss close-menu color-highlight uppercase ultrabold opacity-80 top-25">나중에 추가</a>
            <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
        </div>
    </div> -->
    <?php
        $list = array();
        $sql = "SELECT mb_6, count(mb_id) as cnt FROM cbvma.g5_member group by mb_6 order by 1 desc";
        $result = sql_query($sql);
        for($i=0; $row=sql_fetch_array($result); $i++) {
            $list[$i] = $row;
        }
    ?>
    <!-- 회원수첩메뉴 Starts -->
    <div id="member-book" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="600">
        <div class="menu-title"><h1>회원 수첩</h1><p class="color-highlight">카테고리 선택</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="list-group list-custom-large">
                <a data-menu="menu-cheongju" href="#">
                    <i class="fa font-14 fa-tint bg-green1-dark rounded-s"></i>
                    <span>청주시 개업수의사</span>
                    <!-- <strong>청주시, 충주시, 제천시</strong> -->
                    <span class="badge bg-highlight color-white"><?=$list[4]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>        
                <a data-menu="menu-chungjusi" href="#" class="border-0">
                    <i class="fa font-14 fa-tint bg-green1-dark rounded-s"></i>
                    <span>충주시,기타군 수의사</span>
                    <!-- <strong>보은군, 옥천군, 영동군, 증평군, 진천군, 괴산군, 음성군, 단양군</strong> -->
                    <span class="badge bg-highlight color-white"><?=$list[4]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a data-menu="menu-cbpublicofficer" href="#" class="border-0">
                    <i class="fa font-14 fa-cog bg-blue2-dark rounded-s"></i>
                    <span>충청북도 공무원</span>
                    <!-- <strong>도청 동물방역과, 도청 축수산과</strong> -->
                    <span class="badge bg-highlight color-white"><?=$list[5]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a data-menu="menu-publicofficer" href="#" class="border-0">
                    <i class="fa font-14 fa-cog bg-blue2-dark rounded-s"></i>
                    <span>시군 공무원</span>
                    <!-- <strong>청주시, 충주시, 제천시, 보은군</strong> -->
                    <span class="badge bg-highlight color-white"><?=$list[1]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a data-menu="menu-institution" href="#" class="border-0">
                    <i class="fa font-14 fa-cog bg-blue2-dark rounded-s"></i>
                    <span>기타 기관</span>
                    <span class="badge bg-highlight color-white"><?=$list[2]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="?p=member-education" class="border-0">
                    <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                    <span>교육기관</span>
                    <span class="badge bg-highlight color-white"><?=$list[3]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a data-menu="menu-vet" href="#" class="border-0">
                    <i class="fa font-14 fa-tint bg-green1-dark rounded-s"></i>
                    <span>수의사</span>
                    <span class="badge bg-highlight color-white"><?=$list[0]["cnt"] ?></span>
                    <i class="fa fa-angle-right"></i>
                </a>                                                                                                                                     
            </div>
        </div>
    </div>
    <?php

    ?>
    <!-- 회원수첩 메뉴 End -->
    <!-- 청주시 개업수의사 Start -->
    <div id="menu-cheongju" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="310" data-menu-effect="menu-over">
        <div class="menu-title"><h1>청주시</h1><p class="color-highlight">지역을 선택해주세요</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer">
                <a href="?p=member-cheongju&category=sangdang"><i class="bg-theme"></i><span>상당구</span></a>
                <a href="?p=member-cheongju&category=seowon"><i class="body-plum"></i><span class="color-plum-dark">서원구</span></a>
                <a href="?p=member-cheongju&category=cheongwon"><i class="body-magenta3"></i><span class="color-magenta3-dark">청원구</span></a>
                <a href="?p=member-cheongju&category=heungdeok"><i class="body-yellow3"></i><span class="color-yellow3-dark">흥덕구</span></a>
                <a href="?p=member-cheongju&category=cbuniv"><i class="body-theme"></i><span>충북대동물병원</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="member-book" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
        </div>
    </div>
    <!-- menu-chungju Start -->
    <div id="menu-chungjusi" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="310" data-menu-effect="menu-over">
        <div class="menu-title"><h1>충주시 및 기타군</h1><p class="color-highlight">지역을 선택해주세요</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer">
                <a href="?p=member-chungju&category=chungjusi"><i class="bg-theme"></i><span>충주시</span></a>
                <a href="?p=member-chungju&category=jecheon"><i class="body-plum"></i><span class="color-plum-dark">제천시</span></a>
                <a href="?p=member-chungju&category=boeun"><i class="body-magenta3"></i><span class="color-magenta3-dark">보은군</span></a>
                <a href="?p=member-chungju&category=okcheon"><i class="body-yellow3"></i><span class="color-yellow3-dark">옥천군</span></a>
                <a href="?p=member-chungju&category=youngdong"><i class="bg-theme"></i><span>영동군</span></a>
                <a href="?p=member-chungju&category=jeungpyeong"><i class="body-plum"></i><span class="color-plum-dark">증평군</span></a>
                <a href="?p=member-chungju&category=jincheon"><i class="body-magenta3"></i><span class="color-magenta3-dark">진천군</span></a>
                <a href="?p=member-chungju&category=goesan"><i class="body-yellow3"></i><span class="color-yellow3-dark">괴산군</span></a>
                <a href="?p=member-chungju&category=eumseong"><i class="body-magenta3"></i><span class="color-magenta3-dark">음성군</span></a>
                <a href="?p=member-chungju&category=danyang"><i class="body-yellow3"></i><span class="color-yellow3-dark">단양군</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="member-book" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4 mb-4">Back to Settings</a>
        </div>
    </div>
    <!-- menu-chungju End -->
    <!-- 청주시 개업수의사 End -->
    <!-- menu-cbpublicofficer Start -->
    <div id="menu-cbpublicofficer" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="410" data-menu-effect="menu-over">
        <div class="menu-title"><h1>충청북도 공무원</h1><p class="color-highlight">소속을 선택해주세요</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer three">
                <a href="?p=member-cbpublicofficer&category=cbpolist_1"><i class="bg-theme"></i><span>도청 동물방역과</span></a>
                <a href="?p=member-cbpublicofficer&category=cbpolist_2"><i class="body-plum"></i><span class="color-plum-dark">도청 축수산과</span></a>
                <a href="?p=member-cbpublicofficer&category=cbpolist_3"><i class="body-magenta3"></i><span class="color-magenta3-dark">동물위생시험소<br>방역과</span></a>
                <div class="clearfix"></div>
                <a href="?p=member-cbpublicofficer&category=cbpolist_4"><i class="body-yellow3"></i><span class="color-yellow3-dark">동물위생시험소<br>축산물검사과</span></a>
                <a href="?p=member-cbpublicofficer&category=cbpolist_5"><i class="bg-theme"></i><span>동물위생시험소<br>중부지소</span></a>
                <a href="?p=member-cbpublicofficer&category=cbpolist_6"><i class="body-plum"></i><span class="color-plum-dark">동물위생시험소<br>남부지소</span></a>
                <div class="clearfix"></div>
                <a href="?p=member-cbpublicofficer&category=cbpolist_7"><i class="body-magenta3"></i><span class="color-magenta3-dark">동물위생시험소<br>북부지소</span></a>
                <a href="?p=member-cbpublicofficer&category=cbpolist_8"><i class="body-yellow3"></i><span class="color-yellow3-dark">동물위생시험소<br>음성축산물검사소</span></a>
                <a href="?p=member-cbpublicofficer&category=cbpolist_9"><i class="body-magenta3"></i><span class="color-magenta3-dark">충청북도<br>보건환경연구원</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="member-book" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4 mb-4">Back to Settings</a>
        </div>
    </div>
    <!-- menu-cbpublicofficer End -->
    <!-- menu-publicofficer Start -->
    <div id="menu-publicofficer" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="450" data-menu-effect="menu-over">
        <div class="menu-title"><h1>시군 공무원</h1><p class="color-highlight">지역을 선택해주세요</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer">
                <a href="?p=member-publicofficer&category=polist_1"><i class="bg-theme"></i><span>청주시</span></a>
                <a href="?p=member-publicofficer&category=polist_2"><i class="bg-theme"></i><span>충주시</span></a>
                <a href="?p=member-publicofficer&category=polist_3"><i class="body-plum"></i><span class="color-plum-dark">제천시</span></a>
                <a href="?p=member-publicofficer&category=polist_4"><i class="body-magenta3"></i><span class="color-magenta3-dark">보은군</span></a>
                <a href="?p=member-publicofficer&category=polist_5"><i class="body-yellow3"></i><span class="color-yellow3-dark">옥천군</span></a>
                <a href="?p=member-publicofficer&category=polist_6"><i class="bg-theme"></i><span>영동군</span></a>
                <a href="?p=member-publicofficer&category=polist_7"><i class="body-plum"></i><span class="color-plum-dark">증평군</span></a>
                <a href="?p=member-publicofficer&category=polist_8"><i class="body-magenta3"></i><span class="color-magenta3-dark">진천군</span></a>
                <a href="?p=member-publicofficer&category=polist_9"><i class="body-yellow3"></i><span class="color-yellow3-dark">괴산군</span></a>
                <a href="?p=member-publicofficer&category=polist_10"><i class="body-magenta3"></i><span class="color-magenta3-dark">음성군</span></a>
                <a href="?p=member-publicofficer&category=polist_11"><i class="body-yellow3"></i><span class="color-yellow3-dark">단양군</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="member-book" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4 mb-4">Back to Settings</a>
        </div>
    </div>
    <!-- menu-publicofficer End -->
    <!-- menu-institution Start -->
    <div id="menu-institution" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="450" data-menu-effect="menu-over">
        <div class="menu-title"><h1>기타 기관</h1><p class="color-highlight">기관을 선택해주세요</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer three">
                <a href="?p=member-institution&category=ins_1"><i class="bg-theme"></i><span>식품의약품 안전처</span></a>
                <a href="?p=member-institution&category=ins_2"><i class="bg-theme"></i><span>질병관리본부</span></a>
                <a href="?p=member-institution&category=ins_3"><i class="body-plum"></i><span class="color-plum-dark">한국생명공학연구원</span></a>
                <div class="clearfix"></div>
                <a href="?p=member-institution&category=ins_4"><i class="body-magenta3"></i><span class="color-magenta3-dark">한국식품안전관리인증원</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="member-book" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4 mb-4">Back to Settings</a>
        </div>
    </div>
    <!-- menu-institution End -->
    <!-- menu-vet Start -->
    <div id="menu-vet" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="250" data-menu-effect="menu-over">
        <div class="menu-title"><h1>수의사</h1><p class="color-highlight">선택해주세요</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="background-changer">
                <a href="?p=member-vet&category=vet_1"><i class="body-yellow3"></i><span>일반수의사</span></a>
                <a href="?p=member-vet&category=vet_2"><i class="body-magenta3"></i><span>공수의사</span></a>
                <div class="clearfix"></div>
            </div>
            <a href="#" data-menu="member-book" class="btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4 mb-4">Back to Settings</a>
        </div>
    </div>
    <!-- menu-vet End -->
    <!-- Board Menu Start -->
    <div id="board-type" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="310">
        <div class="menu-title"><h1>공지사항</h1><p class="color-highlight">게시판 선택</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="list-group list-custom-large">
                <a data-menu="menu-backgrounds" href="?p=board&bo_table=free" class="border-0">
                    <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                    <span>정책공지</span>
                    <span class="badge bg-highlight color-white">NEW</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a data-menu="menu-chungju" href="?p=board&bo_table=notice">
                    <i class="fa font-16 fa-tint bg-green1-dark rounded-s"></i>
                    <span>회원공지</span>
                    <span class="badge bg-highlight color-white">NEW</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Board Menu End -->
    <!-- member-search Start -->
    <div id="member-search" class="menu menu-box-bottom menu-box-detached rounded-m <?php echo (!isMobile()) ? 'pc-view' : '' ?>" data-menu-height="530">
        <div class="menu-title"><h1>회원검색</h1><p class="color-highlight">분류 선택</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-n2"></div>
        <div class="content">
            <div class="list-group list-custom-large">
                <a href="?p=search&category=cbvet" class="border-0">
                    <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                    <span>개업수의사</span>
                    <span class="badge bg-highlight color-white"></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="?p=search&category=cbpublicofficer">
                    <i class="fa font-16 fa-tint bg-green1-dark rounded-s"></i>
                    <span>충청북도 공무원</span>
                    <span class="badge bg-highlight color-white"></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="?p=search&category=cbpublicofficer">
                    <i class="fa font-16 fa-tint bg-green1-dark rounded-s"></i>
                    <span>시도 공무원</span>
                    <span class="badge bg-highlight color-white"></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="?p=search&category=institution">
                    <i class="fa font-16 fa-tint bg-green1-dark rounded-s"></i>
                    <span>기타 기관</span>
                    <span class="badge bg-highlight color-white"></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="?p=search&category=education">
                    <i class="fa font-16 fa-tint bg-green1-dark rounded-s"></i>
                    <span>교육 기관</span>
                    <span class="badge bg-highlight color-white"></span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="?p=search&category=vet">
                <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                    <span>일반수의사</span>
                    <span class="badge bg-highlight color-white"></span>
                    <i class="fa fa-angle-right"></i>
                </a> 
            </div>
        </div>
    </div>
    <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="350" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">홈화면에 바로가기 추가</h4>
            <p>
                홈화면에 바로가기를<br />추가하실 수 있습니다.
            </p>
            <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">홈화면에 바로가기 추가</a><br>
            <a href="#" class="pwa-dismiss close-menu text-uppercase font-900 opacity-60 font-16">나중에 추가</a>
            <div class="clear"></div>
        </div>
    </div>   

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" 
        class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="320" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">홈화면에 바로가기 추가</h4>
            <p class="mb-0 pb-0">
                사파리 브라우저에서 https://cbvma.kr 로 접속후 menu -> tap "홈화면에 추가". 버튼을 눌러주세요.
            </p>
            <div class="clear"></div>
            <a href="#" class="pwa-dismiss close-menu color-highlight uppercase ultrabold opacity-80 top-25">나중에 추가</a>
            <!-- <i class="fa-ios-arrow fa fa-caret-down font-40"></i> -->
        </div>
    </div>
    <!-- member-search End -->
<!-- </div> -->
</div>
<!-- <script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script> -->

<?php
include_once(G5_THEME_PATH."/cbvmatail.sub.php");
?>