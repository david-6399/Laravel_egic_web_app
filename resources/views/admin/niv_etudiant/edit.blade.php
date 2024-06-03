@extends('admin.index')
@section('content')
<div class="content-wrapper">
    
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mettre a jour Le Nive d'étudiant</h4>
                
                <form class="forms-sample" action="/niv_etudiant/{{$niv_etudiant->id}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titre">Le nome de niveau</label>
                        <input type="text" class="form-control" name="name" value="{{$niv_etudiant->name}}">
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