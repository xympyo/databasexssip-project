<div class="row grid column-gap-3">
    <div class="col-6">
        <div id="container" class="row d-flex flex-column cap-container">
            <section class=" d-flex flex-row align-items-end">
                <h1 id="numberToday">{{ $numberDoneToday }}</h1>
                <h5 class="ms-3">Order's Done Today</h5>
            </section>
            <p class="">{{ $averageToday }}% more than average</p>
        </div>
        <div id="container2" class="row d-flex flex-column cap-container mt-3">
            <section class="d-flex flex-row align-items-end">
                <h1 id="numberYesterday"> {{$numberDoneYesterday}}</h1>
                <h5 class="ms-3">Order's Done Yesterday</h5>
            </section>
            <p class="">{{ $averageYesterday }}% more than average</p>
        </div>
    </div>
    <div class="col-2 d-flex flex-column justify-content-center align-items-center outline">
        @php
        $orderQuantitiesPerDay
        @endphp
        <h4 class="good-text">{{ $moneyTotalToday }}</h4>
        <h5>Today</h5>
    </div>
    <div class="col-3 d-flex flex-column justify-content-center align-items-center outline">
        @php
        // Create a DateTime object for the current time
        $dateTime = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

        // Format the current time into Hours:Minutes format
        $currentTime = $dateTime->format('H:i');
        @endphp
        <h1 class="good-text">{{ $currentTime }}</h1>
    </div>
</div>

<script>
    var numberToday = document.getElementById("numberToday").innerText;
    var numberYesterday = document.getElementById("numberYesterday").innerText;
    const container = document.getElementById("container");
    const container2 = document.getElementById("container2");

    window.onload = function() {
        checker();
    }

    function checker() {
        if (numberToday > numberYesterday) {
            container.classList.add("good");
            container.classList.remove("bad");
            container2.classList.remove("good");
            container2.classList.add("bad");
        } else {
            container.classList.add("bad");
            container.classList.remove("good");
            container2.classList.add("good");
            container2.classList.remove("bad");
        }
    }
</script>