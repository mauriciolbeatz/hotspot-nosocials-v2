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
        //dd($incomming);
        $date = Carbon::now();
        $dates = $date->subHours(6);
        $ruta = $request->ruta;
       
        
            $color = Styles::find(1);
       
            $color->name = "navbarColor";
            $color->color = $request->navbarColor;
            $color->updated_at = $dates;
            $color->save();
       
            $color = Styles::find(2);
         
            $color->name = "bodyColor";
            $color->color = $request->bodyColor;
            $color->updated_at = $dates;
            $color->save();
        
            $color = Styles::find(3);
            $color->name = "footerColor";
            $color->color = $request->footerColor;
            $color->updated_at = $dates;
            $color->save();
        //}
        //eliminamos el registro existente en la base de datos
       //$color->save();
        //finalmente guardamos en la base de datos
       
        //return back();
        Alert::success('Colores Actualizados con exito!');
        return back();
    }

    public function showco()
    {
        //
        $data = Styles::all();
        return view('dashboard.pages.styles_portal.styles' , ['data' => $data]);
    }


    public function showcolorCustomer()
    {
        //
        $color = Styles::all();
        return view('customer.template', compact('color'));
    }
}
