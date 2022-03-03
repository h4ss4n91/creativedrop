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
var swiper = new Swiper('.creative-slider-block', {
    slidesPerView: 6,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: true,
    autoplay: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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

var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    spaceBetween: 5,
    freeMode: true,
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

//filter section


$(".service").select2({
    placeholder: "Filter by Service",
    allowClear: false,

});
$(".subcategory").select2({
    placeholder: "Filter by Subcategory",
    allowClear: false
});
$(".industries").select2({
    placeholder: "Filter by Industry",
    allowClear: false
});



$('#page_sections').change(function() {
    if ($(this).val() != '') {
        var select = $(this).attr("id");
        var value = $(this).val();

        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "services_by_id_with_services/" + value,
            method: "GET",
            success: function(result) {
                
                $('#industry_section').hide();
                $('#dependent_page_sections').append(result['options']);
                $('#industries').append(result['subServices']);

            }

        })
    }
});




$('#dependent_page_sections').change(function() {
    if ($(this).val() != '') {
        var select = $(this).attr("id");
        var value = $(this).val();

        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "sub_services_by_id/" + value,
            method: "GET",
            success: function(result) {
                $('#industry_section').show();
                $('#industries').append(result['subServices']);
            }

        })
    }
});



$('#case_study_page_sections').change(function() {
    if ($(this).val() != '') {
        var value = $(this).val();
        alert("line 306");
        $.ajax({
            url: "services_by_id_with_services/" + value,
            method: "GET",
            success: function(result) {
                console.log('315, ID');
                $('.case_study_container').children().each(function() {
                    //console.log(this);
                    if ($(this).hasClass(result.class_name)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                $('#industry_section').hide();
                $('#case_study_dependent_page_sections').append(result['options']);
                $('#industries').append(result['subServices']);
            }
        })
    }
});



let dropdown_1st_results = [];
let dropdown_2nd_results = [];
let dropdown_3rd_results = [];


function service_clicked(e){
    
    let inputDom = document.querySelectorAll(".dropdown-menu.case_study_page_sections input")
    let main_service_values = Array.from(inputDom).filter(input =>input.checked).map( input => input.value)
    let values_id = Array.from(inputDom).filter(input =>input.checked).map( input => input.id.replace('customCheck', ''))

    if(main_service_values.length > 0){
        $('.sub_category_new').show();
        $.ajax({
            url: "services_by_id_with_services/" + values_id,
            method: "GET",
            success: function(result) {
                console.log(result.class_name);
                dropdown_1st_results = result.class_name
                $('.case_study_container').children().each(function() {
                    var flag = true;
                    var self = this;
                    $.each(result.class_name, function(key, main_service_values) {
                        if (!$(self).hasClass(main_service_values)) {
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
                $('.sub_service_list').html(result['options']);
                $('.main_service_tag').remove();
                $('#industries').append(result['subServices']);
            }
        })
    }else{
        $('.sub_category_new').hide();

        

    }
}

function sub_service_clicked(e){

    let inputDom = document.querySelectorAll("#sub_service_dropdown-menu.case_study_page_sections_sub_service input")
    let sub_service_values = Array.from(inputDom).filter(input =>input.checked).map( input => input.value)
    let sub_service_values_id = Array.from(inputDom).filter(input =>input.checked).map( input => input.id.replace('customCheck_a', ''))

    $.ajax({
        url: "sub_services_by_id/" + sub_service_values_id,
        method: "GET",
        success: function(result) {
            // 
            console.log(result['subServices']);
            dropdown_2nd_results = result.class_name
            $('.case_study_container').children().each(function() {
                var flag = true;
                var self = this;
                $.each(result.class_name, function(key, sub_service_values_id) {
                    if (!$(self).hasClass(sub_service_values_id)) {
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


function industry_clicked(e){
    
    let inputDom = document.querySelectorAll("#industry-dropdown-menu.case_study_page_sections_industry input")
    let industry_values = Array.from(inputDom).filter(input =>input.checked).map( input => input.value)
    let industry_values_id = Array.from(inputDom).filter(input =>input.checked).map( input => input.id.replace('customCheck_b', ''))

    
    if(industry_values.length > 0){
        $('.sub_category_new').show();
        $.ajax({
            url: "industry_by_id/" + industry_values_id,
            method: "GET",
            success: function(result) {
                console.log(result.class_name);
                dropdown_3rd_results = result.class_name
                $('.case_study_container').children().each(function() {
                    var flag = true;
                    var self = this;
                    $.each(result.class_name, function(key, industry_values) {
                        if (!$(self).hasClass(industry_values)) {
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
                $('.sub_service_list').html(result['options']);
                $('.industry_tag').remove();
                $('#industries').append(result['subServices']);
            }
        })

        
    }else{
        $('.sub_category_new').hide();
    }
}


// it is for industry remove REMOVED function

let remove_dropdown_1st_results = [];
let remove_dropdown_2nd_results = [];
let remove_dropdown_3rd_results = [];

function remove_this_tag(ele) {
    var option_id = $(ele).parent().attr('id');
    document.querySelector(`.dropdown-menu.case_study_page_sections_industry input[id='${option_id}']`).checked = false;


    let dropdown_dom = document.querySelectorAll(`.dropdown-menu.case_study_page_sections_industry input`)
    let industry_still_checked = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.value)
    let industry_still_checked_id = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.id.replace('customCheck_b', ''))

    if(industry_still_checked.length>0){

        $.ajax({
            url: "industry_by_id/" + industry_still_checked_id,
            method: "GET",
            success: function(result) {
                console.log(result.class_name);
                remove_dropdown_3rd_results = result.class_name
                $('.case_study_container').children().each(function() {
                    var flag = true;
                    var self = this;
                    $.each(result.class_name, function(key, industry_still_checked) {
                        if ($(this).hasClass(remove_dropdown_1st_results) && $(this).hasClass(remove_dropdown_2nd_results) && $(this).hasClass(remove_dropdown_3rd_results)) {
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
                $('.sub_service_list').html(result['options']);
                $('.industry_tag').remove();
                $('#industries').append(result['subServices']);
            }
    
        })
        
    }else{
        $('.sub_category_new').hide();

        
        $.ajax({
            url: "industry_by_id/" + 0,
            method: "GET",
            success: function(result) {
                console.log(result.class_name);
                dropdown_1st_results = result.class_name
                $('.case_study_container').children().each(function() {
                    var flag = true;
                    var self = this;
                    $.each(result.class_name, function(key, industry_still_checked) {
                        if (!$(self).hasClass(industry_still_checked)) {
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
                $('.sub_service_list').html(result['options']);
                
                $('.industry_tag').remove();
                
                $('#industries').append(result['subServices']);
            }
    
        })

    }

    $(ele).parent().parent().remove();
}



function remove_main_service_tag(ele) {
    var option_id = $(ele).attr('id');
    let removed_item = document.querySelector(`.dropdown-menu.case_study_page_sections input[id='${option_id}']`).value
    console.log(removed_item)
    document.querySelector(`.dropdown-menu.case_study_page_sections input[id='${option_id}']`).checked = false;
    
    let dropdown_dom = document.querySelectorAll(`.dropdown-menu.case_study_page_sections input`)
    let still_checked = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.value)
    let still_checked_id = Array.from(dropdown_dom).filter(inputDom => inputDom.checked).map(inputDom => inputDom.id.replace('customCheck', ''))
    if(still_checked.length>0){

        $.ajax({
            url: "services_by_id_with_services/" + still_checked_id,
            method: "GET",
            success: function(result) {
                console.log(result.class_name);
                dropdown_1st_results = result.class_name
                $('.case_study_container').children().each(function() {
                    var flag = true;
                    var self = this;
                    $.each(result.class_name, function(key, still_checked) {
                        if (!$(self).hasClass(still_checked)) {
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
                $('.sub_service_list').html(result['options']);
                $('#example-getting-started_two').multiselect('rebuild');
                $(".multiselect-native-select > div ").addClass("case_study_select_btn");
                $('.main_service_tag').remove();
                
                $('#industries').append(result['subServices']);
            }
    
        })
        
    }else{
        $('.sub_category_new').hide();

        
        $.ajax({
            url: "services_by_id_with_services/" + 0,
            method: "GET",
            success: function(result) {
                console.log(result.class_name);
                dropdown_1st_results = result.class_name
                $('.case_study_container').children().each(function() {
                    var flag = true;
                    var self = this;
                    $.each(result.class_name, function(key, still_checked) {
                        if (!$(self).hasClass(still_checked)) {
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
                $('.sub_service_list').html(result['options']);
                $('#example-getting-started_two').multiselect('rebuild');
                $(".multiselect-native-select > div ").addClass("case_study_select_btn");
                $('.main_service_tag').remove();
                
                $('#industries').append(result['subServices']);
            }
    
        })

    }

    $(ele).parent().parent().remove();
    
    
}

// it is for sub  service removed 2nd select box REMOVED function
function remove_sub_service_tag(ele) {
    var option_id = $(ele).attr('id');
    console.log(option_id);
    let removed_item = document.querySelector(`.dropdown-menu.case_study_page_sections_sub_service input[id='${option_id}']`).value
    console.log(removed_item)

    document.querySelector(`.dropdown-menu.case_study_page_sections_sub_service input[id='${option_id}']`).checked = false;
    $(ele).parent().parent().remove();
}

// purana wala code nahi ismay? 

// aap ko kiya chaheay aap bataen please/// logic sara puranay walay may teek tha, minor changes karnay hotay hay sirf
/// poranaa wala <select> option wala thaa </select> and yeh input checkbox hay
// OK. new walay may abi ajax use nahi huwa kiaa? kiyaa howaa hay ajax, and ajax paart main khud kerloongaa just meray ko aik chotee see if condition batadejeay
/// jo remove ho uskee value and id miljaey main ajax use kerlooongaa
// uncheck kee bajay woh remove wala function use kerlejeay just remove per meray koid and value miljaey then i will do it
// here it ENDS
// here is old code
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
                $('#example-getting-started_two').multiselect('rebuild');
                $(".multiselect-native-select > div ").addClass("case_study_select_btn");
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

                
                $('#example-getting-started_two').multiselect('rebuild');
                $('#example-getting-started_two').multiselect('rebuild');
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
    if (id == 1) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/slider.png'/>");
    }else if (id == 2) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/video.png'/>");
    }else if (id == 3) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 4) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/case_study.png'/>");
    }else if (id == 5) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/services.png'/>");
    }else if (id == 6) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/client_and_partner.png'/>");
    }else if (id == 7) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/industries.png'/>");
    }else if (id == 8) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/new_and_opinions.png'/>");
    }else if (id == 9) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/request.png'/>");
    }else if (id == 10) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_left_image_right_text.png'/>");
    }else if (id == 11) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_right_image_left_text.png'/>");
    }else if (id == 12) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_two_column_image_top_title_text.png'/>");
    }else if (id == 13) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/paragraph_with_button.png'/>");
    }else if (id == 14) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 15) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 16) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 17) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 18) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 19) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 20) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 21) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 22) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 23) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 24) {
        $(`#image_page_section`).html("<img style='width:100%' src='public/page_sections/team.png'/>");
    }else if (id == 25) {
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

function select_page_section_component(ele){
    var get_value = $(ele).val();
    var get_id = $(ele).attr('id');
    console.log(get_value);
    $.ajax({
        url: "admin/page_section_id_for_component/" + get_id+"/" + get_value,
        method: "GET",
        success: function(result) {
            $(`#table_page_section`).html(result);
        }
    })
}


