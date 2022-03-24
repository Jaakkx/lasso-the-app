import React, { useEffect, useState } from "react";
import "./AllAsso.css";
import AssoCard from "../../components/FluxAsso/AssoCard/AssoCard";
import { Link } from "react-router-dom";
import { getAllAsso } from "../../api";
import { Asso } from "../../decl/Asso.decl";
import FluxAsso from "../../components/FluxAsso/FluxAsso";

const AllAsso = () => {
  const [allAsso, setAllAsso] = useState<Asso[]>();

  useEffect(() => {
    document.getElementsByClassName("App")[0].id = "appAllAsso";
    document.getElementsByClassName("active")[0]?.classList.remove("active");
    document.getElementById("item-associations")?.classList.add("active");
    stockAllAsso();
  }, []);

  const stockAllAsso = async () => {
    const allAsso = await getAllAsso();
    setAllAsso(allAsso);
  };

  return (
    <div className="main-all-asso">
      <FluxAsso typeFlux={'fav'} title={"Mes Asso'"}/>
      <FluxAsso typeFlux={'allAsso'} title={"Toutes les Asso'"} theAsso={allAsso}/>
    </div>
  );
};

export default AllAsso;
