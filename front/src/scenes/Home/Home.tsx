import React, { ReactEventHandler, useEffect, useState } from "react";
import "./Home.css";
import TinderCard from "react-tinder-card";
import CardSwipe from "../../components/CardSwipe.tsx/CardSwipe";
import { getQuestion } from "../../api";
import { Question } from "../../decl/Question.decl";
import ButtonSwipe from "../../components/ButtonSwipe/ButtonSwipe";

const Home = () => {
  const [questions, setQuestions] = useState<Question[]>();
  const [lastDirection, setLastDirection] = useState();
  const [allQuestions, setAllQuestions] = useState();

  useEffect(() => {
    document.getElementsByClassName("background-changer")[0].id = "appHome";
    document.getElementsByClassName("active")[0].classList.remove("active");
    document.getElementById("item-home")?.classList.add("active");
    handleLaunch();
  }, []);

  const handleLaunch = async () => {
    const register = await getQuestion();
    let randomQuestion: Question[];
    let currentIndex = register.length,
      randomIndex;
    while (currentIndex != 0) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
      [register[currentIndex], register[randomIndex]] = [
        register[randomIndex],
        register[currentIndex],
      ];
    }
    setQuestions(register);
  };

  const swiped = (direction: any, nameToDelete: any) => {
    console.log("removing: " + nameToDelete);
    setLastDirection(direction);
  };

  const outOfFrame = (name: number) => {
    console.log(name + " left the screen!");
  };

  const onSwipe = (direction: any) => {
    console.log("You swiped: " + direction);
  };

  const onCardLeftScreen = (myIdentifier: any) => {
    console.log(myIdentifier + " left the screen");
  };

  return (
    <div id="home">
      <div className="card-design">
        <div className="card-container">
          <div className="tinder-card-duplicate">
            {questions?.map((question) => (
              <TinderCard
                className="tinder-card"
                key={question.id}
                onSwipe={(dir) => swiped(dir, question.id)}
                onCardLeftScreen={() => outOfFrame(question.id)}
              >
                <CardSwipe questionContent={question.libelle} />
              </TinderCard>
            ))}
          </div>
        </div>
      </div>
      <div className="button-swipe-parent">
        <ButtonSwipe side='left'/>
        <ButtonSwipe side='right'/>
      </div>
    </div>
  );
};

export default Home;
