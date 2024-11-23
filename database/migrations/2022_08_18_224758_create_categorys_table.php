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
        Schema::create('categorys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("baseid")->comment("ID из источника"); 
            $table->integer("parentid")->comment("ID родительской категории"); 
            $table->string("name", 200)->comment("Имя категории"); 
            $table->string("slug", 200)->comment("Slug категории");

            $table->text('description')->comment('Описание');

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
        Schema::dropIfExists('categorys');
    }
};
