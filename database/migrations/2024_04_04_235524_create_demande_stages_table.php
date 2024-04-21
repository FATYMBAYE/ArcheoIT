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
        Schema::create('demande_stages', function (Blueprint $table) {
            $table->increments('Id_demande');
           $table->integer('Id_stage');
            $table->string('nom_user');
            $table->string('prenom_user');
            $table->string('mail_user');
            $table->string('phone_user');
            $table->date('naissance');
            $table->longText('commentaires')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_stages');
    }
};
