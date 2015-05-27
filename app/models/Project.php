<?php
/**
 * Project
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Task[] $tasks
 * @property integer $id 
 * @property string $name 
 * @property string $slug 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Project whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Project whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Project whereUpdatedAt($value)
 */
class Project extends Eloquent
{
    protected $guarded = [];
    public function tasks()
    {
        return $this->hasMany('Task');
    }
}