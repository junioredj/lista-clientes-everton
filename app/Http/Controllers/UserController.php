<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {


         $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:191',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with('msg', "Informe um nome válido!");;
        }

        $user = new User();

        $user->name = $request->name;
        $user->save();


        return to_route('lista-cadastro');


    }

    public function showLista()
    {
        return view('lista', ['users' => $this->getAllUsers()]);
    }

    public function getAllUsers()
    {

        return User::orderBy('created_at')->get();

    }
}
