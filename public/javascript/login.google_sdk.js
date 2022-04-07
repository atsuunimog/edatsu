var googleUser = {};
var startApp = function() {
gapi.load('auth2', function(){
    // Retrieve the singleton for the GoogleAuth library and set up the client.
    auth2 = gapi.auth2.init({
    client_id: '964276485358-nfai8keb6d2cjoum9chqejnf6ibj3hca.apps.googleusercontent.com',
    cookiepolicy: 'single_host_origin',
    });
    var customBtn = document.getElementsByClassName('customBtn');
    console.log(customBtn.length);
    for(var i = 0; i < customBtn.length; i++ ){
        attachSignin(customBtn[i]);
    };
});
};

function attachSignin(element) {
auth2.attachClickHandler(element, {},
    function(googleUser) {
            var profile =  googleUser.getBasicProfile();
            var name =  profile.getName();
            var imgURL =  profile.getImageUrl();
            var email =  profile.getEmail();
            googleCallAPI(name, email, imgURL);
    }, function(error) {
        console.log(JSON.stringify(error, undefined, 2));
    });
}

startApp();

//insert data into db
function googleCallAPI(name, email, imgURL){
    var userData = {};
    //initiate xmlhttp request.
    userData.username = name;
    userData.email = email;
    var userImg = imgURL;

    //create json data.
    var user_JSON_data = JSON.stringify(userData);

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            auth_data = JSON.parse(this.responseText);
            // initiate redirect login
            RedirectLogin(auth_data.login)
        }else{
            document.getElementById("login-name").innerHTML = "Connecting...";
        }
    };
    xhttp.open("POST", "router/post.router.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("logData=" + user_JSON_data + "&userImg=" + encodeURIComponent(userImg));
    //cls xml call
 } 
