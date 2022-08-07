@extends('layout')
@section('content')
<p>
    <strong>Liste utilisateurs</strong>
    -
    <small>Module Hmbungu</small>
</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th>First Name</th>
      <th>Prenom</th>
      <th>email</th>
      <th>Sexe</th>
    </tr>
  </thead>
  <tbody>

   @foreach ($users as $user)
        <tr>

      <td>{{$user->name}}</td>
      <td>{{$user->prenom}}</td>

      <td>{{$user->email}}</td>
      <td>{{$user->sexe}}</td>
    </tr>
   @endforeach

  </tbody>
</table>

<br />
@endsection
