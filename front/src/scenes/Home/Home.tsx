import React from "react";
import "./Home.css";
import TinderCard from "react-tinder-card";

const Home = () => {
  const onSwipe = (direction: any) => {
    console.log("You swiped: " + direction);
  };

  const onCardLeftScreen = (myIdentifier: any) => {
    console.log(myIdentifier + " left the screen");
  };

  return (
    <div className="home">
      <TinderCard
        onSwipe={onSwipe}
        onCardLeftScreen={() => onCardLeftScreen("fooBar")}
        preventSwipe={["right", "left"]}
      >
          Hello World
      </TinderCard>
    </div>
  );
};

export default Home;
