<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['surname', 'name', 'fiscal_code', 'date_of_birth', 'genre', 'exam_type', 'blood_platelet', 'white_blood_cells', 'hemoglobin', 'hematocrit', 'average_cell_volume', 'average_cell_content_hb', 'average_cell_concentration', 'gr', 'mean_plate_volume', 'hypochromic_red_blood_cells', 'sgpt'];
}
