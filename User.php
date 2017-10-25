<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;  
class User extends Authenticatable
{ 
    use Notifiable; 

    const CREATED_AT = 'usr_created_at'; // subscreve o padrão do campo timestamp (created_at)
    const UPDATED_AT = 'usr_updated_at'; // subscreve o padrão do campo timestamp (updated_at)

    protected $table = 'usuario'; //Define a tabela usada  diferente de (user)
    protected $primaryKey = 'usr_codigo'; //Define a chave primária da tabela
    public $incrementing = true; 
 
    public function getAuthPassword() //Subscreve o campo password
    {
        return $this->usr_senha;
    }  

    public function getRememberTokenName() // Subscreve o campo remember_token
    {
    return 'usr_remember_token';
    }
     
    //Campos Preenchiveis
    protected $fillable = [
        'usr_login','usr_nome', 'usr_email', 'usr_senha',
    ];
     
    protected $hidden = [
        'usr_senha', 'usr_remember_token',
    ]; 

}
