<html>
    <body>
            @auth
            <p>Congrats you logged in!</p>
            <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
            </form>
            <div style="border:3px;">
            
            
            @else
            <div style="border: 1px solid black;">
            <h1> Register </h1>
                <form action="/register" method ="POST">
                    @csrf
                <input name="name" type="text" placeholder="name">
                <input name="email" type= "text" placeholder="email">
                <input name="password" type="password" placeholder="password">
                <button>Register</button>
            </form>
            </div>
            <div style="padding-top:20px;">
            <div style="border: 1px solid black;">
            <h1> Login </h1>
                <form action="/login" method ="POST">
                    @csrf
                <input name="loginname" type="text" placeholder="name">
                <input name="loginpassword" type="password" placeholder="password">
                <button>Login</button>
            </form>
            </div>
            </div>
            @endauth
    </body>
</html>