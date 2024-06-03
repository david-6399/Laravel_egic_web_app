@extends('admin.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="text-center my-5">

                        <h3>La List Des Participantes : {{ $event->titre }}</h3>
                        @if ($event->event_end > date('Y,m,d'))
                            <p class="btn btn-success btn-fw">Toujours Valable</p>
                        @else
                            <p class="btn btn-danger btn-fw">Expired</p>
                        @endif

                    </div>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Identity De Participante </th>
                                    <th> Nome De Participante </th>
                                    <th> Numero de Téléphone </th>
                                    <th> Date Fin De L'evenement' </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($list_user_event as $list)
                                    <tr>
                                        <td> {{ 1 }} </td>
                                        <td> {{ $list->user_id }} </td>
                                        <td> {{ $list->name }} </td>
                                        <td> {{ $list->phone }} </td>
                                        <td> {{ $list->event_end }} </td>


                                        <td>
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
