import React from "react";
import { Link } from "react-router-dom";
import { fakeAuthProvider } from "../../components/auth";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import "./Login.css";

const Login = (props:any) => {
  return (
    <div>
      <TitreLogin/>
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
        <Link to={"/inscription"} className="second-button">Inscrivez-vous</Link>
        {/* <p className="mdp-oublier">Vous n'avez pas de compte?</p> */}
      </form>
    </div>
  );
};

export default Login;