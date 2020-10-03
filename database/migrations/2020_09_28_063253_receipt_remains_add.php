<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReceiptRemainsAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nomenclaturereceipt', function (Blueprint $table) {
            $table->decimal("count", 10, 2);
            $table->decimal("sum",10,2);
        });
        
        Schema::table('nomenclatureremains', function (Blueprint $table) {
            $table->decimal("count", 10, 2);
            $table->decimal("sum",10,2);
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
            $table->dropColumn("count");
            $table->dropColumn("sum");
        });
        
        Schema::table('nomenclatureremains', function (Blueprint $table) {
            $table->dropColumn("count");
            $table->dropColumn("sum");
        });
    }
}
