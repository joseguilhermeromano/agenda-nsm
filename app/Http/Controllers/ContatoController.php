<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;
use Mail;

class ContatoController extends Controller
{
    protected $contatos;

    public function __construct(){
        $this->contatos = new Contato();
    }
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

        $fullFileName = public_path('uploads')."\\".$fileName;

        $this->contatos->nome = $request->nome;
        $this->contatos->email = $request->email;
        $this->contatos->mensagem = $request->mensagem;
        $this->contatos->telefone = preg_replace('/\D/', '', $request->telefone);
        $this->contatos->arquivo = $fullFileName;
        $this->contatos->ip = $request->ip();
        $this->contatos->save();
   
        return $this->enviarEmail();
    }

    public function enviarEmail(){

        $detalhes["titulo"] = "Primeiro e-mail de teste com laravel";
        $detalhes["corpo"] = "teste.";

        \Mail::to('agenda.netshowsme@gmail.com')->send(new \App\Mail\SendMail($detalhes));

        return back()
            ->with('success','Todas as informações foram enviadas com sucesso!');
    }

}