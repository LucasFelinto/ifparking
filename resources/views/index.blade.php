<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>IFParking</title>
</head>
<body>
    <div>
        <main class="container-login">
            <div class="wrapper">
                <div class="logo">
                    <svg width="48" height="58" viewBox="0 0 48 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 0C17.637 0.00725068 11.5367 2.54693 7.03742 7.06188C2.53811 11.5768 0.00722557 17.6983 0 24.0834C0 42.0256 21.7434 56.7767 22.6689 57.3956C23.0641 57.6567 23.5269 57.7959 24.0002 57.7959C24.4734 57.7959 24.9362 57.6567 25.3314 57.3956C26.2566 56.7767 48 42.0256 48 24.0834C47.9928 17.6983 45.4619 11.5768 40.9626 7.06188C36.4633 2.54693 30.363 0.00725068 24 0V0ZM24 40.9418C20.6773 40.9418 17.4292 39.9531 14.6664 38.1007C11.9037 36.2482 9.75038 33.6153 8.47882 30.5348C7.20727 27.4544 6.87458 24.0647 7.52281 20.7945C8.17104 17.5243 9.77108 14.5204 12.1206 12.1627C14.4701 9.80505 17.4636 8.19944 20.7225 7.54896C23.9814 6.89847 27.3593 7.23232 30.4291 8.50829C33.4989 9.78427 36.1227 11.945 37.9687 14.7174C39.8147 17.4897 40.8 20.7491 40.8 24.0834C40.795 28.553 39.0234 32.8381 35.8739 35.9986C32.7243 39.159 28.4541 40.9368 24 40.9418V40.9418Z" fill="#FFFFFF"/>
                        <path d="M25.2245 16.6531H19.1021C18.4525 16.6531 17.8296 16.9037 17.3704 17.3499C16.9111 17.796 16.6531 18.4011 16.6531 19.0321V33.3061H21.551V28.5481H25.2245C26.8483 28.5481 28.4055 27.9215 29.5537 26.8061C30.7019 25.6908 31.347 24.178 31.347 22.6006C31.347 21.0232 30.7019 19.5104 29.5537 18.3951C28.4055 17.2797 26.8483 16.6531 25.2245 16.6531ZM25.2245 23.7901H21.551V21.4111H25.2245C25.5493 21.4111 25.8607 21.5364 26.0904 21.7595C26.32 21.9826 26.449 22.2851 26.449 22.6006C26.449 22.9161 26.32 23.2186 26.0904 23.4417C25.8607 23.6648 25.5493 23.7901 25.2245 23.7901Z" fill="#FFFFFF"/>
                    </svg>

                    <h1 class="heading-light">IFParking</h1>
                </div>
                {{-- <h1 class="heading-secondary">Fazer login</h1> --}}
                <form action="" class="form">
                    <div class="input-group">
                        <input class="input" type="text" name="username" required autocomplete="off">
                        <label for="">Nome de usúario</label>
                    </div>
                    <div class="input-group">
                        <input class="input" type="password" name="username" required autocomplete="off">
                        <label for="">Senha</label>
                    </div>

                    <a href="">
                        <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="51" height="49" rx="14.5" stroke="#C4C4C4"/>
                            <path d="M21 25H31M31 25L25 19M31 25L25 31" stroke="#C4C4C4"/>
                        </svg>
                    </a>
                </form>

                <footer>
                    <a href="">Não consegue fazer login?</a>
                    <a href="">Criar conta</a>
                </footer>
            </div>


        </main>
        <div class="bg"></div>
    </div>
</body>
</html>
