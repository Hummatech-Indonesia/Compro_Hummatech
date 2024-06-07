<x-mail::message>
# Halo admin hummatech!

Ada pesan baru untuk anda, dengan detail berikut ini: Nama Pengirim "{{ $name }}", Surel Pengirim "{{ $email }}".

**Dan isi pesannya adalah:**
{{ $subject }}
{{ $message }}

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
