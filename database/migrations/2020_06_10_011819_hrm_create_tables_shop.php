<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HrmCreateTablesShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hrm_shop_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image', 200)->nullable();
            $table->string('alias', 120)->unique();
            $table->tinyInteger('sort')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('hrm_shop_news_description', function (Blueprint $table) {
            $table->integer('shop_news_id');
            $table->string('title', 200)->nullable();
            $table->string('keyword', 200)->nullable();
            $table->string('description', 300)->nullable();
            $table->text('content')->nullable();
            $table->primary(['shop_news_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hrm_shop_news');
        Schema::dropIfExists('hrm_shop_news_description');
    }
}
