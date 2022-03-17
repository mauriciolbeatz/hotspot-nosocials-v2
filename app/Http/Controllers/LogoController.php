<?php

namespace App\Http\Controllers;

use App\Models\Logos;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class LogoController extends Controller
{
    

    public function store(Request $request)
    {
        //we look for the row where it contains logo 
        $list = Logos::firstWhere('name', 'logo');

        $request->validate([
            'logo' => 'required|mimes:jpeg,bmp,png,webp' // we validate the allowed image types 
        ]);

        if ($request->hasFile('logo')) {

            $file = $request->logo; //get file name
            $file->store('public/logo'); //we save the img in the path

            $date = Carbon::now();
            $datetime = $date->subHours(6); //change the time
            
            //This validation is useful if the image does not exist in the database, it will be saved, otherwise the image will be replaced. 
            if (!$list == null) {
                \Illuminate\Support\Facades\File::delete(public_path('storage/logo/' . $list->file_path)); //delete specific image in storage 
                $logo = Logos::find(1); //In row 1 will be updated 
                $logo->updated_at = $datetime;
                $logo->file_path = $file->hashName();//image name 
                Alert::success('Éxito', 'Logo actualizado');
            } else {
                $logo = new Logos();
                $logo->name = 'logo';
                $logo->created_at = $datetime;
                $logo->file_path = $file->hashName();//image name 
                Alert::success('Éxito', 'Logo registrado');
            }
            $logo->save();
            return redirect()->route('logo');
        }
    }

    //show logo image on dashboard  
    public function index()
    {
        $logo = Logos::all();
        return view('dashboard.pages.login.show', ['logo' => $logo]);
    }

}
