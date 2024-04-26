@extends('dashboard')
<style>
  .error-message {
    color: red;
}
</style>
@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <!-- <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"  value="{{ $user->phone }}" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div> -->
                                <div class="row">
                                <div class="col-md-4" style="text-align: center">
                                        <p style="margin-top:20px">User name</p>
                                        <p style="margin-top:35px">Email</p>
                                        <p style="margin-top:28px">Nhập lại mặt khẩu</p>
                                        <p style="margin-top:30px">SDT</p>
                                        <p style="margin-top:30px">MSSV</p>
                                    </div>
                                <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Phone" id="phone" class="form-control" name="phone"  value="{{ $user->phone }}" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="MSSV" id="mssv" class="form-control" name="mssv"  value="{{ $user->mssv }}" required>
                                    <!-- @if ($errors->has('mssv'))
                                        <span class="text-danger">{{ $errors->first('mssv') }}</span>
                                    @endif -->
                                    @if ($errors->has('mssv'))
                                     <span class="error-message">{{ $errors->first('mssv') }}</span>
                                    @endif
                                </div>
                                </div>
                                </div>

                                <!-- Hinh anh -->
                                <div class="row mb-3">
                                    <label for="avatar" style="padding-right: 58px;" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>
  
                                    <div class="col-md-6">
                                        <input id="avatar"  type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
                                        <img src="{{ asset('avatar/'.$user->avatar)  }}" width="70px" height="70px" alt="avatar">
                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                   
                                </div>

                                <div class="row">
                                    <div class="col-md-8" style="text-align: right; margin-top: 6px; margin-left:">
                                        <a href="http://127.0.0.1:8000/login" style="text-align: right; text-decoration: none; font-size: 13px;">Đã có tài khoản</a>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="" style="text-align: right; margin-right: 50px">
                                    <button type="submit" class="btn btn-primary btn-block">Cập Nhật</button>
                                </div>

                              
                            </form> 
                            
                        </div>
                        <!-- <div class="d-grid mx-auto">
                            <a href="{{route('user.list')}}" class="btn btn-dark btn-block">Back</a>
                      </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection