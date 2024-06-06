<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')
            ->references('id')
            ->on('projects')
            //aggiungo cascade per eliminare entrambe le righe
            ->onDelete('cascade');

            $table->unsignedBigInteger('technology_id');
            $table->foreign('technology_id')
            ->references('id')
            ->on('technologies')
            //aggiungo cascade per eliminare entrambe le righe
            ->onDelete('cascade');

            //dico quali sono gli id della tabella ponte
            $table->primary(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
