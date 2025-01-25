<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDN 9 Bantan | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/css/adminlte.min.css">

    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            display: flex;
            width: 90%;
            max-width: 900px;
            background-color: #fff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .form-container {
            padding: 20px;
            width: 100%;
            max-width: 350px;
            text-align: center;
        }

        .form-container h1 {
            margin-bottom: 20px;
            color: #333;
            font-family: 'Times New Roman', Times, serif;
        }

        .form-container p {
            margin-bottom: 20px;
            color: #666;
            font-family: 'Times New Roman', Times, serif;
        }

        .form-container label {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .form-container label span {
            margin-right: 10px;
            color: #007bff;
        }

        .form-container input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        .form-container button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .image-container {
            background-color: #007bff;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 20px;
        }

        .image-container img {
            max-width: 80%;
            height: auto;
        }

        /* Make sure layout is responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                max-width: 100%;
            }
            .form-container {
                max-width: 100%;
            }
            .image-container {
                display: none;  /* Optionally hide the image on mobile */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Sign In</h1>
            <p>Silahkan masukkan akun anda</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <!-- Email Input with Icon on the Left -->
                <div class="form-group">
                    <label for="email">
                        <span class="fas fa-envelope"></span> Email
                    </label>
                    <input value="{{ @old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Password Input with Icon on the Left -->
                <div class="form-group">
                    <label for="password">
                        <span class="fas fa-lock"></span> Password
                    </label>
                    <input value="{{ @old('password') }}" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit">Login</button>
            </form>

            <p class="mt-2">
                <a href="/" class="float-right text-success">Home</a>
            </p>
        </div>

        <div class="image-container">
            <img src="{{ asset('img/bg') }}/logo_sdn9.png" width="350" alt="login image">
        </div>
    </div>
</body>

</html>
