<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bundle_option_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 50);
            $table->string('label', 50)->nullable();
            $table->integer('product_bundle_option_id')->unsigned();

            $table->unique(['product_bundle_option_id', 'locale'], 'product_bundle_option_translations_option_id_locale_unique');
            $table->foreign('product_bundle_option_id', 'product_bundle_option_translations_option_id_foreign')->references('id')->on('product_bundle_options')->onDelete('cascade');
        });

        DB::statement('ALTER TABLE product_bundle_option_translations ROW_FORMAT = DYNAMIC');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_bundle_option_translations');
    }
};
