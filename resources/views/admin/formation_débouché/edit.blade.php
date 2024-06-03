@extends('admin.index')
@section('content')
<div class="content-wrapper">
    
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                <a href="/formation_metier" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher les formation par metier</button>
                </a>
                <a href="/formation/create" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Formation</button>
                </a>
                <a href="/metier/create" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Débouché</button>
                </a>
                <h4 class="card-title" style="margin-top: 20px">Créeé Formation par Débouché</h4>
                
                <form class="forms-sample" action="{{route('forma_débouché.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="cod_typeformation">Selectioner la formation</label>
                        <select class="form-control" name="formation_id">
                            <option>{{$formation->nome_forma}}</option>
                            <option> ----- </option>
                            @foreach ($formation as $formation)
                            <option value="{{$formation->id}}">{{$formation->nome_forma}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cod_typeformation">Selectioner Un Débouché</label>
                        <select class="form-control" name="débouché_id">
                            <option>Selectioner débouché</option>
                            @foreach ($débouché as $débouché)
                            <option value="{{$débouché->id}}">{{$débouché->name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-primary mr-2">Valider</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection