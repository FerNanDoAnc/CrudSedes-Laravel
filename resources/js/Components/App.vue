<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!--logo de Vue -->
                    <img src="https://image.shutterstock.com/image-vector/mail-logo-260nw-468389300.jpg" alt="" width="30" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Inicio</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/ubigeos" class="nav-link">Ubigeos</router-link>
                    </li> 
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/sedeDestinos" class="nav-link">Sede Destinos</router-link>
                    </li> 
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/sedes" class="nav-link">Sedes</router-link>
                    </li>           
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form> -->
                </div>
            </div>
        </nav>

        <!-- para mostrar las rutas -->
        <div class="container mt-5">
            <router-view></router-view>
        </div>
        
    </main>
</template>
 
<script>
    export default {}
</script>