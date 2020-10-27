@extends('admin/admin_index')
@section('admin_main')
    <div class="tables">
        <button class="add_btn">ADD</button>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Picture</th>
                    <th class="text-center" scope="col">Link</th>
                    <th class="text-center" scope="col">Category</th>
                    <th class="text-center" scope="col">Düzəlt/Sil</th>
                </tr>
            </thead>
            <tbody>
            @foreach($projects as $key=>$project)
                <tr id="{{$project->id}}">
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$project->project_name}}</td>
                    <td><input class="project_image" type="image" src="{{asset('portfolio/images/'.$project->image.'')}}"></td>
                    <td>{{$project->url}}</td>
                    <td>{{$project->category}}</td>
                    <td><button class="btn_edit"><i class="fa fa-pencil"></i></button><br><br><button class="btn_delete"><i class="fa fa-trash"></i></button><br><br></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal_filter">
    <div class="modal">
        <div class="modal_header">
            <h4>ADDITION</h4>
            <button class="close"><i class="fa fa-times"></i></button>
        </div>
        <div class="modal_content">
            <form id="project_add">
                @csrf
                <input name="project_name" class="modal_inputs" type="text" placeholder="Name">
                <input name="image" class="modal_inputs" type="file" placeholder="Picture">
                <input name="url" class="modal_inputs" type="text" placeholder="Link">
                <select class="modal_inputs" name="category">
                    <option>front_end</option>
                    <option>back_end</option>
                    <option>full_stack</option>
                </select>
            </form>
        </div>
        <div class="modal_footer" id="0">
            <button class="add" id="project">Add</button>
        </div>
    </div>
</div>
<div class="delete_modal_filter">
    <div class="delete_modal" id="">
        <div class="modal_header">
            <h4>Delete</h4>
            <button class="close"><i class="fa fa-times"></i></button>
        </div>
        <div class="modal_content">
            <button class="danger"><i class="fa fa-exclamation"></i></button><br>
            <h2 class="sure">Are you sure you want to delete this data?</h2>
        </div>
        <div class="delete_modal_footer">
            <button class="yes" id="delete_project">YES</button>
            <button class="no close">NO</button>
        </div>
    </div>
</div>
<script>
    var token = '{{ csrf_token() }}';
    var url_route = "{{route('project')}}";
    var delete_url = "{{route('delete_project')}}";
</script>
@endsection
