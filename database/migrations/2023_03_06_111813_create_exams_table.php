<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('surname', 30);
            $table->string('name', 30);
            $table->string('fiscal_code', 50);
            $table->string('date_of_birth');
            $table->string('genre');
            $table->text('exam_type');
            $table->integer('blood_platelet')->unsigned();
            $table->float('white_blood_cells', 4, 2, false);
            $table->tinyInteger('hemoglobin')->unsigned();
            $table->tinyInteger('hematocrit')->unsigned();
            $table->tinyInteger('average_cell_volume')->unsigned();
            $table->tinyInteger('average_cell_content_hb')->unsigned();
            $table->tinyInteger('average_cell_concentration')->unsigned();
            $table->tinyInteger('gr')->unsigned();
            $table->tinyInteger('mean_plate_volume')->unsigned()->nullable();
            $table->tinyInteger('hypochromic_red_blood_cells')->unsigned();
            $table->tinyInteger('sgpt')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
