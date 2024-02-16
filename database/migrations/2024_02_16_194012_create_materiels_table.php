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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string("num_inventaire");
            $table->date("date_achat");            
            $table->string("type_materiel");
            $table->unsignedBigInteger("id_type_materiel");
            $table->foreign("id_type_materiel")->references('id')->on("typemateriel");
            $table->unsignedBigInteger("id_etage");
            $table->foreign("id_etage")->references('id')->on("etages");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
