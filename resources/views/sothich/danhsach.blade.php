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
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sothich as $item)
                            <tr>
                                <th >{{ $item->favorite_id }}</th>
                                <th>{{ $item->favorite_name }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
