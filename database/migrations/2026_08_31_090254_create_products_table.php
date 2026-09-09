<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                                    // 1. Primary Key
            $table->string('name');                          // 2. Product Name
            $table->text('description')->nullable();         // 3. Description
            $table->decimal('price', 8, 2);                 // 4. Price
            $table->integer('stock')->default(0);            // 5. Stock count
            $table->timestamps();                            // Created & updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
