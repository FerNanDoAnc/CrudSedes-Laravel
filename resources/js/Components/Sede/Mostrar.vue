<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- Llamos al componente Crear   -->
            <router-link :to='{name:"crearSede"}' class="btn btn-success">
                <i class="fas fa-plus-circle"></i>
            </router-link>
        </div>
        
        <div class="col-12">             
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>CODIGO</th>
                            <th>Nombre</th>
                            <th>ID sede</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="sede in sedes" :key="sede.codsede ">
                            <td>{{ sede.codsede  }}</td>
                            <td>{{ sede.nomsede  }}</td>
                            <td>{{ sede.idsede   }}</td>
                            <td>{{ sede.estado }}</td>
                            <td>
                                <!-- LLamo el component Editar     -->
                                <router-link :to='{name:"editarSede",params:{codsede:sede.codsede}}' 
                                    class="btn btn-info">
                                    <i class="fas fa-edit"></i>
                                </router-link>
                                <a type="button" @click="borrarSede(sede.codsede)" 
                                    class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>                          
        </div>
    </div>
</template>


// script
<script>
    export default {
        name:"sedes",
        data(){
            return {
                sedes:[]
            }
        },
        mounted(){
            this.mostrarSedes()
        },
        methods:{
            async mostrarSedes(){
                await this.axios.get('/api/sede').then(response=>{
                    this.sedes = response.data
                }).catch(error=>{
                    console.log(error)
                    this.sedes = []
                })
            },
            borrarSede(codsede){
                if(confirm("¿Confirma eliminar la Sede?")){
                    this.axios.delete(`/api/sede/${codsede}`).then(response=>{
                        this.mostrarSedes()
                    }).catch(error=>{
                        console.log(error)
                    })
                }
            }
        }
    }
</script>