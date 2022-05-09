<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Http;
use BetaPeak\GoDaddy\GoDaddyFacade as GoDaddy;
use GoDaddyDomainsClient\Model\DomainAvailableResponse;


class CadastroController extends Controller
{

    private $extensionPrivate =  ["com","org","info","net","app"];

    public function create(){

        return view("Cadastros.cadastro");
    }


    public function procurarDominioGet (){

        $extensions = $this->extensionPrivate;

        return view("Cadastros.cadastrosite",compact("extensions"));
    }

    public function procurarDominio(Request $request){
        $request->validate([
            "domain"=>'required|alpha_num'
        ]);
        $domain = $request->domain;
        $extension = $request->extension;
        $verifydomain = $domain.".".$extension;
        $ACCOUNT_ID = "a0cee7675c79d4286f875924c1dad6c1";
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.cloudflare.com/client/v4/accounts/'.$ACCOUNT_ID.'/registrar/domains/'.$verifydomain,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'X-Auth-Email: derlis@renovaads.com',
            'X-Auth-Key: 540b50d4bcb09d1b46eff5cf51fcc2212dd7a',
            'Content-Type: application/json',
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $json = (json_decode($response,true));

        $value = $json["result"]["available"];
        $extensions = $this->extensionPrivate;
        return view ("Cadastros/cadastroalert",compact("value","verifydomain","extensions","json"));

    }

    /* public function procurarDominio(Request $request){

        $request->validate([
            "domain"=>'required|alpha_num'
        ]);
        $domain = $request->domain;
        $extension = $request->extension;
        $verifydomain = $domain.".".$extension;

        $API_KEY = "at_9of5K3J3vMv6WJErclgdpl6B3mYKS";
        $CREDIT = "DA";
        $END_POINT = "https://domain-availability.whoisxmlapi.com/api/v1?apiKey=".$API_KEY."&domainName=".$verifydomain."&credits=".$CREDIT;
        $json = file_get_contents($END_POINT);
        $response = json_decode($json, true);
        $avaible = $response["DomainInfo"]["domainAvailability"];

        if($avaible == "UNAVAILABLE"){
            $value = false;
        }else{
            $value= true;
        }
        $extensions = $this->extensionPrivate;
        return view ("Cadastros/cadastroalert",compact("value","verifydomain","extensions"));
    } */

    /* public function procurarDominio(Request $request){
        $request->validate([
            "domain"=>'required|alpha_num'
        ]);

        $domain = $request->domain;
        $extension = $request->extension;
        $verifydomain = $domain.".".$extension;
        $availability = GoDaddy::available($verifydomain);
        $value = $availability->getAvailable();
        //dd($value);
        return view ("Cadastros/cadastroalert",compact("value","verifydomain"));

    } */

    public function buysite($site){

       return view("Cadastros.cadastrobuysite",compact("site"));
    }

    public function store(Request $request){

         $request->validate([
            "nome"=>"required|min:3",
            "email"=>"required|email",
            "whatsapp"=>"required|min:6"
        ]);
        $extensions = ["com","org","info","net"];
        //$avaible = "Cadastre seu site";

        if(!empty($request->get("dominio"))){
            return view("Cadastros.cadastrodns");
        }else{
            return view("Cadastros.cadastrosite",compact("extensions"));
        }


    }
}
