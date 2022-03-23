import React from "react";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import './SingleAsso.css';
import { fakeAuthProvider } from "../../components/auth";
import image from '../../assets/images/Asso/resto_du_coeur.png';

const SingleAsso = (props:any) => {
    return(
        <div className="main">
            <div className="cards">
            <h1 className="nom-asso">Nom de l'Asso</h1>
            <img  src={image} className="logo"/>
            <h2 className="decouvrir">Nous découvrir</h2>
                <p className="resume">Fondés par Coluche en 1985, les Restos du Cœur est une association loi de 1901, reconnue d’utilité publique, sous le nom officiel de « les Restaurants du Cœur – les Relais du Cœur ». Ils ont pour but « d’aider et d’apporter une assistance bénévole aux personnes démunies, notamment dans le domaine alimentaire par l’accès à des repas gratuits, et par la participation à leur insertion sociale et économique, ainsi qu’à toute action contre la pauvreté sous toutes ses formes ».</p>
            </div>
            <div className="button">
                <a href="https://www.restosducoeur.org/" className="">Voir le site</a>
                {/* <button type="submit" onClick={()=>{
                    props.setToken(fakeAuthProvider);
                    }}>
                        Voir le site
                </button> */}
            </div>
        </div>
    );
}

export default SingleAsso;