<?php
/**
 * Task
 *
 * @property-read \Project $project
 * @property integer $id 
 * @property integer $project_id 
 * @property string $name 
 * @property string $slug 
 * @property boolean $completed 
 * @property string $description 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Task whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereCompleted($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Task whereUpdatedAt($value)
 */
class Task extends Eloquent
{
    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo('Project');
    }
}