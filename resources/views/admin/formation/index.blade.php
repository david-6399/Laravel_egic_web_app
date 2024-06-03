@extends('admin.index')
@section('content')
<div class="content-wrapper">

<div class="col-lg-12 grid-margin stretch-card py-sm-5">
  <div class="card">
    <div class="card-body" >
      <a href="/formation/create">
        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Nouvelle Formation</button>
      </a>
      <br>
      <br>
      </p>
      <div class="table-responsive" >
        <table class="table table-dark">
          <thead>
            <tr>
              <th> # </th>
              <th> Nome de Formation </th>
              <th> La duree </th>
              <th> Tarif </th>
              <th> Actions </th>
            </tr>
          </thead>
          <tbody>
            
            @forelse ($formations as $formation)
            
            <tr>
              <td> {{$i=$i+1}} </td>
              <td> {{$formation->nome_forma}} </td>
              <td> {{$formation->duree_forma}} </td>
              <td> {{$formation->tarif_forma}}</td>
              <td> {{$formation->type_formation->name}}</td>
              <td> {{$formation->program->titre}}</td>
              <td> <a href="/formation/{{$formation->id}}/edit" class="btn btn-outline-success btn-fw">Mettre a jour</a></td>
              <td>
                <form action="/formation/{{$formation->id}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-outline-danger btn-fw">Supprimer</button>
                </form>
              </td>
              
            </tr>
            @empty
            
            @endforelse ($formation as $formation)

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection