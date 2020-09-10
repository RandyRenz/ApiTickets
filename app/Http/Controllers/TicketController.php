<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ticket as ResourcesTicket;
use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Ticket::all(); 

    }
    
    public function create()
    {
        return view('tickets.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        request()->validate([
            'title'=> 'required', 
            'content' =>'required',
            'severity' => 'required|integer',
         ]);

        $title=request('title');
        $content = request('content');
        $severity = request('severity');

        $ticket = new Ticket();
        $ticket->title= $title;
        $ticket->content = $content;
        $ticket->severity = $severity;

        $ticket->save();
        return back()->with('message','Ticket créer avec succès.');

    }
    /**
         * Display the specified resource.
         *
         * @param  \App\Ticket  $ticket
         * @return \Illuminate\Http\Response
         */
    public function show(Ticket $ticket)
    {
        return new ResourcesTicket($ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        if($ticket->update($request->all())) {
        return response()->json([
            'success' => 'Ticket modifié avec succès'
        ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return response()->json([
            'success' =>
            'Ticket supprimé avec succès'
        ]);
    }

    }