@php
    $service = DB::table('menus')->get();
@endphp
<script>
$(document).ready(function() {
    // Denotes total number of rows
    var ServicerowIdx = 0;
    // jQuery button click event to add a row
    $('#ServiceaddBtn').on('click', function() {
        // Adding a row inside the tbody.
        
        $('#Servicetbody').append(`<tr id="R${++ServicerowIdx}">
            <td class="row-index text-center"><select id="service" name="service[]" class="form-control service${ServicerowIdx}"><option>--select service--</option>@foreach($service as $row_service)<option value="{{$row_service->id}}">{{$row_service->menu_name}}</option>@endforeach</select></td>
            <td class="row-index text-center"><select  id="dependent_page_sections${ServicerowIdx}" name="sub_category[]" class="sub_service${ServicerowIdx} form-control"><option>--Select Sub Category--</option></select></td>
            <td class="row-index text-center"><input name="sub_service_link[]" class="form-control sub_service_link${ServicerowIdx}" type="text"/></td>
            <td class="text-center"><button class="btn btn-danger remove" type="button">x</button></td>
            </tr>`);

        $('#Servicetbody').on('change', `.service${ServicerowIdx}`, function() {
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();

                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "../services_by_id/" + value,
                    method: "GET",
                    success: function(result) {
                        $(`#dependent_page_sections${ServicerowIdx}`).html(result);
                    }
                })
            }
        });

        $('#Servicetbody').on('change', `.sub_service${ServicerowIdx}`, function() {
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "../../sub_services_by_id/" + value,
                    method: "GET",
                    success: function(result) {
                        $(`.sub_service_link${ServicerowIdx}`).val(result['class_name']);
                    }
                })
            }
        });
    });
    // jQuery button click event to remove a row.
    $('#Servicetbody').on('click', '.remove', function() {
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
        caseStudyServicesrowIdx--;
    });
});
</script>