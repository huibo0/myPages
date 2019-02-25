<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('文章名');
            $table->string('describe')->default('')->comment('描述');
            $table->string('url')->default('')->comment('链接');
            $table->text('content')->comment('内容');
            $table->string('image')->default('')->comment('主图');
            $table->string('subImage_1')->default('')->comment('子图1');
            $table->string('subImage_2')->default('')->comment('子图2');
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
