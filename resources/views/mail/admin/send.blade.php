@component('mail::message')
# Introduction

The body of your message.

User Name: {{ $submission->user->name }}

Form Name: {{ $submission->contactForm->title }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
