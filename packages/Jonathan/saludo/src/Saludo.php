<?php

namespace Jonathan\Saludo;

class Saludo
{
    public function saludar()
    {
        // Obtiene el nombre de la configuración del paquete
        $nombre = config('saludo.nombre');

        // Devuelve el saludo personalizado
        return "Hola, $nombre";
    }
}
