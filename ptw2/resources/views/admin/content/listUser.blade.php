<style>
    table td a{
        text-decoration: none;
        margin-right: 10px;
      
    }
</style>
@EXTENDS('admin.main')


@section('content')
    <h6 style="font-size:30px " class="pt-5">Danh sách User</h6>
        <div class="searchArea text-center pb-4" >
            <form action="" method="get">
                <input type="search" name="search" style="width: 400px;border-radius:100px;height:30px;padding-left:20px">
                <button type="submit" class="border-0 bg-white"><i class="fa-solid fa-magnifying-glass fa-2xl"></i></button>
            </form>
        </div>
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
            <?php 
                $i = 1;  
                foreach($users as $user): 
            ?>
            <tr>   
                <td>{{ $i++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{  $user->phone }}</td>
                <td>{{  $user->username }}</td>
                <td>{{  $user->email }}</td>
                <td class="text-center">
                    <a href="">Xóa</a>
                    <a href="">Khóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
      
        {{ $users->links() }}
@endsection