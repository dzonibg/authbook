<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $heading ?? 'Card'}}</div>

                <div class="card-body">
                    {{ $slot ?? 'Card body' }}
                </div>
            </div>
        </div>
    </div>
</div>
