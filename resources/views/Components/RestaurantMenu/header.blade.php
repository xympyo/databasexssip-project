<div class="row mt-5">
    <div class="col-6">
        <div class="d-flex flex-column">
            <h1>Menu Section</h1>
            <h2 class="secondary-text">Delicacies</h2>
        </div>
    </div>
    <div class="col-6">
        <div class="d-flex flex-row-reverse">
            <div class="d-flex flex-row">
                <div class="d-flex flex-column">
                    <p class="text-center">TABLE</p>
                    <h3 class="text-center">1</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($categories as $index => $cat)
        <div class="col-3">
            <div class="list-container">
                <div class="d-flex flex-row">
                    <img src="" alt="">
                    <p class="fs-6 fw-semibold">{{ $categories[$index] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>