<?php

use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows a user to create a note', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = $this->post('/note', [
        'note' => 'This is a test note',
        'user_id'=> $user->id,
    ]);

    $response->assertStatus(302);
    $this->assertDatabaseHas('notes', [
        'note' => 'This is a test note',
        'user_id' => $user->id,
    ]);
});

it('allows a user to view notes', function () {
    $user = User::factory()->create();
    $note = Note::factory()->create(['user_id' => $user->id]);

    $this->actingAs($user);

    $response = $this->get('/note/' . $note->id);

    $response->assertStatus(200);
    $response->assertSee($note->note);
});

it('allows a user to update a note', function () {
    $user = User::factory()->create();
    $note = Note::factory()->create(['user_id' => $user->id]);

    $this->actingAs($user);

    $response = $this->put("/note/{$note->id}", [
        'note' => 'Updated note content',
    ]);

    $response->assertStatus(302);
    $this->assertDatabaseHas('notes', [
        'id' => $note->id,
        'note' => 'Updated note content',
    ]);
});

it('allows a user to delete a note', function () {
    $user = User::factory()->create();
    $note = Note::factory()->create(['user_id' => $user->id]);

    $this->actingAs($user);

    $response = $this->delete("/note/{$note->id}");

    $response->assertStatus(302);
    $this->assertDatabaseMissing('notes', [
        'id' => $note->id,
    ]);
});
