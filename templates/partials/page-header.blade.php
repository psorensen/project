
<div class="page-header mb-5"  style="{{ $background_style }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if($breadcrumbs)
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Projects</li>
                </ol>
                @endif
                <h1>{!! App\title() !!}</h1>
                {!!  get_post_meta( get_the_id(), 'pgi_banner_text', true ) !!}
            </div>
        </div>
    </div>
</div>