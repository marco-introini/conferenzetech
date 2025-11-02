<?php

use App\Models\Conference;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained('users');
            $table->foreignIdFor(Conference::class)
                ->constrained('conferences');
            $table->text('public_message');
            $table->timestamps();
            $table->index(['user_id', 'conference_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
