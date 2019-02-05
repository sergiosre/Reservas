<?php

class Reserva extends CI_Controller
{

    public function reservarAjax()
    {

        $fecha = isset($_POST['fecha']) && !empty($_POST['fecha']) ? $_POST['fecha'] : null;
        $hora = isset($_POST['hora']) && !empty($_POST['hora']) ? $_POST['hora'] : null;
        $usuario = $this->session->userdata('usuario');
        $this->load->model('usuario_model');
        $urbanizacion = $this->usuario_model->recuperarUrbanizacion($usuario);

        $this->load->model('horas_model');
        $horaid = $this->horas_model->recuperarHorasById($hora);

        if (($usuario != null) && ($fecha != '' || $fecha != null) && ($horaid != null)) {
            $this->load->model('reservas_model');
            $ok = $this->reservas_model->reservar($usuario, $urbanizacion, $fecha, $horaid);
            if ($ok) {
                echo "<h3>¡Reserva Realizada!</h3>";
            } else {
                echo "<h3>¡La reserva no pudo ser realizada!</h3>";
            }
        } else {
            echo "<h3>¡La reserva no pudo ser realizada!</h3>";
        }
    }

    public function proximosPartidos()
    {
        $hoy = date('m/d/Y');
        $hora = date("H:i");
        echo $hora;
        echo $hoy;

        if($hora>"21:00"){
            $hora = "08:00";
        }

        $this->load->model('reservas_model');
        $reservas = $this->reservas_model->listarReservasUsuario($hora, $hoy, $_SESSION['usuario']);
        $data['reservas'] = $reservas;
        frame($this, 'reservas_view/proximosPartidos', $data);

        // echo $hora . " " . $hoy . " " . $_SESSION['usuario'];
    }

    public function historialPartidos()
    {
        $this->load->model('reservas_model');
        $reservas = $this->reservas_model->listarTodasReservas($_SESSION['usuario']);
        $data['reservas'] = $reservas;
        frame($this, 'reservas_view/historicoReservas', $data);
    }
}
