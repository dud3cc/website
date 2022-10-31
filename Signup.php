<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="./Styles.css">
</head>
<header>
	<ul style="list-style-type:none;">
	  <li><a href="index.html">Home</a></li>
	  <li><a href="About.html">About</a></li>
	</ul>
	<ul class="login" style="list-style-type:none;">
	  <li><a href="Login.html">Log in</a></li>
	  <li><a href="Signup.html">Sign up</a></li>
	</ul>
</header>
<body>
	<div class="mainLogin">
		<p>sdsadasd</p>
	</div>
</body>
<footer>
<p>By creating an account, you agree to the terms & conditions and privacy policy of our service</p>
</footer>
<script  type="module">
	console.log("HERE");
	//Firebase initialization (https://firebase.google.com/docs/web/alt-setup)
	import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js';
	import { getAnalytics } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-analytics.js';
	import { getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-auth.js';


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
	const provider = new GoogleAuthProvider();
	
	const auth = getAuth();	
	signInWithPopup(auth, provider)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access the Google API.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;
    // The signed-in user info.
    const user = result.user;
    // ...
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...
  });

</script>
</html>