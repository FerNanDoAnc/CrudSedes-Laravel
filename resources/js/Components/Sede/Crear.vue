<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Crear Sede</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">

                        <div class="row">

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Código</label>
                                    <input type="number" 
                                            class="form-control" 
                                            v-model="sede.codsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sede.nomsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>ID Sede</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sede.idsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="number" 
                                            class="form-control" 
                                            v-model="sede.estado">
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
    name:"crear-sede",
    data(){
        return {
            sede:{
                codsede:"",
                nomsede:"",
                idsede:"",
                estado:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/sede',this.sede).then(response=>{
                this.$router.push({name:"mostrarSedes"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>