

<div>

    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="container">
            <label for="name"><b>Email</b></label>
            <input type="name" placeholder="Enter name" name="name" required><br>
            <br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>

        </div>

    </form>
</div>

