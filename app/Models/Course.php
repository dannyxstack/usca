<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name', 
        'code',
        'cricos_code', 
        'class',
        'status',
        'is_published',
        'aqf_level',
        'entry_requirements',
        'entry_req_desc',
        'entry_req_items',
        'entry_req_notes',
        'total_core_units',
        'total_electives_units',
        'mode_of_delivery',
        'placement',
        'location',
        'duration',
        'course_fees',
        'pathways',
        'employment_pathways',
        'course_structure', // json
        'assessment_mothodology',
        'reference_textbooks',
        'course_progress_policy',
        'rpl_ct',
        'further_information', //
     ];

    protected $casts = [
        'is_published' => 'integer',
    ];

}
