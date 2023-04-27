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
                <input type="text" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Título</label>    
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="titulo">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Content</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                                <span class="help-block">Feel free to ask us any question.</span>
                            </div>
                        </div>

                    <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection