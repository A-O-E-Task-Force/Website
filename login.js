function validate()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var isBanned = false;

    const bigT = ["BigT", "BigBilly89!1", true]

    if(username == bigT[0] && password == bigT[1]){
            alert("You are a admin");
            alert("Welcome BigT!");
            open('database.html');
            close();
    }else if(username == "test" && password == "test"){
        alert("Username: Test Password: test");
    }
    else
    {
        alert("Username / password mismatch!");
        open('login.html');
        close();s
        return false;
    }
}