<?php

namespace Tests\Feature\Http;

use Tests\TestCase;
use App\User;

class ProfileControllerTest extends TestCase
{
    public function testShow()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get(route('my'));

        $response->assertStatus(200)
            ->assertSee(e($user->name));
    }
}
