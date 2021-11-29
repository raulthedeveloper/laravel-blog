@extends('layouts.dashboard')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    <div class="container">
      
        <div class="row justify-content-center">
            
                <form action="{{ route('settings_general') }}" method="POST" class="w-100" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Email is used for contact form submits</div>
                    </div>
                    <div>
                        <h4>Add Social Media Url</h4>
                        <div class="row">
                        
                            <div class="mb-3 col-4">
                                <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                <input name="facebook" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
        
                              <div class="mb-3 col-4">
                                <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                <input name="instagram" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
        
                              <div class="mb-3 col-4">
                                <label for="exampleInputEmail1" class="form-label">Linkedin</label>
                                <input name="linkedin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                        </div>

                        <small>Social Media Links are applied as links in blog posts</small>

                    </div>
                    
                    
                   
                      
                   
                    
                    <button type="submit" value="Upload" class="btn btn-primary mt-4">Update</button>
                  </form>
                </div>
                
            
                  
                  <div class="row mt-5">
                    <h3 class="text-left">Upload Profile Avatar</h3>
                  <form action="{{ route('upload_avatar') }}" method="POST" class="w-100" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Image</label>
                        <input name="image" type="file" class="form-control-file">
                      </div>

                      <button class="btn btn-primary" type="submit">Upload</button>
                  </form>

            

              
        </div>

        <div class="mt-5">
            <h3>Register New User</h3>
        
                <form class="mt-3" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">

                        <label for="first_name" class="form-label">{{ __('First Name') }}</label>

                       
                            <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row">
                        <label for="name" class="form-label">{{ __('Last Name') }}</label>

                        
                            <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row">
                        <label for="password" class="form-label">{{ __('Password') }}</label>

                        
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                        
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
        
            

        
    </div>
@endsection