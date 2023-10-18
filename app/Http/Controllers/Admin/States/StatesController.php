<?php

namespace App\Http\Controllers\Admin\States;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State\State;


class StatesController extends Controller
{

    public function __construct(){
        $this->middleware('can:admin.states.index')->only('index');
        $this->middleware('can:admin.states.edit')->only('edit', 'update');
        $this->middleware('can:admin.states.create')->only('create', 'store');
        $this->middleware('can:admin.states.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $states = State::query()
            ->where('name', 'LIKE', "%$search%")
            ->paginate(5);
        return view('admin.states.index',compact('states','search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type_state' => 'required',
        ]);
        $states = $request->all();
        State::create($states);
        return redirect()->route('admin.states.index')->with('success', 'El estado se creo correctamente.');
    }


    public function edit(State $state)
    {
        return view('admin.states.index',compact('state'));

    }

    public function update(Request $request, State $state)
    {
        $request->validate([
            'name' => 'required',
            'type_state' => 'required',
        ]);
        $data = $request->all();
        $state->update($data);
        return redirect()->route('admin.states.index')->with('edit', 'El estado edito correctamente.');
    }
    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('admin.states.index')->with('delete', 'El estado elimino correctamente.');
    }
}
