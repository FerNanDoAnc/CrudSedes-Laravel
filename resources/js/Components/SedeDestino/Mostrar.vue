<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- Llamos al componente Crear   -->
            <router-link :to='{name:"crearSedeDestino"}' class="btn btn-success">
                <i class="fas fa-plus-circle"></i>
            </router-link>
        </div>
        
        <div class="col-12">             
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Cod Ubigeo</th>
                            <th>Usuario Crea</th>
                            <th>Fecha Crea</th>
                            <th>Usuario Mod</th>
                            <th>Fecha Mod</th>
                            <th>Estado</th>
                            <th>Observacion</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="sedeDestino in sedeDestinos" :key="sedeDestino.idsede ">
                            <td>{{ sedeDestino.idsede  }}</td>
                            <td>{{ sedeDestino.ubigeo }}</td>
                            <td>{{ sedeDestino.usuariocrea  }}</td>
                            <td>{{ sedeDestino.created_at  }}</td>
                            <td>{{ sedeDestino.usuariomod  }}</td>
                            <td>{{ sedeDestino.updated_at  }}</td>
                            <td>{{ sedeDestino.estado}}</td>
                            <td>{{ sedeDestino.observacion}}</td> 

                            <td>
                                <!-- LLamo el component Editar     -->
                                <router-link :to='{name:"editarSedeDestino",params:{idsede:sedeDestino.idsede}}' 
                                    class="btn btn-info">
                                    <i class="fas fa-edit"></i>
                                </router-link>
                                <a type="button" @click="borrarSedeDestino(sedeDestino.idsede)" 
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
        name:"sedeDestinos",
        data(){
            return {
                sedeDestinos:[]
            }
        },
        mounted(){
            this.mostrarSedeDestinos()
        },
        methods:{
            async mostrarSedeDestinos(){
                await this.axios.get('/api/sedeDestino').then(response=>{
                    this.sedeDestinos = response.data
                }).catch(error=>{
                    console.log(error)
                    this.sedeDestinos = []
                })
            },
            borrarSedeDestino(sedeDestino){
                if(confirm("¿Confirma eliminar la Sede Destino?")){
                    this.axios.delete(`/api/sedeDestino/${idsede}`).then(response=>{
                        this.mostrarSedeDestinos()
                    }).catch(error=>{
                        console.log(error)
                    })
                }
            }
        }
    }
</script>