function take_user_input(e) {

    e.preventDefault();

    // Get the value from each input object in index.html
    var nickName = document.getElementById("nickname").value;
    var milkType = document.getElementById("milk");

    // print msg sent to Spiderman in console 
    console.log('Hi use. ')
    console.log(nickName + ' wants to connect with you, she drinks coffee with');

    // Alert your user that the text msg to Spiderman is sent
    alert(nickName + " Your request has been sent to goHike!")
}