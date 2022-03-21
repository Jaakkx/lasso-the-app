import React from "react";
import { fakeAuthProvider } from "../../components/auth";

const Login = (props:any) => {
  return (
    <form>
      <label>
        <p>Nom d'utilisateur</p>
        <input type={"text"} />
      </label>
      <label>
        <p>Mot de passe</p>
        <input type={"password"} />
      </label>
      <button type="submit" onClick={()=>{
         props.setToken(fakeAuthProvider);
      }}>
        Se connecter
      </button>
    </form>
  );
};

export default Login;