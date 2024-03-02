<x-guest-layout>

<h1>SuperAdmin Dashboard</h1>

<table>
    <thead>
    <tr>
        <th>Merchant ID</th>
        <th>Merchant Name</th>
        <th>User ID</th>
        <th>User Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($merchants as $merchant)
        @foreach($merchant->users as $user)
            <tr>
                <td>{{ $merchant->id }}</td>
                <td>{{ $merchant->name }}</td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
</x-guest-layout>
