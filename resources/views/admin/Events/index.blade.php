@extends('admin.index')
@section('content')
    <div class="content-wrapper">

        <div class="col-lg-12 grid-margin stretch-card py-sm-5">
            <div class="card">
                <div class="card-body">
                    <a href="/event/create">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Nouvelle Evenement</button>
                    </a>
                    <br>
                    <br>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Nome de L'evenement </th>
                                    <th> N/B</th>
                                    <th> Date Début </th>
                                    <th> Date Fin </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($event as $event)
                                    <tr>
                                        <td> {{ $i = $i + 1 }} </td>

                                        <td><a href="{{url('/event_list',$event->id)}}">
                                                {{ $event->titre }} </a></td>
                                        <td>{{$event->abonnement}}</td>
                                        <td> {{ \Carbon\Carbon::parse($event->event_start)->format('D d F Y | H:i') }} </td>
                                        <td> {{ \carbon\carbon::parse($event->event_end)->format('D d F Y | H:i') }}</td>
                                        <td> <a href="/event/{{ $event->id }}/edit"
                                                class="btn btn-outline-success btn-fw">Mettre a jour</a></td>
                                        <td>
                                            <form action="/event/{{ $event->id }}" method="post">
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
    @endsection
