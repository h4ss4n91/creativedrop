<script>
    $(document).ready(function() {
        // Denotes total number of rows
        var clientrowIdx = 0;
        // jQuery button click event to add a row
        $('#clientaddBtn').on('click', function() {
            // Adding a row inside the tbody.
            $('#clienttbody').append(`<tr id="R${++clientrowIdx}">
                <td class="row-index text-center"><input type="file" name="clientAndParter_image[]" class="form-control"/></td>
                <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                </tr>`);
        });
        // jQuery button click event to remove a row.
        $('#clienttbody').on('click', '.remove', function() {
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
            clientrowIdx--;
        });
    });
</script>