<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Sede</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>CODIGO</label>
                                    <input type="text" class="form-control" v-model="sede.codsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" v-model="sede.nomsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Sede</label>
                                    <input type="text" class="form-control" v-model="sede.idsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" class="form-control" v-model="sede.estado">
                                </div>
                            </div>

                            

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>

                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editar-sede",
    data(){
        return {
            sede:{
                codsede:'',
                nomsede:'',
                idsede:'',
                estado:'',
            }
        }
    },
    mounted(){
        this.mostrarSede()
    },
    methods:{
        async mostrarSede(){
            await this.axios.get(`/api/sede/${this.$route.params.codsede}`).then(response=>{
                const { 
                    codsede, 
                    nomsede, 
                    idsede,
                    estado
                    
                } = response.data

                this.sede.codsede = codsede
                this.sede.nomsede = nomsede
                this.sede.idsede = idsede
                this.sede.estado = estado
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/sede/${this.$route.params.codsede}`,this.sede).then(response=>{
                this.$router.push({name:"mostrarSedes"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>