<?php

test('filament has not the auto login button', function (): void {
    $response = get('/admin/login');

    expect($response->content())->not->toContain('admin@admin.com');
});
