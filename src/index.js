// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getDatabase } from "firebase/database";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyChZ1Wnm8OD6ZMfCJGI7CFmYvwTtLdGa5A",
  authDomain: "ohmu-collection.firebaseapp.com",
  projectId: "ohmu-collection",
  storageBucket: "ohmu-collection.appspot.com",
  messagingSenderId: "607542725066",
  appId: "1:607542725066:web:7ebe5283f8bc3b7a4fe733",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getDatabase();
