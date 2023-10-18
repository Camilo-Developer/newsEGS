<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\New\News;
use App\Models\State\State;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.news.index')->only('index');
        $this->middleware('can:admin.news.edit')->only('edit', 'update');
        $this->middleware('can:admin.news.show')->only('show');
        $this->middleware('can:admin.news.create')->only('create', 'store');
        $this->middleware('can:admin.news.destroy')->only('destroy');
    }

    public function index()
    {
        $news = News::paginate(1);
        $states = State::all();
        $categories = Category::all();
        $users = User::all();
        return view('admin.news.index',compact('news','states','categories','users'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'imagen' => 'required',
            'title' => 'required',
            'pre_description' => 'nullable',
            'description' => 'nullable',
            'sub_imagen' => 'nullable',
            'document' => 'nullable',
            'state_id' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        $news = $request->all();
        if ($request->hasFile('imagen')){
            $Imagen = $request->file('imagen');
            $rutaGuardarImagen = public_path('storage/news/img_principal/');
            $imagenImagen = date('YmdHis') . '.' . $Imagen->getClientOriginalExtension();
            $Imagen->move($rutaGuardarImagen, $imagenImagen);
            $news['imagen'] = 'news/img_principal/' . $imagenImagen;
        }

        if ($request->hasFile('sub_imagen')){
            $sub_imagen = $request->file('sub_imagen');
            $rutaGuardarsub_imagen = public_path('storage/news/sub_img/');
            $imagensub_imagen = date('YmdHis') . '.' . $sub_imagen->getClientOriginalExtension();
            $sub_imagen->move($rutaGuardarsub_imagen, $imagensub_imagen);
            $news['sub_imagen'] = 'news/sub_img/' . $imagensub_imagen;
        }

        if ($request->hasFile('document')){
            $document = $request->file('document');
            $rutaGuardardocument = public_path('storage/news/documents/');
            $imagendocument = date('YmdHis') . '.' . $document->getClientOriginalExtension();
            $document->move($rutaGuardardocument, $imagendocument);
            $news['document'] = 'news/documents/' . $imagendocument;
        }

        News::create($news);
        return redirect()->route('admin.news.index')->with('success','La nociticia se creo correctamente.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
