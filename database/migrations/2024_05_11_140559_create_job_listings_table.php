<?php

use App\Models\Employer;
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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            // foreign id called employer_id
            
            // $table->unsignedBigInteger('employer_id');
            // we use unisgnedBigInteger because whenever we call id method within migration, creating bigIntegerColumn
            
            // or we can use foreignIdFor that accepts Models
            $table->foreignIdFor(App\Models\Employer::class);

            $table->string('title');
            $table->string('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
