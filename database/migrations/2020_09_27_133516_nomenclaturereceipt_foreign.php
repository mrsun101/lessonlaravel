<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomenclaturereceiptForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nomenclaturereceipt', function (Blueprint $table) {
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
        Schema::table('nomenclaturereceipt', function (Blueprint $table) {
            $table->dropForeign('nomenclaturereceipt_contractingparty_id_foreign');
            $table->dropForeign('nomenclaturereceipt_nomenclature_id_foreign');
        });
    }
}
