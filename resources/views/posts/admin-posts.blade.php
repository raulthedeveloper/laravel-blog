@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Categories</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
              <td>@mdo</td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>
</div>

@endsection