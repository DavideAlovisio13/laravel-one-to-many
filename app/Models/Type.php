<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['data_science_projects', 'web-design_projects', 'ui-ux_projects', 'mobile_projects', 'game_projects', 'machine_learning_projects', 'other_projects'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public static function generateSlug($name)
    {
        $slug = Str::slug($name, '-');
        $count = 1;
        while (Type::where('slug', $slug)->first()) {
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }
        return $slug;
    }
}
