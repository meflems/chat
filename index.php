<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDv1J-a8NyzsfvYgjX4S6ARjuLTghW0z3w",
        authDomain: "chat-7dd3b.firebaseapp.com",
        projectId: "chat-7dd3b",
        storageBucket: "chat-7dd3b.appspot.com",
        messagingSenderId: "72311325764",
        appId: "1:72311325764:web:324aa4908c6e57c00fe811",
        measurementId: "G-H76GDN3V8Y"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
 
    var myName = prompt("Enter your name");
</script>
     
<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
    <input type="submit">
</form>
     
<script>
    function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }
</script>