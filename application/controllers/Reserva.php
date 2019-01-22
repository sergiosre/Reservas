<?php

class Reserva extends CI_Controller
{

    public function reservarPost()
    {

        $fecha = isset($_POST['fecha']) && !empty($_POST['fecha']) ? $_POST['fecha'] : null;
        $hora = isset($_POST['hora']) && !empty($_POST['hora']) ? $_POST['hora'] : null;
        $usuario = isset($_SESSION['usuario']) && !empty($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
        $this->load->model('usuario_model');
        $urbanizacion = $this->usuario_model->recuperarUrbanizacion($usuario);
        R::debug();

        $this->load->model('horas_model');
        $horaid = $this->horas_model->recuperarHorasById($hora);
        $horaid = $horaid[0];
        
        $this->load->model('reservas_model');
        $ok = $this->reservas_model->reservar($usuario, $urbanizacion, $fecha, $horaid);

        if (($usuario != null) && ($fecha != null) && ($horaid != null)) {
            if ($ok) {
                frame($this, 'reservas_view/reservaOK');
                redirect(base_url() . 'Usuario/dashboard');
                echo $horaid;
            } else {
                frame($this, 'reservas_view/reservaERROR');
            }
        } else {
            frame($this, 'reservas_view/reservaERROR', $data);
        }
    }

}
