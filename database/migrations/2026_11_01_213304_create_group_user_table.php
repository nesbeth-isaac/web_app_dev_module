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
        Schema::create('group_user', function (Blueprint $table) {
            $table -> id(); 
                        $table->timestamps();

            $table -> foreignId('group_id')
                   -> constrained()
                   -> onDelete('cascade'); 
            
            $table -> foreignId('user_id')
                   -> constrained()
                   -> onDelete('cascade')
                   -> onUpdate('cascade'); 
            
            $table -> foreignId('group_access_level_id')
                   -> constrained()
                   -> onDelete('cascade')
                   -> onUpdate('cascade'); 
            
            
            $table->unique(['user_id', 'group_id']); 

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_user');
    }
};
