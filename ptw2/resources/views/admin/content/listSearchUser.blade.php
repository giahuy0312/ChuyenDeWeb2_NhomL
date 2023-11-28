<style>
    .tableUser table td a{
        text-decoration: none;
        margin-right: 10px;
      
    }
</style>
@EXTENDS('admin.main')


@section('content')
    <h6 style="font-size:30px " class="pt-5">Danh sách User</h6>
     
        <div class="tableUser">
        <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
           <tr>
            <th>STT</th>
            <th>Họ Tên</th>
            <th>Số điện thoại</th>
            <th>Username</th>
            <th>Email</th>
            <th>Chức Năng</th>
           </tr>
        </thead>
     
       
        <tbody>
            
                @foreach($users as $user)
            
            <tr>   
                <td>{{ $user->id}}</td>
                <td>{{ $user->name }}</td>
                <td>{{  $user->phone }}</td>
                <td>{{  $user->username }}</td>
                <td>{{  $user->email }}</td>
                <td class="text-center">
                    <a href="{{route('deleteUserAD',$user->id)}}">Xóa</a>
                    <a href="">Khóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
      
        {{ $users->links() }}
@endsection