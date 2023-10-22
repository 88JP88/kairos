<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi SPA</title>
</head>
<body>
    <div id="app">
        <div>
            <button @click="currentSection = 'users'">Gestión de Usuarios</button>
            <button @click="currentSection = 'clients'">Gestión de Clientes</button>
            <button @click="currentSection = 'support'">Soporte</button>
            <button @click="currentSection = 'profile'">Perfil</button>
        </div>
        
        <div v-if="currentSection === 'users'">
            <h2>Gestión de Usuarios</h2>
            <ul>
                <li><a @click="currentSubsection = 'generalUsers'">Usuarios Generales</a></li>
                <li><a @click="currentSubsection = 'internalUsers'">Usuarios Internos</a></li>
            </ul>
            <div v-if="currentSubsection === 'generalUsers'">
                <!-- Contenido para Usuarios Generales -->
            </div>
            <div v-if="currentSubsection === 'internalUsers'">
                <!-- Contenido para Usuarios Internos -->
            </div>
        </div>
        
        <div v-if="currentSection === 'clients'">
            <h2>Gestión de Clientes</h2>
            <ul>
                <li><a @click="currentSubsection = 'generalClients'">Clientes Generales</a></li>
                <li><a @click="currentSubsection = 'externalClients'">Clientes Externos</a></li>
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
</body>
</html>
