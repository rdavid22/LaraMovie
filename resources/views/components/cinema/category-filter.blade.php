<form action="{{Route('all_movie')}}" method="GET">
    <div class="text-white w-40 p-3">
        <select id="category_filter" name="kategoria" data-te-select-init onchange="this.form.submit()">
            <option value="" hidden selected></option>
            <option value="Akciófilm">Akciófilm</option>
            <option value="Családi">Családi</option>
            <option value="Kalandfilm">Kalandfilm</option>
            <option value="Komédia">Komédia</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Romantikus">Romantikus</option>
            <option value="Dráma">Dráma</option>
            <option value="Történelmi">Történelmi</option>
            <option value="Musical">Musical</option>
            <option value="Western">Western</option>
        </select>
        <label data-te-select-label-ref class="text-white">Kategória</label>
    </div>

</form>
