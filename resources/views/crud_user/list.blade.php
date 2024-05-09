@extends('dashboard')
@section('content')
<h5 class="danhSach">Danh sách user</h5>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                    </div>
                @endif


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
