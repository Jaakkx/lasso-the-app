import React from 'react';
import AllAsso from '../../scenes/AllAsso/AllAsso';
import './AssoCard.css';
import ButtonLike from '../ButtonLike/ButtonLike';

const AssoCard = (props:any) => {
    return(
        <div className='container'>
            <div className='title_ranked_card'>
            <img src={"../../assets/images/"+ props.LogoCard} className='logo'></img>
            {/* src\assets\images\logo.jpg */}
            <h1 className='title_card'>
                {
                        props.TitleCard
                }        
            </h1>
            <ButtonLike/>
            </div>
            <p className='content_card'>
                {
                    props.ContentCard
                }
            </p>
        </div>
        
    );
}

export default AssoCard;