function take_user_input(e) {

    e.preventDefault();

    // Get the value from each input object in index.html
    var nickName = document.getElementById("nickname").value;
    var exNum = document.getElementById("exNum").value;
    var milkType = document.querySelector("input[type='radio'][name=milk]:checked").value;


    // print msg sent to Spiderman in console 
    console.log('Hi use. ')
    console.log(nickName + ' wants to connect with you, she drinks coffee with ' + milkType);

    // Alert your user that the text msg to Spiderman is sent
    alert(nickName + ", thanks for submitting the form! " + "go Hike will prepare hikemate who also drinks " + milkType + " and with ex Number " + exNum)
    window.location.href = "newpage.html";

    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://instagram29.p.rapidapi.com/search/king%20james",
        "method": "GET",
        "headers": {
            "X-RapidAPI-Key": "SIGN-UP-FOR-KEY",
            "X-RapidAPI-Host": "instagram29.p.rapidapi.com"
        }
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
    });
}