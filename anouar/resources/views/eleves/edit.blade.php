@extends('layouts/master')
@section('content')
<h3>Modifier un éléve</h3>
<form class="form" action="{{route('eleves.update',$eleve->id)}}" method="post">
@method('PUT')
@csrf
<div class="form-control">
    <label for="">ID</label><br>
    <input type="text" name="nom" disabled value="{{$eleve->id}}">
</div>
<div class="form-control">
    <label for="">NOM</label> <br>
    <input type="text" name="nom" value="{{$eleve->nom}}" >
</div>
<div class="form-control">
    <label for="">PRENOM</label><br>
    <input type="text" name="prenom" value="{{$eleve->prenom}}">
</div>
<div class="form-control">
    <label for="">CLUB</label><br>
   <select name="id_club" >
    @foreach ($clubs as $club)
        <option value="{{$club->id}}">{{$club->id}} {{$club->nom}}</option>
    @endforeach
   </select>
</div>
<div class="form-control">
    <button type="submit">Modifier</button>
</div>
</form>

@endsection