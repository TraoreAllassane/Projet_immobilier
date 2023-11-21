<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiensRequest;
use App\Models\Biens;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Biens $biens)
    {
       $biens = Biens::all();
       return view('admin.index', ['biens' => $biens]);
    }

    public function create($id)
    {
        $bien = Biens::find($id);
        return view('admin.update',['bien' => $bien]);
    }

    public function store(BiensRequest $request)
    {
        $image = time() .'.'. $request->image->extension();
        $path = $request->image->storeAs(
          'bienImage',
           $image,
          'public'
        );


        $bien = new Biens();

        $bien->titre = $request->titre;
        $bien->description = $request->desc;
        $bien->adresse = $request->addresse;
        $bien->nb_chambre = $request->chambre;
        $bien->superficie = $request->superficie;
        $bien->prix = $request->prix;
        $bien->image = $path;
        $bien->save();

        return redirect()->route('admin.index');

    }

    public function show($id)
    {
      $bien = Biens::find($id);
      return view('admin.detail', ['bien' => $bien]);  
    }

    public function update($id, BiensRequest $request)
    {
        $bien = Biens::find($id);

        $bien->titre = $request->titre;
        $bien->description = $request->desc;
        $bien->adresse = $request->addresse;
        $bien->nb_chambre = $request->chambre;
        $bien->superficie = $request->superficie;
        $bien->prix = $request->prix;
        $bien->save();

        return redirect()->route('admin.index');
    }

    public function delete($id)
    {
      $bien = Biens::find($id);
      $bien->delete();
      return redirect()->route('admin.index');
    }
}
