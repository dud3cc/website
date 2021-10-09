<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="./Styles.css">
</head>
<header>
	<ul style="list-style-type:none;">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="About.php">About</a></li>
	</ul>
	<?php
    	if(isset($_COOKIE['session']) && $_COOKIE['session']!= "false")
    	{
        	echo('<ul class="login" style="list-style-type:none;">
        	        <li><a href="Apps.php">Apps</a></li>
        	        <li><a href="Logout.php">Log out</a></li>
        	</ul>');
    	}else
    	{
        	echo('<ul class="login" style="list-style-type:none;">
        	        <li><a href="Login.php">Log in</a></li>
        	        <li><a href="Signup.php">Sign up</a></li>
        	</ul>');
    	}
	?>
</header>
<body>
	<div class="appItem">
		<p>App Name</p>
	</div>
</body>
<footer>
</footer>
<script type="module">
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
    }
    function createmyElements(){
       return [
               '<p>hello, world!</p>'
              ].join('\n');
    }
    createmyElements();
	//Firebase initialization (https://firebase.google.com/docs/web/alt-setup)
	import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js';
	import { getAnalytics } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-analytics.js';
	import { collection, addDoc, getFirestore, getDocs } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-firestore.js";
	import { getAuth, signInWithPopup, onAuthStateChanged, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-auth.js';


	const firebaseConfig = {
		  apiKey: "AIzaSyA9uHaUG0DV_j0ORfLVYrhaAr2WR81rAog",
		  authDomain: "auctionapp-cc13d.firebaseapp.com",
		  projectId: "auctionapp-cc13d",
		  storageBucket: "auctionapp-cc13d.appspot.com",
		  messagingSenderId: "699365784222",
		  appId: "1:699365784222:web:f4d664656fcc258a08d98f",
		  measurementId: "G-TX2JWHVM66"
	};

	const app = initializeApp(firebaseConfig);
	const analytics = getAnalytics(app);
    var db = getFirestore();
    const querySnapshot = await getDocs(collection(db, getCookie("session")));
    querySnapshot.forEach((doc) => {
      console.log(`${doc.id} => ${doc.data()}`);
    });
  
  onAuthStateChanged(auth, (user) => {
  if (user) {
    // User is signed in
    const uid = user.uid;
    document.cookie = "session="+user.uid;
    console.log("Logged in! "+uid);
  } else {
    // User is signed out
    document.cookie = "session=false";
    console.log("Not logged in!");
  }
});

</script>
</html>