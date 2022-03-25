import React, { useState } from "react";
import { Link, useNavigate } from "react-router-dom";
import { registeringUser } from "../../api";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import './Signin.css'

const Signin = (props:any) => {
  let [lastName, setLastName] = useState("");
  let [userName, setUserName] = useState("");
  let [password, setPassword] = useState("");
  let [email, setEmail] = useState("");
  let navigate = useNavigate();


  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    try{
      sessionStorage.clear();
      const register = await registeringUser({email, userName, lastName, password});
      sessionStorage.setItem("Id",register.id);
      navigate('/');
      props.setToken(true);
    }catch(error){
        alert(error);
    }
  };
  

  return (
    <div className="signin">
        <TitreLogin/>
      <form onSubmit={handleSubmit}>
        <label>
        <p>Prénom</p>
          <input
            type={"text"}
            name="lastName"
            placeholder={"Entrez votre nom de famille ici"}
            onChange={(e) => setLastName(e.target.value)}
          />
        </label>
        <label>
        <p>Nom</p>

          <input
            name="userName"
            type={"text"}
            placeholder={"Entrez votre prénom ici"}
            onChange={(e) => setUserName(e.target.value)}
          />
        </label>
        <label>
        <p>Adresse mail</p>
          <input
            name="email"
            type={"email"}
            placeholder={"Entrez votre adresse mail ici"}
            onChange={(e) => setEmail(e.target.value)}
          />
        </label>
        <label>
        <p>Mot de passe</p>
          <input
            name="password"
            type={"password"}
            placeholder={"Entrez votre Mot de passe ici"}
            onChange={(e) => setPassword(e.target.value)}
          />
        </label>
        <input type={"submit"} value={"S'inscrire"} />
      </form>
      <p className="center">Ou</p>
      <Link to={"/"} className="second-button">
        Connectez-vous
      </Link>

    </div>
  );
};

export default Signin;
