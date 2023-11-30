<style>
.tableUser table td a {
    text-decoration: none;
    margin-right: 10px;

}
</style>
@EXTENDS('admin.main')


@section('content')
<h6 style="font-size:30px " class="pt-5">Danh sách Contact</h6>
<div class="searchArea text-center pb-4">
    <form action="{{route('searchContact')}}" method="get">
        <input type="search" name="search" style="width: 400px;border-radius:100px;height:30px;padding-left:20px"
            placeholder="Search Contact">
        <button type="submit" class="border-0 bg-white"><i class="fa-solid fa-magnifying-glass fa-2xl"></i></button>
    </form>
</div>
<div class="tableUser">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('error')}}
    </div>
    @endif
    <div class="sort-dropdown">
        <span>Name Order</span>
        <div class="sort-dropdown-content">
            <a href="{{ route('contact.sapxepaz') }}">Name A-Z</a>
            <a href="{{ route('contact.sapxepza') }}">Name Z-A</a>
            <a href="{{ route('contact.sapxepidaz') }}">Id a-z</a>
            <a href="{{ route('contact.sapxepidza') }}">Id z-a</a>
        </div>
    </div>
    <!-- iimport data-->
    <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".xlsx"><br>
        <input type="submit" value="Import file Excel" name="import_csv" class="btn
    btn-warning">
    </form>
    <!-- export data-->
    <form action="{{url('export-csv')}}" method="POST">
        @csrf
        <input type="submit" value="Export file Excel" name="export_csv" class="btn
    btn-success">
    </form>
    <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>STT</th>
                <th>Username</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Yêu cầu của khách hàng</th>
                <th>Tin nhắn khách hàng</th>
                <th>Chức Năng</th>
            </tr>
        </thead>


        <tbody>
            <div id="contactList">
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id  }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td class="text-center">
                        <a href="{{route('contact.detroy',$contact->id )}}"
                            style='text-decoration:none; color:black'>Xóa</a>
                    </td>
                </tr>
                @endforeach
            </div>
        </tbody>

    </table>
</div>

<style>
.sort-dropdown {
    position: relative;
    display: inline-block;
}

.sort-dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.sort-dropdown:hover .sort-dropdown-content {
    display: block;
}

.sort-dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.sort-dropdown-content a:hover {
    background-color: #f1f1f1;
}
</style>
{{ $contacts->links() }}

@endsection