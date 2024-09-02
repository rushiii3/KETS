<?php

include("../../../config/connect.php");

$fetch_degree_achievements_stmt = "SELECT * FROM achievements WHERE achievement_committee_sect_id=(SELECT committee_belongs_to_clg_section.committee_clg_section_id from committee_belongs_to_clg_section join committee_and_activity_groups ON committee_belongs_to_clg_section.committee_id=committee_and_activity_groups.committee_id WHERE committee_and_activity_groups.committee_name= 'National Service Scheme' AND committee_belongs_to_clg_section.college_sec_name='d');";

$fetch_degree_achievements_query = $conn->prepare($fetch_degree_achievements_stmt);

$fetch_degree_achievements_query->execute();
$fetch_degree_achievements_query_result = $fetch_degree_achievements_query->get_result();

$fetch_junior_achievements_stmt = "SELECT * FROM achievements WHERE achievement_committee_sect_id=(SELECT committee_belongs_to_clg_section.committee_clg_section_id from committee_belongs_to_clg_section join committee_and_activity_groups ON committee_belongs_to_clg_section.committee_id=committee_and_activity_groups.committee_id WHERE committee_and_activity_groups.committee_name= 'National Service Scheme' AND committee_belongs_to_clg_section.college_sec_name='j');";

$fetch_junior_achievements_query = $conn->prepare($fetch_junior_achievements_stmt);

$fetch_junior_achievements_query->execute();
$fetch_junior_achievements_query_result = $fetch_junior_achievements_query->get_result();


//participation
class DegreeParticipation
{
    public $participants = [];
    public  $desc = "";


    public function __construct($participants, $desc)
    {
        $this->participants = $participants;

        $this->desc = $desc;
    }
}

$DegreeParticipationArray = [new DegreeParticipation(["Jagruti Janjirkar", "Rupal Pawar"], "Participated in the University Level Training Program"), new DegreeParticipation(["Mr.Apurvesh Sawant"], "Participated in the Swachh Bharat Special Camp and Yoga Camp conducted by University of Mumbai")];
// print_r($DegreeParticipationArray);

// echo "<script>console.log($DegreeParticipationArray[0])</script>";

class JuniorParticipation
{
    public $participants = [];
    public  $desc = "";


    public function __construct($participants, $desc)
    {
        $this->participants = $participants;

        $this->desc = $desc;
    }
}
//add junior participation here
$JuniorParticipationArray = [];

$fetch_nss_activities_stmt = "SELECT * FROM `committee_has_committee_activities` join committee_belongs_to_clg_section on committee_belongs_to_clg_section.committee_clg_section_id=committee_has_committee_activities.committee_sect_id
join committee_and_activity_groups on committee_belongs_to_clg_section.committee_id=committee_and_activity_groups.committee_id 

where committee_sect_id in (select committee_belongs_to_clg_section.committee_clg_section_id where committee_belongs_to_clg_section.committee_id=(SELECT committee_and_activity_groups.committee_id where committee_and_activity_groups.committee_name like '%national service scheme%'));";

$fetch_nss_activities_query = $conn->prepare($fetch_nss_activities_stmt);
$fetch_nss_activities_query->execute();
$fetch_nss_activities_query_result = $fetch_nss_activities_query->get_result();


class NSSEvents
{
    public string $title;
    public string $desc;
    public string $date;
    public string $location = "V.G. Vaze College";
    public string $image_link = "../../../assets/committee_icons/nss_svg.svg";

    public function __construct($title, $desc, $date, $location, $image_link)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->date = $date;
        if ($location != null) {
            $this->location = $location;
        }
        if ($image_link != null) {
            $this->image_link = $image_link;
        }
    }
}

$NSSEvents = [
    new NSSEvents("Yog Sadhbhavna Programme", "The Yog Sadhbhavna Programme is an initiative designed to promote holistic well-being and social harmony through yoga and related practices. The term \"Sadhbhavna\" translates to \"goodwill\" or \"harmonious feeling\" in Sanskrit, reflecting the programme's focus on fostering inner peace and positive relationships", "21st July 2019", null, null),
    new NSSEvents("Kargil Vijay Divas, Independence Day", "A commemoration event honoring the victory of the Indian Armed Forces in the Kargil War. The event includes ceremonies, speeches, and tributes to the soldiers who fought and sacrificed their lives for the nation.A celebration marking India’s freedom from colonial rule. Activities typically include flag hoisting, patriotic performances, and cultural programs, emphasizing national pride and unity", "15th August 2019", null, null), new NSSEvents("Effective Crowd Management During Ganpati Visarjan", "An event focused on managing and directing crowds during the immersion process of Ganesh Chaturthi. Volunteers assist in ensuring safety, reducing congestion, and maintaining order as participants celebrate the festival by immersing Ganesh idols in water bodies", "5th September 2019", null, null), new NSSEvents("Anti-Plastic Campaign", "An initiative to reduce plastic waste by collecting and distributing cloth bags to over 150 vegetable vendors. This effort aims to encourage sustainable practices and decrease reliance on single-use plastics in the local market", "20th October 2019", null, null), new NSSEvents("Ek Mutthi Anaj", "A community drive focused on collecting wheat and donating it to Immanuel Mercy Home. This initiative supports the home’s efforts to provide essential food resources to those in need", "20th November 2019", null, null), new NSSEvents("Matadan Ek Utsav", "A campaign dedicated to encouraging voter participation and raising awareness about the importance of voting. Activities include voter registration drives, educational workshops, and community outreach to ensure informed and enthusiastic electoral engagement.", "11th April 2019 - 19th April 2019", null, null), new NSSEvents("Blood Donation Camp", " dual-purpose event combining a blood donation drive at Mulund Railway Station with celebrations of Constitution Day. The camp facilitates voluntary blood donations to support local healthcare needs, while Constitution Day activities emphasize the significance of the Indian Constitution and democratic values.", "21st November 2019", "Mulund Railway Station", null), new NSSEvents("Sanitary Napkin Distribution Campaign", "An initiative distributing 200 sanitary napkins to villagers in August 2019 and February 2020. The campaign aims to improve menstrual hygiene and provide essential resources to women in underserved areas.", "18th January 2020", null, null), new NSSEvents("Blodd Donation Drive", "A successful blood donation drive organized in partnership with St. George Hospital and Civil Hospital Blood Bank. The event collected 100 units of blood bags, significantly contributing to local healthcare and emergency services", "21st January 2020", null, null), new NSSEvents("Helmet Rally Awareness Campaign", "An event aimed at promoting road safety by organizing a helmet rally. Participants ride through key areas to raise awareness about the importance of wearing helmets while driving, enhancing safety and compliance with traffic regulations.", "22nd January 2020", null, null), new NSSEvents("Sex Education Session by Mr. Sameer Chavan", "A comprehensive session led by Mr. Sameer Chavan focusing on sex education. The event provides valuable information on sexual health, consent, and responsible behavior, aiming to educate and empower participants with essential knowledge.", "2nd February 2020", null, null), new NSSEvents("Screening of Short Films on Organ Donation, Voting, and the Constitution", "An event featuring screenings of short films on critical topics: organ donation, voting awareness, and the Indian Constitution (Savindhan). The films aim to educate and inspire viewers about these important social issues.", "21st February 2019", null, null)
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>V. G. VAZE |NSS</title>

    <?php include("../../../library/library.php"); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .icons-fill {
            fill: black
        }

        @media(prefers-color-scheme:dark) {
            .dark\:icons-fill {
                fill: white !important
            }
        }

        .card svg {
            opacity: 0;
        }

        .card svg.top-quote {
            animation: top-quote 2s forwards;
            animation-delay: 800ms;

        }

        .card svg.bottom-quote {
            animation: bottom-quote 2s forwards;
            animation-delay: 800ms;
        }


        @keyframes top-quote {
            0% {
                transform: translate(50px, 80px);
                opacity: 0;
            }

            50% {
                transform: translate(50px, 0px);
                opacity: 1;
            }

            100% {
                transform: translate(0px, 0px);
                opacity: 1;
            }
        }

        @keyframes bottom-quote {
            0% {
                transform: translate(-50px, -80px);
                opacity: 0;
            }

            50% {
                transform: translate(-50px, 0px);
                opacity: 1;
            }

            100% {
                transform: translate(0px, 0px);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-100 overflow-x-hidden mx-auto dark:bg-black dark:text-white">

    <?php include("../../Layouts/header2.php"); ?>
    <div class="w-full  overflow-hidden" id="not_main">
        <div>
            <div>
                <div class="relative isolate flex flex-col  overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center">
                    <img src="../../../assets/jpg/nss.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
                    <div class="text-center z-1" data-aos="fade-up">
                        <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">
                            NSS
                        </h1>
                    </div>
                    <div class="text-center z-1" data-aos="fade-up">
                        <p class="mt-6 text-3xl leading-8 text-white">
                            National Service Scheme.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Component: Flat breadcrumb with text & leading icon -->
            <nav aria-label="Breadcrumb" class="pl-16 mt-10" id="Breadcrumb">
                <ol class="flex items-stretch gap-2 list-none">
                    <li class="flex items-center gap-2">
                        <a href="#" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
                                <title id="title-01">Home</title>
                                <desc id="description-01">
                                    Home button indicating the homepage of the website.
                                </desc>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="hidden md:block">Home</span>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                            <title id="title-02">Arrow</title>
                            <desc id="description-02">
                                Arrow icon that points to the next page in big screen resolution sizes
                                and previous page in small screen resolution sizes.
                            </desc>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </li>
                    <li class="flex items-center flex-1 gap-2">
                        <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-700">NSS</a>
                    </li>
                </ol>
            </nav>
            <!-- End Flat breadcrumb with text & leading icon -->

            <!--ABOUT SECTION-->
            <section class="py-12">
                <div class="xl:container m-auto px-6 text-gray-600 dark:text-white md:px-12 xl:px-6">
                    <div class="mb-12 space-y-2 text-center">
                        <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                            About NSS
                        </h2>
                        <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                            Empowering Youth for Social Change and Community Development
                        </p>

                    </div>

                    <div class=" grid grid-cols-1 items-center justify-center mx-auto md:grid-cols-3 gap-2 md:mx-10 overflow-hidden about">
                        <div class="order-last md:order-1 md:text-left lg:text-left text-center mx-auto p-10 col-span-2" data-aos="fade-right">
                            <p class="text-justify">
                                In India, the idea of involving students in the task of national
                                service dates back to the times of Mahatma Gandhi, the father of the
                                nation. The central theme which he tried to impress upon his student
                                audience time and again, was that they should always keep before them,
                                their social responsibility. <br />The University Grants Commission
                                headed by
                                <span class=" bg-blue-200 dark:bg-blue-800">Dr. Radhakrishnan</span> recommended
                                introduction of national service in the academic institutions on a
                                voluntary basis with a view to developing healthy contacts between the
                                students and teachers on the one hand and establishing a constructive
                                linkage between the campus and the community on the other hand.
                            </p>
                        </div>
                        <div class="md:order-2 mx-auto" data-aos="fade-left">
                            <image alt="NSS logo" class="rounded md:max-h-[200px] lg:max-h-[300px] max-h-60 h-[50vh] w-[50vw]" src="../../../assets/committee_icons/nss_svg.svg" />
                        </div>
                    </div>
                </div>
            </section>



            <!-- MOTTO SECTION -->
            <!-- <section class="h-[350px] max-h-[400px] bg-gray-100 flex flex-col items-center justify-center mx-auto  rounded-3xl  my-5" data-aos="zoom-in"> -->
            <div class="relative max-w-xl mx-auto group card">
                <!-- Quotes -->
                <svg class="absolute transform -left-12 -top-12" width="100" height="78" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M100 0H86.588L59.034 40.478v37.065h37.064V40.478H82.2L100 0zM40.966 0H27.554L0 40.478v37.065h37.064V40.478H23.165L40.965 0z" fill="#871EFF" />
                </svg>
                <svg class="absolute transform -right-12 -bottom-6 flip" width="101" height="78" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.2916 77.9999H0.880127L18.6808 37.5217H4.78164V0.457275H41.846V37.5217L14.2916 77.9999Z" fill="#871EFF" />
                    <path d="M73.4115 78H60L77.8007 37.5218H63.9015V0.457397H100.966V37.5219L73.4115 78Z" fill="#871EFF" />
                </svg>
                <!-- Card -->
                <div class="flex relative bg-white dark:bg-gray-800 shadow-xl rounded-2xl" data-aos="zoom-in">
                    <div class="relative px-4 py-6 p-10 md:p-14 flex flex-wrap w-full content-center justify-center">
                        <div class="space-y-1">
                            <p class="italic text-gray-800 dark:text-white  text-4xl font-extrabold leading-none md:text-4xl lg:text-5xl">
                                Not Me But You.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </section> -->

            <!--OBJECTIVES SECTION-->
            <section class="py-12 mt-12">
                <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                    <div class="mb-12 space-y-2 text-center">
                        <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                            Objectives
                        </h2>
                        <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                            Working Towards a Better Society Through
                        </p>
                    </div>
                    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
                        <div class=" dark:lg:bg-darker  rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                            <div class="md:5/12 lg:w-1/2" data-aos="fade-left">
                                <img src="../../../assets/png/Capa 1.png" alt="nss_objectives" loading="lazy" class="" />
                            </div>
                            <div class="md:7/12 lg:w-1/2">
                                <div class="divide-y space-y-8 divide-gray-300 dark:divide-gray-800">
                                    <!--objective 1-->
                                    <div class="mt-8 flex gap-4 md:items-center" data-aos="fade-right">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-indigo-500 dark:text-indigo-400">
                                                <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h4 class="font-semibold text-lg text-gray-700 dark:text-indigo-300">Instill
                                                Solidarity</h3>
                                                <p class="text-gray-500 dark:text-gray-400">As the motto of NSS goes,
                                                    "Not me
                                                    but you," the primary objective of the NSS Unit of Vaze College is
                                                    to foster
                                                    a spirit of solidarity among volunteers.</p>
                                        </div>
                                    </div>

                                    <!--objective 2-->
                                    <div class="pt-4 flex gap-4 md:items-center" data-aos="fade-right" data-aos-delay="200">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">
                                                Understand
                                                Transformations</h3>
                                                <p class="text-gray-500 dark:text-gray-400">As societal processes
                                                    undergo
                                                    significant transformation, NSS offers a platform to comprehend
                                                    these
                                                    changes and how volunteers, as responsible citizens, can adapt and
                                                    help
                                                    marginalized sections integrate into the development process.</p>
                                        </div>
                                    </div>

                                    <!--objective 3-->
                                    <div class="pt-4 flex gap-4 md:items-center" data-aos="fade-right" data-aos-delay="300">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Promote
                                                Discipline and Time Management</h3>
                                                <p class="text-gray-500 dark:text-gray-400">The spirit of solidarity
                                                    must be
                                                    supported by a strong sense of discipline and time management, which
                                                    NSS
                                                    aims to cultivate.</p>
                                        </div>
                                    </div>

                                    <!--objective 4-->
                                    <div class="pt-4 flex gap-4 md:items-center" data-aos="fade-right" data-aos-delay="500">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Expose to
                                                Rural
                                                Life</h3>
                                                <p class="text-gray-500 dark:text-gray-400">NSS seeks to familiarize
                                                    city-raised
                                                    students with elements of rural life, broadening their perspectives
                                                    and
                                                    understanding.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            <!--YEARLY ACTIVITIES HEADING SECTION-->
            <div class="py-12 mt-12">
                <div class="xl:container m-auto  text-gray-600 ">
                    <div class="mb-12 space-y-2 text-center px-6 md:px-12 xl:px-6">
                        <h2 class="text-5xl font-bold text-gray-800 md:text-6xl dark:text-white" data-aos="fade-up">
                            Yearly Activities
                        </h2>
                        <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                            Browse our past events and select the year range you're interested in.
                        </p>
                    </div>
                    <div class="flex hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto pb-4 px-6 md:px-12 xl:px-6">
                        <!-- 
                        <button class="dark:bg-gray-800 bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-lg font-medium tracking-wider  text-gray-600 dark:text-gray-300 rounded-full hover:shadow-3xl  hover:bg-blue-800 hover:text-white transition-all duration-500">2023-2024</button>
                        <button class="dark:bg-gray-800 bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-lg font-medium tracking-wider  text-gray-600 dark:text-gray-300 rounded-full hover:shadow-3xl  hover:bg-blue-800 hover:text-white transition-all duration-500">2022-2023</button>
                        <button class="dark:bg-gray-800 bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-lg font-medium tracking-wider  text-gray-600 dark:text-gray-300 rounded-full hover:shadow-3xl  hover:bg-blue-800 hover:text-white transition-all duration-500">2021-2022</button>
                        <button class="dark:bg-gray-800 bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-lg font-medium tracking-wider  text-gray-600 dark:text-gray-300 rounded-full hover:shadow-3xl  hover:bg-blue-800 hover:text-white transition-all duration-500">2020-2021</button> -->
                       <button class="bg-blue-800 text-nowrap px-5 py-3 text-sm shadow-xl font-bold tracking-wider  text-blue-100 rounded-full hover:shadow-3xl transition-all duration-500">2019-2020</button>
                        <!-- <button class="dark:bg-gray-800 bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-lg font-medium tracking-wider  text-gray-600 dark:text-gray-300 rounded-full hover:shadow-3xl  hover:bg-blue-800 hover:text-white transition-all duration-500">2018-2019</button>
                        <button class="dark:bg-gray-800 bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-lg font-medium tracking-wider  text-gray-600 dark:text-gray-300 rounded-full hover:shadow-3xl  hover:bg-blue-800 hover:text-white transition-all duration-500">2017-2018</button> -->
                    </div>
                </div>
            </div>

            <!--yearly activities-->
            <div id="2019_2020" class="max-w-[95dvw] rounded-2xl mb-12 bg-white dark:bg-gray-800 mx-auto" style="transition: all 2s ease">

                <!--Achivements-->
                <section class="py-12 border-b">
                    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="mb-12 space-y-2 text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                                Achievements and Participation at <br /> State and University Levels
                            </h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                                Celebrating the outstanding accomplishments of our talented students.
                            </p>
                        </div>

                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="degree_tab" data-tabs-target="#degree_tab_contents" type="button" role="tab" aria-controls="degree" aria-selected="false">Degree Unit</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#junior_tab_contents" type="button" role="tab" aria-controls="junior" aria-selected="false">Junior Unit</button>
                                </li>
                            </ul>
                        </div>

                        <div id="default-styled-tab-content">

                            <!--Degree College Unit Activities-->
                            <div class="hidden p-4 overflow-hidden rounded-lg  dark:bg-gray-800" id="degree_tab_contents" role="tabpanel" aria-labelledby="degree-tab">

                                <div class="grid gap-8 sm:grid-cols-2 md:-mx-8 lg:grid-cols-3 md:px-10 list1">


                                    <!--Achievements-->
                                    <?php
                                    if ($fetch_degree_achievements_query_result) {
                                        while ($row = $fetch_degree_achievements_query_result->fetch_assoc()) {


                                    ?>
                                            <div class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                                                <div class="space-y-10">
                                                    <div class="flex items-center space-x-4">
                                                        <div aria-hidden="true" class="flex size-16 items-center justify-center rounded-full bg-pink-50 dark:bg-gray-700">
                                                            <span class="font-bold text-4xl text-pink-600 dark:text-pink-300 material-symbols-outlined">emoji_events</span>
                                                        </div>
                                                        <div>
                                                            <h3 class="text-2xl font-semibold text-gray-800 transition dark:text-white">
                                                                <?php echo $row["achievement_prize"] ?>
                                                            </h3>
                                                            <p class="text-gray-500 dark:text-gray-400 text-sm">
                                                                <?php
                                                                echo $row["achievement_event"]
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="space-y-2">
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            Won 2nd Prize in Street Play Competition organised by B.N. Bandodkar
                                                            College.
                                                        </p>
                                                    </div> -->
                                                    <div class="flex flex-col gap-6 mt-10">
                                                        <div class="flex gap-2 items-center text-yellow-500">
                                                            <span class="material-symbols-outlined font-medium text-2xl">
                                                                military_tech
                                                            </span>
                                                            <span class="w-max block font-normal dark:text-gray-300 text-gray-700 sm:mt-0">
                                                                <?php
                                                                echo $row["achievement_achiever_names"]
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <?php if ($row["achievement_event_location"] != null) { ?>
                                                            <div class="flex gap-2 items-center text-gray-500 line-clamp-3">
                                                                <span class="material-symbols-outlined">
                                                                    school
                                                                </span>
                                                                <span class="line-clamp-1 hover:line-clamp-4 dark:text-gray-300"><?php echo $row["achievement_event_location"] ?></span>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                    }


                                    //<!--Participations/ These are static while achievements are dynamic-->
                                    foreach ($DegreeParticipationArray as $degree) {
                                        ?>
                                        <div class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                                            <div class="space-y-10">
                                                <div class="flex items-center space-x-4">
                                                    <div aria-hidden="true" class="flex size-16 items-center justify-center rounded-full bg-pink-50 dark:bg-gray-700">
                                                        <span class="font-bold text-4xl text-pink-600 dark:text-pink-300 material-symbols-outlined">emoji_events</span>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-2xl font-semibold text-gray-800 transition dark:text-white">
                                                            Participation
                                                        </h3>
                                                        <!-- <p class="text-gray-500 dark:text-gray-400 text-sm">
                                                        University Level Leadership Training Programme
                                                    </p> -->
                                                    </div>
                                                </div>
                                                <div class="space-y-2">
                                                    <p class="text-gray-600 dark:text-gray-300">
                                                        <?php
                                                        //print_r($junior);
                                                        $name_part = "";
                                                        for ($i = 0; $i < count($degree->participants); $i++) {
                                                            if ($i > 0 && $i < count($degree->participants) - 1) {
                                                                $name_part .= ", ";
                                                                //$name_part .= $junior->participants[$i];
                                                            } else if ($i > 0 && $i == count($degree->participants) - 1) {
                                                                $name_part .= " and ";
                                                            }

                                                            $name_part .= $degree->participants[$i];
                                                        }

                                                        echo $name_part . " " . $degree->desc;

                                                        ?>

                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>

                                </div>
                            </div>

                            <!-- junior unit NSS activities -->
                            <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="junior_tab_contents" role="tabpanel" aria-labelledby="junior-tab">
                                <div class=" grid gap-8 sm:grid-cols-2 md:-mx-8 lg:grid-cols-3">

                                    <?php

                                    if ($fetch_junior_achievements_query_result && $fetch_junior_achievements_query_result->num_rows > 0) {


                                        while ($row = $fetch_junior_achievements_query_result->fetch_assoc()) {

                                    ?>
                                            <div class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">

                                                <div class="space-y-16">
                                                    <div aria-hidden="true" class="flex h-10 w-10 items-center justify-center rounded-full bg-pink-50 dark:bg-gray-700">
                                                        <span class="font-bold text-pink-600 dark:text-pink-300">1</span>
                                                    </div>
                                                    <div class="space-y-4">
                                                        <h3 class="text-2xl font-semibold text-gray-800 transition dark:text-white">
                                                            First feature
                                                        </h3>
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            Quae accusantium, laudantium recusandae tenetur fugiat non cum
                                                            doloribus
                                                            aperiam
                                                            voluptates nostrum.
                                                        </p>
                                                    </div>
                                                    <img src="https://cdn-icons-png.flaticon.com/512/7983/7983132.png" class="w-16" width="512" height="512" alt="burger illustration" />
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }

                                    if (count($JuniorParticipationArray) > 0) {
                                        foreach ($JuniorParticipationArray as $junior) {
                                        ?>

                                            <div class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                                                <div class="space-y-10">
                                                    <div class="flex items-center space-x-4">
                                                        <div aria-hidden="true" class="flex size-16 items-center justify-center rounded-full bg-pink-50 dark:bg-gray-700">
                                                            <span class="font-bold text-4xl text-pink-600 dark:text-pink-300 material-symbols-outlined">emoji_events</span>
                                                        </div>
                                                        <div>
                                                            <h3 class="text-2xl font-semibold text-gray-800 transition dark:text-white">
                                                                Participation
                                                            </h3>
                                                            <!-- <p class="text-gray-500 dark:text-gray-400 text-sm">
                                                        University Level Leadership Training Programme
                                                    </p> -->
                                                        </div>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php
                                                            //print_r($junior);
                                                            $name_part = "";
                                                            for ($i = 0; $i < count($junior->participants); $i++) {
                                                                if ($i > 0 && $i < count($junior->participants) - 1) {
                                                                    $name_part .= ", ";
                                                                    //$name_part .= $junior->participants[$i];
                                                                } else if ($i > 0 && $i == count($junior->participants) - 1) {
                                                                    $name_part .= " and ";
                                                                }

                                                                $name_part .= $junior->participants[$i];
                                                            }

                                                            echo $name_part . " " . $junior->desc;

                                                            ?>

                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }



                                    ?>



                                </div>

                                <?php


                                if ($fetch_junior_achievements_query_result->num_rows <= 0 && count($JuniorParticipationArray) <= 0) {

                                    echo "<div class=' p-8 py-12 flex justify-center dark:text-white items-center'><p>No results</p></div>'";
                                }


                                ?>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Activities Conducted-->
                <section class="py-12 border-b">
                    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="mb-12 space-y-2 text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                                Activities Conducted
                            </h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                                We engage in a variety of activities to promote community well-being and development
                            </p>
                        </div>

                        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                            <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:grid-cols-3">

                                <?php
                                if ($fetch_nss_activities_query_result) {
                                    while ($row = $fetch_nss_activities_query_result->fetch_assoc()) {



                                ?>
                                        <div class="group space-y-6" data-aos="fade-right">
                                            <!-- <img src="../../../assets/jpg/nss_yogaday.jpg" alt="nss_images" loading="lazy" width="1000" height="667" class="h-96 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" /> -->
                                            <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
                                                <?php echo $row["committee_act_title"] ?>
                                            </h3>
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php echo $row["committee_act_desc"] ?></p>
                                            <!-- <div class="flex gap-6 items-center">
                                                <div class="flex gap-2 items-center text-gray-500">
                                                    <span class="material-symbols-outlined">
                                                        calendar_month
                                                    </span>
                                                    <span class="w-max block font-light text-gray-500 sm:mt-0">Jun 21
                                                        2019</span>
                                                </div>
                                                <div class="flex gap-2 items-center text-gray-500 line-clamp-3">
                                                    <span class="material-symbols-outlined">
                                                        location_on
                                                    </span>
                                                    <span class="line-clamp-1 hover:line-clamp-4">V.G. Vaze College of Arts,
                                                        Science and
                                                        Commerce (Autonomous)</span>
                                                </div>
                                            </div> -->
                                        </div>

                                <?php

                                    }
                                }
                                ?>
                                <!-- <div class="group space-y-6">
                                    <img src="../../../assets/jpg/no_to_tabaco.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-96 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" />
                                    <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
                                        No To Tobacco
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        NSS Degree Volunteers gave a pledge to around 750 students of the college on 8th
                                        July
                                        2019 to abstain from the use of tobacco.
                                    </p>
                                    <div class="flex gap-6 items-center">
                                        <div class="flex gap-2 items-center text-gray-500">
                                            <span class="material-symbols-outlined">
                                                calendar_month
                                            </span>
                                            <span class="w-max block font-light text-gray-500 sm:mt-0">Jun 21
                                                2019</span>
                                        </div>
                                        <div class="flex gap-2 items-center text-gray-500 line-clamp-3">
                                            <span class="material-symbols-outlined">
                                                location_on
                                            </span>
                                            <span class="line-clamp-1 hover:line-clamp-4">V.G. Vaze College of Arts,
                                                Science and
                                                Commerce (Autonomous)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="group space-y-6">
                                    <img src="../../../assets/jpg/swatch_bharat.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-96 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" />
                                    <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
                                        Swachh Bharat Abhiyan
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Volunteers took up a Swachh Bharat Summer Internship Programme at our adopted
                                        village
                                        Bendshil- Chiknichi Wadi, Badlapur which included a number of activities such as
                                        survey
                                        about cleanliness, awareness campaign regarding solid waste management & on
                                        dry/wet
                                        waste management, construction of compost pits.
                                    </p>
                                    <div class="flex gap-6 items-center">
                                        <div class="flex gap-2 items-center text-gray-500">
                                            <span class="material-symbols-outlined">
                                                calendar_month
                                            </span>
                                            <span class="w-max block font-light text-gray-500 sm:mt-0">Jun 21
                                                2019</span>
                                        </div>
                                        <div class="flex gap-2 items-center text-gray-500 line-clamp-3">
                                            <span class="material-symbols-outlined">
                                                location_on
                                            </span>
                                            <span class="line-clamp-1 hover:line-clamp-4">Bendshil- Chiknichi Wadi,
                                                Badlapur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="group space-y-6">
                                    <img src="https://borgenproject.org/wp-content/uploads/Online-Education-in-India-1030x687.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-96 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" />
                                    <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
                                        Encourage Education
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Set up a Library in Bendshil Village – Chiknichi Wadi, Badlapur East to ensure
                                        that the
                                        children have daily access to 202 books which take care of requirements other
                                        than their
                                        academics with books emphasizing on moral lessons. and also donated 150
                                        notebooks & 50
                                        pens to Immanuel Mercy Home – Special Child Care Centre..
                                    </p>
                                    <div class="flex gap-6 items-center">
                                        <div class="flex gap-2 items-center text-gray-500">
                                            <span class="material-symbols-outlined">
                                                calendar_month
                                            </span>
                                            <span class="w-max block font-light text-gray-500 sm:mt-0">Jun 21
                                                2019</span>
                                        </div>
                                        <div class="flex gap-2 items-center text-gray-500 line-clamp-3">
                                            <span class="material-symbols-outlined">
                                                location_on
                                            </span>
                                            <span class="line-clamp-1 hover:line-clamp-4">Bendshil- Chiknichi Wadi,
                                                Badlapur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="group space-y-6">
                                    <img src="https://c.ndtvimg.com/eq99n43_kerala-floods-afp-650_625x300_24_August_18.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-96 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" />
                                    <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
                                        Flood Relief
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Over 2 lakh people in the floods hit districts of Kolhapur and Sangli were
                                        completely
                                        were struggling without access to daily necessities. We took an initiative by
                                        organizing
                                        a Flood Relief Drive at our campus to collect groceries, clothes, medicines,
                                        food items.
                                        Many students and teachers of our college extended a helping hand by donating
                                        the
                                        above-mentioned items for the flood relief.
                                    </p>
                                    <div class="flex gap-6 items-center">
                                        <div class="flex gap-2 items-center text-gray-500">
                                            <span class="material-symbols-outlined">
                                                calendar_month
                                            </span>
                                            <span class="w-max block font-light text-gray-500 sm:mt-0">Jun 21
                                                2019</span>
                                        </div>
                                        <div class="flex gap-2 items-center text-gray-500 line-clamp-3">
                                            <span class="material-symbols-outlined">
                                                location_on
                                            </span>
                                            <span class="line-clamp-1 hover:line-clamp-4">Kolhapur and Sangli</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>

                <!--Events Conducted and Participated -->
                <section class="py-12 border-b">
                    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="mb-12 space-y-2 text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                                Events Conducted And Participated
                            </h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                The NSS Degree Unit of our college also conducted and participated
                                in number of events throughout the year
                            </p>
                        </div>
                        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <?php
                            $i = 0;
                            foreach ($NSSEvents as $nss) {

                            ?>
                                <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10" data-aos="fade-right">
                                    <div class="relative overflow-hidden rounded-xl">
                                        <img src="<?php echo $nss->image_link ?>" alt="nss_events_image" loading="lazy" class="h-64 w-full object-contain object-top transition duration-500 group-hover:scale-105" />
                                    </div>
                                    <div class="mt-6 relative">
                                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                                            <?php echo $nss->title ?>
                                        </h3>
                                        <p class="mt-6 mb-8 text-gray-600 dark:text-gray-300">
                                            <?php echo $nss->desc ?>
                                        </p>
                                    </div>
                                    <div class="flex flex-col mt-12 justify-between">
                                        <div class="flex gap-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icons-fill dark:icons-fill">
                                                <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-27.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                                            </svg>
                                            <p class="text-gray-600 dark:text-gray-50"><?php echo $nss->date ?></p>
                                        </div>

                                        <div class="flex gap-4 mt-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icons-fill dark:icons-fill">
                                                <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                            </svg>
                                            <p class="text-gray-600 dark:text-gray-50"><?php echo $nss->location ?></p>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>


                <!--Special Camp SECTION-->
                <section class="py-12 border-b">
                    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="mb-12 space-y-2 text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                                NSS Special Camp
                            </h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                                Empowering communities and promoting social awareness through a residential camp
                                experience.
                            </p>
                        </div>

                        <div class="space-y-10" data-aos="fade-up">
                            <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
                                <div class="lg:bg-gray-700 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                                    <div class="md:5/12 lg:w-1/2">
                                        <img src="../../../assets/jpg/nssspecial_camp.jpg" alt="image" loading="lazy" class="rounded-2xl h-96 w-full object-cover	" />
                                    </div>
                                    <div class="md:7/12 lg:w-1/2">
                                        <h2 class="text-2xl font-bold text-gray-900 md:text-3xl dark:text-white">
                                            The NSS 7 Day Residential Special Camp
                                        </h2>
                                        <div class="divide-y space-y-4 divide-gray-200 dark:divide-gray-800">
                                            <div class="mt-8 flex gap-4 md:items-center">
                                                <div class="w-6 h-6 flex gap-4 rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icons-fill dark:icons-fill ">
                                                        <path d="m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z" />
                                                    </svg>
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-indigo-500 dark:text-indigo-400">
                                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                                    </svg> -->
                                                </div>
                                                <div class="w-5/6">
                                                    <h4 class="font-semibold text-lg text-gray-700 dark:text-gray-50">
                                                        Construction of 2 Solid Vanrai Bandhara.</h3>
                                                </div>
                                            </div>
                                            <div class="pt-4 flex gap-4 md:items-center">
                                                <div class="w-6 h-6 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icons-fill dark:icons-fill ">
                                                        <path d="m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z" />
                                                    </svg>
                                                </div>
                                                <div class="w-5/6">
                                                    <h4 class="font-semibold text-lg text-gray-700 dark:text-gray-50">
                                                        Cleanliness campaign</h3>
                                                </div>
                                            </div>
                                            <div class="pt-4 flex gap-4 md:items-center">
                                                <div class="w-6 h-6 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icons-fill dark:icons-fill">
                                                        <path d="m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z" />
                                                    </svg>
                                                </div>
                                                <div class="w-5/6">
                                                    <h4 class="font-semibold text-lg text-gray-700 dark:text-gray-50">
                                                        Organised
                                                        various sessions on Unity, Menstrual Awareness, Eradication of
                                                        Superstition and Bharud on Social Issues.</h3>
                                                </div>
                                            </div>
                                            <div class="pt-4 flex gap-4 md:items-center">
                                                <div class="w-6 h-6 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">

                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icons-fill dark:icons-fill">
                                                        <path d="m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z" />
                                                    </svg>
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                                    </svg> -->
                                                </div>
                                                <div class="w-5/6">
                                                    <h4 class="font-semibold text-lg text-gray-700 dark:text-gray-50">
                                                        In 7
                                                        days, our volunteers performed 7 street plays on Cleanliness,
                                                        Gender
                                                        Equality, Unity in Diversity, Superstition, Menstrual Hygiene,
                                                        Anti-Corruption and Women Empowerment.
                                                        </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-6 mt-10">
                                            <div class="flex gap-2 items-center text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icons-fill dark:icons-fill">
                                                    <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-27.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                                                </svg>
                                                <span class="w-max block  dark:text-white text-gray-500 sm:mt-0">24 December
                                                    2019 – 30
                                                    December 2019</span>
                                            </div>
                                            <div class="flex gap-2 items-center text-gray-500 line-clamp-3 icons-fill dark:icons-fill">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icons-fill dark:icons-fill">
                                                    <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                                </svg>
                                                <span class="line-clamp-1 hover:line-clamp-4  dark:text-white">Village Bendshil –
                                                    Chiknichi Wadi,
                                                    Badlapur East</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>


                <!-- program officier -->
                <section class="py-12 border-b">
                    <div class="xl:container mb-28 m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="mb-12 space-y-2 text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                                Programme Officers
                            </h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                                Our programme officers oversee and manage various initiatives and activities within NSS,
                                ensuring effective implementation and impact.
                            </p>
                        </div>
                    </div>
                    <div class="grid gap-10 md:grid-cols-2  mx-auto" data-aos="fade-up">
                        <div class="group space-y-4 text-center">
                            <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
                                <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXZhdGFyfGVufDB8fDB8fHww" alt="woman" loading="lazy" width="640" height="805" />
                            </div>
                            <div class="pt-4">
                                <h4 class="text-2xl text-gray-700 dark:text-white">Mr. Nikesh Kumar</h4>
                                <span class="block text-sm text-gray-500">Head Officer</span>
                            </div>
                        </div>
                        <div class="group space-y-4 text-center">
                            <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
                                <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXZhdGFyfGVufDB8fDB8fHww" alt="man" loading="lazy" width="1000" height="667" />
                            </div>
                            <div class="pt-4">
                                <h4 class="text-2xl text-gray-700 dark:text-white">Mr. Naresh Mehta</h4>
                                <span class="block text-sm text-gray-500">Assistant Officer</span>
                            </div>
                        </div>
                    </div>
                </section>


                <!--Image Slider-->
                <section class="py-12 min-w-full">
                    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="mb-12 space-y-2 text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white" data-aos="fade-up">
                                Photo Gallery
                            </h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300" data-aos="fade-up">
                                Explore moments from our NSS activities and special events through these snapshots.
                            </p>

                        </div>
                        <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg w-full" data-carousel="static" data-aos="fade-up">
                            <!-- Carousel wrapper -->
                            <div class="relative h-80 md:h-[40rem]" data-carousel-inner>
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="../../../assets/jpg/nss.jpg" class="object-cover w-full h-full" alt="Slide 1" />
                                    <span class="absolute top-[80%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold opacity-[70%] text-gray-50 md:text-3xl">Group
                                        Photo</span>
                                </div>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://assets.thehansindia.com/h-upload/2021/07/25/1091268-nss-volunteers.webp" class="object-cover w-full h-full" alt="Slide 1" />
                                    <span class="absolute top-[80%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold opacity-[70%] text-gray-50 md:text-3xl">Group
                                        Photo</span>
                                </div>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/The_National_Service_Scheme_%28NSS%29_Marching_Contingent_passes_through_the_Rajpath%2C_on_the_occasion_of_the_68th_Republic_Day_Parade_2017%2C_in_New_Delhi_on_January_26%2C_2017.jpg" class="object-cover w-full h-full" alt="Slide 1" />
                                    <span class="absolute top-[80%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold opacity-[70%] text-gray-50 md:text-3xl">Group
                                        Photo</span>
                                </div>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://ramanujancollege.ac.in/media/images/NSS-1.original.jpg" class="object-cover w-full h-full" alt="Slide 1" />
                                    <span class="absolute top-[80%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold opacity-[70%] text-gray-50 md:text-3xl">Group
                                        Photo</span>
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
                                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition" data-carousel-prev>
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition" data-carousel-next>
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                        </div>

                    </div>
                </section>

            </div>


        </div>
        <?php include("../../Layouts/footer.php"); ?>
</body>
<?php include("../../../library/AOS.php"); ?>
<script src="../../../js/common/header_2.js"></script>
<script src="../../../js/showMoreItems.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.1,
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("fadeIn");
                    if (
                        entry.target.classList.contains("transform") &&
                        entry.target.classList.contains("-left-12")
                    ) {
                        entry.target.classList.add("top-quote");
                    } else if (
                        entry.target.classList.contains("transform") &&
                        entry.target.classList.contains("-right-12")
                    ) {
                        entry.target.classList.add("bottom-quote");
                    }
                    observer.unobserve(entry.target); // Stop observing once the animation is triggered
                }
            });
        }, options);

        const svgs = document.querySelectorAll(".card svg");
        svgs.forEach((svg) => {
            observer.observe(svg);
        });
    });

    $(document).ready(function() {

        $('.list1').showMoreItems({
            startNum: 6,
            afterNum: 3,
            moreText: 'View More',
            original: true,
        });
    })
</script>

</html>
