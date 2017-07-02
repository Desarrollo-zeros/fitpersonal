<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('General_model', "General");
        $this->load->model('account', "acc");
    }

    public function getRealIP()
    {
        if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            if ($pos = strpos($_SERVER["HTTP_X_FORWARDED_FOR"], " ")) {
                echo "IP local: " . substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, $pos) . " - IP Pública: " . substr($_SERVER["HTTP_X_FORWARDED_FOR"], $pos + 1);
                $hostlocal = substr($_SERVER["HTTP_X_FORWARDED_FOR"], $pos + 1);
            } else {
                echo "IP Pública: " . $_SERVER["HTTP_X_FORWARDED_FOR"];
                $hostlocal = $_SERVER["HTTP_X_FORWARDED_FOR"];
            }
            if ($_SERVER["REMOTE_ADDR"])
                echo " - Proxy: " . $_SERVER["REMOTE_ADDR"];
        } else {
            echo "<br> IP Pública: " . $_SERVER["REMOTE_ADDR"];
            $hostlocal = $_SERVER["REMOTE_ADDR"];
            if ($hostlocal != $_SERVER["REMOTE_ADDR"])
                echo " - Hostname: " . $hostlocal;
        }
        $hostname = gethostbyaddr($hostlocal);
        if ($hostlocal != $hostname)
            echo "<br>Hostname: " . $hostname;

        echo "<br>DNS: " . $_SERVER['HTTP_USER_AGENT'];

        echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR'])));

    }

    public function index()
    {
        $data['validar'] = "0";
        if (!empty($this->input->get("id")) && !empty($this->input->get("email"))) {
            if (strlen($this->input->get("id")) > 5 && strlen($this->input->get("email"))) {
                $id = $this->acc->Buscar_id($this->input->get("id"),$this->input->get("email"));
                if ($id == "Si") {
                    $data['validar'] = "1";
                } else {
                    $data['validar'] = "3";
                }
            } else if ($this->input->get("id") == "2") {
                $data['validar'] = "2";
            }
            else {
                $data['validar'] = "4";
            }
        }
        $this->load->view('index', $data);
    }

    public function login(){
        if (empty($this->input->post("usuario"))) {
            echo "sitio no autorizado violacion de acceso su datos de acceso han sido guardados: ";
            echo $this->getRealIP();
        }
        else{
            $userx = $this->input->post("usuario");
            if (filter_var($userx, FILTER_VALIDATE_EMAIL)) {
                $email = $this->General->encryptBattlenet($userx, $this->input->post("password"));
                $validar = $this->acc->Usuario($userx,$email);
            }
            else{
                $user = $this->General->encryptAccount($userx, $this->input->post("password"));
                $validar = $this->acc->Usuario($userx,$user);
            }
            echo $validar;
        }

    }

    public function registrar()
    {
        if (empty($this->input->post("username1"))) {
            echo "sitio no autorizado violacion de acceso su datos de acceso han sido guardados: ";
            echo $this->getRealIP();
        } else {
            if ($this->acc->Buscar_Usuario($this->input->post("username1"))) {
                echo ($this->acc->Buscar_Usuario($this->input->post("username1")));
            }
            if ($this->acc->Buscar_email($this->input->post("email1"))) {
                echo ($this->acc->Buscar_email($this->input->post("email1")));
            } else if($this->acc->Buscar_Usuario($this->input->post("username1"))=="," && $this->acc->Buscar_email($this->input->post("email1"))==""){
                $email = $this->General->encryptBattlenet($this->input->post("email1"), $this->input->post("password1"));
                $user = $this->General->encryptAccount($this->input->post("username1"), $this->input->post("password1"));
                $correo = $this->input->post("email1");
                $data = array(
                    "account" => $this->input->post("username1"),
                    "email" => $this->input->post("email1"),
                    "password_user" => $user,
                    "password_email" => $email,
                    "tipo" => $this->input->post("CE"),
                    "key" => $user . $email
                );
                $this->email->initialize($this->General->email());
                $this->email->from('wowzeros2@gmail.com');
                $this->email->to($this->input->post("email1"));
                $this->email->subject('Bienvenid@ a Fitpersonal');
                $this->email->message('<h2><a class="btn-success" href="'.base_url("").'?id=' . $user . $email . '&email='.$correo.'">click para completar registro</a></h2>');
                $this->email->send();
                echo $this->acc->insert($data);
            }
        }
    }

    public function change_password(){
        if (empty($this->input->post("email"))) {
            echo "sitio no autorizado violacion de acceso su datos de acceso han sido guardados: ";
            echo $this->getRealIP();
        }
        else {
            $email = $this->input->post("email");
            $recuper = $this->acc->recuperar_correo($email);
            if ($recuper == "si") {
                echo "si";
            } else {
                echo "no";
            }
        }
    }

    public function buscar_email()
    {
        if (empty($this->input->post("email"))) {
            echo "sitio no autorizado violacion de acceso su datos de acceso han sido guardados: ";
            echo $this->getRealIP();
        } else {
            $email = $this->input->post("email");
            $codigo = $this->input->post("codigo");
            $pass = $this->input->post("password");
            $recuper = $this->acc->Buscar($email, $codigo, $pass);
            if ($recuper == "si") {
                echo "si";
            } else {
                echo "no";
            }
        }
    }


    public function Mostrar_trainer(){
        if (empty($this->input->post("id"))) {
            echo "sitio no autorizado violacion de acceso su datos de acceso han sido guardados: ";
            echo $this->getRealIP();
        } else {
            echo json_encode($this->acc->Mostrar_trainer());
        }
    }


    public function planes(){
        echo json_encode($this->acc->planes());
    }

    public function salud(){
        echo json_encode($this->acc->salud());
    }


}
