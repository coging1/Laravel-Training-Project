<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'middle_name',
      'last_name',
      'barangay',
      'street',
      'email_address',
    ];
}
