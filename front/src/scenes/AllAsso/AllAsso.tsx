import React, { useEffect } from "react";
import "./AllAsso.css";
import AssoCard from "../../components/AssoCard/AssoCard";

const AllAsso = () => {
  useEffect(() => {
    document.getElementsByClassName("App")[0].id = "appAllAsso";
    document.getElementsByClassName('active')[0]?.classList.remove('active');
    document.getElementById("item-associations")?.classList.add("active");
  });

  return(
    <div className="main">
        <div className="flux_ranked_card">
        <h1 className="title_ranked_page">Mes Asso'</h1>
    <AssoCard 
        TitleCard="Nom de l'Asso que je souhaite rejoindre" 
        ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit.Lorem ipsum dolor sit amet, consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit.Lorem ipsum dolor sit amet, consectetur.
        "
        LogoCard="logo.jpg"
        
    />
    <AssoCard 
    TitleCard="Nom de l'Asso2"
    ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit."
    
    />
    <AssoCard 
    TitleCard="Nom de l'Asso3"
    ContentCard="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lobortis tortor sem lacus, dictumst consectetur urna. Consequat, eleifend in id egestas at ultricies vitae sit."
    
    />
    </div>
    </div>
);
};

export default AllAsso;
