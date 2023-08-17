@extends('master')

@section('title','Crear un nuevo Ticket')

@section('content')

<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header">
            <h5 class="float-left">Crear un Ticket</h5>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <form method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Título</label>    
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <label for="content" class="col-lg-2 control-label">Contenido</label>
                            
                                <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                                <span class="help-block">Feel free to ask us any question.</span>
                            <br>
                         
                            <label for="title" class="col-lg-2 control-label">Solución</label>
                            <input type="text" class="form-control" id="solucion" name="solucion" placeholder="¿Es definitiva?">

                            <label for="title" class="col-lg-2 control-label">Precio</label>    
                            <input type="text" class="form-control" id="precio" name="precio" placeholder="precio">
                           
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection