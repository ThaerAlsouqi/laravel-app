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
        Schema::create('job_history', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('finish_date')->nullable();
            $table->text('description')->nullable();
            
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('position_id');

            $table->foreign('employee_id')
            ->references('id')
            ->on('employees');

            $table->foreign('company_id')
            ->references('id')
            ->on('companies');

            $table->foreign('project_id')
            ->references('id')
            ->on('projects');

            $table->foreign('position_id')
            ->references('id')
            ->on('positions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_history');
    }
};
