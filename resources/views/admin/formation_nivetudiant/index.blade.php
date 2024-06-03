@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card ">
            <div class="card-body">
                <a href="/forma_nivetudiant/create">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Nouvelle Formation - Niv
                        Etudiant</button>
                </a>

                <br><br>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nome niveau </th>
                                <th> Nome formation </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($formation_niv_etud as $formation_niv_etud)

                            <tr>
                                <td> 1 </td>
                                <td> {{$formation_niv_etud->name}} </td>
                                <td> {{$formation_niv_etud->nome_forma}}</td>
                                <td> <a href="" class="btn btn-outline-success btn-fw">Mettre a jour</a>
                                </td>
                                <td>
                                    <form action="/forma_metier/{{$formation_niv_etud->id}}" method="post">
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