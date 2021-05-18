<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("estados", function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->timestamps();
        });
     
        DB::table("estados")->insert([
            ["nome" => "Paraíba"],
            ["nome" => "Pernambuco"],
            ["nome" => "Rio de Janeiro"],
            ["nome" => "Acre"],
            ["nome" => "Santa Catarina"]
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
