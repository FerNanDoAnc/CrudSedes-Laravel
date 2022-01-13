const Home = () => import('./Components/Home.vue')

// -------------------------------- crud --------------------------------
// Ubigeo
const mostrarUbigeo = () => import('./Components/Ubigeo/Mostrar.vue')
const crearrUbigeo = () => import('./Components/Ubigeo/Crear.vue')
const editarUbigeo = () => import('./Components/Ubigeo/Editar.vue')

// Sede Destino
const mostrarSedeDestino = () => import('./Components/SedeDestino/Mostrar.vue')
const crearrSedeDestino = () => import('./Components/SedeDestino/Crear.vue')
const editarSedeDestino = () => import('./Components/SedeDestino/Editar.vue')

// Sede
const mostrarSede = () => import('./Components/Sede/Mostrar.vue')
const crearSede = () => import('./Components/Sede/Crear.vue')
const editarSede = () => import('./Components/Sede/Editar.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    // Ubigeo
    ,
    {
        name: 'mostrarUbigeos',
        path: '/ubigeos',
        component: mostrarUbigeo
    },
    {
        name: 'crearUbigeo',
        path: '/ubigeos/crear',
        component: crearrUbigeo
    },
    {
        name: 'editarUbigeo',
        path: '/ubigeos/editar/:ubigeo',
        component: editarUbigeo
    },
    // Sede Destino
    ,
    {
        name: 'mostrarSedeDestinos',
        path: '/sedeDestinos',
        component: mostrarSedeDestino
    },
    {
        name: 'crearSedeDestino',
        path: '/sedeDestinos/crear',
        component: crearrSedeDestino
    },
    {
        name: 'editarSedeDestino',
        path: '/sedeDestinos/editar/:idsede',
        component: editarSedeDestino
    },
    // Sedes
    {
        name: 'mostrarSedes',
        path: '/sedes',
        component: mostrarSede
    },
    {
        name: 'crearSede',
        path: '/sedes/crear',
        component: crearSede
    },
    {
        name: 'editarSede',
        path: '/sedes/editar/:codsede',
        component: editarSede
    }
]