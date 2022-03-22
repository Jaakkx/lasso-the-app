import React, { useEffect } from "react";
import ButtonLike from "../../components/ButtonLike/ButtonLike";
import RankedCard from "../../components/RankedCard/RankedCard";
import "./Ranked.css";

const Ranked = () => {
  useEffect(() => {
    document.getElementsByClassName("background-changer")[0].id = "appRank";
    document.getElementsByClassName("active")[0].classList.remove("active");
    document.getElementById("item-classement")?.classList.add("active");
  });

  return (
    <div className="main">
      <div className="flux_ranked_card">
        <h1 className="title_ranked_page">Mon classement</h1>
        {/* <ButtonLike/> */}
        <RankedCard
          TitleCard="Nom de l'Asso que j'adore"
          ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit.Lorem ipsum dolor sit amet, consectetur.
            "
          Rank="1"
        />
        <RankedCard
          TitleCard="Nom de l'Asso2"
          ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit."
          Rank="2"
        />
        <RankedCard
          TitleCard="Nom de l'Asso3"
          ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit."
          Rank="3"
        />
      </div>
    </div>
  );
};

export default Ranked;
