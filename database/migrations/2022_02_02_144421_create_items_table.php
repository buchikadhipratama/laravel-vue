<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->enum('vendor', ['Amarit & Associates Co Ltd', 'Amarit & Associates Logistics Co Ltd', 'Alphatrans Pte Ltd', 'Bintang Mas Shipping Pte Ltd', 'Bangkok Freight Forwarders Co Ltd']);
            $table->string('attention');
            $table->string('quotation');
            $table->enum('invoice');
            $table->enum('customer_contract');
            $table->enum('vendor_address');
            $table->string('customer_po');
            $table->string('description');
            $table->integer('qty');
            $table->enum('uom');
            $table->integer('unit_price');
            $table->integer('discount');
            $table->integer('gst_vat');
            $table->enum('currency', ['USD', 'AED']);
            $table->enum('change', ['MITME', 'Customer']);
            $table->string('attachment');
            $table->text('notes');
            $table->enum('link_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
