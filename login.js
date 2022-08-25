function validate()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var isBanned = false;

    const bigT = ["BigT", "BigBilly89!1", "Zimbabwe", true, true, false]

    if(username == bigT[0].value && password == bigT[1])
    {
        alert("You have successfully logged in as Administrator!");
        open('homepage.html');
        close();
        return false;
    }
    else
    {
        alert("Username / password mismatch!");
        open('login.html');
        close();
        return false;
    }

}