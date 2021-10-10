@props([
'title' => 'タイトルの初期値です',
'content'=>'初期値です',
'message' => '本文初期値です'
])

<div {{ $attributes->merge(['class' => ' border-2 shadow-md w-1/3 p-2 ']) }}>
    <div>title: {{ $title }}</div>
    <div>画像</div>
    <div>content: {{ $content }}</div>
    <div>{{ $message }}</div>
</div>