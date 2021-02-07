<?php echo ($sectionStart ? $sectionStart : '<section class="contacts">'); ?>
    <div class="container container_contacts">
        <div class="contacts-text">
            <div class="contacts-text__title">Обращайтесь к нам</div>
            <div class="contacts-text__adress">Россия, г. Курган, ул. Дзержинского, 62а/1</div>
            <div class="contacts-text__mail"><a href="mailto:gasline45@mail.ru">gasline45@mail.ru</a></div>
            <div class="contacts-text__phone"><a href='tel:+7(3522)229282'>8 (3522) 229-282</a></div>
            <div class="contacts-text__phone"><a href='tel:+7(3522)228999'>8 (3522) 228-999</a></div>
        </div>
        <div class="socials">
            <div class="socials__icon socials__viber"><a target="_blank" href="https://viber.click/79632780606"><img src="/dist/img/png/viber.png" alt=""></a></div>
            <div class="socials__icon socials__watsup"><a target="_blank" href="https://api.whatsapp.com/send?phone=79632780606"><img src="/dist/img/png/watsup.png" alt=""></a></div>
            <div class="socials__icon socials__vk"><a target="_blank" href="https://vk.com/gasline45"><img src="/dist/img/png/vk.png" alt=""></a></div>
        </div>
    </div>
    <div class="map" id='map'>
        <script>
            DG.then(function () {
                var map = DG.map('map', {
                    center: [55.460425, 65.358833],
                    zoom: 15
                });

                DG.marker([55.460425, 65.358833]).addTo(map).bindPopup('Линия газа!');
            });
        </script>
    </div>
</section>