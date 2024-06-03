@extends('admin.index')
@section('content')
<div class="content-wrapper ">
    <div class="col-12 grid-margin stretch-card py-sm-5">
    <div class="card ">
        <div class="card-body ">
            <a href="/forma_débouché/create">
                <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créeé Nouvelle Formation - Débouché</button>
            </a>

            <br><br>
        </p>
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                <th> # </th>
                <th> Nome Déboucher </th>
                <th> Nome formation </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formation_débouché as $formation_débouché)

              <tr>
                <td> 1 </td>
                <td> {{$formation_débouché->name}} </td>
                <td> {{$formation_débouché->nome_forma}}</td>
                <td> <a href="" class="btn btn-outline-success btn-fw">Mettre a jour</a>
                </td>
                <td>
                  <form action="/forma_débouché/{{$formation_débouché->id}}" method="post">
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
@endsection