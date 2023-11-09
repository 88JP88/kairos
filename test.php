<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi SPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
</head>
<body>
    <div id="app">
        <div class="navbar bg-dark">
            <button @click="currentSection = 'users'" type="button" class="btn btn-dark">Gestión de Usuarios</button>
            <button @click="currentSection = 'clients'" type="button" class="btn btn-dark">Gestión de Clientes</button>
            <button @click="currentSection = 'support'" type="button" class="btn btn-dark">Soporte</button>
            <button @click="currentSection = 'profile'" type="button" class="btn btn-dark">Perfil</button>
        </div>
        
        <div v-if="currentSection === 'users'">
            <h2>Gestión de Usuarios</h2>
            <ul>
                <li><button @click="currentSubsection = 'generalUsers'" type="button" class="btn btn-light">Usuarios Generales</button></li>
                <li><a @click="currentSubsection = 'internalUsers'" type="button" class="btn btn-light">Usuarios Internos</a></li>
            </ul>
            <div v-if="currentSubsection === 'generalUsers'">
                <!-- Contenido para Usuarios Generales -->
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, consequatur iste quidem vero dolorum totam? Quaerat recusandae non est aspernatur unde beatae at dicta doloremque cum doloribus? Nihil, voluptatem perspiciatis.
                Corrupti dolorem, excepturi commodi possimus laboriosam, delectus ipsa iste odit vitae ab facilis accusamus placeat error repellendus veniam molestiae. Nostrum debitis, aliquid ducimus in libero culpa officia? Repellat, veritatis nesciunt.
                Itaque, molestias laborum possimus placeat quae dolorem tenetur ullam doloribus veniam ab asperiores, neque fugiat. Fugit quod est quis ducimus unde nobis fuga sint tempora, harum ea nihil minima repellendus?
                Nesciunt corporis, voluptates quia placeat repudiandae praesentium dolores, itaque quas dolor delectus est atque eaque accusamus. Eius, tenetur, deserunt harum provident nam fugit, aperiam nisi veritatis assumenda omnis laboriosam corporis.
                Doloribus aliquam vero totam nam esse corrupti reiciendis repellat sapiente veniam, maiores, alias, fugiat quas? Magni fuga quis, quidem impedit expedita illum inventore atque cumque dolore culpa voluptates ex. Obcaecati?
            </div>
            <div v-if="currentSubsection === 'internalUsers'">
                <!-- Contenido para Usuarios Internos -->
            </div>
        </div>
        
        <div v-if="currentSection === 'clients'">
            <h2>Gestión de Clientes</h2>
            <ul>
                <li><a @click="currentSubsection = 'generalClients'" type="button" class="btn btn-light">Clientes Generales</a></li>
                <li><a @click="currentSubsection = 'externalClients'" type="button" class="btn btn-light">Clientes Externos</a></li>
            </ul>
            <div v-if="currentSubsection === 'generalClients'">
                <!-- Contenido para Clientes Generales -->
            </div>
            <div v-if="currentSubsection === 'externalClients'">
                <!-- Contenido para Clientes Externos -->
            </div>
        </div>
        
        <div v-if="currentSection === 'support'">
            <h2>Soporte</h2>
            <!-- Contenido para la sección de Soporte -->
        </div>
        
        <div v-if="currentSection === 'profile'">
            <h2>Perfil</h2>
            <!-- Contenido para la sección de Perfil -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                currentSection: '',
                currentSubsection: ''
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
