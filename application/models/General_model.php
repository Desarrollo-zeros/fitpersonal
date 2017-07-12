<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model
{
    public function __construct()
    {
    parent::__construct();
        if( ! ini_get('date.timezone') ) { date_default_timezone_set('GMT'); }
    }

    public function timegettimestamp()
    {
        $actual = new DateTime(); $now = $actual->getTimestamp();
        return $now;
    }

    public function encryptBattlenet($email, $password)
    {
        $sha_pass_hash_bnet = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email)).":".strtoupper($password))))))));

        return $sha_pass_hash_bnet;
    }
    public function encryptAccount($username, $password)
    {
        if(!is_string($username)) { $username = ""; }
        if(!is_string($password)) { $password = ""; }
        $sha_pass_hash = sha1(strtoupper($username).':'.strtoupper($password));
        
        return strtoupper($sha_pass_hash);
    }


    public function generear_codigigo(){
        $longitud = 6;
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }


    public function email(){
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'wowzeros2@gmail.com',
            'smtp_pass' => '1997102007wae',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );
        return  $configGmail;
    }


    public function enviar_recuperacion($email,$key){
        $this->email->initialize($this->email());
        $this->email->from('wowzeros2@gmail.com');
        $this->email->to($email);
        $this->email->subject('Bienvenid@ a Fitpersonal');
        $this->email->message('<h2>su codigo de recuperacion es: '.$key.'</h2>');
        $this->email->send();
    }


    public function enviar_email($string,$att,$asunto){
        $config['charset'] = 'iso-8859-1';
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $enviar = "C:/xampp/htdocs/Fitpersonal/uploads/Confirmacion/".$att;
        }
        else{
            $enviar = "var/www/html/fitpersonal/uploads/Confirmacion/".$att;
        }
        $img = "<a href='".base_url()."'><img src='http://fitpersonal.co/FITPERSONAL.png' style='width: 300px;'></a>";
        $this->email->initialize($this->email());
        $this->email->from('wowzeros2@gmail.com');
        $this->email->to("carloscastilla31@gmail.com");
        $this->email->cc("warlock1130@hotmail.com");
        $this->email->bcc('wowzeros2@gmail.com');
        $this->email->subject('Fitpersonal.co '.$asunto.' ');
        $this->email->message($img.$string);
        $this->email->attach($enviar);
        $this->email->send();
        return json_encode($this->email->print_debugger());
    }

    public function enviar_msm($numero,$msm)
    {
        $codapi = "7z45z7o97bi";
        $remitente = "Fitpersonal.co";
        $mensaje = $msm;
        $destinatario = $numero;
        $idgrupo = "1";
        $fecha_envio = "";
        $idlote = "";
        $url = "http://api.tuloenvias.com/sms/";
        $url = str_replace(" ", '%20', $url);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "codapi=" . $codapi . "&remitente=" . $remitente . "&mensaje=" . $mensaje . "&destinatario=" . $destinatario .
            "&idgrupo=" . $idgrupo . "&fecha_envio=" . $fecha_envio . "&idlote=" . $idlote . "");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}
