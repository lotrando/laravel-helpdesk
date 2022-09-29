<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

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
        if (Auth::user()) {
            return view('user.tickets.index', [
                'tickets' => Ticket::where('personal_number', Auth::user()->personal_number)->sortable(['created_at' => 'desc'])->paginate(13),
            ]);
        } else {
            Alert::toast(__('Access denied'), 'error');
            return redirect(url('/'));
        }
    }

    /**
     * Create helpdesk ticket form by type
     * @author Lotrando [ miroslav.klika@seznam.cz ]
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jobs = DB::table('jobs')->get();
        $programs = DB::table('programs')->get();
        $types = DB::table('types')->get();
        $departments = DB::table('departments')->get();
        $type = $request->type;
        if ($type == 'employee' and !Auth::user()) {
            Alert::toast(__('Access denied '), 'error');
            return redirect(route('user.tickets.index'));
        } else {
            $view = 'user.ticket.' . $type . '';
            return view($view, [
                'departments' => $departments,
                'jobs' => $jobs,
                'programs' => $programs,
                'types' => $types
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->category == 'it') {
            $validated = $request->validate([
                'personal_number' => ['required'],
                'last_name' => ['required'],
                'first_name' => ['required'],
                'email' => ['required'],
                'phone' => ['required'],
                'id_pc' => ['required'],
                'title' => ['required'],
                'issue' => ['required'],
                'category' => ['required'],
                'status' => ['required']
            ]);

            Ticket::create($validated);
            Alert::toast(__('Created'), 'success');
            return redirect(route('user.tickets.create', ['type' => 'it']));
        } elseif ($request->category == 'maintenance') {
            $validated = $request->validate([
                "personal_number" => ['required'],
                "last_name" => ['required'],
                "first_name" => ['required'],
                "email" => ['required'],
                "phone" => ['required'],
                "department_id" => ['required'],
                "title" => ['required'],
                "issue" => ['required'],
                "category" => ['required'],
                'status' => ['required']
            ]);

            Ticket::create($validated);
            Alert::toast(__('Created'), 'success');
            return redirect(route('user.tickets.create', ['type' => 'maintenance']));
        } elseif ($request->category == 'medical') {
            $validated = $request->validate([
                "personal_number" => ['required'],
                "last_name" => ['required'],
                "first_name" => ['required'],
                "email" => ['required'],
                "phone" => ['required'],
                "item_number" => ['required'],
                "title" => ['required'],
                "issue" => ['required'],
                "category" => ['required'],
                "status" => ['required'],
            ]);

            Ticket::create($validated);
            Alert::toast(__('Created'), 'success');
            return redirect(route('user.tickets.create', ['type' => 'medical']));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $ticket->load('department');
        if (Auth::user()) {
            return view('user.tickets.show', compact('ticket'));
        } else {
            Alert::toast(__('Access denied'), 'error');
            return redirect(route('user.tickets.index'));
        }
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
