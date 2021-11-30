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

        
        
            

        
    </div>
@endsection