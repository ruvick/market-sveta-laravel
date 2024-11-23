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
            $table->timestamps();
            $table->string('name', 400)->comment('Наименование');
            $table->string('slug', 400)->comment('Slug (для URL)');
            $table->float('price', 8, 2)->comment('Основная цена');
            $table->float('price_old', 8, 2)->comment('Цена до скидки');
            $table->string('manufacture_status', 30)->comment('Статус товара');
            $table->integer('insklad')->comment('На складе');
            $table->string('sku', 150)->comment('Артикул');
            $table->string('brand', 100)->comment('Бренд');
            $table->string('state', 100)->comment('Страна');
            $table->string('collection', 100)->comment('Коллекция');
            $table->string('style', 60)->comment('Стиль');
            $table->string('form', 60)->comment('Форма');
            $table->string('arm_color', 60)->comment('Цвет арматуры');
            $table->string('plaf_color', 60)->comment('Цвет плафона');
            $table->string('arm_material', 60)->comment('Материал арматуры');
            $table->string('plaf_material', 60)->comment('Материал плафона');
            $table->string('mesto', 100)->comment('Место использования');

            $table->string('quote', 400)->comment('Цитата');
            $table->text('description')->comment('Описание');

            $table->integer('cat1')->comment('Категория 1');
            $table->integer('cat2')->comment('Категория 2');
            $table->integer('cat3')->comment('Категория 3');
            $table->integer('cat4')->comment('Категория 4');

            $table->string('img', 500)->comment('Основное изображение');

            $table->string('title_seo', 100)->comment('SEO заголовок');
            $table->string('description_seo', 300)->comment('SEO описание');
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
