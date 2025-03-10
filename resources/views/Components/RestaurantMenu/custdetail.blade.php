<!-- Scripts -->
@vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cepi Cafe | Customer {{ $orderId }}</title>
    <style>
    </style>
</head>

<body>
    @include('Components.LandingComponent.header')
    <form action="" method="post">
        @csrf
        @method('post')
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="fw-semibold text-center" style="letter-spacing: .5rem;">CUSTOMER DETAIL</h1>
                <div class="row mt-4 mb-5">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <form action="{{ route('restaurant.cust.post', ['orderId' => $orderId]) }}" method="POST">
                            @csrf
                            @method('post')
                            <div class="d-flex flex-column mt-3">
                                <label class="fw-medium" for="name">Name</label>
                                <input class="under-border" type="text" name="cust_name" placeholder="Please input your name here">
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <label class="fw-medium" for="phone_number">Phone Number</label>
                                <input class="under-border" type="text" name="cust_phone_number" placeholder="081212341234">
                            </div>
                            <div class="row">
                                <button type="submit" class="btn-submit mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </form>
    @include('Components.LandingComponent.footer')
</body>



</html>