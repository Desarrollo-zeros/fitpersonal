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
                return "El usuario ingresado ya existe,";
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
                return "El correo ingresado ya existe";
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

        public function sacar_datos($id,$tabla,$tipo){
            if($_SESSION['rango']>0){
                $this->db->select("*");
                $this->db->from("account");
                $this->db->where("id",$id);
                $query = $this->db->get();
                return $query->result_array();
            }
            else{
                $this->db->select("*");
                $this->db->from($tabla);
                $this->db->where($tipo,$id);
                $query = $this->db->get();
                return $query->result_array();
            }
        }

        public function fondos($id){
           $this->db->select("*");
           $this->db->from("fondos");
           $this->db->where("id_account",$id);
           $query = $this->db->get();
           return $query->result_array();
       }


        public function inser_trainer($data = array()){
            $insert = $this->db->insert("datos_entrenador", $data);
            if($insert){
                return true;
            }else{
                return false;
            }
        }


        public function inser_cliente($data = array()){
            $insert = $this->db->insert("datos_cliente", $data);
            if($insert){
                return true;
            }else{
                return false;
            }
        }



        public function Editar_trainer($id,$data = array(),$img){
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $this->db->where('id_trainer', $id);
            if ($this->db->count_all_results() > 0) {
                $this->db->select('*');
                $this->db->from('datos_entrenador');
                $this->db->where('id_trainer', $id);
                $query = $this->db->get();
                foreach ($query->result() as $row) {

                    if($img == "si"){
                        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                            if(file_exists("C:/xampp/htdocs/Fitpersonal/uploads/trainer/".$row->img)){
                                unlink("C:/xampp/htdocs/Fitpersonal/uploads/trainer/".$row->img);
                            }

                        } else {
                            if(file_exists("/var/www/html/fitpersonal/uploads/trainer/".$row->img)){
                                unlink("/var/www/html/fitpersonal/uploads/trainer/".$row->img);
                            }

                        }
                    }
                    else{

                    }

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


        public function Editar_cliente($id,$data = array()){
            $this->db->select("*");
            $this->db->from("datos_cliente");
            $this->db->where('id_cliente', $id);
            if ($this->db->count_all_results() > 0) {
                $this->db->select('*');
                $this->db->from('datos_cliente');
                $this->db->where('id_cliente', $id);
                $query = $this->db->get();
                foreach ($query->result() as $row) {
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                        if(file_exists("C:/xampp/htdocs/Fitpersonal/uploads/cliente/".$row->img)){
                            unlink("C:/xampp/htdocs/Fitpersonal/uploads/cliente/".$row->img);
                        }
                        else{

                        }

                    } else {
                        if(file_exists("/var/www/html/fitpersonal/uploads/cliente/".$row->img)){
                            unlink("/var/www/html/fitpersonal/uploads/cliente/".$row->img);
                        }
                        else{

                        }
                    }
                }
                $this->db->where('id_cliente', $id);
                $insert = $this->db->update("datos_cliente", $data);
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


        public function Mostrar_cliente(){
            $this->db->select("*");
            $this->db->from("account");
            $this->db->join("datos_cliente","datos_cliente.id_cliente = account.id");
            $query = $this->db->get();
            return $query->result_array();
        }

        public function planes(){
            $this->db->select("*");
            $this->db->from("planes");
            $query = $this->db->get();
            return $query->result_array();
        }

        public function plan($id){
            $this->db->select("*");
            $this->db->from("planes");
            $this->db->where("id",$id);
            $query = $this->db->get();
            return $query->result_array();
        }


        public function salud(){
            $this->db->select("*");
            $this->db->from("salud");
            $query = $this->db->get();
            return $query->result_array();
        }

        public function contratar($id){
            setlocale (LC_TIME, "es_CO");
            date_default_timezone_set('America/Bogota');
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $this->db->where('id', $id);
            if ($this->db->count_all_results() > 0) {
                $this->db->where('id', $id);
                $data = array("status " => "3", "fecha_contracto" => date("F j, Y, g:i a"));
               return  $this->db->update("datos_entrenador", $data);
            }
        }

        public function negar($id){
            setlocale (LC_TIME, "es_CO");
            date_default_timezone_set('America/Bogota');
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $this->db->where('id', $id);
            $this->db->where('status', "3");
            if ($this->db->count_all_results() > 0) {
                $this->db->where('id', $id);
                $data = array("status " => "0", "fecha_negado" => date("F j, Y, g:i a"));
                return  $this->db->update("datos_entrenador", $data);
            }
        }


        public function borrar($id){
            setlocale (LC_TIME, "es_CO");
            date_default_timezone_set('America/Bogota');
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $this->db->where('id', $id);
            $this->db->where('status', "0");
            if ($this->db->count_all_results() > 0) {
                $this->db->where('id', $id);
                $data = array("status " => "0", "fecha_borrado" => date("F j, Y, g:i a"), "borrar" => 1);
                return  $this->db->update("datos_entrenador", $data);
            }
        }


        public function departamento(){
            $this->db->select("*");
            $this->db->from("departamento");
            $query = $this->db->get();
            return $query->result_array();
        }


        public function ciudad($id){
            $id_d = "";
            $this->db->select("*");
            $this->db->from("departamento");
            $this->db->where("departamento",$id);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $id_d = $row->id;
            }
            $this->db->select("*");
            $this->db->from("municipio");
            $this->db->where("id_departamento",$id_d);
            $query = $this->db->get();
            return $query->result_array();
        }


        public function inser_confirmacion_de_pago($data = array()){
            $insert = $this->db->insert("confirmacion_pago", $data);
            if($insert){
                return true;
            }else{
                return false;
            }
        }

        public function estados_confirmacion($id){
            $this->db->select("*");
            $this->db->from("confirmacion_pago");
            $this->db->where("id_cliente",$id);
            $query = $this->db->get();
            return $query->result_array();
        }

        public function form_solicitud($data = array()){
            $insert = $this->db->insert("solicitud_entrenador", $data);
            if($insert){
                return true;
            }else{
                return false;
            }
        }

        public function ver_solicitud_entrenador($id)
        {
            $this->db->select("*");
            $this->db->from("solicitud_entrenador");
            $this->db->where("id_cliente",$id);
            $query = $this->db->get();
            return $query->result_array();
        }

        function enviar_msm_solicitud_confirmacion_pago($id){
            $status = "";
            $archivo = "";
            $this->db->select("*");
            $this->db->from("datos_cliente,confirmacion_pago");
            $this->db->where("datos_cliente.id_cliente",$id);
            $this->db->where("confirmacion_pago.id_cliente",$id);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                if($row->status == 1){
                    $status = "Pendiente";
                }
                if($row->status == 2){
                    $status = "Completado";
                }
                $string = '<br><br>           
                 El cliente '.$row->nombre.' acaba de hacer una solicitud de pago en la fecha '.$row->fecha_de_solicitud.', sus datos son: 
                 <br>Nombre: '.$row->nombre.'
                 <br>Cedula: '.$row->cedula.'
                 <br>Telefono: '.$row->telefono.'
                 <br>Estado: '.$status.'
                 <br>
                 <br>Atentamente: Dev-Zeros administrador Fitpersonal
                ';
                $archivo = $row->archivo;
                $asunto = "SOLICITUD DE CONFIRMACION DE PAGO";
            }
             $this->General->enviar_msm("3043651232",strtoupper($string));
             return $this->General->enviar_email(strtoupper($string),$archivo,$asunto);
        }

        function ver_id_trainer($id_trainer){
            $string = "";
            $this->db->select("*");
            $this->db->from("datos_entrenador");
            $this->db->where("id",$id_trainer);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $string = '<br>Los datos del entrenador solicitado son:<br>
                Nombre: '.$row->nombre.'<br>
                Correo eletronico: '.$row->email.'<br>
                Telefono: '.$row->telefono.'<br>';
            }

            return $string;
        }

        function enviar_msm_solicitud_entrenador($id,$id_trainer){
            $string = "";
            $this->db->select("*");
            $this->db->from("datos_cliente,solicitud_entrenador,account");
            $this->db->where("account.id", $id);
            $this->db->where("datos_cliente.id_cliente",$id);
            $this->db->where("solicitud_entrenador.id_cliente",$id);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $string ='<br><br>
                El cliente '.$row->nombre.' ha solicitado a un entrenador en la fecha:  
                '.$row->fecha_de_solicitud.'  los datos del cliente son: <br>
                Nombre: '.$row->nombre.'<br>
                Correo eletronico: '.$row->email.'<br>
                Telefono: '.$row->telefono.'<br>
                Edad: '.$row->edad.'<br>
                Departamento: '.$row->departamento.'<br>
                Ciudad: '.$row->ciudad.'<br>
                Direccion: '.$row->direccion.'<br>
                '.$this->ver_id_trainer($id_trainer).'
                 <br>
                 <br>Atentamente: Dev-Zeros administrador Fitpersonal
                ';
                $asunto = "SOLICITUD DE ENTRENADOR";
            }
            return $this->General->enviar_email(strtoupper($string),"",$asunto);
        }

    }