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

    public function listarReservasUsuario($hora, $fecha, $usuario)
    {

        return R::getAll("select reserva.fecha, horario.hora from reserva, horario where reserva.hora = horario.id and horario.hora >= '$hora' and reserva.fecha >= '$fecha' and reserva.usuario = '$usuario'");
    }

    public function listarTodasReservas($usuario)
    {

        return R::getAll('select reserva.fecha, horario.hora from reserva , horario  where reserva.usuario = ? and reserva.hora = horario.id', [$usuario]);
    }
}
