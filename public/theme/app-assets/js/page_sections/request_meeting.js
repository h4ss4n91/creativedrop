$(document).ready(function() {
    $('#request_style').change(function() {
        var value = $(this).val();
        if (value == 'style1') {
            $("#request_style_content").html('<img style="width:200%" src="' + path + '/public/page_sections/request_style1.png" />'); //this is not working
        } else if (value == 'style2') {
            $("#request_style_content").html('<img style="width:200%" src="' + path + '/public/page_sections/request_style2.png" />'); //this is not working
        } else if (value == 'style3') {
            $("#request_style_content").html('<img style="width:200%" src="' + path + '/public/page_sections/request_style3.png" />'); //this is not working
        } else if (value == 'style4') {
            $("#request_style_content").html('<img style="width:200%" src="' + path + '/public/page_sections/request_style4.png" />'); //this is not working
        }
    });

    // Denotes total number of rows
    var requestrowIdx = 0;
    // jQuery button click event to add a row
    $('#requestaddBtn').on('click', function() {
        // Adding a row inside the tbody.
        $('#requesttbody').append(`<tr id="R${++requestrowIdx}">
                <td class="row-index text-center"><input type="text" name="request_title[]" class="form-control"/></td>
                <td class="row-index text-center"><input type="text" name="button_label[]" class="form-control"/></td>
                <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                </tr>`);
    });
    // jQuery button click event to remove a row.
    $('#requesttbody').on('click', '.remove', function() {
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest('tr').nextAll();
        // Iterating across all the rows 
        // obtained to change the index
        child.each(function() {
            // Getting <tr> id.
            var id = $(this).attr('id');
            // Getting the <p> inside the .row-index class.
            var idx = $(this).children('.row-index').children('p');
            // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(1));
            // Modifying row index.
            idx.html(`Row ${dig - 1}`);
            // Modifying row id.
            $(this).attr('id', `R${dig - 1}`);
        });
        // Removing the current row.
        $(this).closest('tr').remove();
        // Decreasing total number of rows by 1.
        requestrowIdx--;
    });
});