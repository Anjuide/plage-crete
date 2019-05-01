<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToBeaches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beaches', function (Blueprint $table) {
            // Ajouter la colonne user_id à la table beaches
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beaches', function (Blueprint $table) {
            // Supprimer la colonne user_id à la table beaches
            $table->dropColumn('user_id');
        });
    }
}
