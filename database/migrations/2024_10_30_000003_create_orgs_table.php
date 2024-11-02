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
        Schema::create('orgs', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('location');
            $table->string('phone');
            $table->string('web_url')->nullable();
            $table->string('location_of_operation')->nullable();
            $table->string('themes')->nullable();
            $table->string('programs');
            $table->string('mission');
            $table->string('awards_reg');
            $table->string('religious_affiliation');
            $table->string('director_name');
            $table->string('title');
            $table->string('scope');
            $table->string('employees');
            $table->string('volunteers');
            $table->string('year_founded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orgs');
    }
};
