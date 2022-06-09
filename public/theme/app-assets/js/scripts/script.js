$("#page_title").keyup(function() {
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
    $("#page_slug").val(Text);
});


function case_study_main_service(ele) {
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var selected_option = $(`#${class_id} option:selected`).val()
    var replace = class_id.replace('service', '');
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "../services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {
            $(`#dependent_page_sections${replace}`).html(result);
        }
    })
}

function case_study_main_service_edit(ele) {
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var selected_option = $(`#${class_id} option:selected`).val()
    console.log(selected_option);
    var replace = class_id.replace('service', '');
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "../services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {
            $(`#dependent_page_sections_edit${replace}`).html(result);
        }
    })
}

function services(ele) {
    var service_id = $(ele).attr('id');

    var selected_option = $(`#${service_id} option:selected`).val();
    console.log('line44' + selected_option);
    var replace = service_id.replace('service', '');
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "../services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {
            $(`#sub_service${replace}`).html(result);
        }
    })
}

function sub_services(ele) {
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var selected_option = $(`#${class_id} option:selected`).val()
        // console.log('line60' + selected_option);
    var replace = class_id.replace('sub_services', '');
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "../services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {
            $(`#dependent_page_sections_edit${replace}`).html(result);
            $(`#third_service${replace}`).html(result['third_level_category']);
        }
    })
}


function sub_services_two(ele) {
    var class_id = $(ele).attr('id');
    //console.log('line number 75');
    var val = $(`#${class_id}`).find(":selected").text();
    var selected_option = $(`#${class_id} option:selected`).val()
         //console.log('line78' + selected_option);
    var replace = class_id.replace('sub_service', '');
    console.log(replace);
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "../sub_services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {
            //console.log(result['class_name']);
            $(`.sub_service_link${replace}`).val(result['class_name']);
            $(`#third_service${replace}`).html(result.third_level_category);
        }
    })
}

function third_services_two(ele) {
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var selected_option = $(`#${class_id} option:selected`).val()
    
    var replace = class_id.replace('third_service', '');
    
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: app_url+"/admin/third_services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {

            $(`#third_service_link${replace}`).val(result['name']);

        }
    })
}

function page_section(ele) {
    // console.log(app_url);
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var page_section = $(`#${class_id} option:selected`).val()
    var replace = class_id.replace('page_sections_', '');
    var _token = $('input[name="_token"]').val();
    
    $.ajax({
        type: 'GET',
        url: app_url+'/admin/page_section_id/' + page_section,
        success: function(data) {
            if(page_section == 1){
                $(`#section_image`).html('Hello Slider');    
            }else if(page_section == 2){
                $(`#section_image`).html('Hello Video Section');    
            }
            
            $(`#page_section_two_${replace}`).html(data);
            $(`#section_no_${replace}`).val(+replace);
        }
    });
}

