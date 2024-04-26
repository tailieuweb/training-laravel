@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="border: solid 1px black;">
                        <h4 class="text-center" style="margin: 20px 10px;">Màn hình đăng kí</h4>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <!-- Username -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Username</div>
                                        <div class="col-md-8" style="text-align: left; margin-bottom: 10px;">
                                        <input type="text" id="name" style="border: solid 1px; width: 215px;" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Email</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="email_address" style="border: solid 1px; width: 215px;"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Mật khẩu -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Mật khẩu</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="password" id="password" style="border: solid 1px; width: 215px;"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Phone</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="phone" style="border: solid 1px; width: 215px;" name="phone" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- mssv -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">MSSV</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="mssv" style="border: solid 1px; width: 215px;" name="mssv" required>
                                    @if ($errors->has('mssv'))
                                        <span class="text-danger">{{ $errors->first('mssv') }}</span>
                                    @endif
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- Hinh anh -->
                                <div class="row mb-3">
                                    <label for="avatar"  style=" padding-right: 50px;"class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>
  
                                    <div class="col-md-6">
                                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
  
                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- <div>
                                        <label for="avatar">Ảnh đại diện</label>
                                        <input id="avatar" type="file" name="avatar" accept="image/*">
                                    </div> -->
                                </div>

                                <!-- Button -->
                                <div class="row">
                                    <div class="col-md-8" style="text-align: right; margin-top: 6px;">
                                        <a href="#" style="text-align: right; text-decoration: none; font-size: 13px;">Bạn đã có tài khoản?</a>
                                    </div>
                                    <div class="col-md-4" style="padding-left: 5px;">
                                    <div class="" style="text-align: left; ">
                                    <button type="submit" class="btn btn-primary btn-block" style=" margin-left: 11px;">Đăng kí</button>
                                </div>
                                
                                    
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection