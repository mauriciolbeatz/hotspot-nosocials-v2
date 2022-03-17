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
    //image database save & storage
    public function uploadImg(Request $request){
    
        $request->validate([
            'file' => 'required|mimes:jpeg,bmp,png,webp', // validate image file type: jpeg,bmp,png,webp
            'description' => 'required|max:1000',       // validate description required
            
        ]);

        if ($request->hasFile('file')) { // validate if file field has a file
            $id = $request->id;          // saving id from view in a variable
            $list = Image::firstWhere('id', $id);   // getting database list where id = $id

        if(!$list == null){ //if $list isnt null delete the file from storage
            \Illuminate\Support\Facades\File::delete(public_path('storage/slider/' . $list->file_path));//if $list isnt null delete the file from storage
        }

        $file = $request->file; //saving file from view in a variable
        $file->store('public/slider'); // saving file in public/storage
        $date = Carbon::now(); // instantiating carbo class for date
        $dates = $date->subHours(6); // date - 6 hours
            $image = Image::find($id);  // instantiating image from where id = $id for update
            $image->text = $request->description; //saving description 
            $image->file_path = $file->hashName();// saving file & encrypt name
            $image->updated_at = $dates; //saving update date
            $image->save(); // saving all parameters on database
            Alert::success('Imagen Actualizada con exito'); // sending alert to view    
    }
    return back();// returning back to same view

}



// showing image table on views
public function showimg()
{
    //
    $data = Image::all();//getting database table
    return view('dashboard.pages.styles_portal.images' , ['data' => $data]); //sending it to view
}

public function showimg2()
{
    //
    $data = Image::all();//getting database table
    return view('dashboard.pages.styles_portal.images2' , ['data' => $data]);//sending it to view
}


public function showimg3()
{
    //
    $data = Image::all();//getting database table
    return view('dashboard.pages.styles_portal.images3' , ['data' => $data]);//sending it to view
}

public function showimg4()
{
    //
    $data = Image::all();//getting database table
    return view('dashboard.pages.styles_portal.images4' , ['data' => $data]);//sending it to view
}


//sending images and colors from database to customers view
public function showimgCustomer()
{
    //
    $logo = Logos::all();//getting database table
    $image = Image::all();//getting database table
    $color = Styles::all();//getting database table
  //
    return view('customer.template')->with('image',$image)->with('color',$color)->with('logo',$logo);//sending it to view
}

}
