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
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug
       ));
       
       $ticket->save();
       return redirect('/contacto')->with('status', 'Your ticket has been created! Its unique id is: '.$slug);

    }

    public function index()
    {
        $tickets = Ticket::all();
        //retornamos vista, metodo compact nos permite convertir el reesultado a un array
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->first();
        $comentarios=>
        return view('tickets.show', compact('ticket'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $ticket = Ticket::whereSlug($slug)->first();
        $ticket->delete();
        return redirect('/tickets')->with('status','El ticket '.$slug.' ha sido eliminado');
    }
}
