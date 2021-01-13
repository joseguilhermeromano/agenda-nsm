<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ContatoController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function form(){
        return view('contato');
    }

    public function salvarPost(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:100',
            'email' => 'required|email|unique:contatos,email|max:100',
            'mensagem' => 'required|min:3|max:255',

            'telefone' => array(      'required'
                                    , 'regex:/(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/u'),
            
            'arquivo' => 'required|mimes:pdf,doc,docx,odt,txt|max:500000',
        ]);
  
        $fileName = time().'.'.$request->arquivo->extension();  
   
        $request->arquivo->move(public_path('uploads'), $fileName);

        $fullFileName = public_path('uploads').$fileName;
   
        return back()
            ->with('success','Todas as informações foram enviadas com sucesso!');
    }

}