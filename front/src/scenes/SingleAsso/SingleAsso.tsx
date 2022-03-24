import React, { useEffect, useState } from "react";
import TitreLogin from "../../components/TitreLogin.tsx/TitreLogin";
import "./SingleAsso.css";
import { fakeAuthProvider } from "../../components/auth";
import image from "../../assets/images/Asso/resto_du_coeur.png";
import { useParams } from "react-router-dom";
import { getSingleAsso } from "../../api";
import { Asso } from "../../decl/Asso.decl";

const SingleAsso = (props: any) => {
  let { assoId } = useParams();
  const [theAsso, setTheAsso] = useState<Asso>();

  useEffect(() => {
    theSingleAsso();
  }, []);

  const theSingleAsso = async () => {
    const res = await getSingleAsso(assoId!);
    setTheAsso(res);
    console.log(theAsso?.webSite);
  };

  return (
    <div className="main">
      <div className="cards cards-asso">
        <h1 className="nom-asso">{theAsso?.name}</h1>
        <img src={theAsso?.picture} className="logo" />
        <h2 className="decouvrir">Nous découvrir</h2>
        <p className="resume">{theAsso?.description}</p>
        <div className="assos-infos">
          <div>
            <h3>Numéro de téléphone</h3>
            <p>{theAsso?.phoneNumber}</p>
          </div>
          <div>
            <h3>Adresse</h3>
            <p>{theAsso?.adress}</p>
          </div>
        </div>
      </div>
      <div className="button">
        <a target="_blank" href={theAsso?.webSite} className="">
          Voir le site
        </a>
      </div>
    </div>
  );
};

export default SingleAsso;
