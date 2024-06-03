@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card py-sm-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mettre a jour Une Prograam</h4>
                
                <form class="forms-sample" action="/program/{{$program->id}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titre">Nome de program</label>
                        <input type="text" class="form-control" name="titre" value="{{$program->titre}}">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2">Mettre a jour</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection