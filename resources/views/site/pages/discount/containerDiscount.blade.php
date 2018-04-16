<div class="section__discount pt-4">
    <div class="container">
        <div class="row">

            @include('site.pages.discount.blockDiscount', [
                'title_noborder' => '',
                'title_border' => 'Бонусная система',
                'id' => '1',
                'description' => '
                        Хотите, чтобы часть стоимости обучения возвращалась?
                        <br><br>
                        Проходите курсы и получайте 20% от внесённой суммы за повышение квалификации и 10% за обучение с нуля на бонусный счёт.
                        <br><br>
                        Бонусы вы можете потратить на любое* из последующих обучений в DEMETRIUS!
                        <br><br>
                        *бонусы не распространяются на индивидуальное обучение.
                        <br><br>
                        Подробнее о сумме ваших бонусов и стоимости обучения вам расскажет менеджер по номеру
                        <a class="contacts__link" href="tel:+79057042131"><span class="border-bottom-dashed">+7 (905) 704 21 31</span></a>
                    ',
                'img' => '/images/static/discount/new/1.png',
                'btn_attr' => 'data-toggle="modal" data-target="#oneModal" data-title="Бонусная система" ',
            ])

            @include('site.pages.discount.blockDiscount', [
                'title_noborder' => 'Вместе учиться <br>',
                'title_border' => 'Веселее и Выгоднее!',
                'id' => '2',
                'description' => '
                        Запишитесь с коллегами и получите скидку <b>10% на любое обучение</b> в DEMETRIUS. Скидка суммируется с накопленными бонусами.
                        <br><br>
                        Подробнее о сумме ваших бонусов и стоимости обучения вам расскажет менеджер по номеру
                        <br><br>
                        <a class="contacts__link" href="tel:+79057042131"><span class="border-bottom-dashed">+7 (905) 704 21 31</span></a>
                        ',
                'img' => '/images/static/discount/new/2.png',
                'btn_attr' => 'data-toggle="modal" data-target="#oneModal" data-title="Вместе учиться Веселее и Выгоднее!" ',
            ])

            @include('site.pages.discount.blockDiscount', [
                'title_noborder' => 'Дари подарки - <br>',
                'title_border' => 'Получай подарки!',
                'id' => '4',
                'description' => '
                        Подарите скидку <b>10 % на одно любое обучение</b> в DEMETRIUS вашему коллеге, который ранее не был на обучении, и мы зачислим вам <b>10 % от стоимости</b> выбранного им обучения в виде бонусов на ваш счет. Бонусы вы можете потратить на любое из последующих обучений в DEMETRIUS.
                        <br><br>
                        Подробнее вам расскажет наш менеджер во время обучения или по телефону
                        <a class="contacts__link" href="tel:+79057042131"><span class="border-bottom-dashed">+7 (905) 704 21 31</span></a>
                    ',
                'img' => '/images/static/discount/new/3.png',
                'btn_attr' => 'data-toggle="modal" data-target="#oneModal" data-title="Дари подарки - Получай подарки!" ',
            ])

            @include('site.pages.discount.blockDiscount', [
                'title_noborder' => 'Работайте в одной технике – получайте <br>',
                'title_border' => 'скидки!',
                'id' => '3',
                'description' => '
                        Записывайтесь на <b>обучение</b> в DEMETRIUS и получите скидку для вашего салона <b>10 % на последующее обучение.</b> Скидка суммируется с накопленными бонусами.
                        <br><br>
                        Подробнее вам расскажет наш менеджер во время обучения или по телефону
                        <br><br>
                        <a class="contacts__link" href="tel:+79057042131"><span class="border-bottom-dashed">+7 (905) 704 21 31</span></a>
                    ',
                'img' => '/images/static/discount/new/4.png',
                'btn_attr' => 'data-toggle="modal" data-target="#oneModal" data-title="Работайте в одной технике – получайте скидки!" ',
            ])

        </div>
    </div>
</div>

