<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('certificates', function (Blueprint $table) {
            // Check if 'type' column exists before attempting to modify it
            if (!Schema::hasColumn('certificates', 'type')) {
                $table->enum('type', ['quiz', 'course', 'bundle'])
                      ->characterSet('utf8mb4')
                      ->collation('utf8mb4_unicode_ci')
                      ->nullable(false)
                      ->after('user_grade');
            } else {
                // Modify the column if it already exists
                DB::statement("ALTER TABLE `certificates` MODIFY COLUMN `type` enum('quiz', 'course', 'bundle') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL AFTER `user_grade`");
            }
        
            // Add 'bundle_id' column
            $table->integer('bundle_id')->unsigned()->nullable()->after('webinar_id');
        
            // Add foreign key constraint
            $table->foreign('bundle_id')->references('id')->on('bundles')->onDelete('cascade');
        });
        
        Schema::table('certificates_templates', function (Blueprint $table) {
            // Check if 'type' column exists before attempting to modify it
            if (!Schema::hasColumn('certificates_templates', 'type')) {
                $table->enum('type', ['quiz', 'course', 'bundle'])
                      ->characterSet('utf8mb4')
                      ->collation('utf8mb4_unicode_ci')
                      ->nullable(false)
                      ->after('image');
            } else {
                // Modify the column if it already exists
                DB::statement("ALTER TABLE `certificates_templates` MODIFY COLUMN `type` enum('quiz', 'course', 'bundle') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL AFTER `image`");
            }
        });
        
    }

};
