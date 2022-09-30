<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cesid');
            $table->string('spirt');
            $table->longtext('thumbnail');
            $table->string('title');
            $table->string('menseyi');
            $table->string('istehsal_il');
            $table->longtext('desc');
            $table->longtext('terkibi');
            $table->longtext('uygunluq');
            $table->string('temp');
            $table->longtext('saxlama_formasi');
            $table->string('cat_id');
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
        Schema::dropIfExists('products');
    }
};
