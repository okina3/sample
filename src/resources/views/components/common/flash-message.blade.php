{{--初期設定--}}
@props(['status' => 'info'])

{{--フラッシュメッセージの背景色を切り分ける--}}
@php
    if (session('status') === 'info') {
        $bgColor = 'bg-blue-300';
    }
    if (session('status') === 'alert') {
        $bgColor = 'bg-red-500';
 } @endphp

@if (session('message'))
    <div class="{{ $bgColor }} p-2 mb-3 w-2/5 text-white rounded">
        {{ session('message') }}
    </div>
@endif
