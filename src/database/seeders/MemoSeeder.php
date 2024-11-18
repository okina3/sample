<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemoSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        DB::table('memos')->insert([
            //ユーザー１のダミーデータ
            [
                'title' => 'タイトル１',
                'content' => 'ユーザー２に共有。編集機能あり。ユーザー１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１、テスト１',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル２',
                'content' => 'ユーザー２に共有。詳細のみ。ユーザー１、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２、テスト２',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル３',
                'content' => 'ユーザー３に共有。編集機能あり。ユーザー１、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、テスト３、、テスト３、、テスト３、、テスト３、、テスト３、、テスト３、、テスト３、、テスト３、、テスト３、',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル４',
                'content' => 'ユーザー３に共有。詳細のみ。ユーザー１、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４、テスト４',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル５',
                'content' => 'ユーザー２、ユーザー３に共有。両方とも編集機能あり。ユーザー１、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５、テスト５',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル６',
                'content' => '共有なし。ユーザー１、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６、テスト６',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル７',
                'content' => '共有なし。ユーザー１、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７、テスト７',
                'user_id' => '1',
                'deleted_at' => null,
                'created_at' => '2023/010/01/ 11:11:11'
            ],

            [
                'title' => 'タイトル８',
                'content' => 'ユーザー１、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用',
                'user_id' => '1',
                'deleted_at' => '2023/010/02/ 22:22:22',
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル９',
                'content' => 'ユーザー１、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用',
                'user_id' => '1',
                'deleted_at' => '2023/010/02/ 22:22:22',
                'created_at' => '2023/010/01/ 11:11:11'
            ],
            [
                'title' => 'タイトル１０',
                'content' => 'ユーザー１、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用、ソフトデリート用',
                'user_id' => '1',
                'deleted_at' => '2023/010/02/ 22:22:22',
                'created_at' => '2023/010/01/ 11:11:11'
            ],

            //ユーザー２のダミーデータ
            [
                'title' => 'タイトル１１',
                'content' => 'ユーザー１に共有。編集あり。ユーザー２、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１、テスト１１',
                'user_id' => '2',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル１２',
                'content' => 'ユーザー１に共有。詳細のみ。ユーザー２、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２、、テスト１２、テスト１２、テスト１２',
                'user_id' => '2',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル１３',
                'content' => 'ユーザー３に共有。編集あり。ユーザー２、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３、テスト１３',
                'user_id' => '2',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル１４',
                'content' => 'ユーザー１、ユーザー３に共有。ユーザー１は、編集あり。ユーザー３は、詳細のみ。ユーザー２、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４、テスト１４',
                'user_id' => '2',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル１５',
                'content' => '共有なし。ユーザー２、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５、テスト１５',
                'user_id' => '2',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],

            //ユーザー３のダミーデータ
            [
                'title' => 'タイトル１６',
                'content' => 'ユーザー１に共有。編集あり。ユーザー３、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６、テスト１６',
                'user_id' => '3',
                'deleted_at' => null,
                'created_at' => '2023/010/03/ 11:11:11'
            ],
            [
                'title' => 'タイトル１７',
                'content' => 'ユーザー１に共有。詳細のみ。ユーザー３、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７、テスト１７',
                'user_id' => '3',
                'deleted_at' => null,
                'created_at' => '2023/010/03/ 11:11:11'
            ],
            [
                'title' => 'タイトル１８',
                'content' => 'ユーザー２に共有。編集あり。ユーザー３、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８、テスト１８',
                'user_id' => '3',
                'deleted_at' => null,
                'created_at' => '2023/010/03/ 11:11:11'
            ],
            [
                'title' => 'タイトル１９',
                'content' => 'ユーザー１とユーザー２に共有。両方とも詳細のみ。ユーザー３、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９、テスト１９',
                'user_id' => '3',
                'deleted_at' => null,
                'created_at' => '2023/010/03/ 11:11:11'
            ],
            [
                'title' => 'タイトル２０',
                'content' => '共有なし。ユーザー３、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０、テスト２０',
                'user_id' => '3',
                'deleted_at' => null,
                'created_at' => '2023/010/03/ 11:11:11'
            ],
            //ユーザー４のダミーデータ
            [
                'title' => 'タイトル２１',
                'content' => 'ユーザー１とユーザー２に共有。両方とも編集あり。ユーザー４、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１、テスト２１',
                'user_id' => '4',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル２２',
                'content' => '共有なし。ユーザー４、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２、テスト２２',
                'user_id' => '4',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル２３',
                'content' => '共有なし。ユーザー４、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３、テスト２３',
                'user_id' => '4',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル２４',
                'content' => '共有なし。ユーザー４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４、テスト２４',
                'user_id' => '4',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ], [
                'title' => 'タイトル２５',
                'content' => '共有なし。ユーザー４、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５、テスト２５',
                'user_id' => '4',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            //ユーザー５のダミーデータ
            [
                'title' => 'タイトル２６',
                'content' => 'ユーザー４に共有。詳細のみ。ユーザー４、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６、テスト２６',
                'user_id' => '5',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル２７',
                'content' => '共有なし。ユーザー４、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７、テスト２７',
                'user_id' => '5',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル２８',
                'content' => '共有なし。ユーザー４、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８、テスト２８',
                'user_id' => '5',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル２９',
                'content' => '共有なし。ユーザー４、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９、テスト２９',
                'user_id' => '5',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
            [
                'title' => 'タイトル３０',
                'content' => '共有なし。ユーザー４、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０、テスト３０',
                'user_id' => '5',
                'deleted_at' => null,
                'created_at' => '2023/010/02/ 11:11:11'
            ],
        ]);
    }
}
