<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .navbar {
            position: fixed;
            z-index: 99;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* padding: 2em 3em; */
            transition: all 0.3s;
            top: 0%
        }

        .site-logo {
            color: #000;
        }

        .nav-container {
            transition: all 0.3s;
            visibility: hidden;
            z-index: 98;
        }

        #menu-toggle-btn {
            transition: all 0.3s;
            z-index: 100000;
            cursor: pointer;
        }

        #menu-buttons {
            height: 2px;
            background: #000;
            width: 24px;
            display: inline-block;
            position: absolute;
            top: 50%;
            transition: all 0.3s;
        }

        #menu-buttons::before {
            content: " ";
            position: absolute;
            display: inline-block;
            height: 2px;
            background: #000;
            transform: translateY(-4px);
            width: 24px;
            transition: all 0.3s;
            top: -2px;
        }

        #menu-buttons::before {
            content: " ";
            position: absolute;
            display: inline-block;
            height: 2px;
            background: #000;
            transform: translateY(-4px);
            width: 24px;
            transition: all 0.3s;
            top: -2px;
        }

        .active #menu-buttons {
            transform: rotate(45deg);
            background: #fff;
        }

        .active #menu-buttons::before {
            top: unset;
            transform: rotate(-90deg);
            background: #fff;
        }

        .active:hover #menu-buttons::before {
            top: unset;
        }

        .nav-item-wrapper::after {
            content: "";
            position: absolute;
            top: 60px;
            left: 0;
            width: 500px;
            height: 60px;
            background: #000;
            margin: 0 auto;
            transition: 1s;
        }

        .nav-link {
            border: 0 solid transparent;
            /* Initial state with no visible border */
        }

        #backButton {
            opacity: 0;
        }

        /* #extra1 {
      display: none;
    } */
        /* @media (max-width:900) {
  .nav {
      flex-direction: column-reverse;
  }
  .nav-logo {
      display: none;
  }
  .nav-socials {
      flex-direction: row;
      margin-top: 4em;

  }
  .nav-socials a {
      padding: 0 0 0.4em;
  }
  .nav-footer{
      display: none;
  }
} */
    </style>
</head>

<body>
    <div class="navbar bg-transparent p-5 pr-14 backdrop-blur-lg bg-opacity-50 ">
        <a href="/" wire:navigate class="site-logo flex items-center">
            <img src="data:image/png;base64,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" class="h-10 mr-3 sm:h-16"><!--alt="Landwind Logo"-->
            <div class="flex flex-col">
                <span class="self-center sm:text-lg text-xs font-semibold whitespace-nowrap  ">THE KELKAR EDUCATION TRUST'S <br> VINAYAK GANESH VAZE COLLEGE OF ARTS, <br> SCIENCE AND COMMERCE (AUTONOMOUS).</span>
            </div>

        </a>
        <div class="menu-toggle">
            <div id="menu-toggle-btn" class="OpenMenu">
                <span id="menu-buttons"></span>
            </div>
        </div>

    </div>

    <div class="nav-container fixed top-0 w-full min-h-full bg-black text-white flex flex-col justify-center items-center">
        <!-- w-2/3 -->
        <div class="flex w-full md:w-3/4 px-1 gap-8 flex-col justify-center">
            <!-- <div class="flex flex-col justify-between items-start">
            <div class="font-light mt-[-0.2em] uppercase text-xl">
              KETS <br />
              VAZE
            </div>
            <div class="flex flex-col">
              <a class="font-normal text-xs" href="">Behance</a>
              <a class="font-normal text-xs" href="">Facebook</a>
              <a class="font-normal text-xs" href="">Instagram</a>
              <a class="font-normal text-xs" href="">Github</a>
              <a class="font-normal text-xs" href="">Youtube</a>
            </div>
          </div> -->
            <div class="justify-evenly mb-5 px-16" id="backButton">
                <div class="flex justify-start items-center w-full gap-4">
                    <svg id="backButton" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 md:size-14 hover:text-slate-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex justify-start items-center gap-1" id="subnavhistory">
                        <!-- <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-4 md:size-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5 8.25 12l7.5-7.5"
                  />
                </svg>
                <p class="md:text-3xl text-md  font-light">
                  Governance
                </p> -->
                    </div>
                </div>
            </div>

            <div class="flex gap-8 justify-around">
                <div class="d-flex hidden md:w-full" id="main1"></div>
                <div class="d-flex hidden md:w-full" id="main2"></div>
            </div>
            <div id="extra1" class="hidden px-16"></div>

            <div id="extra2" class="hidden px-16"></div>
        </div>

        <!-- Nav Footer  -->
        <div class="nav-footer absolute w-full bottom-0 py-[2em] px-[1em]  justify-between hidden">
            <div>
                <a class="py-0 px-[1em]" href="#">Privacy Policy</a>
                <a class="py-0 px-[1em]" href="#">Terms & Conditions</a>
            </div>
        </div>
    </div>

    <script>

        //base url
        let base_path=`${window.location.origin}/${window.location.href.split("/")[3]}`
        const t1 = gsap.timeline();
        const mainNavTimeline = gsap.timeline({
            paused: true
        });
        const subNavTimeline = gsap.timeline({
            paused: true
        });
        const headerTimeline = gsap.timeline({
            paused: true
        });
        var subnavHistory = [];
        const navData = [{
                name: "Home",
                link: "",
                hasSub: false
            },
            {
                name: "Contact Us",
                link: "",
                hasSub: false
            },
            {
                name: "About us",
                link: "",
                hasSub: true,
                subItems: [{
                        name: "Vision and Mission",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Kelkar Education Trust",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Governance",
                        link: "",
                        hasSub: true,
                        subItems: [{
                                name: "Legacy",
                                link: `${base_path}/College/src/main/Pages/about_us_tab/legacy.php`,
                                hasSub: false
                            },
                            {
                                name: "Organogram",
                                link: "",
                                hasSub: false
                            },
                            {
                                name: "College Management",
                                link: "",
                                hasSub: false
                            },
                            {
                                name: "College Administration",
                                link: "",
                                hasSub: false
                            },
                        ],
                    },
                    {
                        name: "Brochure",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Prospectus",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "NIRF",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "AISHE",
                        link: "",
                        hasSub: false
                    },
                ],
            },
            {
                name: "Academics",
                link: "",
                hasSub: true,
                subItems: [{
                        name: "Course Catalog",
                        link: `${base_path}/College/src/main/Pages/academics_tab/course_catalog.php`,
                        hasSub: false
                    },

                    {
                        name: "POs and PSOs",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Academic Calendar",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Event Calendar",
                        link: "",
                        hasSub: false
                    },
                ],
            },
            {
                name: "Student Corner",
                link: "",
                hasSub: true,
                subItems: [{
                        name: "Notice and circulars",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Time table",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Roll call list",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Examination and result",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Scholarships",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Departments",
                        link: "",
                        hasSub: false
                    },
                ],
            },
            {
                name: "Our campus",
                link: "",
                hasSub: true,
                subItems: [{
                        name: "Infrastructure",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Library",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "SRC",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Placement Cell",
                        link: "",
                        hasSub: false
                    },
                ],
            },
            {
                name: "Admissions",
                link: "/admissions",
                hasSub: false
            },
            {
                name: "Research",
                link: "",
                hasSub: false
            },
            {
                name: "Alumni",
                link: "",
                hasSub: false
            },
            {
                name: "Faculty",
                link: "",
                hasSub: false
            },
            {
                name: "Committees",
                link: "",
                hasSub: false
            },
            {
                name: "Procedures",
                link: "",
                hasSub: false
            },
            {
                name: "NAAC",
                link: "",
                hasSub: true,
                subItems: [{
                        name: "AQAR",
                        link: "",
                        hasSub: false,
                    },
                    {
                        name: "SSR",
                        link: "",
                        hasSub: false,
                    },
                    {
                        name: "IQAC",
                        link: "",
                        hasSub: false,
                    },
                ],
            },
            {
                name: "More",
                link: "",
                hasSub: true,
                subItems: [{
                        name: "NSS",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Research Conference",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Gallery",
                        link: "",
                        hasSub: false
                    },
                    {
                        name: "Magazines",
                        link: "",
                        hasSub: true,
                        subItems: [{
                            name: "Mayur Magazine",
                            link: "",
                            hasSub: false
                        }],
                    },
                ],
            },
        ];

        function findItemByName(arr, name) {
            for (const item of arr) {
                if (item.name === name) {
                    return item;
                }
                if (item.hasSub && item.subItems) {
                    const found = findItemByName(item.subItems, name);
                    if (found) {
                        return found;
                    }
                }
            }
            return null;
        }
        var main1 = document.getElementById("main1");
        var main2 = document.getElementById("main2");
        navData.forEach((element, index) => {
            if (index < navData.length / 2 + 1) {
                var data = `
            <div class="nav-link py-2 relative ${
              element.hasSub ? "hasExtraSub" : ""
            }" >
              ${
                element.hasSub
                  ? `
                  <a class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400">
                  <div class="flex flex-row items-center justify-between">
                    ${element.name}
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 svg hidden"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m8.25 4.5 7.5 7.5-7.5 7.5"
                    />
                  </svg>
                </div>
                </a>
                `
                  : `<a
                class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400"
                href="${element.link}"
                >${element.name}</a>`
              }
              <div class="nav-item-wrapper"></div>
            </div>
            `;

                main1.innerHTML += data;
            } else {
                var data = `
            <div class="nav-link py-2 relative ${
              element.hasSub ? "hasExtraSub" : ""
            }" >
              ${
                element.hasSub
                  ? `
                  <a class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400">
                  <div class="flex flex-row items-center justify-between">
                    ${element.name}
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 svg hidden"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m8.25 4.5 7.5 7.5-7.5 7.5"
                    />
                  </svg>
                </div>
                </a>
                  
                  
                  `
                  : `<a
                class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400"
                href="${element.link}"
                >${element.name}</a
              >`
              }
              <div class="nav-item-wrapper"></div>
              </div>
              `;

                main2.innerHTML += data;
            }
        });

        function OpenExtra(title) {
            $("#extra1").html("");
            const subNavs = findItemByName(navData, title);
            $("#subnavhistory").html(
                `<p class="md:text-3xl text-md font-light">${title}</p>`
            );
            subNavs.subItems.forEach((element) => {
                const data = `
            <div class="nav-link py-2 relative ${
              element.hasSub ? "hasExtraSubInner" : ""
            }">
              ${
                element.hasSub
                  ? `
                  <a class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400">
                      <div class="flex flex-row items-center justify-between">
                          ${element.name}
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 svg hidden">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                          </svg>
                      </div>
                  </a>`
                  : `<a class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400" href="${element.link}">${element.name}</a>`
              }
              <div class="nav-item-wrapper"></div>
            </div>`;
                $("#extra1").append(data);
            });
            // mainNavTimeline.reverse();
            subNavTimeline
                .to(".nav-link", {
                    top: 0,
                    ease: "power2.inOut",
                    stagger: {
                        amount: 0.1
                    },
                    borderBottom: "0.1px solid transparent",
                    duration: 0.8,
                })
                .to(
                    ".nav-link > a", {
                        top: 64,
                        ease: "power2.inOut",
                        stagger: {
                            amount: 0.1
                        },
                        duration: 0.8,
                    },
                    "-=0.8"
                )
                .to(
                    ".d-flex > div", {
                        opacity: 0,
                        display: "none",
                        y: 10,
                        stagger: {
                            amount: 0.04
                        },
                        duration: 0.8,
                    },
                    "-=0.8"
                )
                .to(
                    ".d-flex", {
                        opacity: 0,
                        display: "none",
                        duration: 0.8
                    },
                    "-=0.8"
                )
                .to("#extra1", {
                    opacity: 1,
                    display: "block",
                    duration: 0.4
                })
                .to("#extra1 > div", {
                    opacity: 1,
                    display: "block",
                    y: 10,
                    stagger: {
                        amount: 0.04
                    },
                    duration: 0.4,
                })
                .to(
                    ".nav-link > a", {
                        top: 0,
                        ease: "power2.inOut",
                        stagger: 0.1,
                        duration: 0.8
                    },
                    "-=0.4"
                )
                .to(
                    ".nav-link", {
                        top: 0,
                        ease: "power2.inOut",
                        borderBottom: "0.1px solid #fff",
                        duration: 0.8,
                    },
                    "-=0.4"
                )
                .to(
                    ".svg", {
                        ease: "power2.inOut",
                        display: "block",
                        opacity: 1,
                        duration: 0.8,
                    },
                    "-=0.4"
                )
                .to(
                    "#backButton", {
                        opacity: 1,
                        ease: "power2.inOut",
                        duration: 0.8
                    },
                    "-=0.4"
                );

            subNavTimeline.play();
        }

        $(".hasExtraSub").on("click", function() {
            OpenExtra(this.innerText);
            subnavHistory.push(this.innerText);

            $(".hasExtraSubInner").on("click", function() {
                $("#extra2").html("");
                const subNavs = findItemByName(navData, this.innerText);
                subnavHistory.push(this.innerText);
                subNavs.subItems.forEach((element) => {
                    const data = `
                <div class="nav-link py-2 relative ${
                  element.hasSub ? "hasExtraSubInner" : ""
                }">
                    ${
                      element.hasSub
                        ? `
                        <a class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400">
                            <div class="flex flex-row items-center justify-between">
                                ${element.name}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 svg hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                </svg>
                            </div>
                        </a>`
                        : `<a class="relative top-[60px] md:text-3xl text-xl font-light hover:text-slate-400" href="${element.link}">${element.name}</a>`
                    }
                    <div class="nav-item-wrapper"></div>
                </div>`;
                    $("#extra2").append(data);
                });
                const subHistoryP = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 md:size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                        </svg>
                        <p class="md:text-3xl text-md font-light">${this.innerText}</p>`;
                subNavTimeline
                    .to(".nav-link", {
                        top: 0,
                        ease: "power2.inOut",
                        stagger: {
                            amount: 0.1
                        },
                        borderBottom: "0.1px solid transparent",
                        duration: 0.8,
                    })
                    .to(
                        ".nav-link > a", {
                            top: 64,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            duration: 0.8,
                        },
                        "-=0.8"
                    )
                    .to(
                        "#backButton", {
                            opacity: 0,
                            ease: "power2.inOut",
                            duration: 0.8,
                            onComplete: () => {
                                $("#subnavhistory").append(subHistoryP);
                            },
                        },
                        "-=0.4"
                    )
                    .to(
                        "#extra1 > div", {
                            opacity: 0,
                            display: "none",
                            y: 10,
                            stagger: {
                                amount: 0.04
                            },
                            duration: 0.8,
                        },
                        "-=0.8"
                    )
                    .to(
                        "#extra1", {
                            opacity: 0,
                            display: "none",
                            duration: 0.8
                        },
                        "-=0.8"
                    )
                    .to("#extra2", {
                        opacity: 1,
                        display: "block",
                        duration: 0.4
                    })
                    .to("#extra2 > div", {
                        opacity: 1,
                        display: "block",
                        y: 10,
                        stagger: {
                            amount: 0.04
                        },
                        duration: 0.4,
                    })
                    .to(
                        ".nav-link > a", {
                            top: 0,
                            ease: "power2.inOut",
                            stagger: 0.1,
                            duration: 0.8
                        },
                        "-=0.4"
                    )
                    .to(
                        ".nav-link", {
                            top: 0,
                            ease: "power2.inOut",
                            borderBottom: "0.1px solid #fff",
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to(
                        ".svg", {
                            ease: "power2.inOut",
                            display: "block",
                            opacity: 1,
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to(
                        "#backButton", {
                            opacity: 1,
                            ease: "power2.inOut",
                            duration: 0.8
                        },
                        "-=0.4"
                    );

                subNavTimeline.play();
            });
        });

        const animateOpenNav = () => {
            headerTimeline
                .to(".nav-container", {
                    autoAlpha: 1,
                    duration: 0.2,
                    delay: 0.1
                })
                .to(
                    ".navbar", {
                        backgroundColor: "#000",
                        autoAlpha: 1,
                        duration: 0.2
                    },
                    "-=0.2"
                )
                .to(".site-logo", {
                    color: "#fff",
                    duration: 0.2
                }, "-=0.2")
                .to(
                    ".nav-footer", {
                        opacity: 1,
                        display: "block",
                        duration: 0.5,
                        delay: 0.8
                    },
                    "-=0.5"
                );

            mainNavTimeline
                .to(".d-flex ", {
                    opacity: 1,
                    y: 10,
                    display: "block",
                    duration: 0.4,
                })
                .to(".d-flex > div", {
                    opacity: 1,
                    display: "block",
                    stagger: {
                        amount: 0.04
                    },
                    duration: 0.4,
                })
                .to(
                    ".nav-link > a", {
                        top: 0,
                        ease: "power2.inOut",
                        stagger: {
                            amount: 0.1
                        },
                        duration: 0.8,
                    },
                    "-=0.4"
                )
                .to(
                    ".svg", {
                        ease: "power2.inOut",
                        display: "block",
                        opacity: 1,
                        duration: 0.8,
                    },
                    "-=0.4"
                )
                .to(
                    ".nav-link", {
                        top: 0,
                        ease: "power2.inOut",
                        stagger: {
                            amount: 0.1
                        },
                        borderBottom: "0.1px solid #fff",
                        duration: 0.8,
                    },
                    "-=0.4"
                );
        };
        $("#menu-toggle-btn").on("click", function() {
            $(this).toggleClass("active");
            if ($(this).hasClass("active")) {
                animateOpenNav();
                headerTimeline.play();
                mainNavTimeline.play();
            } else {
                if (subnavHistory.length === 2) {
                    subNavTimeline
                        .to(
                            "#backButton", {
                                opacity: 0,
                                ease: "power2.inOut",
                                duration: 0.8
                            },
                            "-=0.4"
                        )
                        .to(".nav-link", {
                            top: 0,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            borderBottom: "0.1px solid transparent",
                            duration: 0.8,
                        })
                        .to(
                            ".nav-link > a", {
                                top: 64,
                                ease: "power2.inOut",
                                stagger: {
                                    amount: 0.1
                                },
                                duration: 0.8,
                            },
                            "-=0.8"
                        )
                        .to(
                            ".svg", {
                                ease: "power2.inOut",
                                display: "none",
                                opacity: 0,
                                duration: 0.8,
                            },
                            "-=0.4"
                        )
                        .to("#extra2", {
                            opacity: 0,
                            display: "none",
                            duration: 0.4
                        })
                        .to("#extra2 > div", {
                            opacity: 0,
                            display: "none",
                            y: 10,
                            stagger: {
                                amount: 0.04
                            },
                            duration: 0.4,
                        })
                        .then(() => {
                            // After the main navigation timeline has reversed, reverse the header timeline
                            headerTimeline.reverse();
                        });
                } else if (subnavHistory.length === 1) {
                    subNavTimeline
                        .to(
                            "#backButton", {
                                opacity: 0,
                                ease: "power2.inOut",
                                duration: 0.8
                            },
                            "-=0.4"
                        )
                        .to(".nav-link", {
                            top: 0,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            borderBottom: "0.1px solid transparent",
                            duration: 0.8,
                        })
                        .to(
                            ".nav-link > a", {
                                top: 64,
                                ease: "power2.inOut",
                                stagger: {
                                    amount: 0.1
                                },
                                duration: 0.8,
                            },
                            "-=0.8"
                        )
                        .to(
                            ".svg", {
                                ease: "power2.inOut",
                                display: "none",
                                opacity: 0,
                                duration: 0.8,
                            },
                            "-=0.4"
                        )
                        .to("#extra1", {
                            opacity: 0,
                            display: "none",
                            duration: 0.4
                        })
                        .to("#extra1 > div", {
                            opacity: 0,
                            display: "none",
                            y: 10,
                            stagger: {
                                amount: 0.04
                            },
                            duration: 0.4,
                        })
                        .then(() => {
                            // After the main navigation timeline has reversed, reverse the header timeline
                            headerTimeline.reverse();
                        });
                } else {
                    mainNavTimeline.reverse().then(() => {
                        // After the main navigation timeline has reversed, reverse the header timeline
                        headerTimeline.reverse();
                    });
                }
            }
        });

        const backButton = document.getElementById("backButton");

        backButton.addEventListener("click", function() {
            subnavHistory.pop();
            const t1 = gsap.timeline();

            if (subnavHistory.length !== 0) {
                // Close the extra panel and animate the navigation links back into view
                t1.to(".nav-link", {
                        top: 0,
                        ease: "power2.inOut",
                        stagger: {
                            amount: 0.1
                        },
                        borderBottom: "0.1px solid transparent",
                        duration: 0.8,
                    })
                    .to(
                        ".nav-link > a", {
                            top: 64,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            duration: 0.8,
                        },
                        "-=0.8"
                    )
                    .to(
                        "#backButton", {
                            opacity: 0,
                            ease: "power2.inOut",
                            y: 0,
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to("#extra2 > div", {
                        opacity: 0,
                        display: "none",
                        y: 10,
                        stagger: {
                            amount: 0.04
                        },
                        duration: 0.4,
                    })
                    .to("#extra2", {
                        opacity: 0,
                        display: "none",
                        duration: 0.4,
                        onComplete: () => {
                            OpenExtra(subnavHistory[subnavHistory.length - 1]);
                        },
                    });
            } else {
                // Close the extra panel and animate the navigation links back into view
                t1.to(".nav-link", {
                        top: 0,
                        ease: "power2.inOut",
                        stagger: {
                            amount: 0.1
                        },
                        borderBottom: "0.1px solid transparent",
                        duration: 0.8,
                    })
                    .to(
                        ".nav-link > a", {
                            top: 64,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            duration: 0.8,
                        },
                        "-=0.8"
                    )
                    .to(
                        ".svg", {
                            ease: "power2.inOut",
                            display: "none",
                            opacity: 0,
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to(
                        "#backButton", {
                            opacity: 0,
                            ease: "power2.inOut",
                            y: 0,
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to("#extra1 > div", {
                        opacity: 0,
                        display: "none",
                        y: 10,
                        stagger: {
                            amount: 0.04
                        },
                        duration: 0.4,
                    })
                    .to("#extra1", {
                        opacity: 0,
                        display: "none",
                        duration: 0.4,
                    })
                    .to(".d-flex", {
                        opacity: 1,
                        y: 10,
                        display: "block",
                        duration: 0.4,
                    })
                    .to(".d-flex > div", {
                        opacity: 1,
                        display: "block",
                        stagger: {
                            amount: 0.04
                        },
                        duration: 0.4,
                    })
                    .to(
                        ".nav-link > a", {
                            top: 0,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to(
                        ".nav-link", {
                            top: 0,
                            ease: "power2.inOut",
                            stagger: {
                                amount: 0.1
                            },
                            borderBottom: "0.1px solid #fff",
                            duration: 0.8,
                        },
                        "-=0.4"
                    )
                    .to(
                        ".svg", {
                            ease: "power2.inOut",
                            display: "block",
                            opacity: 1,
                            duration: 0.8,
                        },
                        "-=0.4"
                    );
            }
        });
    </script>
</body>

</html>