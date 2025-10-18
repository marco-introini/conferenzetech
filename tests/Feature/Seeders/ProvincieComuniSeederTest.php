<?php

declare(strict_types=1);

use Database\Seeders\ProvincieComuniSeeder;
use Illuminate\Support\Facades\DB;

it('seeds provinces and comuni and links them correctly', function () {
    // Run the specific seeder
    $this->seed(ProvincieComuniSeeder::class);

    // Fetch the province id for MI
    $miId = DB::table('province')->where('short_name', 'MI')->value('id');
    expect($miId)->not->toBeNull();

    // Assert Milano comune exists and is linked to MI
    $row = DB::table('comuni')->where('name', 'Milano')->first();
    expect($row)->not->toBeNull();
    expect($row->province_id)->toBe($miId);

    // A couple more spot checks based on our sample JSON
    $rmId = DB::table('province')->where('short_name', 'RM')->value('id');
    $naId = DB::table('province')->where('short_name', 'NA')->value('id');

    expect($rmId)->not->toBeNull();
    expect($naId)->not->toBeNull();

    expect(DB::table('comuni')->where('name', 'Roma')->where('province_id', $rmId)->exists())->toBeTrue();
    expect(DB::table('comuni')->where('name', 'Napoli')->where('province_id', $naId)->exists())->toBeTrue();
});
