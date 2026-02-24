{{-- Шаблон письма на почту --}}

@component('mail::message')
Новая заявка с сайта psyhab.ru<br />

Детали:<br />
@foreach ($applicationDetails as $applicationDetail)
    @if ($applicationDetail)
        {{ $applicationDetail }} <br />
    @endif
@endforeach


Спасибо!<br />
{{ config('app.name') }}
@endcomponent
