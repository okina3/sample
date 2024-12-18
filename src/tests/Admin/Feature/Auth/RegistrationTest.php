<?php

namespace Tests\Admin\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Admin\TestCase;

class RegistrationTest extends TestCase
{
    // 管理者は、一人なので新規登録のルートはコメントにしてあるので、ここもコメントにする。

    // use RefreshDatabase;

    // /**
    //  * 登録画面が正常に表示されるかテスト。
    //  * レスポンスとしてHTTPステータス200が返されることを確認。
    //  * @return void
    //  */
    // public function test_registration_screen_can_be_rendered(): void
    // {
    //     $response = $this->get('admin/register');

    //     $response->assertStatus(200);
    // }

    // /**
    //  * 新規ユーザーが登録できることをテスト。
    //  * 正しい登録情報を送信後、ユーザーが認証され、ホームページにリダイレクトされることを確認。
    //  * @return void
    //  */
    // public function test_new_users_can_register(): void
    // {
    //     $response = $this->post('admin/register', [
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //         'password' => 'password',
    //         'password_confirmation' => 'password',
    //     ]);

    //     $this->assertAuthenticated('admin');
    //     $response->assertRedirect(RouteServiceProvider::ADMIN_HOME);
    // }
}
