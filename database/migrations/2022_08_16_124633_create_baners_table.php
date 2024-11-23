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
        Schema::create('baners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_name", 500)->comment('Имя изображения');
            $table->string("page", 100)->comment('Имя страницы');
            $table->string("page_area", 50)->comment('Область на странице');
            $table->string("title", 150)->comment('Заголовок');
            $table->string("sub_title", 350)->comment('Подзаголовок');
            $table->integer("order")->comment('Порядок сортировки');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baners');
    }
};
