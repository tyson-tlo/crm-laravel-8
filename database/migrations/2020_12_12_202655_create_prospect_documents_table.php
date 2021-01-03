<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospect_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('prospect_id');
            $table->string('name');
            $table->text('notes')->nullable();
            $table->string('path');
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
        Schema::dropIfExists('prospect_documents');
    }
}
