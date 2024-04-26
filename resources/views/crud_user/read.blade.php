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
        <p>{{$user->id}}</p>
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->phone}}</p>
        <p>{{$user->mssv}}</p>
        <img src="{{ asset('avatar/'.$user->avatar) }}" width="100px" height="100px" alt="avatar">
        </div>
      </div>

      <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="chinhSua">Chỉnh sửa</a>
    </div>
</div>

<div class="container">
<div class="row">
    <h4>Danh sách bài viết đã viết</h4>
    <table>
        <thead>
            <th>ID</th>
            <th>Post name</th>
        </thead>
        <tbody>
            @foreach($user->posts as $post)
            <tr>
                <td>{{ $post->post_id }}</td>
                <td>{{ $post->post_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <h4>Danh sách sở thích</h4>
</div>
</div>

@endsection
