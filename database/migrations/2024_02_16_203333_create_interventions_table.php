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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->time('Heure_debut');
            $table->date('date_fin');
            $table->time('Heure_fin');
            $table->integer('delai');
            $table->string('etat');
            $table->string('diagnostique');
            $table->string('action_entreprise');
            $table->string('resultat');
            $table->string('description');
            $table->string('certificat');
            $table->unsignedBigInteger("id_intervenant");
            $table->foreign("id_intervenant")->references('id')->on("intervenants");
            $table->unsignedBigInteger("id_materiel");
            $table->foreign("id_materiel")->references('id')->on("materiels");
            $table->unsignedBigInteger("id_demandeur");
            $table->foreign("id_demandeur")->references('id')->on("demandeurs");
            $table->unsignedBigInteger("id_panne");
            $table->foreign("id_panne")->references('id')->on("pannes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
