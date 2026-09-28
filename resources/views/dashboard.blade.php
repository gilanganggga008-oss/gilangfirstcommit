<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #7f1d1d, #b91c1c, #ef4444);
        }

        .card {
            width: 420px;
            background: #ffffff;
            padding: 40px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
        }

        .icon {
            width: 90px;
            height: 90px;
            margin: auto;
            margin-bottom: 25px;
            border-radius: 50%;
            background: #fee2e2;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 45px;
            color: #b91c1c;
        }

        h1 {
            font-size: 32px;
            color: #991b1b;
            margin-bottom: 10px;
        }

        p {
            color: #6b7280;
            margin-bottom: 35px;
        }

        .btn-logout {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            background: #b91c1c;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .btn-logout:hover {
            background: #991b1b;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="icon">
            ✔
        </div>

        <h1>Selamat Datang!</h1>

        <p>Anda berhasil login ke dashboard.</p>

        <form action="/logout" method="POST">
            @csrf

            <button type="submit" class="btn-logout">
                Logout
            </button>
        </form>

    </div>

    <script>
        history.pushState(null, null, location.href);

        window.onpopstate = function () {
            history.pushState(null, null, location.href);
        };
    </script>

</body>
</html>