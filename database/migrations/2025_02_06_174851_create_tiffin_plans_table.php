<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('tiffin_plans', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->enum('frequency', ['daily', 'weekly', 'monthly']);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('tiffin_plans');
}
};
