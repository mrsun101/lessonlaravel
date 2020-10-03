<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomenclatureSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomenclaturesale', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractingparty_id')->index();
            $table->foreignId('nomenclature_id')->index();
            $table->timestamps();
            $table->decimal("count", 10, 2);
            $table->decimal("sum",10,2);
        });
     
        
        Schema::table('nomenclaturesale', function (Blueprint $table) {
            $table->foreign("contractingparty_id")->references("id")->on("contractingparties");
            $table->foreign("nomenclature_id")->references("id")->on("nomenclature");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomenclaturesale');
    }
}
