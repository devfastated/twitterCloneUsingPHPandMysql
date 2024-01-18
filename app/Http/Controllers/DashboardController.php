<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users = [
            [
                "name"=> "Romer",
                "age"=> "21",
            ],
            [
                "name"=> "Bejena",
                "age"=> "20",
                ]
            ];


        return view(
            "dashboard",
            [
                'users'=> $users
            ]
        );
       
    }

}
