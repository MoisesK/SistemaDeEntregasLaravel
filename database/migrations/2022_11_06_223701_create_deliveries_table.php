<?php

use App\Models\DeliveryMan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DeliveryMan::class, 'deliverie_mens_id')->constrained();
            $table->string('title', 100);
            $table->dateTime('deadline');
            $table->string('descript', 200);
            $table->string('stats', 100);
            $table->string('place', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
};
