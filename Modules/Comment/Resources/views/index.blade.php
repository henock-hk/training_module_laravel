@extends('layout')
@section('content')
<p>
    <strong>Liste Comments</strong>
    -
    <small>Module Comment</small>
</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th>Contenus</th>


    </tr>
  </thead>
  <tbody>

   @foreach ($comment as $com)
        <tr>
      <td>{{$com->description}}</td>

    </tr>
   @endforeach

  </tbody>
</table>

<br />
@endsection
