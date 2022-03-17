<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;
use App\Models\Styles;
use DateTime;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class StylesController extends Controller
{
    //
    public function colorPortal(Request $request)
    {
        $incomming = $request->all();
        $date = Carbon::now(); // instantiating carbo class for date
        $ruta = $request->ruta;
       
        
            $color = Styles::find(1); //saving color with id 
            $color->color = $request->navbarColor; //saving color that client chose on view
            $color->updated_at = $date; //saving update time
            $color->update();//updating
       
            $color = Styles::find(2); //saving color with id 
            $color->color = $request->bodyColor; //saving color that client chose on view
            $color->updated_at = $date; //saving update time
            $color->update();//updating
        
            $color = Styles::find(3); //saving color with id 
            $color->color = $request->footerColor; //saving color that client chose on view
            $color->updated_at = $date; //saving update time
            $color->update();//updating

        Alert::success('Colores Actualizados con exito!');//showing alert to user
        return back();//returning to same view
    }


    //show colors in admis dashboard
    public function showco()
    {
        //
        $data = Styles::all();//getting colors
        return view('dashboard.pages.styles_portal.styles' , ['data' => $data]);//sending colors to view
    }


    //show colores in customers page
    public function showcolorCustomer()
    {
        //
        $color = Styles::all();//getting colores
        return view('customer.template', compact('color'));//seding colores to customers view
    }
}
