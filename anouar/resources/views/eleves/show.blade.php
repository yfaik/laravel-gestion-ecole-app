@extends('layouts/master')
@section('content')
<h3>L'élève</h3>
<p>
    ID <br>
    {{$eleve->id}}
</p>
<p>
    NOM <br>
    {{$eleve->nom}}
</p>
<p>
    PRENOM <br>
    {{$eleve->prenom}}
</p>
<p>
    ID CLUB <br>
    {{$eleve->id_club}}
</p>
<h3>Activités</h3>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            DESCRIPTION
        </th>
        <th>
            DATE DEBUT
        </th>
        <th>
            NOMBRE JOURS
        </th>
    </tr>
    @foreach ($activites as $activite)
        <tr>
            <td>{{$activite->id}}</td>
        
            <td>{{$activite->description}}</td>
      
            <td>{{$activite->date_debut}}</td>
       
            <td>{{$activite->nombre_jours}}</td>
        </tr>
    @endforeach
</table>

@endsection