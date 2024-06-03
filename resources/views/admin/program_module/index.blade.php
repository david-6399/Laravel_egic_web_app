@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card ">
            <div class="card-body">
                <a href="/program_module/create">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Nouvelle Program - Module</button>
                </a>

                <br><br>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Program </th>
                                <th> Module </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($program_module as $program_module)

                            <tr>
                                <td> 1 </td>
                                <td> {{$program_module->titre}} </td>
                                <td> {{$program_module->name}}</td>
                                <td> <a href="" class="btn btn-outline-success btn-fw">Mettre a jour</a>
                                </td>
                                <td>
                                    <form action="/program_module/{{$program_module->id}}" method="post">
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