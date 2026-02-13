<?php

use App\Models\User;

test('guests are redirected from the demo page', function () {
    $response = $this->get(route('demo'));
    $response->assertRedirect(route('login'));
});

test('authenticated users can visit the demo page', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('demo'));
    $response->assertOk();
});
