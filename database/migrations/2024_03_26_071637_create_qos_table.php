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
        Schema::create('qos', function (Blueprint $table) {
            $table->decimal('longitude', 10, 6);
		    $table->decimal('latitute', 10, 6);
		    $table->double('pathloss');
		    $table->double('link_budget');
		    $table->double('field_strength');
		    $table->double('cnr');
		    $table->double('snr');
		    $table->double('ber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qos');
    }
};
