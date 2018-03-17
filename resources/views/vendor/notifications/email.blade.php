@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ setting('site.title') }}
        @endcomponent
    @endslot

{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Hello!
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Regards,<br>{{ setting('site.title') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
Ukoliko imate problema s "{{ $actionText }}" gumbom, kopirajte i zaljepite URL naveden ispod
u tražilicu preglednika: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset

{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
          Copyright © {{ date('Y') }} {{ setting('site.title') }}.
        @endcomponent
    @endslot
@endcomponent

