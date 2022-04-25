// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 1);
});

// ===== Add Active Class on Menu ====
$(document).ready(function() {
    var url = window.location;
    $('.design-page-menu ul li a[href="' + url + '"]').parent().addClass('active');
    $('.design-page-menu ul li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

$(document).ready(function() {
    var url = window.location;
    $('.sticky-top ul li a[href="' + url + '"]').parent().addClass('active');
    $('.sticky-top ul li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

// ===== Show menu on Hover ====
$(document).ready(function() {
    $('.navbar-light .dmenu').hover(function() {
        $(this).find('.sm-menu').first().stop(true, true).show();
    }, function() {
        $(this).find('.sm-menu').first().stop(true, true).hide()
    });
});

$(document).ready(function() {
    $(".megamenu").on("click", function(e) {
        e.stopPropagation();
    });

});

// ===== Creative Slider ====


var swiper = new Swiper('.swiper-container',{
            slidesPerView: 'auto',
            spaceBetween: 20,
            slidesPerGroup: 1,
            speed: 1000,
            loop: true,
            loopFillGroupWithBlank: true,
            autoplay: true,
            mousewheel: true,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                        320: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        // when window width is >= 480px
                        480: {
                            slidesPerView: 3,
                            spaceBetween: 20,
                        },
                        640: {
                            slidesPerView: 3,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        },
                        1200: {
                            slidesPerView: 6,
                            spaceBetween: 20,
                        },
                    },
});

    //console.log(industries_js_var);

    // $.each(JSON.parse(industries_js_var), function(key, value) {
    //     if(this.activeIndex === key) {
    //         var BgImageUrl = value.background_image
    //         $(".creative-slider").css("background-image", "url(" + BgImageUrl + ")");
            
    //       }
    //   });
        var bg_img = JSON.parse(industries_js_var)
    
        swiper.on('slideChange', function () {
        
        if(this.activeIndex === 0) {
             var BgImageUrl_0 = app_url+'/public/background_industries/'+bg_img['background_0']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_0 + ")");
            
          }else if(this.activeIndex === 1) {
            var BgImageUrl_1 = app_url+'/public/background_industries/'+bg_img['background_1']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_1 + ")");
            
          }else if(this.activeIndex === 2) {
            var BgImageUrl_2 = app_url+'/public/background_industries/'+bg_img['background_2']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_2 + ")");
            
          }else if(this.activeIndex === 3) {
            var BgImageUrl_3 = app_url+'/public/background_industries/'+bg_img['background_3']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_3 + ")");
          }else if(this.activeIndex === 4) {
            var BgImageUrl_4 = app_url+'/public/background_industries/'+bg_img['background_4']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_4 + ")");
          }else if(this.activeIndex === 5) {
            var BgImageUrl_5 = app_url+'/public/background_industries/'+bg_img['background_5']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_5 + ")");
          }else if(this.activeIndex === 6) {
            var BgImageUrl_6 = app_url+'/public/background_industries/'+bg_img['background_6']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_6 + ")");
          }else if(this.activeIndex === 7) {
            var BgImageUrl_7 = app_url+'/public/background_industries/'+bg_img['background_7']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_7 + ")");
          }else if(this.activeIndex === 8) {
            var BgImageUrl_8 = app_url+'/public/background_industries/'+bg_img['background_8']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_8 + ")");
          }else if(this.activeIndex === 9) {
            var BgImageUrl_9 = app_url+'/public/background_industries/'+bg_img['background_9']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_9 + ")");
          }else if(this.activeIndex === 10) {
            var BgImageUrl_10 = app_url+'/public/background_industries/'+bg_img['background_10']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_10 + ")");
          }else if(this.activeIndex === 11) {
            var BgImageUrl_11 = app_url+'/public/background_industries/'+bg_img['background_11']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_11 + ")");
          }else if(this.activeIndex === 12) {
            var BgImageUrl_12 = app_url+'/public/background_industries/'+bg_img['background_12']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_12 + ")");
          }else if(this.activeIndex === 13) {
            var BgImageUrl_13 = app_url+'/public/background_industries/'+bg_img['background_13']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_13 + ")");
          }else if(this.activeIndex === 14) {
            var BgImageUrl_14 = app_url+'/public/background_industries/'+bg_img['background_14']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_14 + ")");
          }else if(this.activeIndex === 15) {
            var BgImageUrl_15 = app_url+'/public/background_industries/'+bg_img['background_15']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_15 + ")");
          }else if(this.activeIndex === 16) {
            var BgImageUrl_16 = app_url+'/public/background_industries/'+bg_img['background_16']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_16 + ")");
        }else if(this.activeIndex === 17) {
            var BgImageUrl_17 = app_url+'/public/background_industries/'+bg_img['background_17']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_17 + ")");
        }else if(this.activeIndex === 18) {
            var BgImageUrl_18 = app_url+'/public/background_industries/'+bg_img['background_18']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_18 + ")");
        }else if(this.activeIndex === 19) {
            var BgImageUrl_19 = app_url+'/public/background_industries/'+bg_img['background_19']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_19 + ")");
        }else if(this.activeIndex === 20) {
            var BgImageUrl_20 = app_url+'/public/background_industries/'+bg_img['background_20']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_20 + ")");
        }else if(this.activeIndex === 21) {
            var BgImageUrl_21 = app_url+'/public/background_industries/'+bg_img['background_21']
            $(".creative-slider").css("background-image", "url(" + BgImageUrl_21 + ")");
          }
      });
    
  





// ===== Video Modal ====
$(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    //   console.log($videoSrc);

    // when the modal is opened autoplay it  
    $('#videoModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })

    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })

    // document ready  
});


// ===== Logo Design Page Slider ====
var swiper = new Swiper('.logo-slider-block', {
    slidesPerView: 5,
    // centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    }
});


// ===== Scroll to Section ====
$(".scrollto-section").find("a").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top - 80
    }, 10);
});


// ===== Ekko Lightbox Popup For Lightbox ====
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({ alwaysShowClose: true });
});

$(document).ready(function() {
    $("#ekkoLight").click(function() {
        $(".ekko-lightbox").addClass("customLight");
    });


});

// Enable Tooltip of Bootstrap
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$(function() {
    $('[data-toggle="popover"]').popover()
})
$(function() {
    $(".pop-show").popover({
        html: true,
        // trigger: "focus",
        content: function() {
            return $('.pop-inn').html();
        }
    });
})
$('.popover-dismiss').popover({
    trigger: 'focus'
})

//Sidebar

$(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function() {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    //Select2 Dropdown
    $('.js-example-basic-single').select2({
        minimumResultsForSearch: Infinity,
        multiple: true,
    });
});







        let dropdown_1st_results = [];
        let dropdown_2nd_results = [];
        let dropdown_3rd_results = [];

        let dropdown_1st_results_id = ['0'];
        let dropdown_2nd_results_id = ['0'];
        let dropdown_3rd_results_id = ['0'];

        function calculateID(ID) {

            if (ID.length) {
                return ID;
            } else {
                return 0;

            }

        }
        $(".dropdown-menu.case_study_page_sections input").change(function(e) {

            if (this.checked == false) {
                let inputDom = document.querySelectorAll(".dropdown-menu.case_study_page_sections input")
                let main_service_values = Array.from(inputDom).filter(input => input.checked).map(input => input.value)
                let main_service_values_id = Array.from(inputDom).filter(input => input.checked).map(input => input.id.replace('customCheck', ''))
                console.log(main_service_values_id);
                if (main_service_values_id.length > 0) {
                    // some values selected
                    $.ajax({
                        url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                        method: "GET",
                        beforeSend: function() {
                            $("#loading-image").show();
                        },
                        success: function(result) {
                            dropdown_1st_results = result.class_name
                            $('.case_study_container').children().each(function() {
                                var flag = false;
                                var self = this;
                                $.each(dropdown_1st_results, function(key, dropdown_1st_results) {
                                    if ($(self).hasClass(dropdown_1st_results)) {
                                        flag = true;
                                    }
                                });
                                if (flag == true) {
                                    $(this).show();
                                } else {
                                    $(this).hide();

                                }
                            });

                            $('#industry_section').hide();

                            $('.main_service_tag').remove();
                            $('#industries').append(result['tags']);
                        }
                    })

                        setTimeout(function() {
                        var test = document.getElementsByName("check[]"),
                            count = Array.prototype.slice.call(test).reduce(function (r, a) {
                                return r + +(a.style.display !== 'none');
                            }, 0);

                            if(count > 0){
                                
                            }else{
                                $('#if_all_zero').show();
                            }
                    }, 1000);
                } else {
                    $('.main_service_tag').remove();
                    $.ajax({
                        url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                        method: "GET",
                        beforeSend: function() {
                            $("#loading-image").show();
                        },
                        success: function(result) {
                            dropdown_3rd_results = result.class_name
                            $('.case_study_container').children().each(function() {
                                var flag = false;
                                var self = this;
                                $.each(dropdown_3rd_results, function(key, dropdown_3rd_results) {
                                    if ($(self).hasClass(dropdown_3rd_results)) {
                                        flag = true;
                                    }
                                });
                                if (flag == true) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });

                            $('#industry_section').hide();

                            $('.main_service_tag').remove();
                            $('#industries').append(result['tags']);
                        }
                    })

                    setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
                }
            }



        })

        $(".dropdown-menu.case_study_page_sections_sub_service input").change(function(e) {

            if (this.checked == false) {
                let inputDom = document.querySelectorAll(".dropdown-menu.case_study_page_sections input")
                let main_service_values = Array.from(inputDom).filter(input => input.checked).map(input => input.value)
                let main_service_values_id = Array.from(inputDom).filter(input => input.checked).map(input => input.id.replace('customCheck_a', ''))

                if (main_service_values_id.length > 0) {
                    $.ajax({
                        url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                        method: "GET",
                        beforeSend: function() {
                            $("#loading-image").show();
                        },
                        success: function(result) {
                            dropdown_2nd_results = result.class_name
                            $('.case_study_container').children().each(function() {
                                var flag = false;
                                var self = this;
                                $.each(dropdown_2nd_results, function(key, dropdown_2nd_results) {
                                    if ($(self).hasClass(dropdown_2nd_results)) {
                                        flag = true;
                                    }
                                });
                                if (flag == true) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                            $('#industry_section').hide();

                            $('#industries').append(result['tags']);
                        }
                    })
                    setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
                } else {
                    $('.sub_service_tag').remove();
                    $.ajax({
                        url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                        method: "GET",
                        beforeSend: function() {
                            $("#loading-image").show();
                        },
                        success: function(result) {
                            dropdown_3rd_results = result.class_name
                            $('.case_study_container').children().each(function() {
                                var flag = false;
                                var self = this;
                                $.each(dropdown_3rd_results, function(key, dropdown_3rd_results) {
                                    if ($(self).hasClass(dropdown_3rd_results)) {
                                        flag = true;
                                    }
                                });
                                if (flag == true) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });

                            $('#industry_section').hide();

                            $('#industries').append(result['tags']);
                        }
                    })

                    setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
                }
            }

        });


        $(".dropdown-menu.case_study_page_sections_industry input").change(function(e) {
            if (this.checked == false) {
                let inputDom = document.querySelectorAll(".dropdown-menu.case_study_page_sections_industry input")
                let main_service_values = Array.from(inputDom).filter(input => input.checked).map(input => input.value)
                let main_service_values_id = Array.from(inputDom).filter(input => input.checked).map(input => input.id.replace('customCheck_b', ''))

                if (main_service_values_id.length > 0) {
                    $.ajax({
                        url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                        method: "GET",
                        beforeSend: function() {
                            $("#loading-image").show();
                        },
                        success: function(result) {
                            dropdown_3rd_results = result.class_name
                            $('.case_study_container').children().each(function() {
                                var flag = false;
                                var self = this;
                                $.each(dropdown_3rd_results, function(key, dropdown_3rd_results) {
                                    if ($(self).hasClass(dropdown_3rd_results)) {
                                        flag = true;
                                    }
                                });
                                if (flag == true) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                            $('#industry_section').hide();
                            $('.main_service_tag').remove();
                            $('#industries').append(result['tags']);
                        }
                    })

                    setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
                } else {

                    $.ajax({
                        url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                        method: "GET",
                        beforeSend: function() {
                            $("#loading-image").show();
                        },
                        success: function(result) {
                            dropdown_3rd_results = result.class_name
                            $('.case_study_container').children().each(function() {
                                var flag = false;
                                var self = this;
                                $.each(dropdown_3rd_results, function(key, dropdown_3rd_results) {
                                    if ($(self).hasClass(dropdown_3rd_results)) {
                                        flag = true;
                                    }
                                });
                                if (flag == true) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });

                            $('#industry_section').hide();
                            $('.main_service_tag').remove();
                            $('#industries').append(result['tags']);
                        }
                    })
                    setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
                }
            }
        });



        function service_clicked(e) {

            let inputDom = document.querySelectorAll(".dropdown-menu.case_study_page_sections input")
            let main_service_values = Array.from(inputDom).filter(input => input.checked).map(input => input.value)
            let main_services_id = Array.from(inputDom).filter(input => input.checked).map(input => input.id.replace('customCheck', ''))
            console.log(main_services_id);
            dropdown_1st_results_id = main_services_id;
            if (main_service_values.length > 0) {
                $('.sub_category_new').show();
                $.ajax({
                    url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {

                        dropdown_1st_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_1st_results, function(key, dropdown_1st_results) {
                                if (!$(self).hasClass(dropdown_1st_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.sub_service_list').html(result['sub_category_dropdown']);
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })
                
                setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);

                

            } else {
                $('.sub_category_new').hide();
                $.ajax({
                    url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {

                        dropdown_1st_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_1st_results, function(key, dropdown_1st_results) {
                                if (!$(self).hasClass(dropdown_1st_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.sub_service_list').html(result['sub_category_dropdown']);
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })

                setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
                

            }
        }

        function sub_service_clicked(e) {

            let inputDom = document.querySelectorAll("#sub_service_dropdown-menu.case_study_page_sections_sub_service input")
            let sub_service_values = Array.from(inputDom).filter(input => input.checked).map(input => input.value)
            let sub_service_values_id = Array.from(inputDom).filter(input => input.checked).map(input => input.id.replace('customCheck_a', ''))
            dropdown_2nd_results_id = sub_service_values_id;
            if (sub_service_values.length > 0) {

                $.ajax({
                    url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {

                        dropdown_2nd_results = result.class_name

                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_2nd_results, function(key, dropdown_2nd_results) {
                                if (!$(self).hasClass(dropdown_2nd_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })
                setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
            } else {
                $('.sub_service_tag').remove();

                $.ajax({
                    url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {

                        dropdown_2nd_results_id = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_2nd_results_id, function(key, dropdown_2nd_results_id) {
                                if (!$(self).hasClass(dropdown_2nd_results_id)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })
                setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);
            }

        }


        function industry_clicked(e) {

            let inputDom = document.querySelectorAll("#industry-dropdown-menu.case_study_page_sections_industry input")
            let industry_values = Array.from(inputDom).filter(input => input.checked).map(input => input.value)
            let industry_values_id = Array.from(inputDom).filter(input => input.checked).map(input => input.id.replace('customCheck_b', ''))
            dropdown_3rd_results_id = industry_values_id;
            if (industry_values.length > 0) {

                $.ajax({
                    url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {
                        dropdown_3rd_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_3rd_results, function(key, dropdown_3rd_results) {
                                if (!$(self).hasClass(dropdown_3rd_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })

                setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);

            } else {
                $('.main_service_tag').remove();
                $.ajax({
                    url: "ajax_call/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {

                        dropdown_3rd_results_id = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_3rd_results_id, function(key, dropdown_3rd_results_id) {
                                if (!$(self).hasClass(dropdown_3rd_results_id)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })

                setTimeout(function() {
                    var test = document.getElementsByName("check[]"),
                        count = Array.prototype.slice.call(test).reduce(function (r, a) {
                            return r + +(a.style.display !== 'none');
                        }, 0);

                        if(count > 0){
                            
                        }else{
                            $('#if_all_zero').show();
                        }
                }, 1000);


            }
        }




        // it is for industry remove REMOVED function


        function remove_this_tag(ele) {

            var option_id = $(ele).attr('id');

            let removed_item = document.querySelector(`.dropdown-menu.case_study_page_sections_industry input[id='${option_id}']`).id
            let removed_item_id = removed_item.replace('customCheck_b', '');


            const array_3rd = dropdown_3rd_results_id;
            const index_3rd = array_3rd.indexOf(removed_item_id);
            if (index_3rd > -1) {
                array_3rd.splice(index_3rd, 1); // 2nd parameter means remove one item only
            }
            dropdown_3rd_results_id = array_3rd;

            document.querySelector(`.dropdown-menu.case_study_page_sections_industry input[id='${option_id}']`).checked = false;

            let dropdown_dom = document.querySelectorAll(`.dropdown-menu.case_study_page_sections_industry input`)
            let still_checked = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.value)
            let still_checked_id = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.id.replace('customCheck', ''))
            if (still_checked.length > 0) {

                $.ajax({
                    url: "ajax_call_industry_remove/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {
                        dropdown_3rd_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_3rd_results, function(key, dropdown_3rd_results) {
                                if (!$(self).hasClass(dropdown_3rd_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })



            } else {




            }
            $(ele).parent().parent().remove();


        }



        function remove_main_service_tag(ele) {

            var option_id = $(ele).attr('id');
            let removed_item = document.querySelector(`.dropdown-menu.case_study_page_sections input[id='${option_id}']`).id
            let removed_item_id = removed_item.replace('customCheck', '');
            console.log(dropdown_1st_results_id);
            const array = dropdown_1st_results_id;
            const index = array.indexOf(removed_item_id);
            if (index > -1) {
                array.splice(index, 1); // 2nd parameter means remove one item only
            }
            dropdown_1st_results_id = array;

            document.querySelector(`.dropdown-menu.case_study_page_sections input[id='${option_id}']`).checked = false;

            let dropdown_dom = document.querySelectorAll(`.dropdown-menu.case_study_page_sections input`)
            let still_checked = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.value)
            let still_checked_id = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.id.replace('customCheck', ''))
            console.log(still_checked_id);
            if (still_checked.length > 0) {

                $.ajax({
                    url: "ajax_call_main_service_remove/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id) + '/' + removed_item_id,
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {
                        dropdown_1st_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_1st_results, function(key, dropdown_1st_results) {
                                if (!$(self).hasClass(dropdown_1st_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })

            } else {
                $('.sub_category_new').hide();
            }

            $(ele).parent().parent().remove();


        }

        // it is for sub  service removed 2nd select box REMOVED function
        function remove_sub_service_tag(ele) {

            var option_id = $(ele).attr('id');
            let removed_item = document.querySelector(`.dropdown-menu.case_study_page_sections_sub_service input[id='${option_id}']`).id
            let removed_item_id = removed_item.replace('customCheck_a', '');


            const array_2nd = dropdown_2nd_results_id;
            const index_2nd = array_2nd.indexOf(removed_item_id);
            if (index_2nd > -1) {
                array_2nd.splice(index_2nd, 1); // 2nd parameter means remove one item only
            }
            dropdown_2nd_results_id = array_2nd;

            document.querySelector(`.dropdown-menu.case_study_page_sections_sub_service input[id='${option_id}']`).checked = false;

            let dropdown_dom = document.querySelectorAll(`.dropdown-menu.case_study_page_sections_sub_service input`)
            let still_checked = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.value)
            let still_checked_id = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.id.replace('customCheck_a', ''))
            if (still_checked.length > 0) {

                $.ajax({
                    url: "ajax_call_sub_service_remove/" + calculateID(dropdown_1st_results_id) + '/' + calculateID(dropdown_2nd_results_id) + '/' + calculateID(dropdown_3rd_results_id),
                    method: "GET",
                    beforeSend: function() {
                            $("#loading-image").show();
                        },
                    success: function(result) {
                        dropdown_1st_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(dropdown_1st_results, function(key, dropdown_1st_results) {
                                if (!$(self).hasClass(dropdown_1st_results)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('.main_service_tag').remove();
                        $('#industries').append(result['tags']);
                    }
                })

            } else {
                console.log('line# 816');
            }

            $(ele).parent().parent().remove();



        }


        $('.case_study_page_sections').change(function() {
            if ($(this).val() != '') {
                var main_service_value = $(this).val();
                $.ajax({
                    url: "services_by_id_with_services/" + main_service_value,
                    method: "GET",
                    success: function(result) {
                        console.log(result.class_name);
                        dropdown_1st_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(result.class_name, function(key, main_service_value) {
                                if (!$(self).hasClass(main_service_value)) {
                                    flag = false;
                                }
                            });
                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('#industry_section').hide();
                        $('#example-getting-started_two').html(result['options']);

                        $('.main_service_tag').remove();

                        $('#industries').append(result['subServices']);
                    }

                })
            }
        });


        // it is 2nd Dropdown for Sub categories by selecting CLASS .case_study_dependent_page_sections
        // it is old code
        $('.case_study_dependent_page_sections').change(function() {
            if ($(this).val() != '') {
                var value = $(this).val();
                $.ajax({
                    url: "sub_services_by_id/" + value,
                    method: "GET",
                    success: function(result) {
                        // 
                        console.log(result.class_name);
                        dropdown_2nd_results = result.class_name
                        $('.case_study_container').children().each(function() {
                            var flag = true;
                            var self = this;
                            $.each(result.class_name, function(key, value) {
                                if (!$(self).hasClass(value)) {
                                    flag = false;
                                }
                            });

                            if (flag == true) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });

                        $('.sub_service_tag').remove();
                        $('#industries').append(result['subServices']);

                    }

                })
            }
        });

        // it is 3rd Dropdown for INDUSTRIES
        $('#example-getting-started_industries').change(function() {
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();

                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "industry_by_id/" + value,
                    method: "GET",
                    success: function(result) {

                        dropdown_3rd_results = result.class_name

                        $('.case_study_container').children().each(function() {
                            console.log(result.class_name);
                            if ($(this).hasClass(dropdown_1st_results) && $(this).hasClass(dropdown_2nd_results) && $(this).hasClass(dropdown_3rd_results)) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });


                        $('.industry_tag').remove();
                        $('#industries').append(result['industries_name']);

                    }

                })
            }
        });

        $('.list-inline-item').click(function() {
            //console.log(this);
        });



        function select_page_section(ele) {
            var id = $(ele).val();
            var get_id = $(ele).attr('id');
            console.log(get_id);
            if (id == 1) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/slider.png'/>");
            } else if (id == 2) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/video.png'/>");
            } else if (id == 3) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 4) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/case_study.png'/>");
            } else if (id == 5) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/services.png'/>");
            } else if (id == 6) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/client_and_partner.png'/>");
            } else if (id == 7) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/industries.png'/>");
            } else if (id == 8) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/new_and_opinions.png'/>");
            } else if (id == 9) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/request.png'/>");
            } else if (id == 10) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_left_image_right_text.png'/>");
            } else if (id == 11) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_right_image_left_text.png'/>");
            } else if (id == 12) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_two_column_image_top_title_text.png'/>");
            } else if (id == 13) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_with_button.png'/>");
            } else if (id == 14) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 15) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 16) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 17) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 18) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 19) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 20) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 21) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 22) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 23) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 24) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            } else if (id == 25) {
                $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
            }

            $.ajax({
                url: "admin/page_section_id/" + id,
                method: "GET",
                success: function(result) {
                    $(`.page_section_component`).html(result);
                    $('.page_section_component').attr('id', id);
                }
            })
        }

        function select_page_section_component(ele) {
            var get_value = $(ele).val();
            var get_id = $(ele).attr('id');
            console.log(get_value);
            $.ajax({
                url: "admin/page_section_id_for_component/" + get_id + "/" + get_value,
                method: "GET",
                success: function(result) {
                    $(`#table_page_section`).html(result);
                }
            })
        }

        function frontend_editor() {
            $('.edit_delete_add_component').show();
        }


        
        