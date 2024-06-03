@extends('admin.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card py-sm-5">
            <div class="card">
                <div class="card-body">
                    <a href="/débouché/create">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Débouché</button>
                    </a>
                    <br><br>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Nome Déboucher </th>
                                    <th> Image </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($débouché as $débouché)
                                    <tr>
                                        <td> 1 </td>
                                        <td> {{ $débouché->name }} </td>
                                        <td> </td>
                                        <td> <a href="/débouché/{{ $débouché->id }}/edit"
                                                class="btn btn-outline-success btn-fw">Mettre a jour</a>
                                        </td>
                                        <td>
                                            <form action="/débouché/{{ $débouché->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-fw">Supprimer</button>
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
