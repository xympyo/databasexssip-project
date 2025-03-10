@extends('layouts.app')

<style>
    a {
        cursor: pointer;
    }

    td {
        font-size: .75rem;
    }
</style>

<div class="container-fluid outline" style="padding: 1rem;">
    <div class="container">
        <nav class="mt-3">
            <ul class="d-flex flex-row justify-content-between align-items-center">
                <li>
                    <a id="button1" class="active-list" onclick="button1()">All Orders</a>
                </li>
                <li>
                    <a id="button2" onclick="button2()">Pending</a>
                </li>
                <li>
                    <a id="button3" onclick="button3()">Confirmed</a>
                </li>
                <li>
                    <a id="button4" onclick="button4()">Preparing</a>
                </li>
                <li>
                    <a id="button5" class="good-text" onclick="button5()">Completed</a>
                </li>
                <li>
                    <a id="button6" class="bad-text" onclick="button6()">Cancelled</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- All Orders of Today -->
    <div id="data1">

    </div>
</div>

<script>
    function resetTableBody() {
        const tableBody = document.getElementById('data1');
        tableBody.innerHTML = ''; // Clear existing rows
    }

    function populateTable1() {
        // Your Blade template code
        var tbodyContent = `<form method="post" action="{{ route('dashboard.list.update') }}">
        @csrf
        @extends('layouts.app')
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail Order</th>
                    <th>Quantity</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="data1" class="mt-3">
                @foreach ($custIdToday as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custNameToday[$index] }}</td>
                    <td>{{ $custFoodToday[$index] }}</td>
                    <td>{{ $custQtyToday[$index] }}</td>
                    <td>{{ $custCreatedAtToday[$index] }}</td>
                    <td>{{ $custTotalRupiahToday[$index] }}</td>
                    <input type="hidden" name="index[]" value="{{ $custIdToday[$index] }}">
                    <td>
                        <select name="listUpdate[]" class="form-select form-select-sm">
                            <option selected>{{ $custStatusToday[$index] }}</option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Preparing</option>
                            <option value="4" class="good-text">Completed</option>
                            <option value="5" class="bad-text">Cancelled</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container-fill d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary">Save Status</button>
        </div>
    </form>`;

        // Insert the tbodyContent into the table
        document.getElementById("data1").innerHTML = tbodyContent;
    }

    function populateTable3() {
        // Your Blade template code
        var tbodyContent = `<form method="post" action="{{ route('dashboard.list.update') }}">
        @csrf
        undefined
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail Order</th>
                    <th>Quantity</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="data1" class="mt-3">
                @foreach ($custIdConfirmed as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custNameConfirmed[$index] }}</td>
                    <td>{{ $custFoodConfirmed[$index] }}</td>
                    <td>{{ $custQtyConfirmed[$index] }}</td>
                    <td>{{ $custCreatedAtConfirmed[$index] }}</td>
                    <td>{{ $custTotalRupiahConfirmed[$index] }}</td>
                    <input type="hidden" name="index[]" value="{{ $custIdConfirmed[$index] }}">
                    <td>
                        <select name="listUpdate[]" class="form-select form-select-sm">
                            <option selected>{{ $custStatusConfirmed[$index] }}</option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Preparing</option>
                            <option value="4" class="good-text">Completed</option>
                            <option value="5" class="bad-text">Cancelled</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container-fill d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary">Save Status</button>
        </div>
    </form>`;

        // Insert the tbodyContent into the table
        document.getElementById("data1").innerHTML = tbodyContent;
    }

    function populateTable4() {
        // Your Blade template code
        var tbodyContent = `<form method="post" action="{{ route('dashboard.list.update') }}">
        @csrf
        undefined
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail Order</th>
                    <th>Quantity</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="data1" class="mt-3">
                @foreach ($custIdPreparing as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custNamePreparing[$index] }}</td>
                    <td>{{ $custFoodPreparing[$index] }}</td>
                    <td>{{ $custQtyPreparing[$index] }}</td>
                    <td>{{ $custCreatedAtPreparing[$index] }}</td>
                    <td>{{ $custTotalRupiahPreparing[$index] }}</td>
                    <input type="hidden" name="index[]" value="{{ $custIdPreparing[$index] }}">
                    <td>
                        <select name="listUpdate[]" class="form-select form-select-sm">
                            <option selected>{{ $custStatusPreparing[$index] }}</option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Preparing</option>
                            <option value="4" class="good-text">Completed</option>
                            <option value="5" class="bad-text">Cancelled</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container-fill d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary">Save Status</button>
        </div>
    </form>`;

        // Insert the tbodyContent into the table
        document.getElementById("data1").innerHTML = tbodyContent;
    }

    function populateTable5() {
        // Your Blade template code
        var tbodyContent = `<form method="post" action="{{ route('dashboard.list.update') }}">
        @csrf
        undefined
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail Order</th>
                    <th>Quantity</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="data1" class="mt-3">
                @foreach ($custIdCompleted as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custNameCompleted[$index] }}</td>
                    <td>{{ $custFoodCompleted[$index] }}</td>
                    <td>{{ $custQtyCompleted[$index] }}</td>
                    <td>{{ $custCreatedAtCompleted[$index] }}</td>
                    <td>{{ $custTotalRupiahCompleted[$index] }}</td>
                    <input type="hidden" name="index[]" value="{{ $custIdCompleted[$index] }}">
                    <td>
                        <select name="listUpdate[]" class="form-select form-select-sm">
                            <option selected>{{ $custStatusCompleted[$index] }}</option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Preparing</option>
                            <option value="4" class="good-text">Completed</option>
                            <option value="5" class="bad-text">Cancelled</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container-fill d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary">Save Status</button>
        </div>
    </form>`;

        // Insert the tbodyContent into the table
        document.getElementById("data1").innerHTML = tbodyContent;
    }

    function populateTable6() {
        // Your Blade template code
        var tbodyContent = `<form method="post" action="{{ route('dashboard.list.update') }}">
        @csrf
        undefined
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail Order</th>
                    <th>Quantity</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="data1" class="mt-3">
                @foreach ($custIdCancelled as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custNameCancelled[$index] }}</td>
                    <td>{{ $custFoodCancelled[$index] }}</td>
                    <td>{{ $custQtyCancelled[$index] }}</td>
                    <td>{{ $custCreatedAtCancelled[$index] }}</td>
                    <td>{{ $custTotalRupiahCancelled[$index] }}</td>
                    <input type="hidden" name="index[]" value="{{ $custIdCancelled[$index] }}">
                    <td>
                        <select name="listUpdate[]" class="form-select form-select-sm">
                            <option selected>{{ $custStatusCancelled[$index] }}</option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Preparing</option>
                            <option value="4" class="good-text">Completed</option>
                            <option value="5" class="bad-text">Cancelled</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container-fill d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary">Save Status</button>
        </div>
    </form>`;

        // Insert the tbodyContent into the table
        document.getElementById("data1").innerHTML = tbodyContent;
    }

    function populateTable2() {
        // Your Blade template code
        var tbodyContent = `<form method="post" action="{{ route('dashboard.list.update') }}">
        @csrf
        undefined
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail Order</th>
                    <th>Quantity</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="data1" class="mt-3">
                @foreach ($custIdPending as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custNamePending[$index] }}</td>
                    <td>{{ $custFoodPending[$index] }}</td>
                    <td>{{ $custQtyPending[$index] }}</td>
                    <td>{{ $custCreatedAtPending[$index] }}</td>
                    <td>{{ $custTotalRupiahPending[$index] }}</td>
                    <input type="hidden" name="index[]" value="{{ $custIdPending[$index] }}">
                    <td>
                        <select name="listUpdate[]" class="form-select form-select-sm">
                            <option selected>{{ $custStatusPending[$index] }}</option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Preparing</option>
                            <option value="4" class="good-text">Completed</option>
                            <option value="5" class="bad-text">Cancelled</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container-fill d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary">Save Status</button>
        </div>
    </form>`;

        // Insert the tbodyContent into the table
        document.getElementById("data1").innerHTML = tbodyContent;
    }


    function button1() {
        resetTableBody();
        populateTable1();
        setActiveButton("button1");
    }

    function button2() {
        resetTableBody();
        populateTable2();
        setActiveButton("button2");
    }

    function button3() {
        resetTableBody();
        populateTable3();
        setActiveButton("button3");
    }

    function button4() {
        resetTableBody();
        populateTable4();
        setActiveButton("button4");
    }

    function button5() {
        resetTableBody();
        populateTable5();
        setActiveButton("button5");
    }

    function button6() {
        resetTableBody();
        populateTable6();
        setActiveButton("button6");
    }

    function setActiveButton(buttonId) {
        const buttons = document.querySelectorAll("a");
        buttons.forEach(button => {
            button.classList.add("inactive-list");
            button.classList.remove("active-list");
        });

        const button = document.getElementById(buttonId);
        button.classList.add("active-list");
        button.classList.remove("inactive-list");
    }

    window.onload = function() {
        button1();
    }
</script>
