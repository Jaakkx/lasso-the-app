import React, {
  ReactEventHandler,
  useEffect,
  useMemo,
  useRef,
  useState,
} from "react";
import "./Home.css";
import TinderCard from "react-tinder-card";
import CardSwipe from "../../components/CardSwipe.tsx/CardSwipe";
import { getQuestion, updateRank } from "../../api";
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

  // const [currentIndex, setCurrentIndex] = useState<number>();
  // // used for outOfFrame closure
  // const currentIndexRef = useRef(currentIndex);

  // const childRefs:any = useMemo(
  //   () =>
  //     Array(questions!.length)
  //       .fill(0)
  //       .map((i) => React.createRef()),
  //   []
  // );

  // const updateCurrentIndex = (val:number) => {
  //   setCurrentIndex(val);
  //   currentIndexRef.current = val;
  // };

  // const canGoBack = currentIndex! < questions!.length - 1;

  // const canSwipe = currentIndex! >= 0;

  // const swiped = (direction:any, nameToDelete:any, index:any) => {
  //   setLastDirection(direction)
  //   updateCurrentIndex(index - 1)
  // }

  // const outOfFrame = (name:any, idx:any) => {
  //   console.log(`${name} (${idx}) left the screen!`, currentIndexRef.current)
  //   // handle the case in which go back is pressed before card goes outOfFrame
  //   currentIndexRef.current! >= idx && childRefs[idx].current.restoreCard()
  //   // TODO: when quickly swipe and restore multiple times the same card,
  //   // it happens multiple outOfFrame events are queued and the card disappear
  //   // during latest swipes. Only the last outOfFrame event should be considered valid
  // }

  // const swipe = async (dir:any) => {
  //   if (canSwipe && currentIndex! < questions!.length) {
  //     await childRefs[currentIndex!].current.swipe(dir) // Swipe the card!
  //   }
  // }

  const handleLaunch = async () => {
    const userId:number = parseInt(sessionStorage.getItem('Id') || '', 10);
    const register = await getQuestion(userId);
    console.log(register);
    
    // let currentIndex = register.length,
    //   randomIndex;
    //   console.log(currentIndex);
    //   for (let i = register.length - 1; i > 0; i--) {
    //     const j = Math.floor(Math.random() * (i + 1));
    //     [register[i], register[j]] = [
    //       register[j],
    //       register[i],
    //     ];
    //   }
    //   console.log(register);
      
    // while (currentIndex != 0) {
    //   randomIndex = Math.floor(Math.random() * currentIndex);
    //   currentIndex--;
      // [register[currentIndex], register[randomIndex]] = [
      //   register[randomIndex],
      //   register[currentIndex],
      // ];
    // }
    setQuestions(register);
  };

  const swiped = async(swipe: any, questionId: number) => {
    console.log("removing: " + questionId);
    console.log(swipe);
    const userId:number = parseInt(sessionStorage.getItem('Id') || '', 10);
    const update = await updateRank({questionId, userId, swipe})
    setLastDirection(swipe);
    console.log(update);
    
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
            {questions?.map((question, index) => (
              <TinderCard
                className="tinder-card"
                // ref={childRefs[index]}
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
        {/* <ButtonSwipe side="left" onClick={() => swipe("left")} />
        <ButtonSwipe side="right" onClick={() => swipe("right")} /> */}
        <ButtonSwipe side="left" />
        <ButtonSwipe side="right" />
      </div>
    </div>
  );
};

export default Home;
