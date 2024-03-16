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

