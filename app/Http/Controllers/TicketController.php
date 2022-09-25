<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * All ticket
     * @author Lotrando [ miroslav.klika@seznam.cz ]
     *
     * @return collection $tickets
     */
    public function index()
    {
        $ticket = Ticket::all();
    }

    /**
     * Undocumented function
     * @author Lotrando [ miroslav.klika@seznam.cz ]
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $it_faults = DB::table('faults')->where('category', 'it')->get();
        $hospital_faults = DB::table('faults')->where('category', 'hospital')->get();
        $maintenance_faults = DB::table('faults')->where('category', 'maintenance')->get();
        $category = $request->type;
        $view = 'user.ticket.' . $category . '';
        return view($view, [
            'maintenance_faults' => $maintenance_faults,
            'it_faults' => $it_faults,
            'hospital_faults' => $hospital_faults
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
