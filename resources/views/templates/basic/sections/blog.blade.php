@php
$content = getContent('blog.content', true);
$elements = getContent('blog.element', false, null, true);
// dd($elements);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<section class="tabsSection"
    style="background-image:  url('{{ asset($activeTemplateTrue . 'images/LotteriesSection.png')}}') ">
    <figure class="tabBlock">
        <ul class="tabBlock-tabs">
            <li class="tabBlock-tab is-active">Instructions</li>
            <li class="tabBlock-tab">Win Prizes </li>
            <li class="tabBlock-tab">Latest Draw Winners </li>
        </ul>
        <hr />
        <div class="tabBlock-content">
            <div class="tabBlock-pane">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae atque quis blanditiis
                    eaque
                    maiores ducimus optio neque debitis quos dolorum odit unde quibusdam tenetur quaerat magni eius quod
                    tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Molestias molestiae atque quis blanditiis eaque
                    maiores ducimus optio neque debitis quos dolorum odit unde quibusdam tenetur quaerat magni eius quod
                    tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae atque quis
                    blanditiis eaque maiores ducimus optio neque debitis quos dolorum odit unde quibusdam tenetur
                    quaerat
                    magni eius quod tempore.</p>

            </div>
            <div class="tabBlock-pane">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae atque quis blanditiis
                    eaque
                    maiores ducimus optio neque debitis quos dolorum odit unde quibusdam tenetur quaerat magni eius quod
                    tempore.</p>
            </div>
            <div class="tabBlock-pane">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae atque quis blanditiis
                    eaque
                    maiores ducimus optio neque debitis quos dolorum odit unde quibusdam tenetur quaerat magni eius quod
                    tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae atque quis
                    blanditiis eaque maiores ducimus optio neque debitis quos dolorum odit unde quibusdam tenetur
                    quaerat
                    magni eius quod tempore.</p>
            </div>
        </div>
    </figure>

</section>

<script>
    var TabBlock = {
        s: {
            animLen: 200
        },

        init: function () {
            TabBlock.bindUIActions();
            TabBlock.hideInactive();
        },

        bindUIActions: function () {
            $('.tabBlock-tabs').on('click', '.tabBlock-tab', function () {
                TabBlock.switchTab($(this));
            });
        },

        hideInactive: function () {
            var $tabBlocks = $('.tabBlock');

            $tabBlocks.each(function (i) {
                var
                    $tabBlock = $($tabBlocks[i]),
                    $panes = $tabBlock.find('.tabBlock-pane'),
                    $activeTab = $tabBlock.find('.tabBlock-tab.is-active');

                $panes.hide();
                $($panes[$activeTab.index()]).show();
            });
        },

        switchTab: function ($tab) {
            var $context = $tab.closest('.tabBlock');

            if (!$tab.hasClass('is-active')) {
                $tab.siblings().removeClass('is-active');
                $tab.addClass('is-active');

                TabBlock.showPane($tab.index(), $context);
            }
        },

        showPane: function (i, $context) {
            var $panes = $context.find('.tabBlock-pane');

            $panes.slideUp(TabBlock.s.animLen);
            $($panes[i]).slideDown(TabBlock.s.animLen);
        }
    };

    $(function () {
        TabBlock.init();
    });

    function rnd(minVal, maxVal) {
        var randVal = minVal + (Math.random() * (maxVal - minVal));
        return Math.round(randVal);
    }
    odometer.innerHTML = 100;
    setTimeout(function () {
        odometer.innerHTML = rnd(0, 99);
        const num = '1'
        odometer.innerHTML = 1 + num;
        secondCounter()
    }, 1000);
    odometerTwo.innerHTML = 100;
    function secondCounter() {
        setTimeout(function () {
            odometerTwo.innerHTML = rnd(0, 99);
            const num = '2'
            odometerTwo.innerHTML = 1 + num;
            thirdCounter()
        }, 1500);
    }
    odometerThree.innerHTML = 100;
    function thirdCounter() {
        setTimeout(function () {
            odometerThree.innerHTML = rnd(0, 99);
            const num = '3'
            odometerThree.innerHTML = 1 + num;
            fourthCounter()
        }, 2000);
    }
    odometerFour.innerHTML = 100;
    function fourthCounter() {
        setTimeout(function () {
            odometerFour.innerHTML = rnd(0, 99);
            const num = '4'
            odometerFour.innerHTML = 1 + num;
            fiveCounter()
        }, 2000);
    }
    odometerFive.innerHTML = 100;
    function fiveCounter() {
        setTimeout(function () {
            odometerFive.innerHTML = rnd(0, 99);
            const num = '5'
            odometerFive.innerHTML = 1 + num;
            sixCounter()
        }, 2000);
    }
    odometerSix.innerHTML = 100;
    function sixCounter() {
        setTimeout(function () {
            odometerSix.innerHTML = rnd(0, 99);
            const num = '6'
            odometerSix.innerHTML = 1 + num;
            sevenCounter()
        }, 2000);
    }
    odometerSeven.innerHTML = 100;
    function sevenCounter() {
        setTimeout(function () {
            odometerSeven.innerHTML = rnd(0, 99);
            const num = '7'
            odometerSeven.innerHTML = 1 + num;
            eightCounter()
        }, 2000);
    }
    odometerEight.innerHTML = 100;
    function eightCounter() {
        setTimeout(function () {
            odometerEight.innerHTML = rnd(0, 99);
            const num = '8'
            odometerEight.innerHTML = 1 + num;
        }, 2000);
    }
</script>
