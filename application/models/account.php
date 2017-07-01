<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class account extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('General_model', "General");
        }

        function Buscar_id($id,$email){
            $this -> db -> select('*');
            $this -> db -> from('account');
            $this -> db -> where('key', $id);
            $this->db ->where( 'conf_key', $id);
            $this->db ->where( 'email', $email);
            if($this->db->count_all_results() > 0){
                return "No";
            }
            else{
                $data = array("conf_key" => $id);
                $this->db->where('key', $id);
                $this->db->update("account", $data);
                return "Si";
            }
        }

        function Buscar_Usuario($id){
            $this -> db -> select('*');
            $this -> db -> from('account');
            $this -> db -> where('account', $id);
            if($this->db->count_all_results() > 0){
                return "<h6 class='text-center'>El usuario ingresado ya existe,</h6>";
            }
            else{
                return ",";
            }
        }

        function Buscar_email($id){
            $this -> db -> select('*');
            $this -> db -> from('account');
            $this -> db -> where('email', $id);
            if($this->db->count_all_results() >0){
                return "<h6 class='text-center'>El correo ingresado ya existe</h6>";
            }
            else{
                return "";
            }
        }


        function Usuario($id,$pass)
        {
            $this->db->select('*');
            $this->db->from('account');
            if (filter_var($id, FILTER_VALIDATE_EMAIL)) {
                $this->db->where('email', $id);
                $this->db->where("password_email", $pass);
                if ($this->db->count_all_results() > 0) {
                    $this->db->select('*');
                    $this->db->from('account');
                    $this->db->where('email', $id);
                    $query = $this->db->get();
                    foreach ($query->result() as $row) {
                        if ($row->conf_key != "") {
                            $this->db->where('account', $id);
                            $data = array("online " => "1", "logeado" => "PC");
                            $this->db->update("account", $data);
                            $newdata = array(
                                'username'  => $row->account,
                                'email'     => $row->email,
                                'tipo' => $row->tipo,
                                'rango' => $row->rango
                            );
                            $this->session->set_userdata($newdata);
                            return $row->tipo ;
                        } else {
                            return "Su cuenta no esta activa";
                        }
                    }
                }
                return "Usuario o Contraseña incorrecta";
            }else {
                $this->db->where('account', $id);
                $this->db->where('password_user', $pass);
                if ($this->db->count_all_results() > 0) {
                    $this->db->select('*');
                    $this->db->from('account');
                    $this->db->where('account', $id);
                    $query = $this->db->get();
                    foreach ($query->result() as $row) {
                        if ($row->conf_key != "") {
                            $this->db->where('account', $id);
                            $data = array("online " => "1", "logeado" => "PC");
                            $this->db->update("account", $data);
                            $newdata = array(
                                'username'  => $row->account,
                                'email'     => $row->email,
                                'tipo' => $row->tipo,
                                'rango' => $row->rango
                            );
                            $this->session->set_userdata($newdata);
                            return $row->tipo;
                        } else {
                            return "Su cuenta no esta activa";
                        }
                    }

                }
                return "Usuario o Contraseña incorrecta";
            }
        }

        public function insert($data = array()) {
            $insert = $this->db->insert("account", $data);
            if($insert){
               return "registrado";
            }else{
                return "error";
            }
        }


        public function recuperar_correo($email){
            $key = $this->General->generear_codigigo();
            $this->db->select("*");
            $this->db->from("account");
            $this->db->where("email",$email);
            if($this->db->count_all_results() > 0){
                $this->db->where('email', $email);
                $data = array("key_change " => $key);
                $this->db->update("account", $data);
                $this->General->enviar_recuperacion($email,$key);
                return "si";
            }
            else{
                return "no";
            }
        }


        public function Buscar($email,$codigo,$contraseña){
            $this->db->select("account");
            $this->db->from("account");
            $this->db->where("email",$email);
            $this->db->where("key_change",$codigo);
            if($this->db->count_all_results() > 0){
                $this->db->select('account');
                $this->db->from('account');
                $this->db->where('email', $email);
                $query = $this->db->get();
                foreach ($query->result() as $row) {
                    $newpass = $this->General->encryptBattlenet($email,$contraseña);
                    $newpass1 = $this->General->encryptAccount($row->account,$contraseña);
                    $this->db->where('email', $email);
                    $data = array("password_user" => $newpass1, "password_email " => $newpass);
                    $this->db->update("account", $data);
                }
                $this->db->where('email', $email);
                $data = array("key_change" => "");
                $this->db->update("account", $data);
                return "si";
            }
            else{
                return "no";
            }
        }


        public function Buscar_id_account($email){
            $id = "";
            $this->db->select("*");
            $this->db->from("account");
            $this->db->where("email",$email);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
               $id= $row->id;
            }
            return $id;
        }

        public function sacar_datos($id){
            if($_SESSION['rango']>0){
                $this->db->select("*");
                $this->db->from("account");
                $this->db->where("id",$id);
                $query = $this->db->get();
                return $query->result_array();
            }
            else{
                $this->db->select("*");
                $this->db->from("datos_entrenador");
                $this->db->where("id_trainer",$id);
                $query = $this->db->get();
                return $query->result_array();
            }

        }


        public function inser_trainer($data = array()){
            $insert = $this->db->insert("datos_entrenador", $data);
            if($insert){
                return true;
            }else{
                return false;
            }
        }

        public function Editar_trainer($id,$data = array()){
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $this->db->where('id_trainer', $id);
            if ($this->db->count_all_results() > 0) {
                $this->db->select('*');
                $this->db->from('datos_entrenador');
                $this->db->where('id_trainer', $id);
                $query = $this->db->get();
                foreach ($query->result() as $row) {
                    unlink("C:/xampp/htdocs/Fitpersonal/uploads/".$row->img);
                }
                $this->db->where('id_trainer', $id);
                $insert = $this->db->update("datos_entrenador", $data);
            }
            if($insert){
                return true;
            }else{
                return false;
            }
        }

        public function Mostrar_trainer(){
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $query = $this->db->get();
            return $query->result_array();
        }


        public function planes(){
            $this->db->select("*");
            $this->db->from("planes");
            $query = $this->db->get();
            return $query->result_array();
        }


        public function salud(){
            $this->db->select("*");
            $this->db->from("salud");
            $query = $this->db->get();
            return $query->result_array();
        }
    }