import React from 'react';
import Ranked from '../../scenes/Ranked/Ranked';
import ButtonLike from '../ButtonLike/ButtonLike';
import './RankedCard.css';

const RankedCard = (props:any) => {
    return(
        <div className='container'>
            <div className='title_ranked_card'>
                <div className='rank'>{props.Rank}</div>
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

export default RankedCard;