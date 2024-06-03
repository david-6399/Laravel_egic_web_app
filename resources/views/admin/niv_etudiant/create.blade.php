@extends('admin.index')
@section('content')
<div class="content-wrapper">
    
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                <a href="/niv_etudiant" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher Les Niveaux d'etudiant</button>
                </a>
                <h4 class="card-title" style="margin-top: 20px">Créer Niv Etudiant</h4>
                
                <form class="forms-sample" action="{{route('niv_etudiant.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="titre">Le nome de niveau</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    
                    <div class="form-group">
                        <label class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                            <span>Selectioner Une image</span>
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