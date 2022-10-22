<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blogtitle');
            $table->string('category');
            $table->string('slug')->unique();
            $table->string('featuredimage');
            $table->text('description');
            $table->enum('status', ['0', '1'])->default('1');
             $table->string('posted_by');
              $table->enum('user_type', ['Admin', 'User'])->default('Admin');
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
        Schema::dropIfExists('blogs');
    }
}
