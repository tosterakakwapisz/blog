<div class="col-md-12 col-lg-12 jscontent">
    <form action="/edit_entry/{$se_r.nId}" id="editentry" data-formid="{$se_r.nId}" method="POST">
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="EditNewsTitle">Tytul newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-lg-4">
                <textarea class="form-control" id="EditNewsTitle" name="edit_news_title" rows="1" required autofocus placeholder="Tytul">{$se_r.n_Title}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="EditNewsContent">Tresc newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 col-lg-10">
                <textarea class="form-control" id="EditNewsContent" name="edit_news_content" rows="20" required placeholder="Content">{$se_r.n_Content}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <button data-id="{$se_r.nId}" type="submit" id="editentrybutton" class="btn btn-outline-dark jseditentryquery">Zapisz newsa</button>
                <button id="ee_abort" class="btn btn-outline-dark text-middle pl-3">Anuluj</button>
            </div>
        </div>
    </form>

</div>
