@extends('admin.index')
@section('content')
<div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card py-sm-5">
    <div class="card">
      <div class="card-body">
                  <a href="/module/create">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Create New Module</button>
                    </a>
                    <br><br>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Nome de module </th>
                          <th> Nome de coefficient </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($module as $module)
                            
                        <tr>
                          <td> 1 </td>
                          <td> {{$module->name}} </td>
                          <td> {{$module->coefficient}} </td>
                          
                          <td> <a href="/module/{{$module->id}}/edit" class="btn btn-outline-success btn-fw">Mettre a jour</a> 
                          </td>
                          <td> 
                            <form action="/module/{{$module->id}}" method="post">
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