<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Perdoruesi extends Model
{
	public $timestamps = false;
    protected $table = 'crudapp_telekomiKosoves';
    protected $primaryKey = 'id';
    protected $fillable = ['perdoruesi_umtk', 'oferta_umtk', 'numriTelefonit_umtk'];
	
}
