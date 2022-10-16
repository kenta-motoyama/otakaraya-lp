/**
  + 買取専門店のおたからや
  * 20220301
  +
***/
jQuery.noConflict();
(function ($) {
    $(function () {
        //hashチェック
        var _hash = window.location.hash;
        console.log(_hash);
        //初回transition reset
        $(window).on('load', function () {
            // $("html, body").animate({ scrollTop: 0 }, 0, "swing");
            $("body").removeClass("preload");
            // $("#hkt-loading").fadeOut();
            // topFunc();
            // movieFunc();
            // productFunc();

            $("#soba_more_btn").on("click", function (e) {
                console.log('more');
                e.preventDefault();
                $('#soba_sp_more').addClass('open');
                $("#soba_more_btn").hide();
                $("#soba_close_btn").show();
            });
            $('#soba_close_btn').on('click', function (e) {
                console.log('close');
                e.preventDefault();
                $('#soba_sp_more').removeClass('open');
                $("#soba_close_btn").hide();
                $("#soba_more_btn").show();
            });
            $("#soba_close_btn").hide();


        });


        // luxy.init();

        // var scroll = new LocomotiveScroll({
        //     el: document.querySelector('[data-scroll-container]'),
        //     smooth: true,
        //     direction: 'vertical',
        //     multiplier: 1,
        //     horizontalGesture: true
        // });

        //tab
        // $(".hkt-tabs a").on("click", function(e) {
        //     e.preventDefault();
        //     $(".current").removeClass("current");
        //     $(this).addClass("current");
        //     $(".hkt-music--detail").removeClass('is-show');

        //     let target = $(this).attr('data-target');
        //     // console.log(target);
        //     $("#" + target).addClass('is-show');
        //     $(".hkt-music--all").attr("data-content", target);


        //     //scroll
        //     // var speed = 300;
        //     // var _pos = $(".hkt-music--all").offset().top - 20;
        //     // $("html, body").animate({ scrollTop: _pos }, speed, "swing");

        // })

        // $(function() {
        //     var height=$("#otkr-header").height();
        //     $('.otkr-content-wrap').css("margin-top", height);
        // });



        $('.otkr-slick--list').slick({
            autoplay: false,
            autoplaySpeed: 5000,
            speed: 1200,
            // dots: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            centerMode: true,
            centerPadding: '10%',
            arrows: true,
            fade: false,
            responsive: [{
                breakpoint: 768, //767px以下のサイズに適用
                settings: {
                    // slidesToShow: 1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '15%',
                }
            }]

        });

        // $('.otkr-movie--grid').slick({
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     speed: 1200,
        //     dots: true,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     centerMode: true,
        //     centerPadding:'30%',
        //     arrows: false,
        //     fade: false,
        //     responsive: [{
        //         breakpoint: 768, //767px以下のサイズに適用
        //         settings: {
        //             // slidesToShow: 1,
        //             slidesToShow: 1,
        //             slidesToScroll: 1,
        //             centerPadding: '15%',
        //         }
        //     }]

        // });


        // $('.otkr-disco--grid').slick({
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     speed: 1200,
        //     dots: true,
        //     slidesToShow: 2,
        //     slidesToScroll: 2,
        //     centerMode: true,
        //     centerPadding:'22%',
        //     arrows: false,
        //     fade: false,
        //     responsive: [{
        //         breakpoint: 768, //767px以下のサイズに適用
        //         settings: {
        //             // slidesToShow: 1,
        //             slidesToShow: 1,
        //             slidesToScroll: 1,
        //             centerPadding: '15%',
        //         }
        //     }]

        // });


        // $('.otkr-tickerSlider').slick({
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     speed: 1200,
        //     dots: false,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     centerMode: true,
        //     // centerPadding:'20%',
        //     arrows: false,
        //     fade: false

        // });



        $("img").on("contextmenu", function (e) {
            return false;
        });





        // タブ
        // $(function () {
        //     $(".otkr-tabnav li").click(function () {
        //   　　// クリックした要素の親要素を、groupで宣言
        //       const group = $(this).parents(".otkr-tabgroup");
        //       group.find(".active").removeClass("active");
        //       $(this).addClass("active");
        //       group.find(".show").removeClass("show").hide(500);
        //   　　// クリックしたタブからインデックス番号を取得
        //       const index = $(this).index();
        //         group.find(".otkr-tabcontent_list").eq(index).hide(500).addClass("show");
        //     });
        //   });


        //   $(function () {
        //     $(".otkr-tabnav02 li").click(function () {
        //   　　// クリックした要素の親要素を、groupで宣言
        //       const group = $(this).parents(".otkr-tabgroup02");
        //       group.find(".active2").removeClass("active2");
        //       $(this).addClass("active2");
        //       group.find(".show2").removeClass("show2").hide(500);
        //   　　// クリックしたタブからインデックス番号を取得
        //       const index = $(this).index();
        //         group.find(".otkr-tabcontent_list02").eq(index).hide(500).addClass("show2");
        //     });
        //   });


        //   $(function () {
        //     $(".otkr-tabnav03 li").click(function () {
        //   　　// クリックした要素の親要素を、groupで宣言
        //       const group = $(this).parents(".otkr-tabgroup03");
        //       group.find(".active3").removeClass("active3");
        //       $(this).addClass("active3");
        //       group.find(".show3").removeClass("show3").hide(500);
        //   　　// クリックしたタブからインデックス番号を取得
        //       const index = $(this).index();
        //         group.find(".otkr-tabcontent_list03").eq(index).hide(500).addClass("show3");
        //     });
        //   });




        // ピックアップ内　画像
        // $(function() {  
        //     $slide = $('.otkr-pickupPlayer-slide');
        //     $navigation = $('.otkr-pickupPlayer-slide-navigation li');

        //     $slide.slick({  //slickスライダー作成
        //       infinite: true,
        //       slidesToShow: 1,
        //       slidesToScroll: 1,
        //       arrows: false,
        //       fade: true,
        //     });  
        //     $navigation.each(function(index){ //サムネイルに連番付与属性
        //       $(this).attr('data-number', index);
        //     });
        //     $navigation.eq(0).addClass('current');  //1枚をオーバーレイ

        //     $navigation.on('click', function(){ //サムネイルクリック時イベント
        //       var number = $(this).attr('data-number');
        //       $slide.slick('slickGoTo', number, true);
        //       $(this).siblings().removeClass('current');
        //       $(this).addClass('current');
        //     });
        //   });




        // アコーディオン
        $(function () {
            $('.otkr-accordion .accordion_header').click(function () {
                $(this).next('.accordion_inner').slideToggle();
                $(this).toggleClass("open");
                //   $('.otkr-accordion .accordion_header').not($(this)).next('.otkr-accordion .accordion_inner').slideUp();
                //   $('.otkr-accordion .accordion_header').not($(this)).removeClass("open");
            });
        });




        //ドロップダウンの設定を関数でまとめる
        function mediaQueriesWin() {
            var width = $(window).width();
            if (width <= 1100) {//横幅が768px以下の場合
                $(".otkr-child>a").off('click'); //otkr-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
                $(".otkr-child>a").on('click', function () {//otkr-childクラスがついたaタグをクリックしたら
                    var parentElem = $(this).parent();// aタグから見た親要素の<li>を取得し
                    $(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
                    $(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
                    return false;//リンクの無効化
                });
            } else {//横幅が768px以上の場合
                $(".otkr-child>a").off('click');//otkr-childクラスがついたaタグのonイベントをoff(無効)にし
                $(".otkr-child>a").removeClass('active');//activeクラスを削除
                $('.otkr-child').children('ul').css("display", "");//スライドトグルで動作したdisplayも無効化にする
            }
        }

        // ページがリサイズされたら動かしたい場合の記述
        $(window).resize(function () {
            mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
        });

        // ページが読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function () {
            mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
        });



        // $(".otkr-header--menu").click(function () {//ボタンがクリックされたら
        // $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
        //     $("#otkr-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        //     $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
        // });

        // $("#otkr-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
        //     $(".otkr-header--menu").removeClass('active');//ボタンの activeクラスを除去し
        //     $("#otkr-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
        //     $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
        // });


        $(".otkr-header--menu").click(function () {//ボタンがクリックされたら
            $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
            $("#otkr-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        });

        $("#otkr-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
            $(".otkr-header--menu").removeClass('active');//ボタンの activeクラスを除去し
            $("#otkr-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
        });




        //pagetop
        $('#otkr-pagetop').on("click", function (e) {
            e.preventDefault();
            var speed = 300;
            var href = $(this).attr("href");
            var position = 0;
            $("html, body").animate({ scrollTop: position }, speed, "swing");
            return false;
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() > $(window).height()) {
                $('#otkr-pagetop').addClass("visible");
            } else {
                $('#otkr-pagetop').removeClass("visible");
            }
        });






        // モーダル
        $(function () {
            $('.js-modal-open').each(function () {
                $(this).on('click', function () {
                    var target = $(this).data('target');
                    var modal = document.getElementById(target);
                    $(modal).fadeIn();
                    return false;
                });
            });
            $('.js-modal-close').on('click', function () {
                $('.js-modal').fadeOut();
                return false;
            });
        });




        // var menuFlag = false;
        // var menuBtn = $('#rcMenu');
        // menuBtn.on("click", function(e) {
        //     e.preventDefault();
        //     $(this).toggleClass('open');
        //     $('body').toggleClass('open');
        //     $('.otkr-main--menu').toggleClass('open');
        //     $('.otkr-main--image').toggleClass('open');
        //     $("html").toggleClass("is-fixed");
        //     return false;
        // });


        $(window).scroll(function () {
            var scroll = jQuery(window).scrollTop();
            // console.log(scroll);
            if (scroll > 1) {
                $("#otkr_lp").addClass("spheader-fixed");
            } else {
                $("#otkr_lp").removeClass("spheader-fixed");

            }
        });


        $(function () {
            jQuery(window).scroll(function () {
                jQuery(".boxeffect").each(function () {
                    var imgPos = jQuery(this).offset().top;
                    var scroll = jQuery(window).scrollTop();
                    var windowHeight = jQuery(window).height();
                    if (scroll > imgPos - windowHeight + windowHeight / 5) {
                        jQuery(this).addClass("boxeffect-on");
                        /*} else {
                        jQuery(this).removeClass("fade-on");*/
                    }
                });



            });
        });


        $(function () {
            jQuery(window).scroll(function () {
                jQuery(".fadein").each(function () {
                    var imgPos = jQuery(this).offset().top;
                    var scroll = jQuery(window).scrollTop();
                    var windowHeight = jQuery(window).height();
                    if (scroll > imgPos - windowHeight + windowHeight / 5) {
                        jQuery(this).addClass("fade-on");
                        /*} else {
                        jQuery(this).removeClass("fade-on");*/
                    }
                });
            });
        });









        /* ここには、表示するリストの数を指定します。 */
        var moreNum = 5;

        /* 表示するリストの数以降のリストを隠しておきます。 */
        $('.table_bg--White table tr:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');

        /* 全てのリストを表示したら「もっとみる」ボタンをフェードアウトします。 */
        $('.btn--more a').on('click', function () {
            $('.table_bg--White table tr.is-hidden').slice(0, moreNum).removeClass('is-hidden');
            if ($('.table_bg--White table tr.is-hidden').length == 0) {
                $('.btn--more').fadeOut();
            }
        });

        /* リストの数が、表示するリストの数以下だった場合、「もっとみる」ボタンを非表示にします。 */
        $(function () {
            var list = $(".table_bg--White table tr").length;
            if (list < moreNum) {
                $('.btn--more').addClass('is-btn-hidden');
            }
        });




        var moreNum2 = 6;

        /* 表示するリストの数以降のリストを隠しておきます。 */
        $('.latest_model_list3 .latest_model_list3--item:nth-child(n + ' + (moreNum2 + 1) + ')').addClass('is-hidden');

        /* 全てのリストを表示したら「もっとみる」ボタンをフェードアウトします。 */
        $('.btn--more2 a').on('click', function () {
            $('.latest_model_list3 .latest_model_list3--item.is-hidden').slice(0, moreNum2).removeClass('is-hidden');
            if ($('.latest_model_list3 .latest_model_list3--item.is-hidden').length == 0) {
                $('.btn--more2').fadeOut();
            }
        });

        /* リストの数が、表示するリストの数以下だった場合、「もっとみる」ボタンを非表示にします。 */
        $(function () {
            var list2 = $(".latest_model_list3 .latest_model_list3--item").length;
            if (list2 < moreNum2) {
                $('.btn--more2').addClass('is-btn-hidden');
            }
        });







        // var topFlag = false;
        // var movieFlag = false;
        // var productFlag = false;


        // function topFunc() {
        //     if (!topFlag) {
        //         // console.log("topFunc:start");
        //         topFlag = true;
        //         const obj = $("#hkt-main");
        //         const square01 = obj.find('.hkt-main--square01');
        //         const line01 = obj.find('.hkt-main--line01');
        //         const circle01 = obj.find('.hkt-main--circle01');
        //         const circle02 = obj.find('.hkt-main--circle02');
        //         const img = obj.find('.hkt-main--img');
        //         const imgCover = obj.find('.hkt-main--imgCover');
        //         const h3Text = obj.find('.hkt-main--text');
        //         const titleBlocklogo = obj.find('.hkt-main--title-logo');
        //         const titleBlock = obj.find('.hkt-main--title');
        //         const tl = gsap.timeline({
        //             scrollTrigger: {
        //                 trigger: '#hkt-main',
        //                 start: 'center 80%',
        //                 markers: false
        //             }
        //         });

        //         // tl.from(circle01, 2, { drawSVG: 0, ease: Linear.easeNone });

        //         tl.to(line01, 0.25, { left: "-10px", delay: 1, ease: Circ.easeOut });
        //         tl.to(img, 0.5, { right: "0px", delay: 0, ease: Circ.easeOut });
        //         tl.to(imgCover, 0.5, { right: "-100vw", delay: 0, ease: Circ.easeIn, onComplete: svgAnim });
        //         tl.to(h3Text, 1, { left: "0px", delay: 0, ease: Circ.easeOut });
        //         tl.to(titleBlocklogo, 0.5, { opacity: 1, delay: 0.3, ease: Circ.easeOut });
        //         tl.to(titleBlock, 1, { opacity: 1, delay: 0.3, ease: Circ.easeOut });



        //         function svgAnim() {
        //             square01.addClass('anim');
        //             circle01.addClass('anim');
        //             circle02.addClass('anim');
        //         }



        //         // if (isiOS()) {
        //         //     // tl.set(obj2, { transform:"translate(-100%,0)"});
        //         //     tl.to(obj1, 0.75, { transform: "translate(100%,0)", delay: 0, ease: Sine.easeIn });
        //         //     tl.to(obj2, 0.75, { transform: "translate(-100%,0)", delay: 0.25, ease: Sine.easeOut });
        //         // } else {
        //         // // tl.set(obj2, { left:"-100%"});
        //         // tl.to(obj1, 0.75, { left: "100%", delay: 1, ease: Sine.easeIn });
        //         // tl.to(obj2, 0.75, { left: "10px", delay: 0.25, ease: Sine.easeOut });
        //         // // }
        //         // tl.to(obj3, 0.15, { opacity: 1, "transform": "translate(0,-15px)", delay: 0, ease: Sine.easeOut });
        //         // tl.to(obj4, 0.75, { opacity: 1, "transform": "translate(0,0)", delay: 0, stagger: 0.1 });
        //     }
        // }

        // function movieFunc() {
        //     if (!movieFlag) {
        //         // console.log("movieFunc:start");
        //         movieFlag = true;
        //         const obj = $("#hkt-movie");
        //         const titleBlock = obj.find('.hkt-title');
        //         const thumbBlock = obj.find('.hkt-movie--slideItem');
        //         const titleBlocklogo = obj.find('.hkt-main--title-logo');
        //         const tl = gsap.timeline({
        //             scrollTrigger: {
        //                 trigger: '#hkt-movie',
        //                 start: '0 60%',
        //                 markers: false
        //             }
        //         });

        //         tl.to(titleBlock, 0.5, { opacity: 1, top: "0px", delay: 0, ease: Circ.easeOut });
        //         tl.to(thumbBlock, 0.5, { opacity: 1, "transform": "scale(1.0)", delay: 0, stagger: 0.1 });
        //         tl.to(titleBlocklogo, 0.5, { opacity: 1, top: "0px", delay: 0, ease: Circ.easeOut });
        //     }
        // }


        // function productFunc() {
        //     if (!productFlag) {
        //         // console.log("productFunc:start");
        //         productFlag = true;
        //         const obj = $("#hkt-product");
        //         const titleBlock = obj.find('.hkt-title');
        //         const thumbBlock = obj.find('.hkt-tabs li');
        //         const contBlock = obj.find('.hkt-music--all');
        //         const titleBlocklogo = obj.find('.hkt-main--title-logo');
        //         const tl = gsap.timeline({
        //             scrollTrigger: {
        //                 trigger: '#hkt-product',
        //                 start: '0 60%',
        //                 markers: false
        //             }
        //         });

        //         tl.to(titleBlock, 0.5, { opacity: 1, top: "0px", delay: 0, ease: Circ.easeOut });
        //         tl.to(thumbBlock, 0.5, { opacity: 1, "transform": "translate(0,0)", delay: 0, ease: Circ.easeOut, stagger: 0.1 });
        //         tl.to(contBlock, 0.5, { opacity: 1, top: "0px", delay: 0, ease: Circ.easeOut });
        //         tl.to(titleBlocklogo, 0.5, { opacity: 1, top: "0px", delay: 0, ease: Circ.easeOut });
        //     }
        // }

        //買取実績のjson切り替え
        let mainModelList;
        let mainModelButton;



        function modellistslick() {

            // mainModelList = $('.latest_model_block_wrap').slick({
            //     speed: 600,
            //     // dots: true,
            //     slidesToShow: 1,
            //     slidesToScroll: 1,
            //     arrows: false,
            //     fade: true,
            //     adaptiveHeight:true,
            //     // asNavFor: '.latest_model_button'

            // });

            mainModelList = new Swiper('.swiper-container', {
                // navigation: {
                //     nextEl: '.swiper-button-next',
                //     prevEl: '.swiper-button-prev',
                // },
                loop: false,
                autoHeight: true,
                effect: 'fade',
                noSwiping: true,
                onlyExternal: true,
                simulateTouch: false,
                fadeEffect: {
                    crossFade: true
                },
            });


            // mainModelButton = $('.latest_model_button').slick({
            //     speed: 600,
            //     // dots: true,
            //     slidesToShow: 5,
            //     slidesToScroll: 1,
            //     arrows: false,
            //     fade: false,
            //     asNavFor: '.latest_model_block_wrap',
            //     responsive: [{
            //         breakpoint: 768, //767px以下のサイズに適用
            //         settings: {
            //             // slidesToShow: 1,
            //             slidesToShow: 2,
            //             slidesToScroll: 1,
            //             centerMode: true,
            //             centerPadding: '10%',
            //         }
            //     }]
            // });
        }

        $('.latest_model_button button').on('click', function (e) {
            //JSONデータへのパス
            // let _url = $(this).attr('data-url');
            // var path = "https://www.otakaraya.jp/rate_files/crossdomain.php?url="+_url;  //httpから始まるURL型式でもOKです。



            $(this).parent().parent().find('.btn').removeClass('current');
            //
            let _index = $(this).attr('data-index');


            //JSONデータを取得し、配列に格納する
            // $.getJSON(path, function(data){
            //     var arr = [];
            //     $.each(data, function(key, val){
            //     arr.push("key⇒" + key + " val⇒" + val);
            //     });

            //     //取得したJSONデータをコンソールに表示する
            //     for(let i in arr){
            //     console.log(arr[i]);
            //     }
            // });

            // $('#modellist_load_'+_index).html(path);
            // mainModelList.slick("slickGoTo", _index, false);

            mainModelList.slideTo(_index);
            // mainModelList.slick('unslick');
            // mainModelButton.slick('unslick');
            // modellistslick();

            $(this).addClass('current');

        });
        modellistslick();

        /* 全てのリストを表示したら「もっとみる」ボタンをフェードアウトします。 */
        $('.btn--more3 a').on('click', function () {
            $(this).parent().prev().find('.latest_model_list3--item.is-hidden').slice(0, moreNum2).removeClass('is-hidden');

            // console.log($(this).parent().prev().height());
            // let _h = $(this).parent().prev().height() + 320;
            let _h = $(this).parent().prev().height() - 300;

            // console.log(_h);
            $('.swiper-wrapper').height(_h);
            // $('.swiper-wrapper').attr({'data-height':_h});
            // $(this).parent().parent().parent().parent().parent().parent().height(_h);
            // $(this).parent().parent().parent().parent().parent().parent().css({'max-height':_h});
            if ($(this).parent().prev().find('.latest_model_list3--item.is-hidden').length == 0) {
                $(this).parent().fadeOut();
            }
        });

        /* リストの数が、表示するリストの数以下だった場合、「もっとみる」ボタンを非表示にします。 */
        $('.btn--more3').each(function (index) {
            var list = $(this).prev().find('.latest_model_list3--item:not(.blank)').length;
            // console.log(list,moreNum2); 
            if (list < moreNum2) {
                $(this).addClass('is-btn-hidden');
            }
        });

        //Swiper 新宿ゴールドLP

        $(function () {
            var slider1 = new Swiper('.swiper', {
                slidesPerView: 1,
                spaceBetween: 0,

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });
        });


    });
})(jQuery);




