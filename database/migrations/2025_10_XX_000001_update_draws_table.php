<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDrawsTable extends Migration
{
    public function up()
    {
        Schema::table('draws', function (Blueprint $table) {
            if (!Schema::hasColumn('draws', 'location_id')) {
                $table->unsignedBigInteger('location_id')->nullable();
            }
            if (!Schema::hasColumn('draws', 'crew_id')) {
                $table->unsignedBigInteger('crew_id')->nullable();
            }
            if (!Schema::hasColumn('draws', 'year')) {
                $table->integer('year')->nullable();
            }
            // Evita duplicar restricciones para prevenir errores de "Duplicate key"
            // $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            // $table->foreign('crew_id')->references('id')->on('crews')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('draws', function (Blueprint $table) {
            $table->dropColumn(['location_id', 'crew_id', 'year']);
        });
    }
}
