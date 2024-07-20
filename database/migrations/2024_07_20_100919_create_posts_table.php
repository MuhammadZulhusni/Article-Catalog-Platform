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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('author_id')->constrained(
                table: 'users', 
                indexName: 'posts_user_id'
            );
            // Defines a foreign key on the 'author_id' column, referencing the 'id' column on the 'users' table and naming the index 'posts_user_id'
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps(); //Default akan tambah created_at and updated_at column
        });
        
        // Primary Key: The 'id' column in the 'users' table is the primary key. 
        // Foreign Key: The 'author_id' column is a foreign key in the 'posts' table. It references the id column in the users table.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
