<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany as RelationsHasMany;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = "m_level";
    protected $primaryKey = "level_id";

    public function users(): RelationsHasMany
    {
        return $this->HasMany(UserModel::class);
    }
}