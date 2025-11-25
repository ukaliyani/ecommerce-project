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
            $table->id(); // Auto-increment ID

            $table->string('name'); // Product Name
            $table->unsignedBigInteger('category_id'); // Category dropdown
            $table->text('description')->nullable(); // Description
            $table->decimal('price', 10, 2); // Price
            $table->decimal('sale_price', 10, 2)->nullable(); // Sale Price
            $table->integer('stock')->default(0); // Stock quantity
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status dropdown
            $table->timestamps(); // created_at & updated_at
            // Foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
