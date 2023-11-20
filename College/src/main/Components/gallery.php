<div class="relative mt-20 p-3">

<?php
$cars = array(
    "https://vazecollege.net/wp-content/uploads/2020/08/Convocation-Ceremony-of-the-First-Batch-of-B.-Voc-Tourism-Hospitality-1-570x380-400x400_c.jpeg", 
    "https://vazecollege.net/wp-content/uploads/2020/08/Convocation-Ceremony-of-the-First-Batch-of-B.-Voc-Tourism-Hospitality-570x380-400x400_c.jpeg", 
    "https://vazecollege.net/wp-content/uploads/2020/08/Felicitated-by-the-Honorable-Governor-of-Maharashtra-for-an-initiative-towards-social-inclusivity-and-welfare-of-the-visually-challenged-through-a-special-program-undertaken-by-the-Institution-570x458-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/MR.PRANAV-PRASHANT-DESAIJunior-College-2017-2018-batch-Awarded-the-Shri-Shiv-Chatrapati-Shivaji-Award-for-the-year-of-2021-2022-563x999-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Ms.-Pooja-Ilkar-TYBA-Political-Science-won-Silver-medal-in-khelo-Indias-open-kickboxing-championship-570x428-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%85%E0%A4%AD%E0%A4%BF%E0%A4%B5%E0%A4%BE%E0%A4%9A%E0%A4%A8-%E0%A4%95%E0%A4%B2%E0%A4%BE%E0%A4%A4%E0%A5%8D%E0%A4%AE%E0%A4%95-%E0%A4%B8%E0%A4%BE%E0%A4%A6%E0%A4%B0%E0%A5%80%E0%A4%95%E0%A4%B0%E0%A4%A3-570x647-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Vaze-College-Autonomous-is-the-proud-recipient-of-the-World-Book-Trophy-2022-23-awarded-in-August-2023-570x428-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Seminar-on-UPSC-and-MPSC-career-Guidance-570x428-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Induction-Program1-570x428-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Rotary-Exchange-Program-570x427-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Drug-Awareness-Program-conducted-by-NSS-Degree-Unit-and-Navaghar-Police-Station-1-570x760-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Dr.-Kashmira-Sankhe-1st-in-state-of-Maharashtra-25th-all-India-rank-UPSC-2023-570x380-400x400_c.png",
    "https://vazecollege.net/wp-content/uploads/2020/08/International-Yoga-Day-Celebtarion-21-June-2023-570x760-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/International-Yoga-Day-Celebtarion-21-June-2023-1-570x760-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Ashmi-Badade-12-Arts-has-won-4-gold-medals-1-silver-medal-1-all-round-medal-in-66th-National-school-games-gymnastics-562x999-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Maharashtra-Din-1-May-2023-570x760-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%B2%E0%A5%8B%E0%A4%95%E0%A4%9C%E0%A4%BE%E0%A4%97%E0%A4%B0-%E0%A5%A8%E0%A5%A6%E0%A5%A8%E0%A5%A9-570x758-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%AE%E0%A4%BE%E0%A4%AF-%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80-My-%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80-%E0%A4%AE%E0%A4%B9%E0%A5%8B%E0%A4%A4%E0%A5%8D%E0%A4%B8%E0%A4%B5%E0%A4%BE%E0%A4%A4-%E0%A4%B5%E0%A4%BF-%E0%A4%97-%E0%A4%B5%E0%A4%9D%E0%A5%87-%E0%A4%AE%E0%A4%B9%E0%A4%BE%E0%A4%B5%E0%A4%BF%E0%A4%A6%E0%A5%8D%E0%A4%AF%E0%A4%BE%E0%A4%B2%E0%A4%AF-best-college-570x428-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Technical-Literacy-drive-for-senior-citizens-562x999-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80-%E0%A4%AD%E0%A4%BE%E0%A4%B7%E0%A4%BE-%E0%A4%B8%E0%A4%82%E0%A4%B5%E0%A4%B0%E0%A5%8D%E0%A4%A7%E0%A4%A8-%E0%A4%AA%E0%A4%82%E0%A4%A7%E0%A4%B0%E0%A4%B5%E0%A4%A1%E0%A4%BE-%E0%A4%B5%E0%A5%83%E0%A4%A4%E0%A5%8D%E0%A4%A4-%E0%A4%97%E0%A5%81%E0%A4%B0%E0%A5%81%E0%A4%B5%E0%A4%BE%E0%A4%B0-%E0%A4%A6%E0%A4%BF.%E0%A5%A8-%E0%A4%AB%E0%A5%87%E0%A4%AC%E0%A5%8D%E0%A4%B0%E0%A5%81%E0%A4%B5%E0%A4%BE%E0%A4%B0%E0%A5%80-%E0%A5%A8%E0%A5%A6%E0%A5%A8%E0%A5%A9-570x160-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%A6%E0%A4%BF%E0%A4%82%E0%A4%A1%E0%A5%80-%E0%A4%AE%E0%A4%BE%E0%A4%AF%E0%A4%AC%E0%A5%8B%E0%A4%B2%E0%A5%80%E0%A4%9A%E0%A5%80...-%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80%E0%A4%9A%E0%A4%BE-%E0%A4%97%E0%A4%9C%E0%A4%B0-%E0%A4%95%E0%A4%B0%E0%A5%80%E0%A4%A4-%E0%A4%AA%E0%A4%A6%E0%A4%AA%E0%A4%A5%E0%A4%BE%E0%A4%B5%E0%A4%B0-570x308-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%A6%E0%A4%BF%E0%A4%82%E0%A4%A1%E0%A5%80-%E0%A4%B8%E0%A4%B9%E0%A4%AD%E0%A4%BE%E0%A4%97%E0%A5%80-%E0%A4%B5%E0%A4%BF%E0%A4%A6%E0%A5%8D%E0%A4%AF%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%A5%E0%A5%80-%E0%A4%B5-%E0%A4%B6%E0%A4%BF%E0%A4%95%E0%A5%8D%E0%A4%B7%E0%A4%95-570x260-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%A6%E0%A4%BF%E0%A4%82%E0%A4%A1%E0%A5%80-%E0%A4%AE%E0%A4%BE%E0%A4%AF%E0%A4%AC%E0%A5%8B%E0%A4%B2%E0%A5%80%E0%A4%9A%E0%A5%80...-%E0%A4%B8%E0%A4%B9%E0%A4%AD%E0%A4%BE%E0%A4%97-%E0%A4%B5%E0%A4%BF%E0%A4%A6%E0%A5%8D%E0%A4%AF%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%A5%E0%A5%80-%E0%A4%B6%E0%A4%BF%E0%A4%95%E0%A5%8D%E0%A4%B7%E0%A4%95-%E0%A4%B5-%E0%A4%B6%E0%A4%BF%E0%A4%95%E0%A5%8D%E0%A4%B7%E0%A4%95%E0%A5%87%E0%A4%A4%E0%A4%B0-%E0%A4%95%E0%A4%B0%E0%A5%8D%E0%A4%AE%E0%A4%9A%E0%A4%BE%E0%A4%B0%E0%A5%80-570x261-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%A6%E0%A4%BF%E0%A4%82%E0%A4%A1%E0%A5%80%E0%A4%9A%E0%A5%8D%E0%A4%AF%E0%A4%BE-%E0%A4%AE%E0%A5%81%E0%A4%B2%E0%A4%BE%E0%A4%82%E0%A4%A8%E0%A5%80-%E0%A4%A4%E0%A4%AF%E0%A4%BE%E0%A4%B0-%E0%A4%95%E0%A5%87%E0%A4%B2%E0%A5%87%E0%A4%B2%E0%A4%BE-%E0%A4%AE-%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80%E0%A4%9A%E0%A4%BE-570x407-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A6%E0%A4%B0%E0%A5%8D%E0%A4%B6%E0%A4%A8%E0%A4%BE%E0%A4%A4-%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%9A%E0%A4%B0%E0%A5%8D%E0%A4%9A%E0%A4%BE-%E0%A4%95%E0%A4%B0%E0%A4%A4%E0%A4%BE%E0%A4%82%E0%A4%A8%E0%A4%BE-%E0%A4%89%E0%A4%AA%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%BE%E0%A4%9A%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%AF-%E0%A4%B8%E0%A5%80.%E0%A4%8F.-%E0%A4%85%E0%A4%A8%E0%A4%BF%E0%A4%B2-%E0%A4%A8%E0%A4%BE%E0%A4%88%E0%A4%95-%E0%A4%B6%E0%A4%BF%E0%A4%95%E0%A5%8D%E0%A4%B7%E0%A4%95-%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%AA%E0%A4%BE%E0%A4%B2-%E0%A4%B5-%E0%A4%B5%E0%A4%BF%E0%A4%A6%E0%A5%8D%E0%A4%AF%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%A5%E0%A5%80.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/YashShindeMaharashtraStateOlympic2022-23gymnastics2ndplace-570x261-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Prof-Dr-Preeta-Nilesh-congratulating-the-Winners-and-Finalists-in-the-55th-Youth-Festival-organised-by-Department-of-Students-Welfare-University-of-Mumbai-570x257-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/SYJC-Science-Division-F-Student-Aryan-Nigudkar-bags-the-2nd-Place-at-49th-wardT-level-Science-Exhibition-Competition-570x428-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Mrs.-Supriya-Kambli-Gunavant-Shikshketar-Karmachari-Award-by-University-of-Mumbai-AY-2020-2021-563x999-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Lecture-on-Preparing-for-NEP-2020-by-Dr.-M.-R.-Kurup-570x570-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/University-level-zone-II-CHESS-second-place-boys-570x427-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2020/08/University-level-Zone-II-winners-TABLE-TENNIS-Girls-570x428-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2020/08/University-level-zone-II-second-place-TABLE-TENNIS-Boys-570x427-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2022/08/15-August-2022-Flag-Hoisting-562x999-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/BIORAKHI-MAKING-competition-organised-by-Department-of-Botany-570x570-400x400_c.jpeg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Inauguration-of-the-Har-Ghar-Tiranga-Celebrations-570x321-400x400_c.jpg",
    "https://vazecollege.net/wp-content/uploads/2020/08/Poster-Competition-held-on-13th-August-2022-570x305-400x400_c.jpg",
);
?>
          <h1 class="text-4xl font-bold tracking-tight text-black sm:text-6xl text-center">Gallery</h1>

<div class="p-9 sm:p-8">
    <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8">

    <?php
for ($i=0; $i < count($cars) ; $i++) { 
    ?><img src="<?php echo($cars[$i]); ?>" class="h-auto max-w-full rounded-lg" data-aos="fade-up" loading="lazy"/>
    
<?php
    
}

?>
            
    </div>
</div>





<!-- <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
        </div>
    </div>
</div> -->

</div>