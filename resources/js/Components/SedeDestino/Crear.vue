<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Crear Sede Destino</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">

                        <div class="row">

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Id Sede</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sedeDestino.idsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Ubigeo</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sedeDestino.ubigeo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>usuariocrea</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sedeDestino.usuariocrea ">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>usuariomod </label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sedeDestino.usuariomod ">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>estado</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="sedeDestino.estado">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea2" v-model="sedeDestino.observacion" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">observacion</label>
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
    name:"crear-sedeDestino",
    data(){
        return {
            sedeDestino:{
               
                idsede:'',
                ubigeo:'',
                usuariocrea:'',
                usuariomod:'',
                estado:'',
                observacion:''

            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/sedeDestino',this.sedeDestino).then(response=>{
                this.$router.push({name:"mostrarSedeDestinos"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>