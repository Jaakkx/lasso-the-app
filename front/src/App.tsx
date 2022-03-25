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
import UserProfile from "./scenes/UserProfile/UserProfile";

function App() {
  const [token, setToken] = useState(false);

  if (!sessionStorage.getItem('Id')) {
    return (
      <div className="App home-login">
        <Routes>
          <Route path="/" element={<Login setToken={setToken} />} />
          <Route path="/inscription" element={<Signin setToken={setToken} />} />
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
            <Route path="/asso">
              <Route path=":assoId" element={<SingleAsso />} />
            </Route>
            <Route path="/profile:userId" element={<UserProfile />}>
              <Route path=":userId" element={<UserProfile setToken={setToken}/>} />
            </Route>
          </Routes>
        </div>
      </div>
      <Menu />
    </div>
  );
}

export default App;
