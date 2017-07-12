<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dashboard extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('General_model', "General");
        $this->load->model('account', "acc");
    }

    public function index(){
        if($_SESSION['rango'] > 0){
            $this->load->view("dashboard/admin");
        }
        else if($_SESSION['tipo']=="Cliente"){
            $this->load->view("dashboard/user");
        }
        else if($_SESSION['tipo'] == "Entrenador"){
            $this->load->view("dashboard/trainers");
        }
        else{
            header("Location: ".base_url('')." ");
        }
    }

    public function Guardar_trainer(){
        $config['upload_path'] = 'uploads/trainer';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB

        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $data['valor'] = false;
            } else {
                if (file_exists('uploads/trainer/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload/', $config);
                    if ($this->upload->do_upload('file')) {
                        // echo 'Imagen Guardado con existo : '.$this->upload->data('file_name');
                        $data['valor'] = true;
                    }
                    else{
                        echo 'Error: este error ocurrio por motivo de la subida de datos por favor comunicate con el administrador';
                        $data['valor'] = false;
                    }
                }
            }
        } else {
            $data['valor'] = false;
        }
        if($data['valor']){
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $data = array(
                "id_trainer" => $id,
                "nombre" => $this->input->post('nombre'),
                "cedula" => $this->input->post('cedula'),
                "estado_civil" => $this->input->post('estado_civil'),
                "telefono" => $this->input->post('telefono'),
                "email" => $this->input->post('email'),
                "ciudad" => $this->input->post('ciudad'),
                "departamento" => $this->input->post('departamento'),
                "direccion" => $this->input->post('direccion'),
                "fecha_nacimiento" => $this->input->post('fecha_nacimiento'),
                "estudio" => $this->input->post('estudio'),
                "titulo" => $this->input->post('titulo'),
                "titulo_deportivo" => $this->input->post('titulo_deportivo'),
                "horario_disponible" => $this->input->post('horario_disponible'),
                "dia_disponible" => $this->input->post('dia_disponible'),
                "empresa1" => $this->input->post('empresa1'),
                "cargo1" => $this->input->post('cargo1'),
                "tel1" => $this->input->post('tel1'),
                "empresa2" => $this->input->post('empresa2'),
                "cargo2" => $this->input->post('cargo2'),
                "tel2" => $this->input->post('tel2'),
                "empresa3" => $this->input->post('empresa3'),
                "cargo3" => $this->input->post('cargo3'),
                "tel3" => $this->input->post('tel3'),
                "empresa4" => $this->input->post('empresa4'),
                "cargo4" => $this->input->post('cargo4'),
                "tel4" => $this->input->post('tel4'),
                "empresa5" => $this->input->post('empresa5'),
                "cargo5" => $this->input->post('cargo5'),
                "tel5" => $this->input->post('tel5'),
                "empresa6" => $this->input->post('empresa6'),
                "cargo6" => $this->input->post('cargo6'),
                "tel6" => $this->input->post('tel6'),
                "info" => $this->input->post('info'),
                "img" => $this->upload->data('file_name')
            );

            $insert = $this->acc->inser_trainer($data);
            if( $insert) {
                echo "Los datos del entrenador: ".$this->input->post('nombre')." fueron guardado con exito";
            }
            else{
                echo 'Error al Agregar datos del entrenador '.$this->input->post("nombre").' ';
            }
        }else{

        }
    }

    public function Editar_trainer(){
        $config['upload_path'] = 'uploads/trainer';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB

        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $data['valor'] = false;
            } else {
                if (file_exists('uploads/trainer/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('file')) {
                        // echo 'Imagen Guardado con existo : '.$this->upload->data('file_name');
                        $data['valor'] = true;
                    }
                    else{
                        echo 'Error: '.$this->upload->data('file_name');
                        $data['valor'] = false;
                    }
                }
            }
        } else {
            $data['valor'] = false;
        }
        if($data['valor']){
           $id = $this->input->post('id_trainer');
            $data = array(
                "nombre" => $this->input->post('nombre'),
                "cedula" => $this->input->post('cedula'),
                "estado_civil" => $this->input->post('estado_civil'),
                "telefono" => $this->input->post('telefono'),
                "email" => $this->input->post('email'),
                "ciudad" => $this->input->post('ciudad'),
                "departamento" => $this->input->post('departamento'),
                "direccion" => $this->input->post('direccion'),
                "fecha_nacimiento" => $this->input->post('fecha_nacimiento'),
                "estudio" => $this->input->post('estudio'),
                "titulo" => $this->input->post('titulo'),
                "titulo_deportivo" => $this->input->post('titulo_deportivo'),
                "horario_disponible" => $this->input->post('horario_disponible'),
                "dia_disponible" => $this->input->post('dia_disponible'),
                "empresa1" => $this->input->post('empresa1'),
                "cargo1" => $this->input->post('cargo1'),
                "tel1" => $this->input->post('tel1'),
                "empresa2" => $this->input->post('empresa2'),
                "cargo2" => $this->input->post('cargo2'),
                "tel2" => $this->input->post('tel2'),
                "empresa3" => $this->input->post('empresa3'),
                "cargo3" => $this->input->post('cargo3'),
                "tel3" => $this->input->post('tel3'),
                "empresa4" => $this->input->post('empresa4'),
                "cargo4" => $this->input->post('cargo4'),
                "tel4" => $this->input->post('tel4'),
                "empresa5" => $this->input->post('empresa5'),
                "cargo5" => $this->input->post('cargo5'),
                "tel5" => $this->input->post('tel5'),
                "empresa6" => $this->input->post('empresa6'),
                "cargo6" => $this->input->post('cargo6'),
                "tel6" => $this->input->post('tel6'),
                "info" => $this->input->post('info'),
                "img" => $this->upload->data('file_name')

            );
            $insert = $this->acc->Editar_trainer($id,$data,"si");

            if( $insert) {

                echo "Los datos del entrenador: ".$this->input->post('nombre')." fueron Editado con exito";
            }
            else{
                echo 'Error al Editado datos del entrenador '.$this->input->post("nombre").' ';
            }
        }else{

            $id = $this->input->post('id_trainer');
            $data = array(
                "nombre" => $this->input->post('nombre'),
                "cedula" => $this->input->post('cedula'),
                "estado_civil" => $this->input->post('estado_civil'),
                "telefono" => $this->input->post('telefono'),
                "email" => $this->input->post('email'),
                "ciudad" => $this->input->post('ciudad'),
                "departamento" => $this->input->post('departamento'),
                "direccion" => $this->input->post('direccion'),
                "fecha_nacimiento" => $this->input->post('fecha_nacimiento'),
                "estudio" => $this->input->post('estudio'),
                "titulo" => $this->input->post('titulo'),
                "titulo_deportivo" => $this->input->post('titulo_deportivo'),
                "horario_disponible" => $this->input->post('horario_disponible'),
                "dia_disponible" => $this->input->post('dia_disponible'),
                "empresa1" => $this->input->post('empresa1'),
                "cargo1" => $this->input->post('cargo1'),
                "tel1" => $this->input->post('tel1'),
                "empresa2" => $this->input->post('empresa2'),
                "cargo2" => $this->input->post('cargo2'),
                "tel2" => $this->input->post('tel2'),
                "empresa3" => $this->input->post('empresa3'),
                "cargo3" => $this->input->post('cargo3'),
                "tel3" => $this->input->post('tel3'),
                "empresa4" => $this->input->post('empresa4'),
                "cargo4" => $this->input->post('cargo4'),
                "tel4" => $this->input->post('tel4'),
                "empresa5" => $this->input->post('empresa5'),
                "cargo5" => $this->input->post('cargo5'),
                "tel5" => $this->input->post('tel5'),
                "empresa6" => $this->input->post('empresa6'),
                "cargo6" => $this->input->post('cargo6'),
                "tel6" => $this->input->post('tel6'),
                "info" => $this->input->post('info'),

            );
            $insert = $this->acc->Editar_trainer($id,$data,"no");

            if( $insert) {

                echo "Los datos del entrenador: ".$this->input->post('nombre')." fueron Editado con exito";
            }
            else{
                echo 'Error al Editado datos del entrenador '.$this->input->post("nombre").' ';
            }

        }
    }

    public function Guardar_cliente(){
        $config['upload_path'] = 'uploads/cliente';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB
        $img = "";

        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $img = "No";
            } else {
                if (file_exists('uploads/cliente/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('file')) {
                        // echo 'Imagen Guardado con existo : '.$this->upload->data('file_name');
                        $data['valor'] = true;
                        $img = $this->upload->data('file_name');
                    }
                    else{
                        echo 'Error: este error ocurrio por motivo de la subida de datos por favor comunicate con el administrador';
                        $data['valor'] = false;
                    }
                }
            }
        } else {
            $data['valor'] = false;
        }
        if($data['valor']){
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $data = array(
                "id_cliente" => $id,
                "nombre" => $this->input->post('nombre'),
                "telefono" => $this->input->post('telefono'),
                "sexo" => $this->input->post('sexo'),
                "ciudad" => strtoupper($this->input->post('ciudad')),
                "departamento" => strtoupper($this->input->post('departamento')),
                "edad" => $this->input->post('edad'),
                "direccion" => $this->input->post('direccion'),
                "img" => $img
            );

            $insert = $this->acc->inser_cliente($data);
            if( $insert) {
                echo "Los datos del usuario: ".$this->input->post('nombre')." fueron guardado con exito";
            }
            else{
                echo 'Error al Agregar datos del datos '.$this->input->post("nombre").' ';
            }
        }else{
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $data = array(
                "id_cliente" => $id,
                "nombre" => $this->input->post('nombre'),
                "telefono" => $this->input->post('telefono'),
                "sexo" => $this->input->post('sexo'),
                "ciudad" => strtoupper($this->input->post('ciudad')),
                "departamento" => strtoupper($this->input->post('departamento')),
                "edad" => $this->input->post('edad'),
                "direccion" => $this->input->post('direccion'),
                "img" => $img
            );

            $insert = $this->acc->inser_cliente($data);
            if( $insert) {
                echo "Los datos del usuario: ".$this->input->post('nombre')." fueron guardado con exito";
            }
            else{
                echo 'Error al Agregar datos del datos '.$this->input->post("nombre").' ';
            }
        }
    }

    public function Editar_cliente(){
        $config['upload_path'] = 'uploads/cliente';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB
        $img = "";
        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $data['valor'] = false;
                $img = "No";
            } else {
                if (file_exists('uploads/cliente/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('file')) {
                        // echo 'Imagen Guardado con existo : '.$this->upload->data('file_name');
                        $data['valor'] = true;
                        $img = $this->upload->data('file_name');
                    }
                    else{
                        echo 'Error: '.$this->upload->data('file_name');
                        $data['valor'] = false;
                    }
                }
            }
        } else {
            $data['valor'] = false;
        }
        if($data['valor']){
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $data = array(
                "id_cliente" => $id,
                "nombre" => $this->input->post('nombre'),
                "telefono" => $this->input->post('telefono'),
                "sexo" => $this->input->post('sexo'),
                "ciudad" => strtoupper($this->input->post('ciudad')),
                "departamento" => strtoupper($this->input->post('departamento')),
                "direccion" => $this->input->post('direccion'),
                "edad" => $this->input->post('edad'),
                "img" => $img
            );
            $insert = $this->acc->Editar_cliente($id,$data);

            if( $insert) {

                echo "Lo datos del Usuario: ".$this->input->post('nombre')." fueron Editado con exito";
            }
            else{
                echo 'Error al editar datos del Usuario '.$this->input->post("nombre").' ';
            }
        }else{
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $data = array(
                "id_cliente" => $id,
                "nombre" => $this->input->post('nombre'),
                "telefono" => $this->input->post('telefono'),
                "sexo" => $this->input->post('sexo'),
                "ciudad" => $this->input->post('ciudad'),
                "ciudad" => strtoupper($this->input->post('ciudad')),
                "departamento" => strtoupper($this->input->post('departamento')),
                "edad" => $this->input->post('edad'),
                "img" => $img
            );
            $insert = $this->acc->Editar_cliente($id,$data);
            if( $insert) {
                echo "Los datos del usuario: ".$this->input->post('nombre')." fueron Editado con exito";
            }
            else{
                echo 'Error al editar datos del Usuario '.$this->input->post("nombre").' ';
            }
        }
    }

    public function datos_entrenador(){
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $datos = $this->acc->sacar_datos($id,"datos_entrenador","id_trainer");
            if(!empty($datos)){
                echo json_encode($datos);
            }
    }

    public function datos_cliente(){
        $id = $this->acc->Buscar_id_account($_SESSION['email']);
        $datos = $this->acc->sacar_datos($id,"datos_cliente","id_cliente");
        if(!empty($datos)){
            echo json_encode($datos);
        }
    }

    public function fondos(){
        $id = $this->acc->Buscar_id_account($_SESSION['email']);
        $datos = $this->acc->fondos($id);
        if(!empty($datos)){
            echo json_encode($datos);
        }
    }

    public function Mostrar_trainer(){
        if (empty($this->input->post("id"))) {
            echo "sitio no autorizado violacion de acceso su datos de acceso han sido guardados: ";
        } else {
            echo json_encode($this->acc->Mostrar_trainer());
        }
    }

    public function Mostrar_cliente(){
            echo json_encode($this->acc->Mostrar_cliente());
    }

    public function logout(){
        session_destroy();
        $this->session->unset_userdata('userData');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('tipo');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        redirect('');
    }

    public function contratar(){
        if (!empty($this->input->post("id"))) {
            echo $this->acc->contratar($this->input->post("id"));
        }
    }

    public function negar(){
        if (!empty($this->input->post("id"))) {
            echo $this->acc->negar($this->input->post("id"));
        }
    }

    public function borrar(){
        if (!empty($this->input->post("id"))) {
            echo $this->acc->borrar($this->input->post("id"));
        }
    }

    public function ciudad(){
        $id = $this->acc->ciudad($this->input->post("idc"));
        foreach ($id as $row){
            echo "<option value='".$row['ciudad']."'>".$row['ciudad']."</option>";
        }
    }

    public function departamento(){
        foreach ($this->acc->departamento() as $row){
            echo "<option value='".strtoupper($row['departamento'])."'>".strtoupper($row['departamento'])."</option>";
        }

    }

    public function buy($id){
        //Set variables for paypal form
        $returnURL = base_url().'paypal/success'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        //get particular product data
        $product = $this->acc->plan($id);
        $userID = 1; //current user id
        $logo = base_url().'assets/images/codexworld-logo.png';

        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $product['Nombre']);
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['id']);
        $this->paypal_lib->add_field('amount',  $product['price']);
        $this->paypal_lib->image($logo);

        $this->paypal_lib->paypal_auto_form();
    }

    public function inser_confirmacion_de_pago(){
            setlocale (LC_TIME, "es_CO");
            date_default_timezone_set('America/Bogota');
            $config['upload_path'] = 'uploads/Confirmacion';
            $config['allowed_types'] = '*';
            $config['max_filename'] = '500';
            $config['encrypt_name'] = true;
            $config['max_size'] = '1000000'; //1 MB
            $data['valor'] = false;

            if (isset($_FILES['file']['name'])) {
                if (0 < $_FILES['file']['error']) {
                    $data['valor'] = false;
                } else {
                    if (file_exists('uploads/Confirmacion/' . $_FILES['file']['name'])) {
                        echo '<div class="succes">por favor cambie le nombre al documento ya existe/'.$_FILES['file']['name'].'</div>';
                    } else {
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('file')) {
                            $data['valor'] = true;
                        }
                        else{
                            echo 'Error: este error ocurrio por motivo de la subida de datos por favor comunicate con el administrador';
                            $data['valor'] = false;

                        }
                    }
                }
            }

            if($data['valor']==true){
                $id = $this->acc->Buscar_id_account($_SESSION['email']);
                $data = array(
                    "id_cliente" => $id,
                    "nombre" => $this->input->post('nombre_pago'),
                    "cedula" => $this->input->post('cedula_pago'),
                    "telefono" => $this->input->post('telefono_pago'),
                    "fecha_de_solicitud" =>  date("F j, Y, g:i a"),
                    "archivo" => $this->upload->data('file_name')

                );
                $insert = $this->acc->inser_confirmacion_de_pago($data);
                if( $insert) {
                    $this->acc->enviar_msm_solicitud_confirmacion_pago($id);
                    echo "Los datos del pago del señ@r: ".$this->input->post('nombre_pago')." fueron guardado con exito";
                }
                else{
                    echo 'Error al Agregar datos señ@r: '.$this->input->post("nombre_pago").' ';
                }
            }
            else{

            }
        } //bien

    public function estado_confirmacion(){
            $id = $this->acc->Buscar_id_account($_SESSION['email']);

            if(!empty($this->acc->estados_confirmacion($id))){
                echo json_encode($this->acc->estados_confirmacion($id));
            }
            else{
                $data = array("status" => 0);
                echo json_encode($data);
            }

        }

    public function form_solicitud(){
        setlocale (LC_TIME, "es_CO");
        date_default_timezone_set('America/Bogota');
        $id = $this->acc->Buscar_id_account($_SESSION['email']);
        $id_trainer = $this->input->post("id_entrenador_s");
        $data = array(
            "id_cliente" => $id,
            "id_entrenador" => $id_trainer,
            "fecha_de_solicitud" => date("F j, Y, g:i a")
        );
        $insert = $this->acc->form_solicitud($data);

        if( $insert) {
            $this->acc->enviar_msm_solicitud_entrenador($id,$id_trainer);
            echo "Datos guardados";

        }
        else{
            echo 'Error al guardar los datos';
        }
    }

    public function ver_solicitud_entrenador(){
        $id = $this->acc->Buscar_id_account($_SESSION['email']);

        if(!empty($this->acc->ver_solicitud_entrenador($id))){
            echo json_encode($this->acc->ver_solicitud_entrenador($id));
        }
        else{
            $data = array("status" => 0);
            echo json_encode($data);
        }

    }

    public function wpp(){



    }

}