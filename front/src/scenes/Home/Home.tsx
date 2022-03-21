import React, { useEffect, useState } from "react";
import "./Home.css";
import TinderCard from "react-tinder-card";

const db = [
  {
    name: "test1",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget urna eu ante consequat hendrerit vel rhoncus orci. Nullam neque augue, luctus ut nulla ac, tincidunt gravida tortor. Curabitur suscipit lacus et porta posuere. Integer tristique lobortis tellus, vel aliquet urna elementum ac.",
  },
  {
    name: "test2",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget urna eu ante consequat hendrerit vel rhoncus orci. Nullam neque augue, luctus ut nulla ac, tincidunt gravida tortor. Curabitur suscipit lacus et porta posuere. Integer tristique lobortis tellus, vel aliquet urna elementum ac.",
  },
  {
    name: "test3",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget urna eu ante consequat hendrerit vel rhoncus orci. Nullam neque augue, luctus ut nulla ac, tincidunt gravida tortor. Curabitur suscipit lacus et porta posuere. Integer tristique lobortis tellus, vel aliquet urna elementum ac.",
  },
  {
    name: "test4",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget urna eu ante consequat hendrerit vel rhoncus orci. Nullam neque augue, luctus ut nulla ac, tincidunt gravida tortor. Curabitur suscipit lacus et porta posuere. Integer tristique lobortis tellus, vel aliquet urna elementum ac.",
  },
];

const Home = () => {
  let [currentIndex, setCurrentIndex] = useState(db.length - 1);
  let [lastDirection, setLastDirection] = useState();

  useEffect(() => {
    document.getElementsByClassName("background-changer")[0].id = "appHome";
  });

  const onSwipe = (direction: any) => {
    console.log("You swiped: " + direction);
  };

  const onCardLeftScreen = (myIdentifier: any) => {
    console.log(myIdentifier + " left the screen");
  };

  return (
    <div id="home">
      <TinderCard
        onSwipe={onSwipe}
        onCardLeftScreen={() => onCardLeftScreen("fooBar")}
        preventSwipe={["right", "left"]}
        flickOnSwipe={false}
      >
        Swipe l'associations
      </TinderCard>
    </div>
  );
};

export default Home;
