@extends('layout')
@section('content')
<p>
    <strong>Liste Posts</strong>
    -
    <small>Module Post</small>
</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th>Title</th>
      <th>Description</th>


    </tr>
  </thead>
  <tbody>

   @foreach ($post as $po)
        <tr>
            <td>{{$po->title}}</td>
      <td>{{$po->content}}</td>

    </tr>
   @endforeach

  </tbody>
</table>

<br />
@endsection
