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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doc');
            $table->string('salary');
            $table->string('pay_per_hour');
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_documents')->constrained('documents');
            $table->foreignId('id_contracts')->constrained('contracts');
            $table->foreignId('id_payments')->constrained('payments');
            $table->foreignId('id_roles')->constrained('roles');
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
        Schema::dropIfExists('people');
    }
};
