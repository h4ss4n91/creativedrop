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
    console.log(selected_option);
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
    console.log(selected_option);
    var replace = class_id.replace('sub_services', '');
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "../services_by_id/" + selected_option,
        method: "GET",
        success: function(result) {
            $(`#dependent_page_sections_edit${replace}`).html(result);
        }
    })
}


function page_section(ele) {
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var page_section = $(`#${class_id} option:selected`).val()
    var replace = class_id.replace('page_sections_', '');
    var _token = $('input[name="_token"]').val();

    $.ajax({
        type: 'GET',
        url: 'page_section_id/' + page_section,
        success: function(data) {
            console.log(data);
            $(`#page_section_two_${replace}`).html(data);
            $(`#section_no_${replace}`).val(+replace);
        }
    });
}


function edit_page_section(ele) {
    var class_id = $(ele).attr('id');
    var val = $(`#${class_id}`).find(":selected").text();
    var page_section = $(`#${class_id} option:selected`).val()
    var replace = class_id.replace('page_sections_', '');
    var _token = $('input[name="_token"]').val();



    $.ajax({
        type: 'GET',
        url: '../page_section_id/' + page_section,
        success: function(data) {

            $(`#edit_page_section_two_${replace}`).html(data);

            $(`#edit_section_no_${replace}`).val(+replace);


        }
    });
}