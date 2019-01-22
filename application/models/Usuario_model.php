<?php

class Usuario_model extends CI_Model
{

    public function crear($nick, $nombre, $apellidos, $email, $password, $urbanizacion)
    {
        $ok = false;

        $bean = R::findOne('usuario', 'usuario=?', [$nick]);
        $ok = ($bean == null);

        //R::debug();
        if ($ok) {
            $usuario = R::dispense('usuario');
            $usuario->usuario = $nick;
            $usuario->nombre = $nombre;
            $usuario->apellido = $apellidos;
            $usuario->email = $email;
            $usuario->pwd = $password;
            $usuario->urbanizacion = $urbanizacion;
            R::store($usuario);
        }
        return $ok;
    }

    public function conectarse($nick, $password)
    {
        if (R::findOne('usuario', 'usuario=? and pwd=?', [$nick, $password])) {
            $ok = true;
        } else {
            $ok = false;
        }
        return $ok;
    }

    public function recuperarUrbanizacion($usuario)
    {
        $usuario = R::findOne('usuario', 'usuario=?', [$usuario]);
        $urbanizacion = $usuario->urbanizacion;
        return $urbanizacion;
    }

//     public function listar()
    //     {
    //         return R::findAll('persona');
    //     }

//     public function getPersonaById($id)
    //     {
    //         return R::findOne('persona', 'id=?', [$id]);
    //     }

//     public function update($id, $dni_nuevo, $nombre_nuevo, $apellido_nuevo, $id_pais_nuevo)
    //     {
    //         $ok = false;

//         $bean = R::findOne('persona', 'id=?', [$id]);
    //         $persona_error = R::findOne('persona', 'dni=? and id<>?', [$dni_nuevo, $id]);
    //         $ok = ($bean != null && $persona_error == null);

//         if ($ok) {
    //             $persona = R::load('persona', $id);
    //             $persona->dni = $dni_nuevo;
    //             $persona->nombre = $nombre_nuevo;
    //             $persona->apellido = $apellido_nuevo;
    //             $persona->nace = R::load('pais', $id_pais_nuevo);
    //             R::store($persona);
    //         }
    //         return $ok;
    //     }

//     public function delete($id)
    //     {
    //         $persona = R::load('persona', $id);
    //         R::trash($persona);
    //     }
}
