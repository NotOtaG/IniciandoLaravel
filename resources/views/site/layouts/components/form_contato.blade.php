<form action={{route("site.contato")}} method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="tele" type="tel" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" type="email" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class="{{ $classe }}"></textarea>
    <br>
    <button type="submit" class="{{ $classe }}">Enviar</button>
</form>