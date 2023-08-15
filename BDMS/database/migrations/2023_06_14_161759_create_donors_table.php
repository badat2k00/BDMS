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
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('Donor_ID');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Blood_Type');
            $table->date('DOB');
            $table->string('Gender');
            $table->text('Address');
            $table->string('Contact_Number');
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
