<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post__jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('organization_name');
            $table->string('organization_address');
            $table->string('organization_email')->unique();
            $table->string('organization_mobile');
            $table->string('job_name');
            $table->string('position');
            $table->string('description');
            $table->decimal('salary');
            $table->text('responsibilities');
            $table->text('skill');
            $table->text('education');
            $table->string('type');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post__jobs');
    }
}
