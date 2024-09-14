<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'name'
    ];
    public function showtags()
    {
        $tags = DB::connection('mysql')->table('tags')->get();
        return $tags;
    }
    public function createTag($name)
    {
        $tag = DB::connection('mysql')->table('tags')
            ->insert([
                'name' => $name,
            ]);
        return $tag;
    }
    public function deleteTag($id)
    {
        $tag = Tag::find($id);
        if ($tag) {
            $deleted =  $tag->delete();
            if ($deleted) return true;
        }
        return false;
    }
}
