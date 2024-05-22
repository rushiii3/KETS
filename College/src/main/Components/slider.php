<div class="marquee-container">
    <div class="marquee paused"></div>
<script>
    const content = [
        
'. . . . . DISCLAIMER . . . . . ADMISSION DISCLAIMER',
        'second slide',
        'third slide'
    ];

    let key = 0;
    const marquee = $('.marquee');
    marquee.on('animationstart', () => {
        key = 0;
        marquee.text(content[key]);
    });
    marquee.on('animationiteration', () => {
        key++;
        if (typeof content[key] === 'undefined') key = 0;
        marquee.text(content[key]);
    });
    marquee.removeClass('paused');
</script>
<style>
    .marquee-container {
        width: 100vw;
        overflow: hidden;
        white-space: nowrap;
    }

    .marquee {
        padding-left: 100vw;
        display: inline-block;
        animation: marquee 5s linear infinite;
        animation-play-state: running;
    }

    .marquee.paused,
    .marquee-container:hover .marquee {
        animation-play-state: paused;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>