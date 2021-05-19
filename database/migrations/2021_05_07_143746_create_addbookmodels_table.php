<?php
use App\Models\addbookmodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddbookmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addbookmodels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('abookid');
            $table->string('abookname');
            $table->string('aauthor');
            $table->string('acategory');
            $table->string('apublisher');
            $table->string('arent');
            $table->string('adate');
            $table->mediumText("pimage")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addbookmodels');
    }
}
