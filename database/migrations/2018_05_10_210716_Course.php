<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Course extends Migration {

    public function up() {
        Schema::create("courses", function (\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments("id");
            $table->string("autor");
            $table->string("name");
            $table->text("description");
            $table->float("price");
            $table->timestamp();
        });
    }

    public function down() {
        Schema::drop("courses");
    }

}
