<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Controller extends BaseController
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'age' => 'integer|min:0|max:150',
    );
    public function getData(){
        return $this->id . ':' . $this->name. '(' . $this->age . ')';
    }
}
