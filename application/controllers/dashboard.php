<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
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

    public function Guardar(){
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB

        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $data['valor'] = false;
            } else {
                if (file_exists('uploads/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload', $config);
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
                echo "Lo datos del entrenador: ".$this->input->post('nombre')." fueron guardado con exito";
            }
            else{
                echo 'Error al Agregar datos del entrenador '.$this->input->post("nombre").' ';
            }
        }else{

        }
    }


    public function Editar(){
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB

        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $data['valor'] = false;
            } else {
                if (file_exists('uploads/' . $_FILES['file']['name'])) {
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
            $insert = $this->acc->Editar_trainer($id,$data);

            if( $insert) {

                echo "Lo datos del entrenador: ".$this->input->post('nombre')." fueron Editado con exito";
            }
            else{
                echo 'Error al Editado datos del entrenador '.$this->input->post("nombre").' ';
            }
        }else{

        }
    }


    public function datos(){
            $id = $this->acc->Buscar_id_account($_SESSION['email']);
            $datos = $this->acc->sacar_datos($id);
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
}