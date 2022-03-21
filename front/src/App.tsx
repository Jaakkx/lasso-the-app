import React, { useState } from "react";
import "./App.css";
import "./css/styles.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "./scenes/Home/Home";
import Ranked from "./scenes/Ranked/Ranked";
import Login from "./scenes/Login/Login";
import Menu from "./components/Menu/Menu";
import Header from "./components/Header/Header";
import AllAsso from "./scenes/AllAsso/AllAsso";
import SocialPage from "./scenes/SocialPage/SocialPage";

function App() {
  const [token, setToken] = useState();

  if (!token) {
    return (
      <div className="App">
        <Header />
        <Login setToken={setToken} />
      </div>
    );
  }

  return (
    <div className="App">
      <Header />
      <div className="content">
        <Routes>
          <Route index element={<Home />} />
          <Route path="/classement" element={<Ranked />} />
          <Route path="/associations" element={<AllAsso />} />
          <Route path="/social" element={<SocialPage />} />
        </Routes>
      </div>
      <Menu />
    </div>
  );
}

export default App;
