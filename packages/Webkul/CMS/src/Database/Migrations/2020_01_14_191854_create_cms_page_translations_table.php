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
        Schema::create('cms_page_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_title');
            $table->string('url_key', 50);
            $table->longtext('html_content')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('locale', 50);
            $table->integer('cms_page_id')->unsigned();

            $table->unique(['cms_page_id', 'url_key', 'locale']);
            $table->foreign('cms_page_id')->references('id')->on('cms_pages')->onDelete('cascade');
        });

        DB::statement('ALTER TABLE cms_page_translations ROW_FORMAT = DYNAMIC');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_page_translations');
    }
};
