@extends('admin.index')
@section('content')
<div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card py-sm-5">
    <div class="card">
      <div class="card-body">
                  <a href="/program/create">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Create New Program</button>
                    </a>
                    <br><br>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Nome de Program </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($program as $program)
                            
                        <tr>
                          <td> 1 </td>
                          <td> {{$program->titre}} </td>
                          
                          <td> <a href="/program/{{$program->id}}/edit" class="btn btn-outline-success btn-fw">Mettre a jour</a> </td>
                          <td> 
                            <form action="/program/{{$program->id}}" method="post">
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