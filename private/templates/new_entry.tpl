<div class="col-md-12 col-lg-12 jscontent">
    <form action="./create_entry" id="NewEntry" method="POST">
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="NewsTitle">Tytul newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-lg-4">
                <textarea class="form-control" id="NewsTitle" name="news_title" rows="1" required autofocus></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="NewsContent">Tresc newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 col-lg-10">
                <textarea class="form-control" id="NewsContent" name="news_content" rows="5" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <button type="submit" class="btn btn-outline-dark">Zapisz</button>
                <button id="ce_abort" class="btn btn-outline-dark">Anuluj</button>
            </div>

        </div>
    </form>

    {if isset($noTitleOrContent)}
        {$noTitleOrContent}
    {/if}
</div>
