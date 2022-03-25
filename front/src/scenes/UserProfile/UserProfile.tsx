import React, { Component, useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import { getUser } from "../../api";
import { registerUser } from "../../decl/registerUser.decl";
import "./UserProfile.css";

const UserProfile = (props: any) => {
  const [theProfil, setTheProfil] = useState<registerUser>();
  const [isOk, setIsOk] = useState(true);

  let navigate = useNavigate();

  useEffect(() => {
    document.getElementsByClassName("background-changer")[0].id = "appProfile";
    getTheProfile();
  }, []);

  const getTheProfile = async () => {
    let theProfile = await getUser(sessionStorage.getItem("Id")!);
    setTheProfil(theProfile);
  };

  // const deconexion = () => {
  //   sessionStorage.clear();
  //   setIsOk(false);
  //   navigate('/');
  // }

  return (
    <div className="card-profile-wrapper">
      <div className="card-profile">
        <div>
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12.0002 22.5C17.7991 22.5 22.5002 17.799 22.5002 12C22.5002 6.20112 17.7991 1.50004 12.0002 1.50004C6.20125 1.50004 1.50016 6.20112 1.50016 12C1.50016 17.799 6.20125 22.5 12.0002 22.5ZM12.0002 23.6667C18.4437 23.6667 23.6668 18.4435 23.6668 12C23.6668 5.55654 18.4437 0.333374 12.0002 0.333374C5.55666 0.333374 0.333496 5.55654 0.333496 12C0.333496 18.4435 5.55666 23.6667 12.0002 23.6667Z"
              fill="#252525"
            />
            <path
              d="M5 18.7842C5 18.1816 5.45033 17.6723 6.05 17.6058C10.5504 17.1077 13.47 17.1526 17.9605 17.6169C18.1847 17.6405 18.3973 17.7288 18.5721 17.8711C18.747 18.0135 18.8766 18.2037 18.9452 18.4185C19.0137 18.6333 19.0182 18.8634 18.9581 19.0807C18.898 19.298 18.776 19.4932 18.6068 19.6422C13.3073 24.2617 10.2786 24.1981 5.37333 19.6469C5.13417 19.4252 5 19.1102 5 18.7847V18.7842Z"
              fill="#252525"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M17.9007 18.1967C13.4458 17.7359 10.5682 17.6927 6.11391 18.1857C5.96729 18.2027 5.83212 18.2733 5.73428 18.3839C5.63644 18.4944 5.58281 18.6371 5.58366 18.7847C5.58366 18.9516 5.65308 19.1097 5.77033 19.2193C8.20166 21.4745 10.0438 22.4936 11.8446 22.5C13.6517 22.5064 15.5931 21.4955 18.2239 19.203C18.3075 19.1286 18.3677 19.0315 18.3971 18.9236C18.4265 18.8156 18.424 18.7015 18.3898 18.5949C18.3555 18.4884 18.2911 18.3941 18.2043 18.3235C18.1175 18.253 18.012 18.2091 17.9007 18.1973V18.1967ZM5.98616 17.026C10.5338 16.5226 13.496 16.5681 18.0215 17.0365C18.3588 17.0717 18.6786 17.2045 18.9416 17.4187C19.2046 17.6328 19.3995 17.919 19.5024 18.2422C19.6053 18.5654 19.6117 18.9116 19.5209 19.2383C19.43 19.5651 19.2459 19.8583 18.991 20.0821C16.3222 22.4084 14.0997 23.6754 11.8411 23.6667C9.57599 23.6585 7.45149 22.3699 4.97758 20.0745C4.80045 19.9095 4.65925 19.7098 4.5628 19.4878C4.46634 19.2657 4.41671 19.0262 4.417 18.7842C4.41614 18.3492 4.57578 17.9293 4.86532 17.6048C5.15487 17.2803 5.55396 17.074 5.98616 17.0254V17.026Z"
              fill="#252525"
            />
            <path
              d="M16.6668 9.66667C16.6668 10.9043 16.1752 12.0913 15.3 12.9665C14.4248 13.8417 13.2378 14.3333 12.0002 14.3333C10.7625 14.3333 9.5755 13.8417 8.70033 12.9665C7.82516 12.0913 7.3335 10.9043 7.3335 9.66667C7.3335 8.42899 7.82516 7.242 8.70033 6.36683C9.5755 5.49166 10.7625 5 12.0002 5C13.2378 5 14.4248 5.49166 15.3 6.36683C16.1752 7.242 16.6668 8.42899 16.6668 9.66667Z"
              fill="#252525"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12.0002 13.1667C12.9284 13.1667 13.8187 12.7979 14.475 12.1415C15.1314 11.4852 15.5002 10.5949 15.5002 9.66667C15.5002 8.73841 15.1314 7.84817 14.475 7.19179C13.8187 6.53542 12.9284 6.16667 12.0002 6.16667C11.0719 6.16667 10.1817 6.53542 9.52529 7.19179C8.86891 7.84817 8.50016 8.73841 8.50016 9.66667C8.50016 10.5949 8.86891 11.4852 9.52529 12.1415C10.1817 12.7979 11.0719 13.1667 12.0002 13.1667ZM12.0002 14.3333C13.2378 14.3333 14.4248 13.8417 15.3 12.9665C16.1752 12.0913 16.6668 10.9043 16.6668 9.66667C16.6668 8.42899 16.1752 7.242 15.3 6.36683C14.4248 5.49166 13.2378 5 12.0002 5C10.7625 5 9.5755 5.49166 8.70033 6.36683C7.82516 7.242 7.3335 8.42899 7.3335 9.66667C7.3335 10.9043 7.82516 12.0913 8.70033 12.9665C9.5755 13.8417 10.7625 14.3333 12.0002 14.3333Z"
              fill="#252525"
            />
          </svg>
          <p>{theProfil?.userName + " " + theProfil?.lastName}</p>
        </div>
        <div>
          <svg
            width="20"
            height="16"
            viewBox="0 0 20 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3.25 6.97519e-09H16.75C17.5801 -5.43467e-05 18.3788 0.317554 18.9822 0.887671C19.5856 1.45779 19.948 2.23719 19.995 3.066L20 3.25V12.75C20.0001 13.5801 19.6824 14.3788 19.1123 14.9822C18.5422 15.5856 17.7628 15.948 16.934 15.995L16.75 16H3.25C2.41986 16.0001 1.62117 15.6824 1.01777 15.1123C0.414367 14.5422 0.0519987 13.7628 0.00500012 12.934L6.97518e-09 12.75V3.25C-5.43467e-05 2.41986 0.317554 1.62117 0.887672 1.01777C1.45779 0.414367 2.23719 0.0519987 3.066 0.00500012L3.25 6.97519e-09H16.75H3.25ZM18.5 5.373L10.35 9.663C10.258 9.71161 10.1568 9.74054 10.053 9.74795C9.94921 9.75535 9.84499 9.74106 9.747 9.706L9.651 9.664L1.5 5.374V12.75C1.50002 13.1892 1.66517 13.6123 1.96268 13.9354C2.26019 14.2585 2.6683 14.4579 3.106 14.494L3.25 14.5H16.75C17.1893 14.5 17.6126 14.3347 17.9357 14.037C18.2588 13.7392 18.4581 13.3309 18.494 12.893L18.5 12.75V5.373ZM16.75 1.5H3.25C2.81081 1.50002 2.38768 1.66517 2.06461 1.96268C1.74154 2.26019 1.54214 2.6683 1.506 3.106L1.5 3.25V3.679L10 8.152L18.5 3.678V3.25C18.5 2.81065 18.3347 2.38739 18.037 2.06429C17.7392 1.74119 17.3309 1.5419 16.893 1.506L16.75 1.5Z"
              fill="#252525"
            />
          </svg>
          <p>{theProfil?.email}</p>
        </div>
        <div onClick={() => console.log("deconnexion")}>
          <svg
            width="19"
            height="19"
            viewBox="0 0 19 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_814_500)">
              <path
                d="M16.625 16.625L2.375 2.375"
                stroke="#252525"
                stroke-width="6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M16.625 2.375L2.375 16.625"
                stroke="#252525"
                stroke-width="6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
            <defs>
              <clipPath id="clip0_814_500">
                <rect width="19" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>{" "}
          <p>Se déconnecter</p>
        </div>
        <div>
          <svg
            width="12"
            height="14"
            viewBox="0 0 12 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M6.00005 3C7.08069 3.00042 8.13212 3.35093 8.99684 3.99904C9.86156 4.64715 10.493 5.55797 10.7967 6.59508C11.1003 7.63219 11.0598 8.73976 10.6812 9.7519C10.3025 10.764 9.60617 11.6263 8.69638 12.2094C7.7866 12.7926 6.71237 13.0653 5.63459 12.9868C4.5568 12.9082 3.53348 12.4826 2.71789 11.7736C1.90231 11.0647 1.33836 10.1105 1.11052 9.0542C0.882676 7.99784 1.0032 6.89611 1.45405 5.914C1.50312 5.7946 1.50411 5.66084 1.4568 5.54072C1.4095 5.42061 1.31757 5.32344 1.20025 5.26957C1.08294 5.21569 0.949329 5.20927 0.827393 5.25167C0.705456 5.29406 0.604642 5.38197 0.546048 5.497C0.00505829 6.67559 -0.139517 7.99773 0.133978 9.26538C0.407474 10.533 1.08432 11.678 2.06312 12.5286C3.04193 13.3793 4.27001 13.89 5.56341 13.9842C6.8568 14.0783 8.14589 13.7509 9.23758 13.0509C10.3293 12.3509 11.1648 11.3161 11.619 10.1014C12.0732 8.88676 12.1216 7.55762 11.757 6.31311C11.3924 5.0686 10.6344 3.97571 9.59656 3.19815C8.55871 2.42059 7.29687 2.00022 6.00005 2V3Z"
              fill="#252525"
            />
            <path
              d="M6.00002 4.46596V0.533964C6.00001 0.48646 5.98645 0.439945 5.96096 0.399865C5.93546 0.359785 5.89907 0.327799 5.85605 0.307653C5.81303 0.287507 5.76516 0.280035 5.71805 0.286112C5.67093 0.292188 5.62652 0.311562 5.59002 0.341964L3.23002 2.30796C3.20189 2.33143 3.17925 2.36079 3.16372 2.39396C3.14819 2.42714 3.14014 2.46333 3.14014 2.49996C3.14014 2.5366 3.14819 2.57279 3.16372 2.60596C3.17925 2.63914 3.20189 2.6685 3.23002 2.69196L5.59002 4.65796C5.62652 4.68837 5.67093 4.70774 5.71805 4.71382C5.76516 4.71989 5.81303 4.71242 5.85605 4.69228C5.89907 4.67213 5.93546 4.64014 5.96096 4.60006C5.98645 4.55998 6.00001 4.51347 6.00002 4.46596Z"
              fill="#252525"
            />
          </svg>
          <p>Réinitialiser le classement</p>
        </div>
      </div>
    </div>
  );
};

export default UserProfile;
