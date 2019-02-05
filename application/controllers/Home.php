<?php
class Home extends CI_Controller
{
    public function presentacion()
    {
        $this->session->userdata('usuario');
        $this->session->userdata('password');
        if (isset($_SESSION['usuario'])) {
            redirect(base_url() . 'Usuario/dashboard');
            $this->load->view('horas_view/horas');

        } else {
            // echo "<h1>Hola" . $this->session->usuario . "</h1>";
            frame($this, 'home/login');
        }
    }

    public function index()
    {
        $this->presentacion();
    }
}
