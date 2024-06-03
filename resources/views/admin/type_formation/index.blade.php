@extends('admin.index')
@section('content')
<div class="content-wrapper">

  <div class="col-lg-12 grid-margin stretch-card py-sm-5">
    <div class="card">
      <div class="card-body">
        <a href="/type_forma/create">
          <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Nouvelle Type de formation</button>
        </a>
        <br><br>
        </p>
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                <th> # </th>
                <th> Nome de type </th>
                <th> Description </th>
                <th> Image </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($type_formation as $type_formation)

              <tr>
                <td> 1 </td>
                <td> {{$type_formation->name}} </td>
                <td> {{$type_formation->description}} </td>
                <td> {{$type_formation->image_path}} </td>
                <td> <a href="/type_forma/{{$type_formation->id}}/edit" class="btn btn-outline-success btn-fw">Mettre a jour</a>
                </td>
                <td>
                  <form action="/type_forma/{{$type_formation->id}}" method="post">
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