<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;    
use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use App\Comentario;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('tickets\create');
    }
    
    public function store(TicketFormRequest $request)
    {   
       $slug = uniqid();
       $ticket = new Ticket(array(
            'title' => $request->get('titulo'),
            'content' => $request->get('contenido'),
            'solucion' => $request->get('solucion'),
            'precio' => $request->get('precio'),
            'slug' => $slug
       ));

       $ticket->save();
       return redirect('/tickets')->with('status', 'Tu ticket ha sido creado! Su identificador es: '.$slug);

    }

    public function index()
    {
        $tickets = Ticket::all();
        //retornamos vista, metodo compact nos permite convertir el reesultado a un array
        return view('tickets.index', compact('tickets'));
    }

      public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        //Amazing power eloquent
        $comentarios = $ticket->comentarios()->get();
        return view('tickets.show', compact('ticket','comentarios'));
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $ticket = Ticket::whereSlug($slug)->first();
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($slug, TicketFormRequest $request)
    {   
      
        $ticket = Ticket::whereSlug($slug)->first();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');
        if($request->get('status') != null){
            $ticket->status = 0;
        }else{
            $ticket->status = 1;
        }
        $ticket->save();
        // return 'actualizado';
        return redirect(action('TicketsController@edit', $ticket->slug))->with('status','El ticket'.$slug.' ha sido actualizado.');
    }

    public function destroy($slug)
    {
        $ticket = Ticket::whereSlug($slug)->first();
        $ticket->delete();
        return redirect('/tickets')->with('status','El ticket '.$slug.' ha sido eliminado');
    }
}
