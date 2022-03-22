import React from "react";
import { fakeAuthProvider } from "../../components/auth";
import "./Login.css";
import Titre_login from "./Titre_login"

const Login = (props:any) => {
  return (
    <div>
      <Titre_login/>
      <form className="form">
        <label>
          <p>Adresse mail</p>
          <input type={"text"} placeholder={"Entrez votre adresse mail ici"} />
        </label>
        <label>
          <p>Mot de passe</p>
          <input type={"password"} placeholder={"Entrez votre Mot de passe ici"} />
        </label>
        <p className="mdp-oublier">mot de passe oublié?</p>
        <button type="submit" onClick={()=>{
          props.setToken(fakeAuthProvider);
        }}>
          Se connecter
        </button>
        <p className="center">Ou</p>
        <button className="second-button" type="submit" onClick={()=>{
          props.setToken(fakeAuthProvider);
        }}>
          Inscrivez-vous
        </button>
        {/* <p className="mdp-oublier">Vous n'avez pas de compte?</p> */}
      </form>
    </div>
  );
};

export default Login;