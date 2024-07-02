<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// CREO LA CLASSE MOVIE PERCHè NEL DATABASE CHE HO IMPORTATO HO COME PROPRIETà MOVIES E DOPO LO VADO A RICHIAMARE NEI CONTROLLER E AUTOMAGICAMENTE MI AGGIUGE LA S LARAVEL
class Movie extends Model
{
    use HasFactory;
}
