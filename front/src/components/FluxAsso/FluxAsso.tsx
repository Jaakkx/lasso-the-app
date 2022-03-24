import React, { useState } from "react";
import AssoCard from "./AssoCard/AssoCard";
import "./FluxAsso.css";

const FluxAsso = (props: any) => {
  return (
    <div className="flux_ranked_card">
      <h1 className="title_ranked_page">{props.title}</h1>
      <div className="scroll-all-asso">
        {props.theAsso?.map((asso: any) => (
          <AssoCard
            TitleCard={asso.name}
            ContentCard={asso.description}
            LogoCard={asso.picture}
            idCard={asso.id}
            key={asso.id}
          />
        ))}
      </div>
    </div>
  );
};

export default FluxAsso;
