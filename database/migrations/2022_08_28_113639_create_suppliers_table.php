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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
			$table->string('CompanyName', 50)->unique()->nullable();
			$table->string('ContactName', 100);
			$table->string('ContactTitle', 30)->nullable();
			$table->string('Address', 150)->nullable();
			$table->string('City', 15)->nullable();
			$table->string('Phone', 25)->nullable();
			$table->string('mobile', 25);
			$table->string('Email', 100)->unique();
			$table->string('WebSite', 100)->nullable();
			$table->string('DiscountType', 100)->nullable();
			$table->string('Logo', 100)->nullable();
			$table->text('Note')->nullable();
			$table->boolean('CurrentOrder')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
