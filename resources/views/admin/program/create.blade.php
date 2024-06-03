@extends('admin.index')
@section('content')
<div class="content-wrapper">

    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                
                <a href="/program" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher Tout Les Programs</button>
                </a>
                <h4 class="card-title " style="margin-top: 20px">Créer Une program</h4>

                <form class="forms-sample" action="{{route('program.store')}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Nome de program</label>
                        <input type="text" class="form-control" name="titre" placeholder="Titre">
                    </div>

                    
                    <div class="form-group">
                        <label class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i>
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