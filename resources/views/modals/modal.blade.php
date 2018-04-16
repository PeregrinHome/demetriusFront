<div class="modal fade" id="{{ $id ?? null }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id ?? null }}Label" aria-hidden="true">
    {{ Form::open(['route'=>"call-requests.store",'method'=>'POST']) }}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id ?? null }}Label">{{ $title ?? null }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="inputHiddenBox"></div>
                @include('callRequests.create._fields')
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-danger btn-primary--gradient js-btn_title">
                    {{ $btn_title ?? null }}
                </button>
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>