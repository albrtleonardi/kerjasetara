<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();  // Job ID
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');  // Foreign key to the companies table
            $table->string('job_title');  // Job Title
            $table->string('location');  // Job Location
            $table->boolean('remote');  // Remote status
            $table->text('disability_friendly');  // Accommodations
            $table->string('job_type');  // Job Type
            $table->string('salary_range')->nullable();  // Salary Range
            $table->text('job_description');  // Job Description
            $table->text('required_skills');  // Required Skills
            $table->text('disability_types_supported');  // Supported Disability Types
            $table->date('application_deadline');  // Application Deadline
            $table->string('contact_email');  // Contact Email
            $table->timestamps();  // Created at, Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
