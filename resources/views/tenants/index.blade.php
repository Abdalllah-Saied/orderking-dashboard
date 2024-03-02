


    <h1>Tenant List</h1>

    <ul>
        @foreach($tenants as $tenant)
            <li>{{ $tenant->name }} - {{ $tenant->domain }}</li>
        @endforeach
    </ul>
