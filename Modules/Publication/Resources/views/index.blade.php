@extends('layout')
@section('content')
<p>
    <strong>Liste Publications</strong>
    -
    <small>Module Publication</small>
</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th>Title</th>
      <th>Description</th>


    </tr>
  </thead>
  <tbody>

   @foreach ($publication as $pub)
        <tr>
            <td>{{$pub->title}}</td>
      <td>{{$pub->content}}</td>

    </tr>
   @endforeach

  </tbody>
</table>

<br />
@endsection
