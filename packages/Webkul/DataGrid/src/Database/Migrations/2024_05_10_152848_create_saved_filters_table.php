<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datagrid_saved_filters', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('name', 50);
            $table->string('src', 50);
            $table->json('applied');
            $table->timestamps();

            $table->unique(['user_id', 'name', 'src']);
        });

        DB::statement('ALTER TABLE datagrid_saved_filters ROW_FORMAT = DYNAMIC');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datagrid_saved_filters');
    }
};
