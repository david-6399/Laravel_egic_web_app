@extends('admin.index')
@section('content')
<div class="content-wrapper">

    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                
                <a href="/support_cours" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher Tout Les Support De Cours</button>
                </a>
                @livewire('create.create_module')
                <h4 class="card-title " style="margin-top: 20px">Créer Une Support De Cours</h4>

                <form class="forms-sample" action="{{route('support_cours.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome de Support de Cours</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                         <label class="btn btn-outline-success btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                            <span>Selectioner Le Document</span>
                            <input type="file" name="contenu" class="hidden">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="date">La date</label>
                        <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nome_prof">La nome De Professeur</label>
                        <input type="text" class="form-control" name="nome_prof" >
                    </div>
                    <div class="form-group">
                        <label for="cod_module">Selectioner Le Module</label>
                        <select class="form-control" name="cod_module">
                            <option>Selectioner Le Module</option>
                            @foreach ($module as $module)
                            <option value="{{$module->id}}">{{$module->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    {{-- <div class="form-group">
                        <label class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                            <span>select Le Document</span>
                            <input type="file" name="cotenu" class="hidden">

                        </label>

                    </div> --}}

                    <button type="submit" class="btn btn-primary mr-2">Valider</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection