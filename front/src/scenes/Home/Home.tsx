import React, { ReactEventHandler, useEffect, useState } from "react";
import "./Home.css";
import TinderCard from "react-tinder-card";
import CardSwipe from "../../components/CardSwipe.tsx/CardSwipe";
import { getQuestion } from "../../api";

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
  const questions = db;
  const [lastDirection, setLastDirection] = useState();

  const swiped = (direction: any, nameToDelete: any) => {
    console.log("removing: " + nameToDelete);
    setLastDirection(direction);
  };

  const outOfFrame = (name: string) => {
    console.log(name + " left the screen!");
  };

  useEffect(() => {
    document.getElementsByClassName("background-changer")[0].id = "appHome";
    document.getElementsByClassName("active")[0].classList.remove("active");
    document.getElementById("item-home")?.classList.add("active");
  handleClick();
    
    // handleClick();
  });

  const handleClick = async() => {
    try{
      const register = await getQuestion();      
    }catch(error){
        alert(error);
    }
  }

  const onSwipe = (direction: any) => {
    console.log("You swiped: " + direction);
  };

  const onCardLeftScreen = (myIdentifier: any) => {
    console.log(myIdentifier + " left the screen");
  };

  return (
    <div id="home">
      {/* <div
        onClick={handleClick}
      >
        Test
      </div> */}
      <div className="card-design">
        <div className="card-container">
          <div className="tinder-card-duplicate">
            {questions.map((question) => (
                <TinderCard
                className="tinder-card"
                key={question.name}
                onSwipe={(dir) => swiped(dir, question.name)}
                onCardLeftScreen={() => outOfFrame(question.name)}
                >
                <CardSwipe questionContent={question.name} />
              </TinderCard>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

export default Home;
