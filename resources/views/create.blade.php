<form action="/create" method="POST">
    @csrf
    <label for="user_id">user_id:</label>
    <input type="text" name="title"><br>
    <label for="body">body</label>
    <textarea name="body" cols="30" rows="10"></textarea>
    <button>Send</button>
</form>