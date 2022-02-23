    $(document).ready(function() {

        $('#para_style_5_style').change(function() {
                    var value = $(this).val();
                    if(value == 'style1'){
                        $( "#para_style_5_style_content" ).html( '<img style="width:100%" src="{{asset("public/page_sections/paragraph_with_main_heading_left_right_text_column.png")}}" />'); //this is not working
                    }else if(value == 'style2'){
                        $( "#para_style_5_style_content" ).html( '<img style="width:100%" src="{{asset("public/page_sections/section_22_style2.png")}}" />'); //this is not working
                    }
                });

        // Denotes total number of rows
        var paraStyleFiverowIdx = 0;
        // jQuery button click event to add a row
        $('#paraStyleFiveaddBtn').on('click', function() {
            // Adding a row inside the tbody.
            $('#paraStyleFivetbody').append(`<tr id="R${++paraStyleFiverowIdx}">
            <td class="row-index text-center"><select class="form-control" name="heading_size[]"> <option value="h1"> h1 </option> <option value="h2"> h2 </option><option value="h3"> h3 </option><option value="h4"> h4 </option></select></td>
                <td class="row-index text-center"><input type="text" name="heading[]" class="form-control"/></td>
              <td class="row-index text-center"><input type="text" name="text_left[]" class="form-control"/></td>
              <td class="row-index text-center"><input type="text" name="text_right[]" class="form-control"/></td>
              <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
             </tr>`);
        });
        // jQuery button click event to remove a row.
        $('#paraStyleFivetbody').on('click', '.remove', function() {
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
            paraStyleFiverowIdx--;
        });
    });
