<?php
use App\Models\registermodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registermodels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rname');
            $table->string('rphone');
            $table->string('rplace');
            $table->string('rmailid');
            $table->string('rpassword');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registermodels');
    }
}
