<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('期限付きオーナー') }}
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

                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">name</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">mail</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Limit date</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($ExpiredOwners as $owner)
                                        <tr>
                                            <td class="px-4 py-3"> {{ $owner->name }} </td>
                                            <td class="px-4 py-3"> {{ $owner->email }} </td>
                                            <td class="px-4 py-3"> {{ $owner->deleted_at->diffForHumans() }}</td>

                                            <form id="delete_{{$owner->id}}" method="POST" action="{{ route('admin.expired-owners.destroy',['owner' => $owner->id ]) }}">
                                                @csrf
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
        function deletePost(e) {
            'use strict';
            if (confirm('id ' + e.dataset.id + ' を本当に削除して良いですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>