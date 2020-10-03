<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomenclatureremainsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nomenclatureremains', function (Blueprint $table) {
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
        Schema::table('nomenclatureremains', function (Blueprint $table) {
            $table->dropForeign('nomenclatureremains_contractingparty_id_foreign');
            $table->dropForeign('nomenclatureremains_nomenclature_id_foreign');
        });
    }
}
