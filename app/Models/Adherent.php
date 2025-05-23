<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Adherent extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'phone_number', 'address'];
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class, 'adherent_id');
    }
}