<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assingment extends Model
{
    use HasFactory;

    public function complete() {
        $this->completed = true;
        $this->save();
    }
}
