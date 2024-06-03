@extends('admin.index')
@section('content')
<div class="content-wrapper">

    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                
                <a href="/module" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher Tout Les Modules</button>
                </a>
                <h4 class="card-title " style="margin-top: 20px">Créer Un Module</h4>

                <form class="forms-sample" action="{{route('module.edit')}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name_m">Nome de module</label>
                        <input type="text" class="form-control" name="name_m" value="{{$module->name}}">
                    </div>
                    <div class="form-group">
                        <label for="coefficient">Coefficient De Module</label>
                        <input type="text" class="form-control" name="coefficient" value="{{$module->coefficient}}">
                    </div>

                    
                    <button type="submit" class="btn btn-primary mr-2">Mettre a jour</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection