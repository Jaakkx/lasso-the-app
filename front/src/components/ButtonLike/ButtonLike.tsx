import React, { useState } from "react";
import AllAsso from "../../scenes/AllAsso/AllAsso";
import "./ButtonLike.css";

const ButtonLike = (props: any) => {
  const [checked, setChecked] = useState(false);

  const handleChange = () => {
      if (checked) {
          setChecked(false);      
      }else {
          setChecked(true);
      }
    console.log(checked);
  };

  return (
    <div onClick={handleChange}>
      <svg
        width="30"
        height="30"
        viewBox="0 0 30 30"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M24.1522 15.0848C25.4356 13.9123 24.7152 11.7735 22.984 11.6164L19.7295 11.321C18.9824 11.2532 18.336 10.7729 18.0555 10.0772L16.8563 7.10329C16.1829 5.43345 13.8186 5.43407 13.1461 7.10427L11.9449 10.0876C11.6642 10.7848 11.0163 11.2658 10.2676 11.3326L7.0311 11.6217C5.29738 11.7765 4.57523 13.9187 5.86139 15.0916L8.46947 17.4698C8.99868 17.9524 9.22945 18.6812 9.07448 19.3804L8.3178 22.7947C7.93254 24.533 9.84004 25.8704 11.3429 24.9155L13.9275 23.2735C14.582 22.8577 15.418 22.8577 16.0725 23.2735L18.6645 24.9202C20.1663 25.8744 22.0729 24.5395 21.6901 22.8019L20.9359 19.3779C20.7822 18.68 21.0125 17.9531 21.5401 17.471L24.1522 15.0848Z"
          fill="white"
          stroke="#6D1A00"
        />
      </svg>
    </div>
  );
};

export default ButtonLike;
