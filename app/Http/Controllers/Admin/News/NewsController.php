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
        $news = News::paginate(5);
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
            'type_file' => 'nullable',
            'direction_file' => 'nullable',
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
        return redirect()->route('admin.news.index')->with('success','La noticia se creo correctamente.');
    }

    public function show(News $news)
    {
        return view('admin.news.show',compact('news'));
    }

    public function edit(News $news)
    {
        $states = State::all();
        $categories = Category::all();
        $users = User::all();
        return view('admin.news.edit',compact('news','states','categories','users'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'imagen' => 'nullable',
            'title' => 'required',
            'pre_description' => 'nullable',
            'description' => 'nullable',
            'type_file' => 'nullable',
            'direction_file' => 'nullable',
            'sub_imagen' => 'nullable',
            'document' => 'nullable',
            'state_id' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);
        $data = $request->all();

        if ($request->hasFile('imagen')){
            $Imagen = $request->file('imagen');
            $rutaGuardarImagen = public_path('storage/news/img_principal/');
            $imagenImagen = date('YmdHis') . '.' . $Imagen->getClientOriginalExtension();
            $Imagen->move($rutaGuardarImagen, $imagenImagen);
            $data['imagen'] = 'news/img_principal/' . $imagenImagen;
            if ($news->imagen) {
                $imagenAnterior = public_path('storage/' . $news->imagen);
                if (file_exists($imagenAnterior)) {
                    unlink($imagenAnterior);
                }
            }
        } else {
            unset($data['imagen']);
        }

        if ($request->hasFile('sub_imagen')){
            $sub_imagen = $request->file('sub_imagen');
            $rutaGuardarsub_imagen = public_path('storage/news/sub_img/');
            $imagensub_imagen = date('YmdHis') . '.' . $sub_imagen->getClientOriginalExtension();
            $sub_imagen->move($rutaGuardarsub_imagen, $imagensub_imagen);
            $data['sub_imagen'] = 'news/sub_img/' . $imagensub_imagen;

            if ($news->sub_imagen) {
                $imagenAnterior2 = public_path('storage/' . $news->sub_imagen);
                if (file_exists($imagenAnterior2)) {
                    unlink($imagenAnterior2);
                }
            }
        } else {
            unset($data['sub_imagen']);
        }

        if ($request->hasFile('document')){
            $document = $request->file('document');
            $rutaGuardardocument = public_path('storage/news/documents/');
            $imagendocument = date('YmdHis') . '.' . $document->getClientOriginalExtension();
            $document->move($rutaGuardardocument, $imagendocument);
            $data['document'] = 'news/documents/' . $imagendocument;

            if ($news->document) {
                $imagenAnterior3 = public_path('storage/' . $news->document);
                if (file_exists($imagenAnterior3)) {
                    unlink($imagenAnterior3);
                }
            }
        } else {
            unset($data['document']);
        }

        //dd($data);
        $news->update($data);
        return redirect()->route('admin.news.index')->with('info','La noticia se edito correctamente.');
    }

    public function destroy(News $new)
    {
        $new->delete();
        return redirect()->route('admin.news.index')->with('success','La noticia se elimino correctamente.');
    }
}
