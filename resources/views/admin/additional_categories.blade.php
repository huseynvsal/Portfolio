@extends('admin/admin_index')
@section('admin_main')
        <div class="tables">
            <button class="add_btn">ADD</button>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tool</th>
                    <th>Düzəlt/Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tools as $key=>$tool)
                    <tr id="{{$tool->id}}">
                        <th>{{$key+1}}</th>
                        <td>{{$tool->project_name}}</td>
                        <td>{{$tool->tool}}</td>
                        <td><button class="btn_delete"><i class="fa fa-trash"></i></button><br><br></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <div class="modal_filter">
            <div class="modal">
                <div class="modal_header">
                    <h4>Addition</h4>
                    <button class="close"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal_content">
                    <select class="modal_inputs" name="project_name">
                        @foreach($projects as $key=>$project)
                            <option id="{{$project->id}}">{{$project->project_name}}</option>
                        @endforeach
                    </select>
                    <select class="modal_inputs" name="tool">
                        <option>CSS</option>
                        <option>Javascript</option>
                        <option>PHP</option>
                    </select>
                </div>
                <div class="modal_footer">
                    <button class="add" id="add_tool">Add</button>
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
                    <button class="yes" id="delete_tool">YES</button>
                    <button class="no close">NO</button>
                </div>
            </div>
        </div>
    <script>
        var token = '{{ csrf_token() }}';
        var url = "{{route('tool')}}";
        var delete_t_url = "{{route('delete_tool')}}";
    </script>
@endsection
