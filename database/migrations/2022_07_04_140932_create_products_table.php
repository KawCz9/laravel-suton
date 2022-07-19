<?php

use App\Models\ProductType;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อสินต้า');
            $table->string('scale')->comment('ขนาดสินค้า');
            $table->string('number')->comment('เบอร์สินค้า');
            $table->string('case')->comment('บรรจุ');
            $table->integer('item')->comment('จำนวน');
            $table->float('price')->comment('ราคา');
            $table->string('cost')->comment('ต้นทุน');
            $table->string('barcode')->comment('บาร์โค้ด');
            $table->text('image')->nullable()->comment('ภาพสินค้า');
            $table->foreignIdFor(ProductType::class);
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
        Schema::dropIfExists('products');
    }
};
