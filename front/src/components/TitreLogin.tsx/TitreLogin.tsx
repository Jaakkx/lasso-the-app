import React from "react";
import { fakeAuthProvider } from "../../components/auth";
import "./TitreLogin.css";

const TitreLogin = (props:any) => {
  return (
    <div className="titre-login"> 
      <h5>Lasso</h5>
      <p className="slogan">Attrape ton asso!</p>
    </div>
  );
};

export default TitreLogin;