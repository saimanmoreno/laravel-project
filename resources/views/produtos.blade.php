<h1 class="text-center">Pagina de produtos</h1>

<hr>

<form method="post">
    @csrf

    <b>Produto</b>
    <input type="text" name="produto"><br><br>
    
    <b>Preco</b>
    <input type="text" name="preco"><br><br>
    
    <b>Categoria</b>
    <input type="text" name="categoria"><br><br>

    <input type="submit" value="Salvar">
</form>

<hr>

<label>Produto: {{$produto}}</label><br>
<label>Preco: {{$preco}}</label><br>
<label>Categoria: {{$categoria}}</label><br>