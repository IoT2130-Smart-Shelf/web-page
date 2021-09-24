<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyDOxJL6txR-Jfjl8nsct0tkqBtdomfIkHo",
        authDomain: "smart-shelf-44c69.firebaseapp.com",
        databaseURL: "https://smart-shelf-44c69-default-rtdb.firebaseio.com",
        projectId: "smart-shelf-44c69",
        storageBucket: "smart-shelf-44c69.appspot.com",
        messagingSenderId: "12480876322",
        appId: "1:12480876322:web:2a4a356c1fc7df39051f7b",
        measurementId: "G-22EDPL26BD"
    };

    // Initialize Firebase
    const firebase = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>