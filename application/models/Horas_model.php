<?php

class Horas_model extends CI_Model
{
    public function recuperarHorasById($hora)
    {
        return R::getCell("select id from horario where hora='$hora'");

    }

    public function recuperarHoras($fecha, $hora)
    {
        return R::getCol("SELECT hora
        FROM horario
        WHERE id
        NOT IN
        (SELECT hora FROM reserva WHERE fecha='$fecha') AND horario.hora > '$hora'");
    }
}
