<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Sede Destino</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Id Sede</label>
                                    <input type="text" class="form-control" v-model="sedeDestino.idsede">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Ubigeo</label>
                                    <input type="text" class="form-control" v-model="sedeDestino.ubigeo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>usuario crea</label>
                                    <input type="text" class="form-control" v-model="sedeDestino.usuariocrea">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>usuariomod</label>
                                    <input type="text" class="form-control" v-model="sedeDestino.usuariomod">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>estado</label>
                                    <input type="text" class="form-control" v-model="sedeDestino.estado">
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
    name:"editar-sedeDestino",
    data(){
        return {
            sedeDestino:{
                
                idsede:'',
                ubigeo:'',
                usuariocrea:'', 
                usuariomod:'',  
                estado:'',
                observacion:'',

            }
        }
    },
    mounted(){
        this.mostrarSedeDestino()
    },
    methods:{
        async mostrarSedeDestino(){
            await this.axios.get(`/api/sedeDestino/${this.$route.params.idsede}`).then(response=>{
                const { 
                    
                    idsede,
                    ubigeo,
                    usuariocrea,
                    usuariomod,
                    estado,
                    observacion
                    
                } = response.data

                this.sedeDestino.idsede = idsede
                this.sedeDestino.ubigeo = ubigeo
                this.sedeDestino.usuariocrea = usuariocrea
                this.sedeDestino.usuariomod = usuariomod
                this.sedeDestino.estado = estado
                this.sedeDestino.observacion = observacion 

            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/sedeDestino/${this.$route.params.idsede}`,this.sedeDestino).then(response=>{
                this.$router.push({name:"mostrarSedeDestinos"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>