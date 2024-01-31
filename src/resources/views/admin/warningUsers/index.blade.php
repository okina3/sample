<x-app-layout>
    {{-- フラッシュメッセージ --}}
    <x-common.flash-message status="session('status')"/>
    <div class="max-w-screen-lg mx-auto">
        {{-- ユーザーの検索の表示エリア --}}
        <section class="mb-5 p-3 border border-gray-400 rounded-lg bg-gray-200">
            <form action="{{ route('admin.warning.index') }}" method="get">
                <div class="flex space-x-2 items-center">
                    <div class="heading text-gray-600">メールアドレスから検索・・・</div>
                    {{-- メールアドレスを入力 --}}
                    <input class="py-2 w-60 border border-gray-500 rounded-lg" name="keyword"
                           placeholder="メールアドレスを入力">
                    {{-- 検索するボタン --}}
                    <button class="btn bg-blue-800 hover:bg-blue-700">検索する</button>
                </div>
            </form>
        </section>
        {{-- 警告されたユーザー一覧の表示エリア --}}
        <section class="text-gray-600 border border-gray-400 rounded-lg overflow-hidden">
            {{-- タイトル --}}
            <div class="heading_bg"><h1 class="heading">警告したユーザー一覧</h1></div>
            {{-- 警告されたユーザー一覧 --}}
            <div class="p-2 h-[75vh] overflow-y-scroll overscroll-none">
                @foreach ($warning_users_all as $warning_user)
                    <div class="mb-5 p-2 flex justify-between items-center border border-slate-400 rounded-lg">
                        <div class="truncate font-semibold">
                            {{-- ユーザー名前 --}}
                            <p class="mb-1">
                                ユーザー名<span class="font-normal">・・・・・・</span>
                                <span class="border-b border-slate-400">{{ $warning_user->name }}</span>
                            </p>
                            {{-- ユーザーのメールアドレス --}}
                            <p class="mb-1">
                                メールアドレス<span class="font-normal">・・・・</span>
                                <span class="border-b border-slate-400">{{ $warning_user->email }}</span>
                            </p>
                        </div>
                        {{-- ボタンエリア --}}
                        <div class="flex justify-between">
                            {{-- 元に戻すボタン --}}
                            <form action="{{ route('admin.warning.undo') }}" method="post" class="mr-3">
                                @csrf
                                @method('patch')
                                {{-- 選択されているメモのidを取得 --}}
                                <input type="hidden" name="userId" value="{{ $warning_user->id }}">
                                <button class="btn w-24 bg-blue-800 hover:bg-blue-700" type="submit">利用再開</button>
                            </form>
                            {{-- 完全削除ボタン --}}
                            <form onsubmit="return deleteCheck()" action="{{ route('admin.warning.destroy') }}"
                                  method="post">
                                @csrf
                                @method('delete')
                                {{-- 選択されているメモのidを取得 --}}
                                <input type="hidden" name="userId" value="{{ $warning_user->id }}">
                                <button class="btn w-24 bg-red-600 hover:bg-red-500" type="submit">完全削除</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <script>
        'use strict'

        // 削除のアラート
        function deleteCheck() {
            const RESULT = confirm('本当に削除してもいいですか?');
            if (!RESULT) alert("削除をキャンセルしました");
            return RESULT;
        }
    </script>
</x-app-layout>
