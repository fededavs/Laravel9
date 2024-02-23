<h1>Create new post</h1>

<form action=" {{ route('post.store') }} " method="GET">
    <label>
        Title
        <input type="text">
    </label>
    <br>
    <label>
        body
        <textarea name="body"></textarea>
    </label>
    <button type="submit">Enviar</button>
    <br>
</form>
