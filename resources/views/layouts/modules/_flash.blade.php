@if(session('flash_message') && isset(session('flash_message')['type']) && isset(session('flash_message')['text']))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-{{ session('flash_message')['type'] }} text-center">
                    {!!  session('flash_message')['text']!!}
                </div>
            </div>
        </div>
    </div>
@endif