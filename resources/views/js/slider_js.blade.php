@php
    $page = DB::table('page')->get();
    
@endphp
<script>
$(document).ready(function() {
    // Denotes total number of rows
    var SliderrowIdx = 0;
    // jQuery button click event to add a row
    $('#slideraddBtn').on('click', function() {
        // Adding a row inside the tbody.
        $('#slidertbody').append(`<tr id="R${++SliderrowIdx}">
            <td class="row-index text-center"><input type="file" name="slider_image[]" class="form-control"/></td>
            <td class="row-index text-center"><input type="text" name="text_1[]" class="form-control"/></td>
            <td class="row-index text-center"><input type="text" name="text_2[]" class="form-control"/></td>
            <td class="row-index text-center">
                <select data-live-search="true" data-live-search-style="begins" name="link[]" class="selectpicker form-control">
                    <option value="">--Select Link---</option>
                    @foreach($page as $row_page)
                            <option value="{{$row_page->slug}}">{{$row_page->slug}}</option>    
                    @endforeach
                </select>
                </td>
            <td class="row-index text-center">
            <select name="btn_style" class="form-control">
                <option value="">--Select Button Style---</option>
                <option value="btn web-btn web-btn-blue">btn web-btn web-btn-blue</option>
                <option value="btn web-btn web-btn-white">btn web-btn web-btn-white</option>
            </select></td>
            <td class="row-index text-center"><select name="status[]" class="form-control"><option value=""> None </option><option value="active"> Active </option></select></td>
            <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
        </tr>`);
    });
    // jQuery button click event to remove a row.
    $('#slidertbody').on('click', '.remove', function() {
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
        SliderrowIdx--;
    });
});
</script>