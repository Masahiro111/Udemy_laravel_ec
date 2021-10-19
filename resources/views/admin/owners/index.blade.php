<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('オーナー一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @foreach($owners as $owner)
                    {{ $owner->name }}
                    {{ $owner->email }}
                    {{ $owner->created_at->diffForHumans() }}
                    @endforeach --}}

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">

                            <x-flash-message status="session('status')" />

                            <div class="flex justify-end mb-4">
                                <a href="{{ route('admin.owners.create') }}" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</a>
                            </div>

                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">name</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">mail</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">date</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($owners as $owner)
                                        <tr>
                                            <td class="px-4 py-3"> {{ $owner->name }} </td>
                                            <td class="px-4 py-3"> {{ $owner->email }} </td>
                                            <td class="px-4 py-3"> {{ $owner->created_at->diffForHumans() }}</td>
                                            <td class="px-4 py-3 text-right">
                                                {{-- <input name="plan" type="radio"> --}}
                                                <a href="{{ route('admin.owners.edit', ['owner' => $owner->id ]) }}" class="text-white text-sm bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded">
                                                    更新
                                                </a>
                                            </td>
                                            <form id="delete_{{$owner->id}}" method="POST" action="{{ route('admin.owners.destroy',['owner' => $owner->id ]) }}">
                                                @csrf
                                                @method('delete')
                                                <td class="px-4 py-3 text-right">
                                                    {{-- <input name="plan" type="radio"> --}}
                                                    <a data-id="{{ $owner->id }}" onclick="deletePost(this)" href="#" class="text-white text-sm bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded">
                                                        削除
                                                    </a>
                                                </td>
                                            </form>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $owners->links() }}
                            </div>
                        </div>
                    </section>
                    {{-- エロクワント
                    @foreach($e_all as $e_owner)
                    {{ $e_owner->name }}
                    {{ $e_owner->created_at->diffForHumans() }}
                    @endforeach
                    <hr>
                    クエリビルダ
                    @foreach($q_get as $q_owner)
                    {{ $q_owner->name }}
                    {{ Carbon\Carbon::parse( $q_owner->created_at )->diffForHumans() }}
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e){
            'use strict';
            if (confirm('id ' + e.dataset.id +' を本当に削除して良いですか？')){
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>