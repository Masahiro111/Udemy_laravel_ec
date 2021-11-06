<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('owner.products.store') }}" method="post">
                        @csrf
                        <div class="-m-2">

                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">店名 <span class="text-xs font-bold text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                                </div>
                            </div>
                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <label for="information" class="leading-7 text-sm text-gray-600">商品情報 <span class="text-xs font-bold text-red-500">*</span></label>
                                    <textarea id="information" name="information" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>{{ old('information') }}</textarea>
                                </div>
                            </div>
                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <label for="price" class="leading-7 text-sm text-gray-600">価格 <span class="text-xs font-bold text-red-500">*</span></label>
                                    <input type="number" id="price" name="price" value="{{ old('price') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                                </div>
                            </div>
                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <label for="sort_order" class="leading-7 text-sm text-gray-600">表示順 <span class="text-xs font-bold text-red-500">*</span></label>
                                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <label for="quantity" class="leading-7 text-sm text-gray-600">初期在庫 <span class="text-xs font-bold text-red-500">*</span></label>
                                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                                </div>
                            </div>


                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <select name="category" id="">
                                        @foreach ($shops as $shop)
                                        <option value="{{ $shop->id }}">
                                            {{ $shop->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <select name="category" id="">
                                        @foreach($categories as $category)
                                        <optgroup label="{{ $category->name }}">
                                            @foreach($category->secondary as $secondary)
                                            <option value="{{ $secondary->id }}">
                                                {{ $secondary->name }}
                                            </option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <x-select-image :images="$images" name="image1" />
                            <x-select-image :images="$images" name="image2" />
                            <x-select-image :images="$images" name="image3" />
                            <x-select-image :images="$images" name="image4" />
                            <x-select-image :images="$images" name="image5" />

                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <input
                                           type="radio"
                                           name="is_selling"
                                           value="1"
                                           checked>
                                    販売中

                                    <input
                                           type="radio"
                                           name="is_selling"
                                           value="0">
                                    停止中

                                </div>
                            </div>

                            <div class="p-2 w-full pt-4 flex justify-around">
                                <a href="{{ route('owner.products.index') }}" class="bg-gray-200 text-white  border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</a>
                                <input type="submit" class="cursor-pointer text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="登録">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict'
        const images = document.querySelectorAll('.image'); //全てのimageタグを取得
        images.forEach(image => { // 1つずつ繰り返す
            image.addEventListener('click', function (e) { // クリックしたら
                const imageName = e.target.dataset.id.substr(0, 6); //data-idの6文字
                const imageId = e.target.dataset.id.replace(imageName + '_', ''); // 6文字カット
                const imageFile = e.target.dataset.file;
                const imagePath = e.target.dataset.path;
                const modal = e.target.dataset.modal;
                // サムネイルと input type=hiddenのvalueに設定
                document.getElementById(imageName + '_thumbnail').src = imagePath + '/' + imageFile;
                document.getElementById(imageName + '_hidden').value = imageId;
                MicroModal.close(modal); //モーダルを閉じる
            });
        });
    </script>
</x-app-layout>