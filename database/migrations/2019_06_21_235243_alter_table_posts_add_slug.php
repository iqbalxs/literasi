<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePostsAddSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_posts', function (Blueprint $table) {
            $table->string('slug')->after('title')->nullable();
        });

        Schema::table('student_posts', function (Blueprint $table) {
            $table->string('slug')->after('title')->nullable();
        });
        
        Schema::table('teacher_posts', function (Blueprint $table) {
            $table->string('slug')->after('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_posts', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('student_posts', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        
        Schema::table('teacher_posts', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
