<?php

class Reservas_model extends CI_Model
{
    public function reservar($usuario, $urbanizacion, $fecha, $hora)
    {
        $ok = false;
        $bean = R::findOne('reserva', 'usuario=? and urbanizacion=? and hora=? and fecha=?', [$usuario, $urbanizacion, $hora, $fecha]);
        $ok = ($bean == null);

        if ($ok) {
            $reserva = R::dispense('reserva');
            $reserva->usuario = $usuario;
            $reserva->urbanizacion = $urbanizacion;
            $reserva->fecha = $fecha;
            $reserva->hora = $hora;

            R::store($reserva);
        }

        return $ok;

    }

    public function listarReservasUsuario($usuario)
    {
        // return R::findAll("select r.fecha, h.hora from reserva r, horario h where r.usuario = 'lorenamh' and r.hora = h.id ");
        return R::getAll('select reserva.fecha, horario.hora from reserva , horario  where reserva.usuario = ? and reserva.hora = horario.id', [$usuario]);
    }
}
