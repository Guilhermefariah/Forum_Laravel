@extends('admin.layouts.app')
@csrf()

<div class="flex flex-col gap-4 max-w-md mx-auto">
    <input type="text" class="border border-gray-200 rounded-md p-2 text-black focus:outline-none" name="subject" placeholder="Assunto"
        value="{{ $support->subject ?? old('subject') }}">

    <textarea name="body" class="border border-gray-200 rounded-md p-2 text-black focus:outline-none" cols="30" rows="5"
        placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea>
    
    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Enviar</button>
</div>
