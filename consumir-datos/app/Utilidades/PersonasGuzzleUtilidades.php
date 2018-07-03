<?php

namespace App\Utilidades;


class PersonasGuzzleUtilidades extends GuzzleHttpRequestUtilidades
{
    
    public function all()
    {
        return $this->get('personas');
    }

    public function find($id)
    {
        return $this->get("personas/{$id}");
    }
    
    public function destroy($id)
    {
        return $this->delete("personas/{$id}");
    }


}