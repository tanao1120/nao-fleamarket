cat > src/resources/views/auth/register.blade.php <<'EOF'
    <!doctype html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>

    <body>
        <h1>Register</h1>

        <form method="POST" action="/register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div>
                <input type="text" name="name" placeholder="name" required>
            </div>

            <div>
                <input type="email" name="email" placeholder="email" required>
            </div>

            <div>
                <input type="password" name="password" placeholder="password" required>
            </div>

            <div>
                <input type="password" name="password_confirmation" placeholder="password_confirmation" required>
            </div>

            <button type="submit">register</button>
        </form>
    </body>

    </html>
    EOF