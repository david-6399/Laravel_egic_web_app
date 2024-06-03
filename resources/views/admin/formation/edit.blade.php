@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mettre a jour La Formation</h4>

                <form class="forms-sample" action="/formation/{{$formation->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome_forma">Nome Formation</label>
                        <input  type="text" class="form-control" name="nome_forma" value="{{$formation->nome_forma}}">
                    </div>
                    <div class="form-group">
                        <label for="duree_forma">La duree</label>
                        <input type="text" class="form-control" name="duree_forma" value="{{$formation->duree_forma}}">
                    </div>
                    <div class="form-group">
                        <label for="tarif_forma">Tarif</label>
                        <input type="text" class="form-control" name="tarif_forma" value="{{$formation->tarif_forma}}">
                    </div>
                    <div class="form-group">
                        <label for="cod_typeformation">Type formation</label>
                        <select class="form-control" name="cod_typeformation">
                            <option value="{{$formation->type_formation->id}}">{{$formation->type_formation->name}}</option>
                            @foreach ($type_formation as $type_formation)
                                
                            <option value="{{$type_formation->id}}">{{$type_formation->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cod_program">Program</label>
                        <select class="form-control" name="cod_program">
                            {{-- <option>{{$program->titre}}</option> --}}
                            @foreach ($program as $program)
                                
                            <option value="{{$program->id}}">{{$program->titre}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                            <span>select image</span>
                            <input type="file" name="image" class="hidden">

                        </label>

                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Mettre a jour</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection