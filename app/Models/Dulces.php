<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dulces extends Model
{
    use HasFactory;
    protected $table = "dulces";
    protected $fillable = ['nombre', 'categoría', 'precio', 'caducidad'];
    protected $hidden = ['id'];
    public function obtenerDulces(){
    	return Dulces::all();
    }
    public function obtenerDulcesPorId($id){
    	return Dulces::find($id);
    }
}
