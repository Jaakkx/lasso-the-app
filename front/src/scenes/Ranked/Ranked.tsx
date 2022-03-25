import React, { useEffect, useState } from "react";
import { getRank } from "../../api";
import ButtonLike from "../../components/ButtonLike/ButtonLike";
import RankedCard from "../../components/RankedCard/RankedCard";
import { rank } from "../../decl/rank.decl";
import "./Ranked.css";

const Ranked = () => {
  const [theRank, setTheRank] = useState<rank[]>();
  let i: number = 1;

  useEffect(() => {
    document.getElementsByClassName("background-changer")[0].id = "appRank";
    document.getElementsByClassName("active")[0].classList.remove("active");
    document.getElementById("item-classement")?.classList.add("active");
    getTheRank();
  }, []);

  const getTheRank = async () => {
    const userId: number = parseInt(sessionStorage.getItem("Id") || "", 10);
    const ranking = await getRank(userId);
    setTheRank(ranking);
  };

  return (
    <div className="main">
      <div className="flux_ranked_card">
        <h1 className="title_ranked_page">Mon classement</h1>
        {theRank?.map((rank) => (
          <RankedCard
            TitleCard={rank.association}
            ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit.Lorem ipsum dolor sit amet, consectetur.
                "
            Rank={i++}
          />
        ))}
      </div>
    </div>
  );
};

export default Ranked;
