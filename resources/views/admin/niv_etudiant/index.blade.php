@extends('admin.index')
@section('content')
<div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card py-sm-5">
    <div class="card">
      <div class="card-body">
                  <a href="/niv_etudiant/create">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Nouvelle niv etudiant</button>
                    </a>
                    <br><br>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Nome de Niveau d'etude </th>
                          <th> Image </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($niv_etudiant as $niv_etudiant)
                            
                        <tr>
                          <td> 1 </td>
                          <td> {{$niv_etudiant->name}} </td>
                          <td>  </td>
                          <td> <a href="/niv_etudiant/{{$niv_etudiant->id}}/edit" class="btn btn-outline-success btn-fw">Mettre a jour</a> </td>
                          <td> 
                            <form action="/niv_etudiant/{{$niv_etudiant->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-fw">Supprimer</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    
</div>
@endsection