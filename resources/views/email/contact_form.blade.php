
@component('mail::message')
# 來自 {{ $name }} 的訊息：

{{ $content }}

{{ config('app.name') }}
@endcomponent
