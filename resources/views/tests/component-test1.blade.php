<x-tests.app>

    <x-slot name="header">
        ヘッダー１の部分だよ(=ﾟωﾟ)ﾉ
    </x-slot>

    コンポーネントテスト１

    <x-tests.card :message="$message">
        <x-slot name="title">
            タイトル(=ﾟωﾟ)ﾉ
        </x-slot>
        <x-slot name="message">
            コンテンツ(;´･ω･)
        </x-slot>
    </x-tests.card>

    <x-tests.card>
        <x-slot name="title">タイトル２</x-slot>
    </x-tests.card>

    <x-tests.card class="bg-red-300">
        <x-slot name="title">CSSを変更したい</x-slot>
    </x-tests.card>

</x-tests.app>