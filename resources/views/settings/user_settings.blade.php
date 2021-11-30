@extends('layouts.dashboard')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    <div class="container">
       <h2>All Users</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
    
                
                @foreach ($users as $user)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$user->first_name}}</td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>Admin</td>
                  <td><a href="#" class="btn btn-secondary">Edit</a></td>
                 
                  <td><button type="button" class="btn btn-danger" onclick="deletePost('{{ route('delete_post',[$user->id]) }}')" 
                    @if (auth()->user()->first_name == $user->first_name)
                    disabled
                    @endif
                    >
                   
                    Delete
                  </button>
                  </td>
                </tr>
                @endforeach
    
          
              </tbody>
          </table>
            

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