@php
    $service = DB::table('menus')->get();
@endphp
<script>
    $(document).ready(function() {
        // Denotes total number of rows
                
        var caseStudyrowIdx = 0;
        // jQuery button click event to add a row
        $('#edit_caseStudyaddBtn').on('click', function() {
            
            // Adding a row inside the tbody.
            $('#edit_caseStudytbody').append(`<tr id="R${++caseStudyrowIdx}">
                <td class="row-index text-center">
                    <input id="image${caseStudyrowIdx}" type="file" name="image[]" placeholder="Image" class="video form-control"/>
                    <input id="image_name${caseStudyrowIdx}" type="text" name="image_name[]" placeholder="Image Name" class="video form-control"/>
                </td>
                <td>
                    <select  id="image_bg${caseStudyrowIdx}" class="form-control" name="select_style_for_image[]">
                        <option value="">---Select bg Style---</option>
                        <option value=""> No </option>
                        <option value="section-bg-white">section-bg-white</option>
                    </select>
                </td>
                <td class="row-index text-center">
                    <input id="video${caseStudyrowIdx}" type="text" name="video[]" placeholder="Video Link" class="video form-control"/>
                    <input id="video_name${caseStudyrowIdx}" type="text" name="video_name[]" placeholder="Video Name" class="video form-control"/>
                </td>
                <td>
                    <select  id="image_bg${caseStudyrowIdx}" class="form-control" name="select_style_for_video[]">
                        <option value="">---Select video Style---</option>
                        <option value="section-padtop-100 section-padbottom-100"> Video With Background </option>
                        <option value="bg-white section-bg-white mt-0 pt-0">Video Full Width</option>
                    </select>    
                </td>
                <td class="row-index text-center">
                    <input type="file" name="case_study_video_background[]" class="image_video_bg${caseStudyrowIdx} form-control"/>
                </td>
                
                <td class="text-center"><button class="btn btn-danger remove" type="button">x</button></td>
                </tr>`);
                $('#edit_caseStudytbody').on('change', `.type${caseStudyrowIdx}`, function() {
                    var value = $(this).val();
                    console.log($(this).attr('class'));
                    console.log(`#video${caseStudyrowIdx}`);
                    console.log(`#image${caseStudyrowIdx}`);
                    if(value == `image${caseStudyrowIdx}`){
                        $(`#video${caseStudyrowIdx}`).hide();
                        $(`#video_bg${caseStudyrowIdx}`).hide();
                        $(`#image${caseStudyrowIdx}`).show();
                        $(`#image_bg${caseStudyrowIdx}`).show();
                    }else if(value == `video${caseStudyrowIdx}`){
                        $(`#image${caseStudyrowIdx}`).hide();
                        $(`#image_bg${caseStudyrowIdx}`).hide();
                        $(`#video${caseStudyrowIdx}`).show();
                        $(`#video_bg${caseStudyrowIdx}`).show();
                    }
                });
                $('#edit_caseStudytbody').on('change', `.video_bg${caseStudyrowIdx}`, function() {
                    var value = $(this).val();
                    
                    if(value == `cs-yt-video${caseStudyrowIdx}`){
                        $(`.image_video_bg${caseStudyrowIdx}`).show();
                    }else{
                        $(`.image_video_bg${caseStudyrowIdx}`).hide();
                    }
                });
        });
        
        // jQuery button click event to remove a row.
        $('#edit_caseStudytbody').on('click', '.remove', function() {
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
            caseStudyrowIdx--;
        });
    });


    $(document).ready(function() {
        // Denotes total number of rows
        var caseStudyServicesrowIdx = 0;
        // jQuery button click event to add a row
            $('#edit_caseStudyServicesaddBtn').on('click', function() {
                // Adding a row inside the tbody.
                $('#edit_caseStudyServicestbody').append(`<tr id="R${++caseStudyServicesrowIdx}">
                <td class="row-index text-center"><select id="service" name="service[]" class="form-control service${caseStudyServicesrowIdx}"><option>--select service--</option>@foreach($service as $row_service)<option value="{{$row_service->id}}">{{$row_service->menu_name}}</option>@endforeach</select></td>
                <td class="row-index text-center"><select  id="dependent_page_sections${caseStudyServicesrowIdx}" name="sub_category[]" class="form-control"><option>--Select Sub Category--</option></select></td>
                <td class="text-center"><button class="btn btn-danger remove" type="button">x</button></td>
                </tr>`);

                $('#edit_caseStudyServicestbody').on('change', `.service${caseStudyServicesrowIdx}`, function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                        
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "../services_by_id/" + value,
                        method: "GET",
                        success: function(result) {
                            
                            $(`#dependent_page_sections${caseStudyServicesrowIdx}`).html(result);
                        }
                    })
                }
            });
        });
        // jQuery button click event to remove a row.
        $('#edit_caseStudyServicestbody').on('click', '.remove', function() {
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
                                                                
    $(document).ready(function() {
        // Denotes total number of rows
        var caseStudyIndustryrowIdx = 0;
        // jQuery button click event to add a row
        $('#edit_caseStudyIndustryaddBtn').on('click', function() {
            // Adding a row inside the tbody.
            $('#edit_caseStudyIndustrytbody').append(`<tr id="R${++caseStudyIndustryrowIdx}">
            <td class="row-index text-center"><select  name="industry[]" class="form-control">
                <option>--Select Industry--</option>
                @php
                    $ind = DB::table('industries')->get();
                @endphp
                @foreach($ind as $row_ind)
                    <option value="{{$row_ind->id}}">{{$row_ind->title}}</option>
                @endforeach
                </select></td>
            <td class="text-center"><button class="btn btn-danger remove" type="button">x</button></td>
            </tr>`);

        });
        // jQuery button click event to remove a row.
        $('#edit_caseStudyIndustrytbody').on('click', '.remove', function() {
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
            caseStudyIndustryrowIdx--;
        });
    });
</script>

