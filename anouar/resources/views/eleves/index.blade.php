@extends('layouts/master')
@section('content')
<h3>Liste des éléves</h3>
<table>
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>ID CLUB</th>
        <th>ACTIONS</th>
    </tr>
@foreach ($eleves as $eleve)
    <tr>
        <td>{{$eleve->id}}</td>
        <td>{{$eleve->nom}}</td>
        <td>{{$eleve->prenom}}</td>
        <td>{{$eleve->id_club}}</td>
        <td>
            <a class="modifier" href="{{route('eleves.edit',$eleve->id)}}">Modifier</a>
        </td>
        <td>
            <a class="modifier" href="{{route('eleves.show',$eleve->id)}}"> >> </a>
        </td>
    </tr>
@endforeach
</table>

@endsection