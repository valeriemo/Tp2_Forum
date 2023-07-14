<div class="container">
    <h2 class="sous-titre petit">New user</h2>
    <form action="?module=user&action=store" method="post">
        <label>
            Name :
            <input required maxlength="25" minlength="2" type="text" name="name">
        </label>
        <label>
            Email:
            <input required type="text" name="email">
        </label>
        <label>
            Password :
            <input required maxlength="20" minlength="6" type="password" name="password">
        </label>
        <label>
            Birthday :
            <input type="date" name="birthday">
        </label> 
            <input class="bouton" type="submit" value="Save">
    </form>
</div>
