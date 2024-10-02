<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdvisorIdToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('advisor_id')->nullable()->after('id');

            $table->foreign('advisor_id')->references('id')->on('advisors')
                  ->onDelete('set null'); // ou 'cascade', dependendo da sua lógica
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['advisor_id']);
            $table->dropColumn('advisor_id');
        });
    }
}
