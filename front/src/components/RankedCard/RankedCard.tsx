import React from "react";
import { Link } from "react-router-dom";
import Ranked from "../../scenes/Ranked/Ranked";
import ButtonLike from "../ButtonLike/ButtonLike";
import "./RankedCard.css";

const RankedCard = (props: any) => {
  return (
    <div className="container-rank">
      <div className="title_ranked_card">
        <div className="rank">{props.Rank}</div>
        <h1 className="title_card">{props.TitleCard}</h1>
        <ButtonLike />
      </div>
      <p className="content_card">{props.ContentCard}</p>
      <Link to={`/asso/${props.IdAsso}`} className="link-single-asso">
        Découvre ton Asso'
      </Link>
    </div>
  );
};

export default RankedCard;
