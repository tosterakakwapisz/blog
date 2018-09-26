        </div>
    </div>
    {if isset($creation_success) && $creation_success == true}
        <script>
            alert("Pomyslnie dodano wpis.");
        </script>
    {/if}

    {if isset($update_success) && $update_success == true}
        <script>
            alert("Pomyslnie edytowano wpis.");
        </script>
    {/if}

    {if isset($create_user_success) && $create_user_success == true}
        <script>
            alert("Pomyslnie dodano uzytkownika.");
        </script>
    {/if}

    {if isset($update_user_success) && $update_user_success == true}
        <script>
            alert("Pomyslnie edytowano uzytkownika.");
        </script>
    {/if}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
