<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    //
    public function addCustomer(Request $request)
    {
        //alert()->success('SuccessAlert','Usuario agregado correctamente');
        $incomming = $request->all();
       //dd($incomming = $request->all());
        try {
            //Create customer in database
            $customer = new Customer;
            $customer->name = $incomming['name'];
            $customer->phone = $incomming['phone'];
            $customer->email = $incomming['email'];
            $customer->save();
            alert()->success('Usuario creado','Usuario creado exitosamente');
           return back();
            //dd("Usuario agregado exitosamente");
           
        }catch (ClientException $e) {
            //Log::error('payload' . $payload . 'Codigo de error : ' . $response->getStatusCode());
           // Log::error('Error al ingresar usuario en la base de datos');
            return back();

        }

        
        //Add user mk
        
            //Router API  conection
           /* $API =new Connection();
            $API->debug = true;
            $ipMK='45.179.197.61'; 
            $userMK= "developerapi";
            $passwordMK = "123456789";

            if ($API->connect($ipMK, $userMK, $passwordMK)) { #Conection API
                #Add user in hotspot
                $ARRAY2 = $API->comm("/ip/hotspot/user/add", array(
                "name" => $incoming['user'],
                "password" => $incoming['password'],
                "profile" => $incoming['description'],
                "comment" => $incoming['description'],
                "server" => "hotspot1"));
            }*/
    }
}
