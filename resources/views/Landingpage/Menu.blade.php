<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&display=swap" rel="stylesheet">
<!-- style font -->
<style>
    .menuText {
        font-family: "Frank Ruhl Libre", serif;
    }

    .container-card-border {
        background-color: whitesmoke;
        padding: 1.5rem;
        border-radius: 3rem .5rem 3rem .5rem;
        height: 24rem;
        transition: ease-in-out .5s;

        &:hover {
            transform: translateY(2rem);

            .foods {
                transform: translateY(-4rem);
            }
        }

        .foods {
            transition: ease-in-out .5s;
        }
    }
</style>
<!-- css -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<section id="menu">
    <div class="content-home">
        <div class="Home-2">
            <div class="row">
                <div class="desc2">
                    <h1>
                        Our Special Dish<br>
                    </h1>
                    <p>Indulge further with our selection of signature dishes, <br>
                        each crafted with care to tantalize your taste buds and <br>
                        leave you craving for more.
                    </p>
                </div>
            </div>

            <div class="row mt-3">
                @foreach ($fName as $index => $data)
                    <div class="col-3">
                        <div class="card card-width">
                            <div class="container-card-border">
                                <div class="card-body">
                                    <img class="foods" src="{{ asset('restaurant_menu/' . $fPhoto[$index]) . '.png' }}"
                                        alt="">
                                    <h5 class="card-title menuText text-center">{{ $fName[$index] }}</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary menuText text-center">
                                        {{ $fCategory[$index] }}</h6>
                                    <p class="card-text menuText text-center">{{ $fDesc[$index] }}</p>
                                    <h2 class="text-center menuText">{{ $fPrice[$index] }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('simpan/plate.png') }}" style="width:200%;" alt="Home3" />
                    </div>
                    <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                        <h1>Our Menu</h1>
                        <p>Indulge in a world of delightful flavors at our café – <br>
                            simply tap the menu button and let your taste buds <br>
                            journey through our tempting selections.</p>
                        <div class="button-container">
                            <button class="menu-button"
                                onclick="window.location.href='link_ke_menu_nailah'">Menu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
