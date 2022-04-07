
window.fbAsyncInit = function() {
FB.init({
    appId      : '2613571815361091',
    cookie     : true,
    xfbml      : true,
    version    : 'v5.0'
});
};

//onlogin.
function logUser(){
    FB.login(function(response){
    // handle the response 
    if(response.status == 'connected'){
            callAPI();
    }else{
        console.log("Oops! Sorry Something went wrong");
    }
    //login response result...
    console.log(response)
    }, {scope: 'public_profile,email'});
    
}

//Redirect login
function RedirectLogin(result){
    if(result == 1){
     window.location.reload();
    }
}//

//Test graph API.
function callAPI() {                 
    FB.api('/me?fields=name,email,picture', function(response) {
        //user ajax to route user data to databse.
        var userData = {};
        //initiate xmlhttp request.
        userData.username = response.name;
        userData.email = response.email;
        var userImg = response.picture.data.url;

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
    );
}

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
