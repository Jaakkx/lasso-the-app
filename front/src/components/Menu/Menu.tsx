import React from "react";
import './Menu.css'
import ItemsMenu from "./ItemsMenu/ItemsMenu";

const Menu = () => {
    return (
        <nav className="navbar">
            <ItemsMenu type="home"/>
            <ItemsMenu type="classement"/>
            <ItemsMenu type="associations"/>
            <ItemsMenu type="social"/>
        </nav>
    );
}

export default Menu;