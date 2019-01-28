<?php
class Home extends CI_Controller
{
    public function presentacion()
    {
        $this->load->library('session');
        $usuario = $this->session->userdata('usuario');
        $pw = $this->session->userdata('password');
        if (($usuario != null) && ($pw != null)) {
            redirect(base_url() . 'Usuario/dashboard');
            $this->load->view('horas_view/horas');
        } else {
            frame($this, 'home/login');
        }
    }

    public function index()
    {
        $this->presentacion();
    }
}
