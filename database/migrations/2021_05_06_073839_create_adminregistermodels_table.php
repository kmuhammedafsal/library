<?php
use App\Models\adminregistermodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminregistermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminregistermodels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('arname');
            $table->string('arphone');
            $table->string('arplace');
            $table->string('armailid');
            $table->string('arpassword');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminregistermodels');
    }
}
