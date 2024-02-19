@csrf()
<input type="text" name="subject" placeholder="Assunto" value="{{ old('subject') }}">
<textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
<button type="submit">Enviar</button>