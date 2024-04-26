@extends('dashboard')
<style>
    .danhSach{
        text-align: center;
        margin-bottom: 20px ;
    }
   table thead tr th{
        border: 1px solid #000;
        text-align: center;
    }
    table tbody tr th {
        border-left: 1px solid #000;
        border-right: 1px solid #000;
        font-weight: normal;
        
    }
    table {
        border: 1px solid #000;
        margin-bottom: 70px ;
    }
    table tbody tr th a{
        text-decoration: none;
         color: black;
       
    }
    .link {
        text-align: center;
        position: absolute;
        /* top: 150%; */
        left: 45%;

    }
</style>
@section('content')
<h5 class="danhSach">Danh sách user</h5>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>MSSV</th>
                            <th>Avatar</th>
                            
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th style="text-align: center;">{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>                               
                                <th>{{ $user->phone }}</th>
                                <th>{{ $user->mssv }}</th>
                                <th> <img src="{{ asset('avatar/'.$user->avatar) }}" width="70px" height="70px" alt="avatar"></th>
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}"   >View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" >Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" >Delete</a> 
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="text-align: center;" class="link">{{ $users->links() }}</div>
        </div>
    </main>
@endsection