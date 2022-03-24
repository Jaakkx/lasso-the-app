import React, { useState } from "react";
import { Link } from "react-router-dom";
import { setLoginUser } from "../../api";
import { fakeAuthProvider } from "../../components/auth";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import "./Login.css";

const Login = (props: any) => {

  let [password, setPassword] = useState("");
  let [email, setEmail] = useState("");

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    try{
      const login = await setLoginUser({email, password});

      console.log(login);
      

    }catch(error){
        alert(error);
    }
  };

  return (
    <div className="login">
      <TitreLogin />
      <form className="form">
        <label>
          <p>Adresse mail</p>
          <input type={"email"} placeholder={"Entrez votre adresse mail ici"} />
        </label>
        <label>
          <p>Mot de passe</p>
          <input
            type={"password"}
            placeholder={"Entrez votre Mot de passe ici"}
          />
        </label>
        <input
          type={"submit"}
          value={"Se connecter"}
          onClick={() => {
            props.setToken(fakeAuthProvider);
          }}
        />
      </form>
      <p className="center">Ou</p>
      <Link to={"/inscription"} className="second-button">
        Inscrivez-vous
      </Link>
    </div>
  );
};

export default Login;
