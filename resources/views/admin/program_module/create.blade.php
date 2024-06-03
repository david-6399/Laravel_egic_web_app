@extends('admin.index')
@section('content')
<div class="content-wrapper">
    
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                <a href="/program_module" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Afficher les Program - Module</button>
                </a>
                <a href="/program/create" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Program</button>
                </a>
                <a href="/Module/create" style="margin-right: 20px">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw ">Créer Module</button>
                </a>
                <h4 class="card-title" style="margin-top: 20px">Créer Program - Module </h4>
                
                <form class="forms-sample" action="{{route('program_module.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="program_id">Selectioner Le program</label>
                        <select class="form-control" name="program_id">
                            <option>Selectioner Le program</option>
                            @foreach ($program as $program)
                            <option value="{{$program->id}}">{{$program->titre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="module_id">Selectioner Le Niv D'etudiant</label>
                        <select class="form-control" name="module_id">
                            <option>Selectioner Un Module</option>
                            @foreach ($module as $module)
                            <option value="{{$module->id}}">{{$module->name}}</option>
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