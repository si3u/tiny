<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'links', function (Blueprint $table) {
                $table->increments('id');
                $table->string('url');
                $table->string('name')->commnet();
                $table->string('logo')->nullable();
                $table->string('linkman')->comment('联系人')->nullable();
            $table->unsignedInteger('type_id')->index();
                $table->integer('order')->default(0)->index()->comment('排序字段');
                $table->boolean('is_visible')->default(true);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
