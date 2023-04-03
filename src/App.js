//import logo from './logo.svg';
import React, { useState } from 'react';
import './App.css';
import Navbar from './components/Navbar.js';

function App() {
  const [mode, setMode] = useState('Dark');
  return (
    <>
   
    <Navbar title="Learnings" mode={mode}/>
    
    </>
  
  );
}

export default App;
