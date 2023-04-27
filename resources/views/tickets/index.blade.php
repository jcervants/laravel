@extends('master')
@section('title', 'Visualizar todos los tickets')
@section('content')

<div class="container col-md-6 col-md-offset-2 mt-5">
    <div class="card">
        <div class="card-header ">
            <h5 class="float-left">Tickets</h5>
                <div class="clearfix"></div>
        </div>
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="card-body mt-2">
        @if ($tickets->isEmpty())
        <p>No hay tickets.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->id}}</td>    
                            <td><a href="{{action('TicketsController@show', $ticket->slug)}}">{{$ticket->title}}</a></td>    
                            <td>{{$ticket->status ? 'Pendiente':'Respondido'}}</td>    
                        </tr>  
                    @endforeach  
                </tbody>
            </table>            
        @endif
        </div>
    </div>

</div>
@endsection