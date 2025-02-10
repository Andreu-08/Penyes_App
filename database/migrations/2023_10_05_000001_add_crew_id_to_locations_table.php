<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCrewIdToLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->unsignedBigInteger('crew_id')->after('id'); // Añadido después de id
            $table->foreign('crew_id')->references('id')->on('crews')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign(['crew_id']);
            $table->dropColumn('crew_id');
        });
    }
}
