<table>
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<form method="POST" action="{{ route('form.store') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Tambahkan Data</button>
</form>
