import React, { useEffect } from "react";

const SocialPage = () => {
  useEffect(() => {
    document.getElementsByClassName("App")[0].id = "appSocial";
  });
  return <div className="social-page">Social</div>;
};

export default SocialPage;
