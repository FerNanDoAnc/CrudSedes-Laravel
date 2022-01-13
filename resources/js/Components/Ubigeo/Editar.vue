<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Ubigeo</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Ubigeo</label>
                                    <input type="text" class="form-control" v-model="ubigeo.ubigeo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>coddepa</label>
                                    <input type="text" class="form-control" v-model="ubigeo.coddepa">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>codprov</label>
                                    <input type="text" class="form-control" v-model="ubigeo.codprov">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>codpos</label>
                                    <input type="text" class="form-control" v-model="ubigeo.codpos">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>departamento</label>
                                    <input type="text" class="form-control" v-model="ubigeo.departamento">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>provincia</label>
                                    <input type="text" class="form-control" v-model="ubigeo.provincia">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>distrito</label>
                                    <input type="text" class="form-control" v-model="ubigeo.distrito">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>nombre</label>
                                    <input type="text" class="form-control" v-model="ubigeo.nombre">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>flagprov</label>
                                    <input type="number" class="form-control" v-model="ubigeo.flagprov">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>codpostal</label>
                                    <input type="text" class="form-control" v-model="ubigeo.codpostal">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>codzona</label>
                                    <input type="text" class="form-control" v-model="ubigeo.codzona">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tipo_zona">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_ofi</label>
                                    <input type="number" class="form-control" v-model="ubigeo.tipo_ofi">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>estado_ubigeo</label>
                                    <input type="number" class="form-control" v-model="ubigeo.estado_ubigeo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_sunat</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tipo_zona_sunat">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>forma_envio</label>
                                    <input type="text" class="form-control" v-model="ubigeo.forma_envio">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>bloq_rural</label>
                                    <input type="text" class="form-control" v-model="ubigeo.bloq_rural">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_veri_camp_sunat</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tipo_veri_camp_sunat">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tp_region</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tp_region">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_client</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tipo_zona_client">
                                </div>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_client_sbs</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tipo_zona_client_sbs">
                                </div>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>tipo_zona_client_atu</label>
                                    <input type="text" class="form-control" v-model="ubigeo.tipo_zona_client_atu">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>lead</label>
                                    <input type="number" class="form-control" v-model="ubigeo.lead">
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
    name:"editar-ubigeo",
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
    mounted(){
        this.mostrarUbigeo()
    },
    methods:{
        async mostrarUbigeo(){
            await this.axios.get(`/api/ubigeo/${this.$route.params.ubigeo}`).then(response=>{
                const { 
                    ubigeo, 
                    coddepa,
                    codprov,
                    codpos,
                    departamento,
                    provincia,
                    distrito,
                    nombre,
                    flagprov,
                    codpostal,
                    codzona,
                    tipo_zona,
                    tipo_ofi,
                    estado_ubigeo,
                    tipo_zona_sunat,
                    forma_envio,
                    bloq_rural,
                    tipo_veri_camp_sunat,
                    tp_region,
                    tipo_zona_client,
                    tipo_zona_client_sbs,
                    tipo_zona_client_atu,
                    lead,
                    
                } = response.data

                this.ubigeo.ubigeo = ubigeo
                this.ubigeo.coddepa = coddepa
                this.ubigeo.codprov = codprov
                this.ubigeo.codpos = codpos
                this.ubigeo.departamento = departamento
                this.ubigeo.provincia = provincia
                this.ubigeo.distrito = distrito
                this.ubigeo.nombre = nombre
                this.ubigeo.flagprov = flagprov
                this.ubigeo.codpostal = codpostal
                this.ubigeo.codzona = codzona
                this.ubigeo.tipo_zona = tipo_zona
                this.ubigeo.tipo_ofi = tipo_ofi
                this.ubigeo.estado_ubigeo = estado_ubigeo
                this.ubigeo.tipo_zona_sunat = tipo_zona_sunat
                this.ubigeo.forma_envio = forma_envio
                this.ubigeo.bloq_rural = bloq_rural
                this.ubigeo.tipo_veri_camp_sunat = tipo_veri_camp_sunat
                this.ubigeo.tp_region = tp_region
                this.ubigeo.tipo_zona_client = tipo_zona_client
                this.ubigeo.tipo_zona_client_sbs = tipo_zona_client_sbs
                this.ubigeo.tipo_zona_client_atu = tipo_zona_client_atu
                this.ubigeo.lead = lead

            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/ubigeo/${this.$route.params.ubigeo}`,this.ubigeo).then(response=>{
                this.$router.push({name:"mostrarUbigeos"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>