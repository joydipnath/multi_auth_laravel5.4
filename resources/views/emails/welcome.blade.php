@component('mail::message')
# Introduction

Welcome User !!!!!!!!!  {{$user->name}}

@component('mail::button', ['url' => ''])
Validate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
