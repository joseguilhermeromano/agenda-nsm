<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;
use Mail;

class ContatoController extends Controller
{
    protected $contato;

    public function __construct(){
        $this->contato = new Contato();
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

        $this->contato->nome = $request->nome;
        $this->contato->email = $request->email;
        $this->contato->mensagem = $request->mensagem;
        $this->contato->telefone = preg_replace('/\D/', '', $request->telefone);
        $this->contato->arquivo = $fullFileName;
        $this->contato->ip = $request->ip();
        $this->contato->save();

        $this->contato->where('email', $this->contato->email)->get();
        $data_envio = date("d/m/Y", strtotime($this->contato->created_at));
   
        return $this->enviarEmail($data_envio);
    }

    public function enviarEmail($data_envio){

        $detalhes["titulo"] = "Novo Contato";

        $detalhes["corpo"] = "
        <h3>Nome: {$this->contato->nome} </h3>
        <br>
        <p>
        <b>E-mail:</b> {$this->contato->email} <br>
        <b>Mensagem: </b> {$this->contato->mensagem} <br>
        <b>Telefone: </b> {$this->formataTelefone($this->contato->telefone)} <br>
        <b>IP:</b> {$this->contato->ip} <br>
        <b>Data envio: </b> {$data_envio}
        </p>
        ";

        \Mail::to('agenda.netshowsme@gmail.com')->send(new \App\Mail\SendMail($detalhes));

        return back()
            ->with('success','Todas as informações foram enviadas com sucesso!');
    }

    protected function formataTelefone($telefone){
        $formatado = preg_replace('/[^0-9]/', '', $telefone);
        $matches = [];
        preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatado, $matches);
        if ($matches) {
            return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
        }

        return $telefone; 
    }

}