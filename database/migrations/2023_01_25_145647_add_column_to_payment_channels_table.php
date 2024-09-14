<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPaymentChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_channels', function (Blueprint $table) {
            if (!Schema::hasColumn('accounting', 'settings')) {
                $table->string('settings')->nullable(); // Corrected from varchar to string
            }
            $table->text('currencies')->nullable()->after('settings');
        });
    }
}
