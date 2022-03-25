import React, { useState } from "react";
import { Link } from "react-router-dom";
import { setLoginUser } from "../../api";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import "./Login.css";

const Login = (props:any) => {
  let [password, setPassword] = useState("");
  let [email, setEmail] = useState("");

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    try {
      sessionStorage.clear();
      const login = await setLoginUser({ password, email });
      sessionStorage.setItem("Id",login.id);
      props.setToken(true);
    } catch (error) {
      alert(error);
    }
  };

  return (
    <div className="login">
      <TitreLogin />
      <form className="form" onSubmit={handleSubmit}>
        <label>
          <p>Adresse mail</p>
          <input
            type={"email"}
            placeholder={"Entrez votre adresse mail ici"}
            onChange={(e)=> setEmail(e.target.value)}
          />
        </label>
        <label>
          <p>Mot de passe</p>
          <input
            type={"password"}
            placeholder={"Entrez votre Mot de passe ici"}
            onChange={(e)=> setPassword(e.target.value)}
          />
        </label>
        <input type={"submit"} value={"Se connecter"} />
      </form>
      <p className="center">Ou</p>
      <Link to={"/inscription"} className="second-button">
        Inscrivez-vous
      </Link>
    </div>
  );
};

export default Login;
