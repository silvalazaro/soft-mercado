<?php

namespace App\Model;

use App\Support\Str;
use JsonSerializable;
use stdClass;

class Modelo implements JsonSerializable
{
    protected array $serialize = [];

    public function __construct($args)
    {
        foreach ($this->fillable as $value) {
            $method = 'set' . $value;
            if(isset($args->$value))
                $this->$method($args->$value);
        }
    }

    public function jsonSerialize() {
        $data = new stdClass;
        foreach($this->serialize as $key){
            $method = 'get' . $key;
            $data->$key = $this->$method();
        }
        return $data;
    }
}
