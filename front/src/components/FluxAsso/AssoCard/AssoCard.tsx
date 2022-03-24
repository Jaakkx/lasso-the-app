import React from "react";
import AllAsso from "../../../scenes/AllAsso/AllAsso";
import "./AssoCard.css";
import ButtonLike from "../../ButtonLike/ButtonLike";
import { Link } from "react-router-dom";

const AssoCard = (props: any) => {
  return (
    <div className="container-asso-card">
      <div className="title_ranked_card">
        <div className="asso-card-logo">
          <img src={props.LogoCard} className="" />
        </div>
        <h2 className="title_card">{props.TitleCard}</h2>
        <ButtonLike />
      </div>
      <p className="content_card">{props.ContentCard}</p>
      <Link to={ `/asso/${props.idCard}` } className="link-single-asso">
        Découvre ton Asso'
      </Link>
    </div>
  );
};

export default AssoCard;
