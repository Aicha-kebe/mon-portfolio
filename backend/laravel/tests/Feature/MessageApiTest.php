<?php

namespace Tests\Feature;

use Tests\TestCase;

class MessageApiTest extends TestCase
{
    public function test_it_creates_a_message_from_the_contact_form(): void
    {
        $response = $this->postJson('/api/messages', [
            'nom' => 'Alice',
            'email' => 'alice@example.com',
            'message' => 'Bonjour, j’ai un projet web à développer.',
        ]);

        $response
            ->assertStatus(201)
            ->assertJsonPath('success', true)
            ->assertJsonPath('message', 'Votre message a été envoyé avec succès.');
    }
}
