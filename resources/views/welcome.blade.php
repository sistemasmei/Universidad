<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>

    <style>
        nav li:hover,
        nav li:active {
            background-color: indianred;
            cursor: pointer;
        }
    </style>


    <style lang="scss" scoped>
        .loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>


    @vite('resources/sass/app.scss')
    @vite('resources/sass/app.scss')

</head>

<body>
    <div id="app"></div>
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/b8141df8a6.js" crossorigin="anonymous"></script>
</body>

</html>