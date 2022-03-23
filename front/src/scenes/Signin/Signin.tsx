import React from "react";
import { Link } from "react-router-dom";
import { fakeAuthProvider } from "../../components/auth";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import "./Signin.css";

const Signin = (props:any) => {
    return (
        <div>
            <TitreLogin/>
            <form className="form">
                <label>
                    <p>Prénom</p>
                    <input type={"text"} placeholder={"Entrez votre prénom ici"} />
                </label>
                <label>
                    <p>Nom</p>
                    <input type={"text"} placeholder={"Entrez votre Nom ici"} />
                </label>
                <label>
                    <p>Adresse mail</p>
                    <input type={"email"} placeholder={"Entrez votre adresse mail ici"} />
                </label>
                <label>
                    <p>Mot de passe</p>
                    <input type={"password"} placeholder={"Entrez votre Mot de passe ici"} />
                </label>
                <label>
                    <p>Confirmation du mot de passe</p>
                    <input type={"password"} placeholder={"Confirmez votre Mot de passe ici"} />
                </label>
                <button type="submit" onClick={()=>{
                    props.setToken(fakeAuthProvider);
                    }}>
                        Inscrivez-vous
                </button>
            </form>
        </div>
    );
}

export default Signin;