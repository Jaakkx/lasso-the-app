import React, { useEffect, useState } from "react";
import "./App.css";
import "./css/styles.css";
import { BrowserRouter, Route, Routes, useLocation } from "react-router-dom";
import Home from "./scenes/Home/Home";
import Ranked from "./scenes/Ranked/Ranked";
import Login from "./scenes/Login/Login";
import Menu from "./components/Menu/Menu";
import Header from "./components/Header/Header";
import AllAsso from "./scenes/AllAsso/AllAsso";
import SocialPage from "./scenes/SocialPage/SocialPage";
import Signin from "./scenes/Signin/Signin";
import SingleAsso from "./scenes/SingleAsso/SingleAsso";

function App() {
  const [token, setToken] = useState();

  if (!token) {
    return (
      <div className="App">
        <Routes>
          <Route path="/" element={<Login setToken={setToken}/>}/>
          <Route path='/inscription' element={<Signin/>}/>
        </Routes>
      </div>
    );
  }

  return (
    <div className="App">
      <div className="background-changer">
        <Header />
        <div className="content">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/classement" element={<Ranked />} />
            <Route path="/associations" element={<AllAsso />} />
            <Route path="/social" element={<SocialPage />} />
            <Route path="/ton_asso" element={<SingleAsso />} />
          </Routes>
        </div>
      </div>
      <Menu />
    </div>
  );
}

export default App;
