<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  <form method="POST" action="{{ route('owner.shops.update', ['shop' => $shop->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="-m-2">
                      <div class="p-2 w-1/2 mx-auto">
                        <div class="relative">
                          <label for="name" class="leading-7 text-sm text-gray-600">店名 ※必須</label>
                          <input type="text" id="name" name="name" value="{{ $shop->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                      </div>

                      <div class="p-2 w-1/2 mx-auto">
                        <div class="relative">
                          <label for="information" class="leading-7 text-sm text-gray-600">店舗情報 ※必須</label>
                          <textarea name="information" id="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $shop->information }}</textarea>
                          <x-input-error :messages="$errors->get('information')" class="mt-2" />
                        </div>
                      </div>

                      {{-- 画像のサムネイル --}}
                      <div class="p-2 w-1/2 mx-auto">
                        <div class="relative">
                          <div class="w-32">
                            <x-shop-thumbnail :filename="$shop->filename" />
                          </div>
                        </div>
                      </div>

                      <div class="p-2 w-1/2 mx-auto">
                        <div class="relative">
                          <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                          <input type="file" id="image" name="image" accept="image/png, image/jpg, image/jpeg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                      </div>

                      <div class="p-2 w-1/2 mx-auto">
                        <div class="relative flex justify-around">
                          <div class=""><input type="radio" name="is_selling" id="selling_1" class="mr-2" value="1" @if ($shop->is_selling === 1){ checked }@endif><label for="selling_1">販売中</label></div>
                          <div class=""><input type="radio" name="is_selling" id="selling_0" class="mr-2" value="0" @if ($shop->is_selling === 0){ checked }@endif><label for="selling_0">停止中</label></div>
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                      </div>

                      <div class="p-2 w-full flex justify-around mt-4">
                        <button type="button" onclick="location.href='{{ route('owner.shops.index') }}'" class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                        <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
