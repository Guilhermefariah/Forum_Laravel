<h1>Dúvida {{ $support->id }}</h1>

<form action="{{ route('supports.update', $support->id)}}" method="POST">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()
    {{-- <input type="text" value="PUT" name="_method"> --}}
    @method('put')
    <input type="text" name="subject" value="{{ $support->subject }}" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>