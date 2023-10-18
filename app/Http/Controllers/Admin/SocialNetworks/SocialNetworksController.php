<?php

namespace App\Http\Controllers\Admin\SocialNetworks;

use App\Http\Controllers\Controller;
use App\Models\SocialNetwork\SocialNetwork;
use App\Models\State\State;
use App\Models\User;
use Illuminate\Http\Request;

class SocialNetworksController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.socialnetworks.index')->only('index');
        $this->middleware('can:admin.socialnetworks.edit')->only('edit', 'update');
        $this->middleware('can:admin.socialnetworks.create')->only('create', 'store');
        $this->middleware('can:admin.socialnetworks.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $socialnetworks = SocialNetwork::query()
            ->where('name', 'LIKE', "%$search%")
            ->paginate(5);
        $states = State::all();
        $users = User::all();
        return view('admin.socialnetworks.index',compact('socialnetworks','search', 'states', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'url' => 'required',
            'state_id' => 'required',
            'user_id' => 'required',
        ]);
        $socialnetworks = $request->all();
        SocialNetwork::create($socialnetworks);
        return redirect()->route('admin.socialnetworks.index')->with('success', 'La red social se creo correctamente.');
    }


    public function edit(SocialNetwork $socialnetwork)
    {
        return view('admin.socialnetworks.index',compact('socialnetwork'));
    }

    public function update(Request $request, SocialNetwork $socialnetwork)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'url' => 'required',
            'state_id' => 'required',
            'user_id' => 'required',
        ]);
        $data = $request->all();
        $socialnetwork->update($data);
        return redirect()->route('admin.socialnetworks.index')->with('edit', 'La red social se edito correctamente.');

    }

    public function destroy(SocialNetwork $socialnetwork)
    {
        $socialnetwork->delete();
        return redirect()->route('admin.socialnetworks.index')->with('delete', 'La red social se elimino correctamente.');
    }
}
