@extends('admin/admin_index')
@section('admin_main')
        <div class="tables">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Düzəlt/Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $key=>$message)
                    <tr id="{{$message->id}}">
                        <th>{{$key+1}}</th>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->message}}</td>
                        <td><button class="btn_seen @if($message->seen == 1) seen @endif"><i class="fa fa-check"></i></button><br><br><button class="btn_delete"><i class="fa fa-trash"></i></button><br><br></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
                <button class="yes" id="delete_message">YES</button>
                <button class="no close">NO</button>
            </div>
        </div>
    </div>
    <script>
        var token = '{{ csrf_token() }}';
        var delete_m_url = "{{route('delete_message')}}";
        var seen_url = "{{route('message_seen')}}";
    </script>
@endsection
