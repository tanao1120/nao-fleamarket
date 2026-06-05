cat > src/resources/views/auth/login.blade.php <<'EOF'
    <!doctype html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>

    <body>
        <h1>Login</h1>

        <form method="POST" action="/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div>
                <input type="email" name="email" placeholder="email" required>
            </div>

            <div>
                <input type="password" name="password" placeholder="password" required>
            </div>

            <button type="submit">login</button>
        </form>
    </body>

    </html>
    EOF