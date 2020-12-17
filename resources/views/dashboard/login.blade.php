<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Animated Login Screen - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Nunito');
        @import url('https://fonts.googleapis.com/css?family=Poiret+One');

        body, html {
            height: 100%;
            background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
            background:black;
            position: relative;
        }
        #login-box {
            position: absolute;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            width: 350px;
            margin: 0 auto;
            border: 1px solid black;
            background: rgba(48, 46, 45, 1);
            min-height: 250px;
            padding: 20px;
            z-index: 9999;
        }
        #login-box .logo .logo-caption {
            font-family: 'Poiret One', cursive;
            color: white;
            text-align: center;
            margin-bottom: 0px;
        }
        #login-box .logo .tweak {
            color: #ff5252;
        }
        #login-box .controls {
            padding-top: 30px;
        }
        #login-box .controls input {
            border-radius: 0px;
            background: rgb(98, 96, 96);
            border: 0px;
            color: white;
            font-family: 'Nunito', sans-serif;
        }
        #login-box .controls input:focus {
            box-shadow: none;
        }
        #login-box .controls input:first-child {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }
        #login-box .controls input:last-child {
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }
        #login-box button.btn-custom {
            border-radius: 2px;
            margin-top: 8px;
            background:#ff5252;
            border-color: rgba(48, 46, 45, 1);
            color: white;
            font-family: 'Nunito', sans-serif;
        }
        #login-box button.btn-custom:hover{
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
            background: rgba(48, 46, 45, 1);
            border-color: #ff5252;
        }
        #particles-js{
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: 50% 50%;
            position: fixed;
            top: 0px;
            z-index:1;
        }
    </style>
    {{-- https://gc.kis.v2.scr.kaspersky-labs.com/AD340F44-3581-2440-94B3-A7EE2BC2DA34/abn/main.css  --}}
    <link rel="stylesheet" crossorigin="anonymous" href="">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
    <style type="text/css" nonce="E3D607BAA8E4E14B80E5ED58F2E99BE8">#AD_Top,#AD_banner,#AdColumn,#AdContainer,#AdHeader,#AdImage,#Adcode,#AdvertiseFrame,#Advertisements,#BottomAdContainer,#BottomAds,#ContentAd,#PreRollAd,#RightAdBlock,#TopAd,#WNAd41,#ad-area,#ad-background,#ad-bg,#ad-bottom,#ad-container,#ad-header,#ad-header-728x90,#ad-leaderboard,#ad-main,#ad-panel,#ad-right,#ad-rotator,#ad-text,#ad-top,#ad-top-banner-placeholder,#ad-top-wrapper,#ad-unit,#ad-wrapper,#ad468,#ad728,#ad728x90,#adBanner,#adBelt,#adComponentWrapper,#adDiv,#adFrame,#adGallery,#adHeader,#adHolder,#adLayer,#adLeader,#adPosition0,#adText,#ad_1,#ad_2,#ad_3,#ad_4,#ad_5,#ad_728_90,#ad_area,#ad_banner,#ad_center,#ad_content,#ad_header,#ad_leaderboard,#ad_main,#ad_overlay,#ad_space,#ad_square,#ad_table,#ad_topslot,#ad_unit,#ad_wrap,#ad_wrapper,#adaptv_ad_player_div,#adbackground,#adbanner,#adbar,#adblock,#adboard,#adbody,#adbox,#adcode,#adcontainer,#adcontainer1,#adcontent,#adhead,#adheader,#adimg1,#adlayer,#adnews,#adposition3,#adright,#ads-col,#ads-wrapper,#ads1,#adsHeader,#adsIframe,#ads_bottom,#ads_right,#ads_top,#ads_wrapper,#adsdiv,#adsense,#adsense_block,#adsense_inline,#adsensewide,#adspace,#adspace_top,#adspot-300x250-pos-1,#adspot-300x250-pos-2,#adstop,#adtext,#adtop,#adv-masthead,#adv-top,#advert1,#advert2,#advertContainer,#advert_box,#advertise,#advertisement1,#advertisetop,#advertising_wrapper,#adverts,#advtop,#adwrapper,#banner-ad,#bannerAd,#bannerAdWrapper,#banner_topad,#bannerad,#bigAd,#bigad,#body_ad,#bottomAd,#bottomAds,#bottom_ad,#centerads,#cmn_ad_tag_head,#companionAd,#content-header-ad,#contentAd,#content_ads,#content_adv,#contentad,#ctlDisplayAd1_lblAd,#dart-container-728x90,#dfp_ad_Entry_728x90,#dfp_ad_Home_728x90,#divAd,#div_prerollAd_1,#download_ad,#featuread,#featured-ads,#featuredAds,#footer_ad,#footer_ads,#game-ad,#googlead,#gridAdSidebar,#head-ad,#header-ads,#headerAd,#headerAdContainer,#header_ad,#homead,#ka_adRightSkyscraperWide,#leaderAd,#leaderBoardAd,#leaderboard-ad,#leaderboard-advertisement,#leaderboardad,#left-ad,#left_ads,#leftad,#leftads,#logoAd,#logo_ad,#mainAd,#main_ad,#mpu2,#mpu2_container,#mpu_container,#msad,#my-adsFPAD,#myAd,#player_ads,#pre_advertising_wrapper,#prerollAd,#promo-ad,#publicidad,#reklama,#rh-ad,#right_ads,#right_adsense,#search-sponsor,#searchAd,#search_ads,#sideAd,#side_ads,#sidebar-ads,#sidebar_ad,#sidebar_ads,#skybox-ad,#sponsorAdDiv,#sponsorText,#sponsoredwellcontainerbottom,#sponsors-home,#takeover_ad,#text-ads,#theAd,#top-ad,#top-ad-content,#topAd,#topAdSpace,#topAdSpace_div,#topAdvert,#topBannerAd,#top_ad,#top_ads,#topad,#topadvert,#topbannerad,#under_story_ad,#videoAd,#videoAdContainer,#videoads,.ADBAR,.AdBar,.AdBody:not(body),.AdBox,.AdInfo,.AdSidebar,.AdTitle,.AdvertContainer,.HomeAds,.IM_ad_unit,.LazyLoadAd,.RelatedAds,.SponsoredContent,.ad-300x250,.ad-970,.ad-banner,.ad-block,.ad-body,.ad-border,.ad-btn,.ad-button,.ad-cat,.ad-cell,.ad-display,.ad-enabled,.ad-header,.ad-holder,.ad-img,.ad-inner,.ad-item,.ad-leader-top,.ad-leaderboard,.ad-left,.ad-link,.ad-links,.ad-loaded,.ad-panel,.ad-placement,.ad-rail,.ad-right,.ad-row,.ad-scroll,.ad-section,.ad-served,.ad-sidebar,.ad-source,.ad-square,.ad-stack,.ad-text,.ad-top,.ad-unit,.ad-unit-300-wrapper,.ad-vertical-container,.ad-wide,.ad-wrap,.ad-wrapper,.ad300,.ad468,.ad728,.ad90,.adBar,.adBlock,.adBottomBoard,.adBox,.adChoicesLogo,.adContent,.adDiv,.adElement,.adFrame,.adFrameCnt,.adHead,.adHeader,.adHeaderblack,.adHeadline,.adHolder,.adHoldert,.adImg,.adItem,.adLink,.adMessage,.adMiddle,.adMod,.adModule,.adOverlay,.adPanel,.adPod,.adResult,.adRight,.adRotator,.adSpace,.adSpot,.adText,.adTitle,.adTopHome,.adWidget,.adWrap,.ad_1,.ad_160,.ad_160x600,.ad_2,.ad_3,.ad_728x90,.ad_960,.ad_Right,.ad_block,.ad_body,.ad_bottom,.ad_container,.ad_description,.ad_global_header,.ad_head_rectangle,.ad_header,.ad_img,.ad_item,.ad_leaderboard,.ad_middle,.ad_outer,.ad_promo,.ad_slug_table,.ad_space,.ad_spot,.ad_text,.ad_title,.ad_trick_header,.ad_trick_left,.ad_wrap,.ad_wrapper,.adarea,.adbanner,.adbar,.adbottom,.adbutton,.adcolumn,.adcont,.addiv,.adframe,.adfree,.adheader,.adholder,.adinfo,.adkit,.adlink,.adlist,.admain,.admiddle,.adright,.adrow1,.adrow2,.ads-1,.ads-2,.ads-3,.ads-300-250,.ads-area,.ads-bg,.ads-col,.ads-header,.ads-holder,.ads-inline,.ads-item,.ads-right,.ads-section,.ads-title,.ads-top,.ads1,.adsBlock,.adsWidget,.ads_catDiv,.ads_div,.ads_top,.ads_wrapper,.adsbottombox,.adsbox,.adsbygoogle,.adscontainer,.adshome,.adside,.adslot,.adslot_blurred,.adspace,.adtable,.adtile,.adtop,.adv300,.adv_300,.adv_txt,.advert-block,.advert-box,.advert-container,.advert-content,.advert-horizontal,.advert-wrapper,.advert2,.advertColumn,.advertContainer,.advertLink,.advertText,.advert_area,.advert_container,.advert_list,.advertbox,.advertisement-1,.advertisement-block,.advertiser,.advertising_banner,.advertising_block,.advertisment,.advertorial,.adverts,.adverttext,.adwords,.afs_ads,.after-post-ad,.article-advert,.article_ad,.b-advert,.b-banner,.banner-ad,.banner-ads,.banner160x600,.banner300,.bannerAd,.banner_728x90,.banner_ad,.bannerad,.block-ad,.block-ec_ads,.block-simpleads,.blog-ads,.bottom-ad,.bottom-ads,.bottom-left-ad,.bottomAds,.bottom_ad_block,.box-ads,.box-radvert,.box-recommend-ad,.box_ads,.box_adv,.boxad,.boxadv,.btn-ad,.can_ad_slug,.category-ad,.change_AdContainer,.chitikaAdBlock,.commerce-inset,.container_ad,.container_row_ad,.contentAd,.contentAds,.content_ads,.content_tagsAdTech,.cp-adsInited,.custom-ad,.desktop-ad,.dfp-ad,.dfp-ad-unit,.dfp-tag-wrapper,.displayAd,.download_ad,.easyazon-block,.ec-ads-remove-if-empty,.featured-ad,.featuredAdBox,.flash-advertisement,.footer-ad,.footer-ads,.footer_ad,.footerad,.forumAd,.gallery-ad,.google-sponsored,.googleAdSense,.googleAds,.greyAd,.has-ad,.hasads,.header-ad,.headerAd,.header_ad,.header_ad_center,.header_advert,.headerad,.headerads,.home-ad,.home-ads,.homeAd,.homead,.homepage-ad,.homepage_ads,.horizontal_ad,.img_ad,.imgad,.inner_ad,.innerad,.insert-post-ads,.interstitial_ad_wrapper,.ipsAd,.item-ads,.item-container-ad,.js-springs__top,.js-sticky-ad,.leaderboard-ad,.leaderboard-ads,.leftAd,.leftad,.list-ad,.list-ads,.listad,.logo-ad,.marketing-ad,.mid_ad,.middle_AD,.mod-adopenx,.module-ad,.nav-ad,.newsAd,.node-ad,.oasad,.oio-banner-zone,.openx,.overlay-ads,.page-ad,.page_ad,.plainAd,.playerAd,.player_ad,.player_hover_ad,.pm-ad,.post-ad,.post-sponsored,.post_ad,.postad,.premiumAdOverlay,.premiumAdOverlayClose,.promoAd,.promo_ad,.pub_300x250,.pub_300x250m,.pub_728x90,.publicidade,.pushdown-ad,.rail-ad,.rbRectAd,.rectangle_ad,.refreshAds,.region-top-ad-position,.reklam,.reklama,.reportAdLink,.resultad,.review-ad,.right-ad,.rightAd,.right_ad,.right_ads_column,.rightad,.rightadv,.searchAds,.searchad,.searchads,.section-sponsor,.showAd,.side-ad,.side-bar-ad-position1,.sideAd,.sidebar-ads,.single-ad,.singleAd,.skinAd,.sky_ad,.skyscraperAd,.slide-ad,.smallAd,.small_ad,.smallads,.sponsor-box,.sponsor-logo,.sponsorBlock,.sponsorBottom,.sponsoredLinks,.sponsorlink,.sticky-ad,.story-ad,.taboola-ad,.tc_ad_unit,.td-ad,.td-header-ad-wrap,.text-ad,.text-ad-links,.text-ads,.textAd,.text_ad,.text_ads,.textad,.textads,.top-ad,.top-ad-container,.top-ad-content,.top-ad-wrapper,.top-advert,.topAds,.top_ad,.top_ad_div,.top_ad_wrap,.top_ads,.topads,.toppromo,.tower-ad,.trc-content-sponsored,.trc_rbox .syndicatedItem,.trc_rbox_border_elm .syndicatedItem,.trc_rbox_div .syndicatedItem,.trc_related_container div[data-item-syndicated="true"],.type_ads_default,.view_ad,.wideAd,.withAds,.wnad,.wpInsertInPostAd,.wp_bannerize,.yom-ad,[href^="http://join.allofgfs.com/track/"],[href^="http://join.freshgfs.com/track/"],[href^="http://join.innocenthigh.com/track/"],[href^="http://join.muffx.com/track/"],[href^="http://join.seemygf.com/track/"],[href^="http://join.self-shot.com/track/"],[href^="http://join.teengfsex.com/track/"],[href^="http://myalternativegflink.com/track/"],[href^="http://secure.18exgfs.com/track/"],[href^="http://secure.badassgirlfriends.com/track/"],[href^="http://secure.bustygfsexposed.com/track/"],[href^="http://secure.chatrevenge.com/track/"],[href^="http://secure.dagfs.com/track/"],[href^="http://secure.fubilov.com/track/"],[href^="http://secure.hotgfvideos.com/track/"],[href^="http://secure.mynngf.com/track/"],[href^="http://secure.obsessedwithmyself.com/track/"],[href^="http://secure.realgfsexposed.com/track/"],[href^="http://secure.slutswithphones.com/track/"],[href^="http://secure.watchmygf.com/track/"],a[href*=".trust.zone"],a[href*="/adrotate-out.php?"],a[href*="/relap.io/adv/"],a[href*="marketgid.com/"],a[href*="medicinetizer.ru"],a[href*="runetki.com"],a[href^="http://ad-emea.doubleclick.net/"],a[href^="http://ad.doubleclick.net/"],a[href^="http://adfarm.mediaplex.com/"],a[href^="http://ads.betfair.com/redirect.aspx?"],a[href^="http://ads2.williamhill.com/redirect.aspx?"],a[href^="http://adserving.unibet.com/"],a[href^="http://adultfriendfinder.com/p/register.cgi?pid="],a[href^="http://affiliate.coral.co.uk/processing/"],a[href^="http://marketgid.com"],a[href^="http://mgid.com/"],a[href^="http://online.ladbrokes.com/promoRedirect?"],a[href^="http://pubads.g.doubleclick.net/"],a[href^="http://us.marketgid.com"],a[href^="http://www.adskeeper.co.uk/"],a[href^="http://www.fbooksluts.com/"],a[href^="http://www.fleshlight.com/"],a[href^="http://www.liutilities.com/"],a[href^="http://www.socialsex.com/"],a[href^="http://www.yourfuckbook.com/?"],a[href^="https://ad.doubleclick.net/"],a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"],div[id^="MarketGid"],div[id^="advads-"],div[id^="dfp-ad-"],div[id^="div-gpt-ad"],div[id^="google_ads_iframe_"],div[itemtype="http://schema.org/WPAdBlock"],iframe[id^="google_ads_frame"],iframe[id^="google_ads_iframe"],iframe[src^="http://ad.yieldmanager.com/"] {display: none !important; color: #1b9b36 !important; background-color: #bc7ce9 !important;}</style></head>
<body>
<div class="container">
    <div id="login-box">
        <form method="post" action{{url('/panel/login')}}>
            {{csrf_field()}}
            <div class="logo">
                {{-- http://lorempixel.com/output/people-q-c-100-100-1.jpg --}}
                <img src="{{url('/assets/website/images/logo.png')}}"
                     class="img img-responsive img-circle center-block">
                <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
            </div><!-- /.logo -->
            <div class="controls">
                <input type="email" name="email" placeholder="Username" class="form-control">
                <br>
                <input type="password" name="password" placeholder="Password" class="form-control">
                <label style="color: red"> <input type="checkbox" name="remember" value="1">Remember Me </label>
                <br>
                <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>
            </div><!-- /.controls -->
        </form>
    </div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"><canvas class="particles-js-canvas-el" width="1349" height="496" style="width: 100%; height: 100%;"></canvas></div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
<script type="text/javascript">
    $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
        particlesJS('particles-js',
            {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }
        );

    });






</script>


</body></html>
