<?php

namespace :uc:vendor\:uc:package\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use :uc:vendor\:uc:package\Contracts\:uc:package as :uc:packageContract;
use :uc:vendor\:uc:package\Database\Factories\:uc:packageFactory

class :uc:package extends Model implements :uc:packageContract
{
    use HasFactory;
    protected $table = ':lc:package';
    protected $fillable = [
    ];


    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return \:uc:vendor\:uc:package\Database\Factories\:uc:packageFactory::new();
    }
}