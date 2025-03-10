<style>
    td {
        font-size: .75rem;
    }
</style>

<div class="container-fluid outline" style="padding: 1rem;">
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody class="mt-3">
            @foreach ($custId as $index => $data)
                <tr>
                    <td>{{ $data }}</td>
                    <td>{{ $custName[$index] }}</td>
                    <td>{{ $custPhone[$index] }}</td>
                    <td>{{ $custFood[$index] }}</td>
                    <td>{{ $custQty[$index] }}</td>
                    <td>{{ $custTotalRupiah[$index] }}</td>
                    <td>{{ $custDate[$index] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
