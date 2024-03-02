<x-app-layout>
    <h1>Merchant Dashboard - {{ $currentMerchant->name }}</h1>

    <table>
        <thead>
        <tr>
            <th>User ID</th>
            <th>User Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($currentMerchant->users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
