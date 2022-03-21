import React from "react";
import { Link } from "react-router-dom";
import './ItemsMenu.css';

const ItemsMenu = (props:any) => {

    let link:string;

    if(props.type === "home"){
       link =  "";
    }else{
        link = props.type;
    }

    console.log(link);
    

    return(
        <Link className="items-menu" to={"/" + link}>
            {props.type}
        </Link>
    );
}

export default ItemsMenu;