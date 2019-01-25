<?php

class Reserva extends CI_Controller
{

    public function reservarAjax()
    {

        $fecha = isset($_POST['fecha']) && !empty($_POST['fecha']) ? $_POST['fecha'] : null;
        $hora = isset($_POST['hora']) && !empty($_POST['hora']) ? $_POST['hora'] : null;
        $usuario = isset($_SESSION['usuario']) && !empty($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
        $this->load->model('usuario_model');
        $urbanizacion = $this->usuario_model->recuperarUrbanizacion($usuario);

        $this->load->model('horas_model');
        $horaid = $this->horas_model->recuperarHorasById($hora);

        if (($usuario != null) && ($fecha != '' || $fecha != null) && ($horaid != null)) {
            $this->load->model('reservas_model');
            $ok = $this->reservas_model->reservar($usuario, $urbanizacion, $fecha, $horaid);
            if ($ok) {
                // frame($this, 'reservas_view/reservaOK');
                // redirect(base_url() . 'Usuario/dashboard');
                echo "<h3>¡Reserva Realizada!</h3>";
            } else {
                echo "<h3>¡La reserva no pudo ser realizada!</h3>";
                // frame($this, 'reservas_view/reservaERROR');
            }
        } else {
            echo "<h3>¡La reserva no pudo ser realizada!</h3>";
        }
    }
    

    public function mostrarHistoricoReservas()
    {
        frame($this, 'reservas_view/historicoReservas');
    }
}
