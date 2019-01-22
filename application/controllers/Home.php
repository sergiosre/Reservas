<?php
class Home extends CI_Controller
{
    public function presentacion()
    {
        if ($this->session->userdata('usuario') && $this->session->userdata('password')) {
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
