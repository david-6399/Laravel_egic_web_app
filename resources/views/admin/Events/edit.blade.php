@extends('admin.index')
@section('content')
<div class="testtest">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
               
                <h4 class="card-title" style="margin-top: 20px">Créer Nouvelle Evenement</h4>

                <form class="forms-sample" action="/event/{{$event->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome_forma">Titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="Titre" value="{{$event->titre}}">
                        @error('titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="duree_forma">Description</label>
                        <textarea type="text" class="form-control" name="description" id="" cols="30" rows="10" >{{$event->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="event_start">Date Debut</label>
                        <input type="datetime-local" class="form-control" name="event_start" id="event_start" value="{{$event->event_start}}">
                        
                        
                    </div>
                    <div class="form-group">
                        
                        <label for="event_end">Date Fin</label>
                        <input type="datetime-local" class="form-control" name="event_end" id="event_end" value="{{$event->event_end}}">
                        
                    </div>
                    <div class="form-group">
                        <label class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                            <span>select image</span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Maitre Ajour</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection