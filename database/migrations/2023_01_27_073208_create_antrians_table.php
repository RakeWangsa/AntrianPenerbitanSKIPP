<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian');
            $table->foreignId('user_id')->nullable();
            $table->string('no_ppk');
            $table->enum('jenis_layanan', ['karantina', 'mutu', 'cs']);
            $table->boolean('is_call')->default(false);
            $table->datetime('tanggal_antrian')->default(Carbon::now());
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
        Schema::dropIfExists('antrians');
    }
};
