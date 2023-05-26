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
        Schema::create('larvae', function (Blueprint $table) {
            $table->id();
            $table->char('regency_id', 4)->nullable();
            $table->char('district_id', 7)->nullable();
            $table->char('village_id', 10)->nullable();
            $table->foreignId('location_type_id')->nullable()->constrained('location_types');
            $table->foreignId('settlement_type_id')->nullable()->constrained('settlement_types');
            $table->foreignId('environment_type_id')->nullable()->constrained('environment_types');
            $table->foreignId('building_type_id')->nullable()->constrained('building_types');
            $table->foreignId('floor_type_id')->nullable()->constrained('floor_types');
            $table->foreignId('tpa_type_id')->nullable()->constrained('tpa_types');
            $table->longText('address')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('amount_of_larva');
            $table->integer('amount_of_egg');
            $table->integer('number_of_adult');
            $table->double('water_temperture');
            $table->double('salinity');
            $table->double('ph');
            $table->enum('aquatic_plant', ['yes', 'no']);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('regency_id')->references('id')->on('regencies');
            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('larvae');
    }
};
