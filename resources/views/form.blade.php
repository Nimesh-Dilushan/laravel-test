<form action="/form" method="POST">

    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
</div>

<div>


        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
</div>

<div>
        <label for="password">password:</label>
        <input type="password" id="password" name="password" required>
</div>

<!-- <div>
    <label for="password">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
</div> -->
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

        <button type="submit">Submit</button>

</form>