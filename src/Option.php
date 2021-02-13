<?php

namespace Bitfertig\Options;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    protected $casts = [
        'value' => 'json',
    ];

    public function exists() {
        return $this->exists;
    }

    public function get($default = null) {
        return $this->value ?? $default;
    }

    public function set($value) {
        $this->value = $value;
        return $this->save();
    }

    public function remove()
    {
        return $this->delete();
    }

}
