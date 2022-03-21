import React, { useEffect } from "react";
import "./AllAsso.css";

const AllAsso = () => {
  useEffect(() => {
    document.getElementsByClassName("App")[0].id = "appAllAsso";
  });

  return <div id="all-asso">Les associations</div>;
};

export default AllAsso;
