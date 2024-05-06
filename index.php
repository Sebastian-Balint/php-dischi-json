<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi JSON</title>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

<body>
    <div id="app">

        <header class="p-3 text-white d-flex align-items-center">
            <h1 class="ms-5">{{title}}</h1>
        </header>

        <main>

            <div class="container">
                <div class="row">
                    <div v-for="(disk, index) in disks" :key="disk + index" class="col-4">
                        <div class="card py-4 px-5 m-4 text-white">
                            <img :src="disk.poster" class="card-img-top" :alt="disk.title">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{disk.title}}</h3>
                                <p class="card-text">{{disk.author}}</p>
                                <h3>{{disk.year}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!--ul>
            <li v-for="(disk, index) in disks" :key="disk + index">
                {{disk.title}}
                <ul>
                    <li>{{disk.author}}</li>
                    <li>{{disk.year}}</li>
                    <li>{{disk.genre}}</li>
                </ul>
            </li>
        </ul>-->

    </div>
    <script src='main.js'></script>

</body>

</html>