function validate()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var isBanned = false;

    const bigT = ["BigT", "BigBilly89!1", true]

    if(username == bigT[0] && password == bigT[1]){
            alert("Welcome BigT!");
            open('database.php');
            close();
            return true;
    }else if(username == "test" && password == "test"){
        alert("Username: Test Password: test");
        open('database.php');
        close();
        return true;
    }
    else
    {
        alert("Username / password mismatch!");
        open('login.php');
        close();
        return false;
    }
}