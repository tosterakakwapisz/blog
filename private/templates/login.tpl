<div class="col-md-2 offset-md-5">
    <form class="form-signin mt-5" method="POST" action="./">
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="login" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passwd" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
    </form>
    <div class="text-center">
        {if isset($validate_pass)}
            {$validate_pass}
        {/if}
    </div>
</div>
