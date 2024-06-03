@extends('admin.index')
@section('content')
<div class="content-wrapper " >
    <div class="col-12 grid-margin stretch-card " >
        <div class="card " >
            <div class="card-body ">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                @livewire('create.create_type_format')
                @livewire('create.create_program')
                <a href="/formation" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">List des Formations</button>
                </a>
                <h4 class="card-title" style="margin-top: 20px">Créer Formation</h4>

                <form class="forms-sample" action="{{route('formation.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nome_forma">Name</label>
                        <input type="text" class="form-control" name="nome_forma" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="duree_forma">La duree</label>
                        <input type="text" class="form-control" name="duree_forma" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="duree_forma">Tarif</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">DA</span>
                            </div>

                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                name="tarif_forma">
                            
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cod_typeformation">Type formation</label>
                        <select class="form-control" name="cod_typeformation">
                            <option value="">Selectioner Le Type De Formation</option>
                            @foreach ($type_formation as $type_formation)
                            <option value="{{$type_formation->id}}">{{$type_formation->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cod_program">Program</label>
                        <select class="form-control" name="cod_program">
                            <option value="">Selectioner Le Program</option>
                            @foreach ($program as $program)
                            <option value="{{$program->id}}">{{$program->titre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="btn btn-outline-danger btn-icon-text form-control">
                            <i class="mdi mdi-upload btn-icon-prepend "></i>
                            <span>select image</span>
                            <input type="file" name="image" class="hidden">
                            
                        </label>
                        
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Valider</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection