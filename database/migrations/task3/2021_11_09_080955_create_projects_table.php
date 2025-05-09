<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration {
    /**
     * Run the migrations.
     *
     */
    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            // TASK: Add soft deletes column here
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down() {
        Schema::dropIfExists('projects');
    }
}
