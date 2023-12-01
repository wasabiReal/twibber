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
        Schema::create('gossip_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gossip_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('gossip_id', 'gossip_tag_gossip_idx');
            $table->index('tag_id', 'gossip_tag_tag_idx');

            $table->foreign('gossip_id', 'gossip_tag_gossip_fk')->on('gossip')->references('id');
            $table->foreign('tag_id', 'gossip_tag_tag_idx')->on('tags')->references('id');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gossip_tags');
    }
};
