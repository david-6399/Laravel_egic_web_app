@extends('admin.index')
@section('content')
<div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card py-sm-5">
    <div class="card">
      <div class="card-body">
                  <a href="/support_cours/create">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Create Nouveau Support De Cours</button>
                    </a>
                    <br><br>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Nome </th>
                          <th> Contenu </th>
                          <th> La Date </th>
                          <th> Nome de module </th>
                          <th> Nome de professeur </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($support_cours as $support_cours)
                            
                        <tr>
                          <td> 1 </td>
                          <td> {{$support_cours->name}} </td>
                          <td> <a href="/contenus/{{$support_cours->contenu}}">{{$support_cours->name}}</a> </td>
                          <td> {{$support_cours->date}} </td>
                          <td> {{$support_cours->module->name}} </td>
                          <td> {{$support_cours->nome_prof}} </td>
                          
                          <td> <a href="/support_cours/{{$support_cours->id}}/edit" class="btn btn-outline-success btn-fw">Mettre a jour</a> </td>
                          <td> 
                            <form action="/support_cours/{{$support_cours->id}}" method="post">
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