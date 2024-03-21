<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('win_bonuses', function (Blueprint $table) {
            $table->renameColumn('amount', 'prize');
            $table->string('prize')->change();
            $table->string('description')->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('win_bonuses', function (Blueprint $table) {
            $table->renameColumn('prize', 'amount');
            $table->integer('amount')->change();
            $table->dropColumn('description');

        });
    }
};
