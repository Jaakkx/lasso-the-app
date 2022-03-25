import React from "react";
import "./CardSwipe.css";

const CardSwipe = (props: any) => {
  return (
    <div className="card-swipe">
      <p>{props.questionContent}</p>
    </div>
  );
};

export default CardSwipe;
