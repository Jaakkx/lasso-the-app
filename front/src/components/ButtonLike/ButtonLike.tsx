import React, {useState} from 'react';
import AllAsso from '../../scenes/AllAsso/AllAsso';
import './ButtonLike.css';

const ButtonLike = (props:any) => {

    const [checked, setChecked] = useState(false);

    const handleChange = () => {
    setChecked(true);
    console.log(checked);
    };


    return(
    
        <input 
            type="button"
            checked={checked}
            onChange={handleChange}
            className="button_like"
            name='fav'
        />   
          
        
        
    );
}

export default ButtonLike;