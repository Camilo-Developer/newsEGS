<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State\State;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

use Spatie\Permission\Models\Role;
class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
        $this->middleware('can:admin.users.show')->only('show');
        $this->middleware('can:admin.users.create')->only('create', 'store');
        $this->middleware('can:admin.users.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::query()
            ->where('name', 'LIKE', "%$search%")
            ->orWhere('lastname', 'LIKE', "%$search%")
            ->orWhere('email', 'LIKE', "%$search%")
            ->paginate(5);
        $states = State::all();
        $roles = Role::all();

        return view('admin.users.index', compact('users', 'search', 'states', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required',
            'gender' => 'nullable',
            'document_number' => 'nullable',
            'document_type' => 'nullable',
            'avatar' => 'nullable',
            'state_id' => 'required',
            'roles' => ['required', 'array', 'min:1'],
        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $rutaGuardarAvatar = public_path('storage/users');
            $imagenAvatar = date('YmdHis') . '.' . $avatar->getClientOriginalExtension();
            $avatar->move($rutaGuardarAvatar, $imagenAvatar);
            $data['avatar'] = 'users/' . $imagenAvatar;
        }

        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index')->with('success', 'El Usuario se ha creado correctamente.');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(User $user)
    {
        $states = State::all();
        $roles = Role::all();
        $roles_user = [];
        foreach ($user->roles as $role_user){
            array_push($roles_user, $role_user->id);
        }
        return view('admin.users.index', compact('user','states', 'roles','roles_user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'nullable',
            'email' => ['required', 'email'], // Verifica unicidad del correo electrónico en la tabla 'users'
            'state_id' => 'required',
            'roles' => ['required', 'array', 'min:1'],
            'avatar' => 'nullable'
        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $rutaGuardarAvatar = public_path('storage/users');
            $imagenAvatar = date('YmdHis') . '.' . $avatar->getClientOriginalExtension();
            $avatar->move($rutaGuardarAvatar, $imagenAvatar);
            $data['avatar'] = 'users/' . $imagenAvatar;

            if ($user->avatar){
                $imagenAnterior = public_path('storage/' . $user->avatar);
                if (file_exists($imagenAnterior)) {
                    unlink($imagenAnterior);
                }
            }
        }else {
            unset($data['avatar']);
        }

        // Verificar si se proporcionó una nueva contraseña
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            // Eliminar la clave "password" del array si no se proporcionó una nueva contraseña
            unset($data['password']);
        }

        $user->update($data);
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index')->with('edit', 'El Usuario se ha editado correctamente.');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('delete', 'El Usuario se ha eliminado correctamente.');
    }
}
