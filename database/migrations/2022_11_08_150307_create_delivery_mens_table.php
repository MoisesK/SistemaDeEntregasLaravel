<?php

use App\Models\Delivery;
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
        Schema::create('delivery_mens', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Delivery::class, 'deliveries_id')->constrained();
            $table->string('name', 100);
            $table->string('adress', 100);
            $table->string('vehicle', 100);
            $table->integer('age', false);
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
        Schema::dropIfExists('delivery_mens');
    }
};
