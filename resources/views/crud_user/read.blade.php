@extends('dashboard')
<style>
   .manHinh{
    text-align: center;
    margin: 25px 0px;
    
   }
   .row{
    text-align: left;

   }
   .chiTiet{
    border: 1px solid #000;
    width: 50%;
    height: 70%;
    margin: auto ;
   }
   .row .col-md-4{
    padding-left: 50px ;
   }
   .row .col-md-8{
    padding-left: 36px ;
    font-weight: bold;
   }
   .chiTiet .chinhSua{
        padding: 15px 15px;
        background: blue;
        margin-bottom: 20px ;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px ;
        margin-left: 390px ;
     display: inline-block;

   }
 
</style>
@section('content')
<div class="container">
<div class="chiTiet">
    <h5  class="manHinh">Màn hình chi tiết</h5>
    
 <div class="row">
    <div class="col-md-4">
    <p>Id</p>
    <p> Username</p>
    <p> Email</p>
    <p>Phone</p>
    <p>MSSV</p>
    <p>Avatar</p>
    </div>
    <div class="col-md-8">
    <p>{{$messi->id}}</p>
    <p>{{$messi->name}}</p>
    <p>{{$messi->email}}</p>
    <p>{{$messi->phone}}</p>
    <p>{{$messi->mssv}}</p>
    <img src="{{ asset('avatar/'.$messi->avatar) }}" width="100px" height="100px" alt="avatar">
    </div>
  </div>
 
  <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="chinhSua">Chỉnh sửa</a> 
</div>
</div>  
    
    <!-- <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main> -->
@endsection