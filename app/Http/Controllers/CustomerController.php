<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mikrotik\Connection;

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
    #        $customer->save();
            
             //Add user mk
        
            //Router API  conection
            $API =new Connection();
            $API->debug = true;
            $ipMK='45.179.197.61'; 
            $userMK= "hotspot";
            $passwordMK = "12345";

            if ($API->connect($ipMK, $userMK, $passwordMK)) { #Conection API
                #Add user in hotspot
                $ARRAY2 = $API->comm("/ip/hotspot/user/add", array(
                "name" => $incomming['email'],
                "password" => $incomming['email'],
              //  "profile" => $incoming['description'],
                "comment" => 'Hotspot tuscania',
                "server" => "hotspot1"));
            }
            alert()->success('Usuario creado','Usuario creado exitosamente');
           return back();
            //dd("Usuario agregado exitosamente");

            
           
        }catch (ClientException $e) {
            //Log::error('payload' . $payload . 'Codigo de error : ' . $response->getStatusCode());
           // Log::error('Error al ingresar usuario en la base de datos');
            return back();

        }

        
       
    }
}
