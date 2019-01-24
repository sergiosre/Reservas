<?php

class Usuario extends CI_Controller
{
    // public function crear()
    // {
    //     $this->load->model('pais_model');
    //     $this->load->model('coche_model');
    //     $data['paises'] = $this->pais_model->listar();
    //     $data['coches'] = $this->coche_model->coches_disponibles();
    //     frame($this, 'persona/crear',$data);
    // }

    public function registrarse()
    {
        frame($this, 'usuario_view/crear');
    }

    public function crearPost()
    {
        $usuario = isset($_POST['usuario']) && !empty($_POST['usuario']) ? $_POST['usuario'] : null;
        $password = isset($_POST['pwd']) && !empty($_POST['pwd']) ? $_POST['pwd'] : null;
        $nombre = isset($_POST['nombre']) && !empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellidos = isset($_POST['apellidos']) && !empty($_POST['apellidos']) ? $_POST['apellidos'] : null;
        $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : null;
        $urbanizacion = isset($_POST['urbanizacion']) && !empty($_POST['urbanizacion']) ? $_POST['urbanizacion'] : null;

        $password = md5($password);

        if ($usuario != null) {
            $this->load->model('usuario_model');
            $ok = $this->usuario_model->crear($usuario, $nombre, $apellidos, $email, $password, $urbanizacion);
            if ($ok) {
                $data = [];
                $data['usuario'] = $usuario;
                frame($this, 'usuario_view/crearOK', $data);
            } else {
                $data = [];
                $data['usuario'] = $usuario;
                frame($this, 'usuario_view/crearERROR', $data);
            }
        } else {
            // Mensaje ERROR
        }
    }

    public function loginPost()
    {
        $usuario = isset($_POST['user']) && !empty($_POST['user']) ? $_POST['user'] : null;
        $password = isset($_POST['pwd']) && !empty($_POST['pwd']) ? $_POST['pwd'] : null;

        $_SESSION['usuario'] = $usuario;
        $_SESSION['password'] = $password;

        if (($_SESSION['usuario'] != ['']) && ($_SESSION['password'] != [''])) {
            $_SESSION['password'] = md5($_SESSION['password']);
            $this->load->model('usuario_model');
            $ok = $this->usuario_model->conectarse($_SESSION['usuario'], $_SESSION['password']);

            if ($ok) {
                $this->dashboard();
                redirect(base_url() . 'Usuario/dashboard');
            } else {
                session_destroy();
                redirect(base_url());

            }
        }
    }

    public function dashboard() //Muestra la pagina princiapal para realizar las reservas

    {
        // $this->load->model('horas_model');
        $data = [];
        $data['usuario'] = $_SESSION['usuario'];
        $data['password'] = $_SESSION['password'];
        //$horas = $this->horas_model->recuperarHoras($this->horasAjax());
        //$data['horas'] = $horas;
        frame($this, 'principal/dashboard', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function horasAjax()
    {
        $ajaxOK = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;

        if ($ajaxOK) {
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
            $hora = date("H:i");

            if ($fecha != null) {
                $nuevaFecha = strtotime($fecha);
                $hoy = strtotime(date('d-m-Y'));
                if ($nuevaFecha > $hoy) {
                    $hora = '08:00';
                } else if ($nuevaFecha < $hoy) {
                    $hora = '21:00';
                }
                $this->load->model('horas_model');
                $horas = $this->horas_model->recuperarHoras($fecha, $hora);
                $hoy = date('d-m-Y');
                echo json_encode($horas);
                // echo strtotime($fecha);
                // echo "\n";
                // echo strtotime($hoy);
                /*
            foreach ($horas as $value) {
            echo $value;
            }
             */
            }

        }

    }

    // public function listar()
    // {
    //     $this->load->model('persona_model');
    //     $data['personas'] = $this->persona_model->listar();
    //     frame($this, 'persona/listar', $data);
    // }

    // public function update()
    // {
    //     $id = (isset($_POST['id']) && ! empty($_POST['id'])) ? $_POST['id'] : null;
    //     if ($id != null) {
    //         $this->load->model('persona_model');
    //         $this->load->model('pais_model');
    //         $data['persona'] = $this->persona_model->getPersonaById($id);
    //         $data['paises'] = $this->pais_model->listar();
    //         frame($this, 'persona/update', $data);
    //     } else {
    //         redirect(base_url());
    //     }
    // }

    // public function updatePost()
    // {
    //     $_SESSION['usuario']_nuevo = isset($_POST['usuario']) && ! empty($_POST['usuario']) ? $_POST['usuario'] : null;
    //     $nombre_nuevo = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
    //     $apellido_nuevo = isset($_POST['apellido']) && ! empty($_POST['apellido']) ? $_POST['apellido'] : null;
    //     $id_pais_nuevo= isset($_POST['pais']) && ! empty($_POST['pais']) ? $_POST['pais'] : null;

    //     $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;

    //     if ($id != null && $_SESSION['usuario']_nuevo != null && $nombre_nuevo != null && $apellido_nuevo != null) {
    //         $this->load->model('persona_model');
    //         $ok = $this->persona_model->update($id, $_SESSION['usuario']_nuevo, $nombre_nuevo, $apellido_nuevo, $id_pais_nuevo);
    //         if ($ok) {
    //             redirect(base_url() . 'persona/listar');
    //         } else {
    //            frame($this, 'persona/updateERROR');
    //         }
    //     } else {
    //         // Mensaje ERROR
    //     }
    // }

    // public function delete() {
    //     $id = isset($_POST['id']) && ! empty($_POST['id']) ? $_POST['id'] : null;
    //     if ($id != null) {
    //         $this->load->model('persona_model');
    //         $this->persona_model->delete($id);
    //         redirect(base_url() . 'persona/listar');
    //     }
    // }
}
