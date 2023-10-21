<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use HasFactory;
    protected $fillable = [
        'Question1' => 'What does FIFA stand for in English?',
        'Question2' => 'Who is the world’s highest-paid athlete in 2021?',
        'Question3' => 'What was the first name of Argentinian soccer star Maradona?' ];
}
