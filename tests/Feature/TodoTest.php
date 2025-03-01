<?php

use App\Models\Todos;
use App\Models\User;

it('displays todos', function () {
    // ユーザを作成
    $user = Todos::factory()->create();

    // ユーザを認証
    $this->actingAs($user);

    // Tweetを作成
    $toto = Todos::factory()->create();

    // GETリクエスト
    $response = $this->get('/todos');

    // レスポンスにTweetの内容と投稿者名が含まれていることを確認
    $response->assertStatus(200);
    $response->assertSee($toto->todo);
    $response->assertSee($toto->user->name);
});
