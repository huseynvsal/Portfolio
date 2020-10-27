$(function(){
    var url = window.location.href;
    $(".menu a").each(function() {
        if(url == (this.href)) {
            $('.selected_table_link').addClass('table_link');
            $('.selected_table_link').removeClass('selected_table_link');
            $(this).closest("a").addClass("selected_table_link");
            $(this).closest("a").removeClass('table_link');
        }
    });
});
$(function(){
    $table_name = $('.selected_table_link').html();
    $('.table_name').html($table_name + ' table');
});
$('.add_btn').on('click',function(){
    $('.modal_filter').css('opacity',1);
    $('.modal_filter').css('visibility','visible');
    $('.add').html('Add');
    $('.modal_header h4').html('ADDITION');
    $('input[name=project_name]').val('');
    $('input[name=url]').val('');
    $('input[name=image]').val('');
    $('select[name=category]').val('front_end');
});
$('.btn_edit').on('click',function(){
    $('.modal_filter').css('opacity',1);
    $('.modal_filter').css('visibility','visible');
    $('.add').html('Update');
    $('.modal_header h4').html('UPDATE');
    var tr = $(this).parents('tr');
    var project_name = tr.find('td:eq(0)').text();
    var default_image = tr.find('td:eq(1)').text();
    var url = tr.find('td:eq(2)').text();
    var category = tr.find('td:eq(3)').text();
    $('input[name=project_name]').val(project_name);
    $('input[name=url]').val(url);
    $('select[name=category]').val(category);
    var id = tr.attr('id');
    $('.modal .modal_footer').attr('id',id);
});
$('.modal .modal_footer').on('click', '#project', function(){
    var id = $('.modal_footer').attr('id');
    var tr = $('#'+ id);
    var default_image = tr.find('td:eq(1)').text();
    var formData = new FormData($('#project_add')[0]);
    formData.append('id', id);
    var project_name = $('input[name=project_name]').val();
    var url = $('input[name=url]').val();
    var image = $('input[name=image]').val().replace(/C:\\fakepath\\/i, '');
    var category = $('select[name=category]').find(':selected').val();
    if (image == ''){
        image = default_image;
    }
    $.ajax({
        type: "POST",
        url: url_route,
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function(response){
            if (response.message == 'success') {
                if (response.upsert == 0){
                    toastr.success('Project updated');
                    $('input[name=project_name]').val('');
                    $('input[name=url]').val('');
                    $('input[name=image]').val('');
                    $('select[name=category]').val('front_end');
                    tr.find('td:eq(0)').text(project_name);
                    tr.find('td:eq(1)').text(image);
                    tr.find('td:eq(2)').text(url);
                    tr.find('td:eq(3)').text(category);
                }
                else{
                    toastr.success('Project added');
                    $('input[name=project_name]').val('');
                    $('input[name=url]').val('');
                    $('input[name=image]').val('');
                    $('select[name=category]').val('front_end');
                    $('tbody').append('<tr id="'+response.last_inserted_id+'"><th class="text-center" scope="row"></th>\n' +
                        '<td>'+project_name+'</td>\n' +
                        '<td>'+image+'</td>\n' +
                        '<td>'+url+'</td>\n' +
                        '<td>'+category+'</td>\n' +
                        '<td><button class="btn_edit"><i class="fa fa-pencil"></i></button><br><br><button class="btn_delete"><i class="fa fa-trash"></i></button><br><br></td>\n' +
                        '</tr>');
                    indexing();
                }
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
$('.modal').on('click','.close',function(){
    $('.modal_filter').css('opacity',0);
    $('.modal_filter').css('visibility','hidden');
    $('.modal_footer').attr('id','');
});
$('.btn_delete').on('click',function(){
    $('.delete_modal_filter').css('opacity',1);
    $('.delete_modal_filter').css('visibility','visible');
    var id = $(this).parents('tr').attr('id');
    $('.delete_modal').attr('id',id);
    $('.delete_modal .delete_modal_footer').on('click', '#delete_project', function(){
        var id = $(this).parents('.delete_modal').attr('id');
        $.ajax({
            type: "POST",
            url: delete_url,
            data: {"_token": token,'id':id},
            success:function(response){
                if (response.message == 'success') {
                    toastr.success('Project deleted');
                    $('tbody').find('#'+id).html('');
                    $('.delete_modal_filter').css('opacity',0);
                    $('.delete_modal_filter').css('visibility','hidden');
                    indexing();
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    });
    $('.delete_modal .delete_modal_footer').on('click', '#delete_message', function(){
        var id = $(this).parents('.delete_modal').attr('id');
        $.ajax({
            type: "POST",
            url: delete_m_url,
            data: {"_token": token,'id':id},
            success:function(response){
                if (response.message == 'success') {
                    toastr.success('Message deleted');
                    $('tbody').find('#'+id).html('');
                    $('.delete_modal_filter').css('opacity',0);
                    $('.delete_modal_filter').css('visibility','hidden');
                    indexing();
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    });
    $('.delete_modal .delete_modal_footer').on('click', '#delete_tool', function(){
        var id = $(this).parents('.delete_modal').attr('id');
        $.ajax({
            type: "POST",
            url: delete_t_url,
            data: {"_token": token,'id':id},
            success:function(response){
                if (response.message == 'success') {
                    toastr.success('Tool deleted');
                    $('tbody').find('#'+id).html('');
                    $('.delete_modal_filter').css('opacity',0);
                    $('.delete_modal_filter').css('visibility','hidden');
                    indexing();
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    });
});
$('.delete_modal').on('click','.close',function(){
    $('.delete_modal_filter').css('opacity',0);
    $('.delete_modal_filter').css('visibility','hidden');
});
$('.modal .modal_footer').on('click', '#add_tool', function(){
    var project_name = $('select[name=project_name]').find(':selected').val();
    var id = $('select[name=project_name]').find(':selected').attr('id');
    var tool = $('select[name=tool]').find(':selected').val();
    $.ajax({
        type: "POST",
        url: url,
        data: {"_token": token,'id':id,'tool':tool},
        success:function(response){
            if (response.message == 'success') {
                toastr.success('Tool added');
                $('tbody').append('<tr id="'+response.last_inserted_id+'"><th class="text-center" scope="row"></th>\n' +
                    '<td>'+project_name+'</td>\n' +
                    '<td>'+tool+'</td>\n' +
                    '<td><button class="btn_delete"><i class="fa fa-trash"></i></button><br><br></td>\n' +
                    '</tr>');
                indexing();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
$('.btn_seen').on('click', function(){
    var id = $(this).parents('tr').attr('id');
    $.ajax({
        type: "POST",
        url: seen_url,
        data: {"_token": token,'id':id},
        success:function(response){
            if (response.message == 'success') {
                toastr.success('Message read');
                $('.btn_seen').addClass('seen');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
function indexing() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('th:eq(0)').text(++i);
    })
}
