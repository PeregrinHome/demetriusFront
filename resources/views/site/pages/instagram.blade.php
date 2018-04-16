@extends('site.layouts.app')

@section('content')

    <?php
        $name1 = 'Константин константинович Константинопольский';
        $descr1 = 'Good tools make application development quicker and easier to maintain than if you did everything by hand..';
        $data1 = [
            [
                'link' => 'https://www.instagram.com/p/Bg1a91Dl_eo/',
                'img' => 'https://scontent.cdninstagram.com/vp/d2c6e885dfbe5a85fb056c96f56a59cc/5B743697/t51.2885-15/s640x640/sh0.08/e35/29094543_428480464270987_4786682820225400832_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/Bg0xd9AFucn/',
                'img' => 'https://scontent.cdninstagram.com/vp/5253a18dfb846e6f55b5599531f0b913/5B3690AD/t51.2885-15/s640x640/sh0.08/e35/29092504_184040855721570_1388436160837058560_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/Bg0i0qtlrlW/',
                'img' => 'https://scontent.cdninstagram.com/vp/018a709c07fd1e27dbe74a99000810af/5B3E67A8/t51.2885-15/s640x640/sh0.08/e35/29402431_1614441158674122_5089237182892212224_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/Bgytl4oFHU0/',
                'img' => 'https://scontent.cdninstagram.com/vp/eeb8a6eac87bbb813e3f604c1891f57f/5B551A03/t51.2885-15/e35/29404245_349506702210598_3954913406368088064_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/BgycWJeF_uO/',
                'img' => 'https://scontent.cdninstagram.com/vp/73bab94924c0c943ee89b96623c07414/5B3F1C72/t51.2885-15/s640x640/sh0.08/e35/29403712_172751713372172_1773117260345376768_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/Bgx3Vj-l_fq/',
                'img' => 'https://scontent.cdninstagram.com/vp/84bc3997e104dab12fa52d492a1f5148/5B545207/t51.2885-15/s640x640/sh0.08/e35/29088897_176992022946103_2304992747423006720_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/BgwQsCJFnjh/',
                'img' => 'https://scontent.cdninstagram.com/vp/2b5b86bc7ceda488abbd21c77d84734d/5B7212B6/t51.2885-15/s640x640/sh0.08/e35/29093512_364714874009748_2245547999159648256_n.jpg'
            ],
            [
                'link' => 'https://www.instagram.com/p/Bgv0GmJFT9Q/',
                'img' => 'https://scontent.cdninstagram.com/vp/70684639b63999ce8b4cbe48d506f36e/5B3226B5/t51.2885-15/s640x640/sh0.08/e35/29089011_161821027968862_9106968604837937152_n.jpg'
            ],
        ]
    ?>

    <div class="container pt-5 pb-5">
        <div class="row">

            @forelse ($data1 as $item1)

                <div class="col-12 col-md-6 col-lg-3 p-1 zoomIn animated">
                    <div class="embed-responsive embed-responsive-1by1">
                        <div class="embed-responsive-item">
                            <a href="{{ $item1['link'] ?? null }}" style="text-decoration: none!important;">
                                <div class="flip w-100 h-100">
                                    <div class="front w-100 h-100 p-0">
                                        <div class="images-cover w-100 h-100 front--img" style="background-image: url({{ $item1['img'] ?? null }});"></div>
                                    </div>
                                    <div class="back w-100 h-100 bg-gradient-black">
                                        <h3 class="text-light text-center ">{{ $name1 ?? null }}</h3>
                                        <p class="text-center pt-2">{{ $descr1 ?? null }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse

        </div>
    </div>

@endsection
