<div class="add-books__form-wrapper">
    <form name="add-new-book" id="add-new-book" method="post" action="{{url('store-form')}}">

        @csrf
        <dlv class="form-section">
            <label for="title">Title</label>
            <input type="text" id="title" narre="title" class="form-control" required>
        </div>
        <div class="forn-section">
            <label for="author">Author</label>
            <input type="text" id="author" nane="author" class="form-control" required>
        </div>
        <div class="form-section">
            <label for="genre">Choose Genre:</label>
                    <select name="genre" id="genre">
                    <option values="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="mystcry">Mystery</option>
                    <option value="drama">Drama</option>
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
