<style>
    .photos {
        padding-bottom: 5rem;
    }
</style>

<section id="photos" class="photos">
    <div class="padding-top-bottom-2">
        <h2 class="mainpage-h2 ">Галерея</h2>
    </div>
    <!-- 21:9 aspect ratio -->
    <div class="row no-gutters">
        <div class="row no-gutters">

        <?php
        /**
         * @var \App\Models\Photos\Photo $photo
         */
        ?>
        @forelse($lastPhotos as $photo)
        <div class="col-lg-3 col-6">
            <a href="{{ $photo->getPublicPath() }}" data-toggle="lightbox" data-gallery="mainpage-photos" data-type="image">
                <img src="{{ $photo->getPublicPath() }}" class="img-fluid" alt="{{ $photo->getAlt() }}">

            </a>
        </div>
        @empty
        @endforelse
        </div>

    </div>

</section>