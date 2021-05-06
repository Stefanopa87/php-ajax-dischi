<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> php con vue e API </title>
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- axios vue -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- js -->
    <script src="script.js"></script>
</head>

<body>

    <div class="_nav container-fluid d-flex align-items-center">
        <div class="container">
            <a href=""> <i class="fab fa-spotify"></i> </a>
        </div>
    </div>

    <div id="app" class="container">
        <div class="row">
            <div v-for="info in all" class="col-lg-4 col-sm-6 text-center mt-3">
                <div class="mt-2">
                    <div class="text-center">
                        <h4>{{info.title}}</h4>
                        <h6>{{info.author}}</h6>
                        <img :src="info.poster" alt="copertina">
                        <p>{{info.genre}} -- {{info.year}}</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</html>