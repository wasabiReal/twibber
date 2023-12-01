<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gossip extends Model
{
    use HasFactory;
    protected $table = 'gossip';
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'gossip_tags', 'gossip_id', 'tag_id');
    }


}
