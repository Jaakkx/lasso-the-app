import React, { useEffect } from "react";

const SocialPage = () => {
  useEffect(() => {
    document.getElementsByClassName("App")[0].id = "appSocial";
    document.getElementsByClassName('active')[0]?.classList.remove('active');
    document.getElementById("item-social")?.classList.add("active");
  });
  return <div className="social-page">Social</div>;
};

export default SocialPage;
