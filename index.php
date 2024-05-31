<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 20px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button.absen {
            background-color: #4CAF50;
            color: white;
        }
        .login-container button.pengajuan {
            background-color: #2196F3;
            color: white;
        }
        .login-container button.admin {
            background-color: #f44336;
            color: white;
        }
    </style> 
</head>
<body>

<div class="login-container">
    <h1>Halaman Login</h1>
    <button class="absen" onclick="window.location.href='kehadiran.php'">HADIR</button>
    <button class="pengajuan" onclick="window.location.href='pengajuan/.php'">PENGAJUAN IZIN/SAKIT</button>
    <button class="admin" onclick="window.location.href='login.php'">MASUK SEBAGAI ADMIN</button>
</div>

</body>
</html>
