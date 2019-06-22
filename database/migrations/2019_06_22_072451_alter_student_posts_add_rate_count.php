<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStudentPostsAddRateCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_posts', function (Blueprint $table) {
            $table->decimal('average_rate', 2, 1)->default(0)->after('viewcount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_posts', function (Blueprint $table) {
            $table->dropColumn('average_rate');
        });
    }
}
