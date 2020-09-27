<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableContractingparties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractingparties', function (Blueprint $table) {
            $table->id();
            $table->char('name', 150)->index();
            $table->char('inn', 12)->index();
            $table->char('phone', 12);
            $table->char('adress', 150);
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
        Schema::dropIfExists('contractingparties');
    }
}
