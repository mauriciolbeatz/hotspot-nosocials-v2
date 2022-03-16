<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Styles;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Logos;
use App\Mikrotik\Connection;

class ImagenController extends Controller
{
    //
    public function uploadImg(Request $request){
    
        $request->validate([
            'file' => 'required|mimes:jpeg,bmp,png,webp', // validamos los tipos de imagen permitidos
            'description' => 'required|max:1000',
            
        ]);

        if ($request->hasFile('file')) {
            $id = $request->id;
            $list = Image::firstWhere('id', $id);  
        #    dd('storage/slider1/' . $list->file_path);
        if(!$list == null){
            \Illuminate\Support\Facades\File::delete(public_path('storage/slider/' . $list->file_path));
        }

        

        
        $file = $request->file;
        $file->store('public/slider');
        $date = Carbon::now();
        $dates = $date->subHours(6);
        #dd($file);
            $image = Image::find($id);
        #$color->name = $request->name;


        
            
            $image->text = $request->description;
            
            $image->file_path = $file->hashName();
            $image->updated_at = $dates;
            $image->save();
            Alert::success('Imagen Actualizada con exito');
        
    }

    

    return back();

}




public function showimg()
{
    //
    $data = Image::all();
    return view('dashboard.pages.styles_portal.images' , ['data' => $data]);
}

public function showimg2()
{
    //
    $data = Image::all();
    return view('dashboard.pages.styles_portal.images2' , ['data' => $data]);
}


public function showimg3()
{
    //
    $data = Image::all();
    return view('dashboard.pages.styles_portal.images3' , ['data' => $data]);
}

public function showimg4()
{
    //
    $data = Image::all();
    return view('dashboard.pages.styles_portal.images4' , ['data' => $data]);
}

public function showimgCustomer()
{
    //
    $logo = Logos::all();
    $image = Image::all();
    $color = Styles::all();
  //
    return view('customer.template')->with('image',$image)->with('color',$color)->with('logo',$logo);
}

}
