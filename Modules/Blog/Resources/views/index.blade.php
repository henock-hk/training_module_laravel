@extends('layout')
@section('content')
<p>
    <strong>Liste Blogs</strong>
    -
    <small>Module Blog</small>
</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th>Blog Name</th>
      <th>Blog Type</th>

    </tr>
  </thead>
  <tbody>

   @foreach ($blog as $bl)
        <tr>
      <td>{{$bl->name}}</td>
      <td>{{$bl->type}}</td>

    </tr>
   @endforeach

  </tbody>
</table>

<br />
@endsection
