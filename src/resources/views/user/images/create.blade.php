<x-app-layout>
    <section class="max-w-screen-lg mx-auto text-gray-600 border border-gray-400 rounded-lg overflow-hidden">
        <div class="px-3 py-2 flex justify-between items-center border-b border-gray-400 bg-gray-200">
            <h1 class="py-1 text-xl font-semibold">画像の登録</h1>
        </div>
        <div class="p-3">
            <x-input-error :messages="$errors->get('user.images')" class="mt-2"/>
            <form action="{{ route('user.image.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="m-2">
                    {{-- 画像選択-------------------------------------------------------------------- --}}
                    <div class="p-2 w-1/2 mx-auto">
                        <div class="mt-2">
                            <label for="image" class="text-gray-600">画像</label>
                            <input type="file" id="image" name="images" accept="image/png,image/jpeg,image/jpg"
                                   class="py-1 px-3 w-full border border-gray-300 rounded bg-gray-100">
                        </div>
                    </div>
                </div>
                {{-- ボタン -------------------------------------------------------------------------- --}}
                <div class="mt-4 p-2 w-full flex justify-center">
                    <button type="submit" class="py-1 px-3 text-white rounded bg-blue-800 hover:bg-blue-700">登録
                    </button>
                </div>
            </form>
            <div class="mb-2 flex justify-end">
                <button onclick="location.href='{{ route('user.image.index') }}'"
                        class="mr-1 py-1 px-3 text-white rounded bg-gray-800 hover:bg-gray-700">
                    戻る
                </button>
            </div>
        </div>
    </section>
</x-app-layout>