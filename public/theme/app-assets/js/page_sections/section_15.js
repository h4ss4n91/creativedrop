
    $(document).ready(function() {

        $('#style').change(function() {
                    var value = $(this).val();
                    if(value == 'style1'){
                        $( "#style_content" ).html( '<img style="width:100%" src="{{asset("public/page_sections/section_15.png")}}" />'); //this is not working
                    }else if(value == 'style2'){
                        $( "#style_content" ).html( '<img style="width:100%" src="{{asset("public/page_sections/section_15_style2.png")}}" />'); //this is not working
                    }else if(value == 'style3'){
                        $( "#style_content" ).html( '<img style="width:100%" src="{{asset("public/page_sections/section_15_style3.png")}}" />'); //this is not working
                    }
                    
                });

        // Denotes total number of rows
        var section15_rowIdx = 0;
        // jQuery button click event to add a row
        $('#section15_addBtn').on('click', function() {
            // Adding a row inside the tbody.
            $('#section15_tbody').append(`<tr id="R${++section15_rowIdx}">
                    <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                    <td class="row-index text-center"><input type="text" name="heading[]" class="form-control"/></td>
                    <td class="row-index text-center"><select class="form-control" name="flex_row_reverse[]">
                        <option value=""> NO </option>
                        <option value="flex_row_reverse"> Yes </option>
                    </select></td>
                    <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                    </tr>`);
        });
        // jQuery button click event to remove a row.
        $('#section15_tbody').on('click', '.remove', function() {
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
            section15_rowIdx--;
        });
    });
