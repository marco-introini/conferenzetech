<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('telegram')
                ->nullable()
                ->after('password');
            $table->string('linkedin')
                ->nullable()
                ->after('telegram');
            $table->string('twitter')
                ->nullable()
                ->after('linkedin');
        });
    }
};
