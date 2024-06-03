@extends('admin.index')
@section('content')
<div class="content-wrapper">
    
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <a href="/formation_metier" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher les formation par metier</button>
                </a>
                <a href="/formation/create" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Formation</button>
                </a>
                <a href="/niv_etudiant/create" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Niv Etudiant</button>
                </a>
                <h4 class="card-title" style="margin-top: 20px">Créer Niv d'etudiant</h4>
                
                <form class="forms-sample" action="{{route('forma_nivetudiant.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="formation_id">Selectioner la formation</label>
                        <select class="form-control" name="formation_id">
                            <option>Selectioner La formation</option>
                            @foreach ($formation as $formation)
                            <option value="{{$formation->id}}">{{$formation->nome_forma}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="niv_etudiant_id">Selectioner Le Niv D'etudiant</label>
                        <select class="form-control" name="niv_etudiant_id">
                            <option>Selectioner Niv D'etudiant</option>
                            @foreach ($niv_etudiant as $niv_etudiant)
                            <option value="{{$niv_etudiant->id}}">{{$niv_etudiant->name}}</option>
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