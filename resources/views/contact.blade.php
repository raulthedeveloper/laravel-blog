@extends('layouts.app')

@section('content')


<div class="container">
    
    <div class="row">
        <div class="col-md-6">
            <h1>I am the contact page</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iusto quasi numquam, perferendis tempore excepturi facere, ab dolore, blanditiis a repellendus impedit! Reiciendis sed dolor nisi suscipit autem, adipisci perspiciatis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iusto quasi numquam, perferendis tempore excepturi facere, ab dolore, blanditiis a repellendus impedit! Reiciendis sed dolor nisi suscipit autem, adipisci perspiciatis.</p>

            <ul>
                <li style="list-style: none;"><i class="bi bi-telephone-outbound-fill"></i> (555)555-1234</li>
                <li style="list-style: none;"><i class="bi bi-envelope-fill"></i> email@email.com</li>
                <li style="list-style: none;">
                    <span><a href="#"></a><i class="bi bi-facebook"></i></span>
                    <span><a href=""></a><i class="bi bi-instagram"></i></span>
                    <span><a href=""><i class="bi bi-linkedin"></i></a></span>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <form class="shadow p-3 mb-5 bg-body rounded">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       
    </div>
</div>
@endsection