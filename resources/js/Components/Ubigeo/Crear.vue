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
                                    <label>Ubigeo</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.ubigeo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Cod depa</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.coddepa">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Cod prov</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.codprov">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Cod pos</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.codpos">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>departamento</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.departamento">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>provincia</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.provincia">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Distrito</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.distrito">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>nombre</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.nombre">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>flagprov</label>
                                    <input type="number" 
                                            class="form-control" 
                                            v-model="ubigeo.flagprov">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>codpostal</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.codpostal">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>codzona</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.codzona">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_zona">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_ofi</label>
                                    <input type="number" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_ofi">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>estado_ubigeo</label>
                                    <input type="number" 
                                            class="form-control" 
                                            v-model="ubigeo.estado_ubigeo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_sunat</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_zona_sunat">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>forma_envio</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.forma_envio">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>bloq_rural</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.bloq_rural">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_veri_camp_sunat</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_veri_camp_sunat">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tp_region</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tp_region">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_client</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_zona_client">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_client_sbs</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_zona_client_sbs">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_client_atu</label>
                                    <input type="text" 
                                            class="form-control" 
                                            v-model="ubigeo.tipo_zona_client_atu">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>lead</label>
                                    <input type="number" 
                                            class="form-control" 
                                            v-model="ubigeo.lead">
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
    name:"crear-ubigeo",
    data(){
        return {
            ubigeo:{
               
                ubigeo: '',
                coddepa: '',
                codprov: '',
                codpos: '',
                departamento: '',
                provincia: '',
                distrito: '',
                nombre: '',
                flagprov: '',
                codpostal: '',
                codzona: '',
                tipo_zona: '',
                tipo_ofi: '',
                estado_ubigeo: '',
                tipo_zona_sunat: '',
                forma_envio: '',
                bloq_rural: '',
                tipo_veri_camp_sunat: '',
                tp_region: '',
                tipo_zona_client: '',
                tipo_zona_client_sbs: '',
                tipo_zona_client_atu: '',
                lead: '',


            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/ubigeo',this.ubigeo).then(response=>{
                this.$router.push({name:"mostrarUbigeos"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>