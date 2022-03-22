import React from "react";
import './CardSwipe.css';

const CardSwipe = (props:any) => {
    return(
        <div className="card-swipe">
            {
                props.questionContent
            }
        </div>
    );
}

export default CardSwipe;