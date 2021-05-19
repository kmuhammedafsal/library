<?php
use App\Models\addmembermodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddmembermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmembermodels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mn');
            $table->string('mid');
            $table->string('jd');
            $table->string('ed');
            $table->string('am');
            $table->string('pm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addmembermodels');
    }
}
