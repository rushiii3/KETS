//console.log("loaded header2 js")
//base url
let base_path = `${window.location.origin}/${
  window.location.href.split("/")[3]
  //on the server change it to split by 1
}`;
const t1 = gsap.timeline();
const mainNavTimeline = gsap.timeline({
  paused: true,
});
const subNavTimeline = gsap.timeline({
  paused: true,
});
const headerTimeline = gsap.timeline({
  paused: true,
});
var subnavHistory = [];
const navData = [
  {
    name: "Home",
    link: `${base_path}/College/src/main/Pages`,
    hasSub: false,
  },
  {
    name: "Contact Us",
    link: `${base_path}/College/src/main/Pages/contact_us_tab/Contact.php`,
    hasSub: false,
  },
  {
    name: "About us",
    link: "",
    hasSub: true,
    subItems: [
      {
        name: "Vision and Mission",
        link: `${base_path}/College/src/main/Pages/about_us_tab/vision_mission.php`,
        hasSub: false,
      },
      {
        name: "Kelkar Education Trust",
        link: "",
        hasSub: false,
      },
      {
        name: "Governance",
        link: "",
        hasSub: true,
        subItems: [
          {
            name: "Legacy",
            link: `${base_path}/College/src/main/Pages/about_us_tab/legacy.php`,
            hasSub: false,
          },
          {
            name: "Organogram",
            link: "",
            hasSub: false,
          },
          {
            name: "College Management",
            link: "",
            hasSub: false,
          },
          {
            name: "College Administration",
            link: "",
            hasSub: false,
          },
        ],
      },
      {
        name: "Brochure",
        link: "",
        hasSub: false,
      },
      {
        name: "Prospectus",
        link: "",
        hasSub: false,
      },
      {
        name: "NIRF",
        link: "",
        hasSub: false,
      },
      {
        name: "AISHE",
        link: "",
        hasSub: false,
      },
    ],
  },
  {
    name: "Academics",
    link: "",
    hasSub: true,
    subItems: [
      {
        name: "Course Catalog",
        link: `${base_path}/College/src/main/Pages/academics_tab/course_catalog.php`,
        hasSub: false,
      },

      {
        name: "Departments",
        link: `${base_path}/College/src/main/Pages/academics_tab/Dept_Index.php`,
        hasSub: false,
      },

      {
        name: "POs and PSOs",
        link: `${base_path}/College/src/main/Pages/academics_tab/pos_and_psos.php`,
        hasSub: false,
      },
      {
        name: "Academic Calendar",
        link: `${base_path}/College/src/main/Pages/academics_tab/academic_calendar.php`,
        hasSub: false,
      },
      {
        name: "Event Calendar",
        link: `${base_path}/College/src/main/Pages/academics_tab/event_calendar.php`,
        hasSub: false,
      },
      {
        name: "Scholarships",
        link: `${base_path}/College/src/main/Pages/academics_tab/scholarships.php`,
        hasSub: false,
      },
    ],
  },
  {
    name: "Student Corner",
    link: "",
    hasSub: true,
    subItems: [
      {
        name: "Notice and circulars",
        link: "",
        hasSub: false,
      },
      {
        name: "Time table",
        link: "",
        hasSub: false,
      },
      {
        name: "Roll call list",
        link: "",
        hasSub: false,
      },
      {
        name: "Examination and result",
        link: "",
        hasSub: false,
      },
      {
        name: "Scholarships",
        link: "",
        hasSub: false,
      },
    ],
  },
  {
    name: "Our campus",
    link: "",
    hasSub: true,
    subItems: [
      {
        name: "Infrastructure",
        link: "",
        hasSub: false,
      },
      {
        name: "Library",
        link: "https://vazecollegelibrary.weebly.com/",
        hasSub: false,
      },
      {
        name: "Scientific Research Center",
        link: "https://kelkarresearchcentre.org/",
        hasSub: false,
      },
      {
        name: "Placement Cell",
        link: "https://sites.google.com/view/vazecgtpc",
        hasSub: false,
      },
    ],
  },
  {
    name: "Admissions",
    link: `${base_path}/College/src/main/Pages/admissions_tab/admissions.html`,
    hasSub: false,
  },
  {
    name: "Research",
    link: "",
    hasSub: false,
  },
  {
    name: "Alumni",
    link: "",
    hasSub: false,
  },
  {
    name: "Faculty",
    link: `${base_path}/College/src/main/Pages/secondary_faculty_tab/faculty.php`,
    hasSub: false,
  },
  {
    name: "Committees",
    link: `${base_path}/College/src/main/Pages/secondary_committees_tab/committees.php`,
    hasSub: false,
  },
  {
    name: "Procedures",
    link: `${base_path}/College/src/main/Pages/secondary_procedures_tab/procedures.php`,
    hasSub: false,
  },
  {
    name: "NAAC",
    link: `${base_path}/College/src/main/Pages/secondary_naac_tab/naac.php`,
    hasSub: false,
    // subItems: [
    //   {
    //     name: "AQAR",
    //     link: "",
    //     hasSub: false,
    //   },
    //   {
    //     name: "SSR",
    //     link: "",
    //     hasSub: false,
    //   },
    //   {
    //     name: "IQAC",
    //     link: "",
    //     hasSub: false,
    //   },
    // ],
  },
  {
    name: "More",
    link: "",
    hasSub: true,
    subItems: [
      {
        name: "NSS",
        link: `${base_path}/College/src/main/Pages/more_tab/NSS_Ru.php`,
        hasSub: false,
      },
      {
        name: "Research Conference",
        link: "",
        hasSub: false,
      },
      {
        name: "Gallery",
        link: `${base_path}/College/src/main/Pages/more_tab/gallery.php`,
        hasSub: false,
      },
      {
        name: "Magazines",
        link: "",
        hasSub: true,
        subItems: [
          {
            name: "Mayur Magazine",
            link: `${base_path}/College/src/main/Pages/more_tab/mayur_magazine.php`,
            hasSub: false,
          },
        ],
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
// console.log(
//   `main1 is ${main1} and main2 is ${main2}`
// );
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
        amount: 0.1,
      },
      borderBottom: "0.1px solid transparent",
      duration: 0.8,
    })
    .to(
      ".nav-link > a",
      {
        top: 64,
        ease: "power2.inOut",
        stagger: {
          amount: 0.1,
        },
        duration: 0.8,
      },
      "-=0.8"
    )
    .to(
      ".d-flex > div",
      {
        opacity: 0,
        display: "none",
        y: 10,
        stagger: {
          amount: 0.04,
        },
        duration: 0.8,
      },
      "-=0.8"
    )
    .to(
      ".d-flex",
      {
        opacity: 0,
        display: "none",
        duration: 0.8,
      },
      "-=0.8"
    )
    .to("#extra1", {
      opacity: 1,
      display: "block",
      duration: 0.4,
    })
    .to("#extra1 > div", {
      opacity: 1,
      display: "block",
      y: 10,
      stagger: {
        amount: 0.04,
      },
      duration: 0.4,
    })
    .to(
      ".nav-link > a",
      {
        top: 0,
        ease: "power2.inOut",
        stagger: 0.1,
        duration: 0.8,
      },
      "-=0.4"
    )
    .to(
      ".nav-link",
      {
        top: 0,
        ease: "power2.inOut",
        borderBottom: "0.1px solid #fff",
        duration: 0.8,
      },
      "-=0.4"
    )
    .to(
      ".svg",
      {
        ease: "power2.inOut",
        display: "block",
        opacity: 1,
        duration: 0.8,
      },
      "-=0.4"
    )
    .to(
      "#backButton",
      {
        opacity: 1,
        ease: "power2.inOut",
        duration: 0.8,
      },
      "-=0.4"
    );

  subNavTimeline.play();
}

$(".hasExtraSub").on("click", function () {
  OpenExtra(this.innerText);
  subnavHistory.push(this.innerText);

  $(".hasExtraSubInner").on("click", function () {
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
          amount: 0.1,
        },
        borderBottom: "0.1px solid transparent",
        duration: 0.8,
      })
      .to(
        ".nav-link > a",
        {
          top: 64,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          duration: 0.8,
        },
        "-=0.8"
      )
      .to(
        "#backButton",
        {
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
        "#extra1 > div",
        {
          opacity: 0,
          display: "none",
          y: 10,
          stagger: {
            amount: 0.04,
          },
          duration: 0.8,
        },
        "-=0.8"
      )
      .to(
        "#extra1",
        {
          opacity: 0,
          display: "none",
          duration: 0.8,
        },
        "-=0.8"
      )
      .to("#extra2", {
        opacity: 1,
        display: "block",
        duration: 0.4,
      })
      .to("#extra2 > div", {
        opacity: 1,
        display: "block",
        y: 10,
        stagger: {
          amount: 0.04,
        },
        duration: 0.4,
      })
      .to(
        ".nav-link > a",
        {
          top: 0,
          ease: "power2.inOut",
          stagger: 0.1,
          duration: 0.8,
        },
        "-=0.4"
      )
      .to(
        ".nav-link",
        {
          top: 0,
          ease: "power2.inOut",
          borderBottom: "0.1px solid #fff",
          duration: 0.8,
        },
        "-=0.4"
      )
      .to(
        ".svg",
        {
          ease: "power2.inOut",
          display: "block",
          opacity: 1,
          duration: 0.8,
        },
        "-=0.4"
      )
      .to(
        "#backButton",
        {
          opacity: 1,
          ease: "power2.inOut",
          duration: 0.8,
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
      delay: 0.1,
    })
    .to(
      ".navbar",
      {
        backgroundColor: "#000",
        autoAlpha: 1,
        duration: 0.2,
      },
      "-=0.2"
    )
    .to(
      ".site-logo",
      {
        color: "#fff",
        duration: 0.2,
      },
      "-=0.2"
    )
    .to(
      ".nav-footer",
      {
        opacity: 1,
        display: "block",
        duration: 0.5,
        delay: 0.8,
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
        amount: 0.04,
      },
      duration: 0.4,
    })
    .to(
      ".nav-link > a",
      {
        top: 0,
        ease: "power2.inOut",
        stagger: {
          amount: 0.1,
        },
        duration: 0.8,
      },
      "-=0.4"
    )
    .to(
      ".svg",
      {
        ease: "power2.inOut",
        display: "block",
        opacity: 1,
        duration: 0.8,
      },
      "-=0.4"
    )
    .to(
      ".nav-link",
      {
        top: 0,
        ease: "power2.inOut",
        stagger: {
          amount: 0.1,
        },
        borderBottom: "0.1px solid #fff",
        duration: 0.8,
      },
      "-=0.4"
    );
};
$("#menu-toggle-btn").on("click", function () {
  //   console.log("here");
  $(this).toggleClass("active");
  if ($(this).hasClass("active")) {
    animateOpenNav();
    headerTimeline.play();
    mainNavTimeline.play();
  } else {
    if (subnavHistory.length === 2) {
      subNavTimeline
        .to(
          "#backButton",
          {
            opacity: 0,
            ease: "power2.inOut",
            duration: 0.8,
          },
          "-=0.4"
        )
        .to(".nav-link", {
          top: 0,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          borderBottom: "0.1px solid transparent",
          duration: 0.8,
        })
        .to(
          ".nav-link > a",
          {
            top: 64,
            ease: "power2.inOut",
            stagger: {
              amount: 0.1,
            },
            duration: 0.8,
          },
          "-=0.8"
        )
        .to(
          ".svg",
          {
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
          duration: 0.4,
        })
        .to("#extra2 > div", {
          opacity: 0,
          display: "none",
          y: 10,
          stagger: {
            amount: 0.04,
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
          "#backButton",
          {
            opacity: 0,
            ease: "power2.inOut",
            duration: 0.8,
          },
          "-=0.4"
        )
        .to(".nav-link", {
          top: 0,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          borderBottom: "0.1px solid transparent",
          duration: 0.8,
        })
        .to(
          ".nav-link > a",
          {
            top: 64,
            ease: "power2.inOut",
            stagger: {
              amount: 0.1,
            },
            duration: 0.8,
          },
          "-=0.8"
        )
        .to(
          ".svg",
          {
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
          duration: 0.4,
        })
        .to("#extra1 > div", {
          opacity: 0,
          display: "none",
          y: 10,
          stagger: {
            amount: 0.04,
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

backButton.addEventListener("click", function () {
  subnavHistory.pop();
  const t1 = gsap.timeline();

  if (subnavHistory.length !== 0) {
    // Close the extra panel and animate the navigation links back into view
    t1.to(".nav-link", {
      top: 0,
      ease: "power2.inOut",
      stagger: {
        amount: 0.1,
      },
      borderBottom: "0.1px solid transparent",
      duration: 0.8,
    })
      .to(
        ".nav-link > a",
        {
          top: 64,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          duration: 0.8,
        },
        "-=0.8"
      )
      .to(
        "#backButton",
        {
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
          amount: 0.04,
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
        amount: 0.1,
      },
      borderBottom: "0.1px solid transparent",
      duration: 0.8,
    })
      .to(
        ".nav-link > a",
        {
          top: 64,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          duration: 0.8,
        },
        "-=0.8"
      )
      .to(
        ".svg",
        {
          ease: "power2.inOut",
          display: "none",
          opacity: 0,
          duration: 0.8,
        },
        "-=0.4"
      )
      .to(
        "#backButton",
        {
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
          amount: 0.04,
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
          amount: 0.04,
        },
        duration: 0.4,
      })
      .to(
        ".nav-link > a",
        {
          top: 0,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          duration: 0.8,
        },
        "-=0.4"
      )
      .to(
        ".nav-link",
        {
          top: 0,
          ease: "power2.inOut",
          stagger: {
            amount: 0.1,
          },
          borderBottom: "0.1px solid #fff",
          duration: 0.8,
        },
        "-=0.4"
      )
      .to(
        ".svg",
        {
          ease: "power2.inOut",
          display: "block",
          opacity: 1,
          duration: 0.8,
        },
        "-=0.4"
      );
  }
});
