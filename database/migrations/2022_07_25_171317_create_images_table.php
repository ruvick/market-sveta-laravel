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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('product_sku', 150)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('img_name', 500)->comment('Изображение');
            $table->string('alt', 150)->comment('Текст в alt');
            $table->string('title', 150)->comment('Текст в title');
            $table->integer('order')->comment('Порядок в галерее');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
