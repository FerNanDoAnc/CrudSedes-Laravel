<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- Llamos al componente Crear   -->
            <router-link :to='{name:"crearUbigeo"}' class="btn btn-success">
                <i class="fas fa-plus-circle"></i>
            </router-link>
        </div>
        
        <div class="col-12">             
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Ubigeo</th>
                            <th>COD Dep.</th>
                            <th>COD Prov.</th>
                            <th>COD Pos.</th>
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th>Nombre</th>
                            <th>Flag.Prov</th>
                            <th>Cod. Postal</th>
                            <th>Cod. Zona</th>
                            <th>Tipo Zona</th>
                            <th>Tipo. Ofi</th>
                            <th>Estado Ubigeo</th>
                            <th>tipo Zona Sunat</th>
                            <th>Forma Envio</th>
                            <th>Bloq. Rural</th>
                            <th>Tipo Veri. Camp. Sunat </th>
                            <th>Tipo Reg.</th>
                            <th>Tipo Zona Cliente</th>
                            <th>Tipo Zona Cliente SBS</th>
                            <th>Tipo Zona Cliente ATU</th>
                            <th>Lead</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="ubigeo in ubigeos" :key="ubigeo.ubigeo ">
                            <td>{{ ubigeo.ubigeo  }}</td>
                            <td>{{ ubigeo.coddepa }}</td>
                            <td>{{ ubigeo.codprov  }}</td>
                            <td>{{ ubigeo.codpos  }}</td>
                            <td>{{ ubigeo.departamento}}</td>
                            <td>{{ ubigeo.provincia}}</td>               
                            <td>{{ ubigeo.distrito}}</td>               
                            <td>{{ ubigeo.nombre}}</td>               
                            <td>{{ ubigeo.flagprov}}</td>               
                            <td>{{ ubigeo.codpostal}}</td>               
                            <td>{{ ubigeo.codzona}}</td>
                            <td>{{ ubigeo.tipo_zona}}</td>
                            <td>{{ ubigeo.tipo_ofi}}</td>
                            <td>{{ ubigeo.estado_ubigeo}}</td>
                            <td>{{ ubigeo.tipo_zona_sunat}}</td>
                            <td>{{ ubigeo.forma_envio}}</td>
                            <td>{{ ubigeo.bloq_rural}}</td>
                            <td>{{ ubigeo.tipo_veri_camp_sunat}}</td>
                            <td>{{ ubigeo.tp_region}}</td>
                            <td>{{ ubigeo.tipo_zona_client}}</td>
                            <td>{{ ubigeo.tipo_zona_client_sbs}}</td>
                            <td>{{ ubigeo.tipo_zona_client_atu}}</td>
                            <td>{{ ubigeo.lead}}</td>

                            <td>
                                <!-- LLamo el component Editar     -->
                                <router-link :to='{name:"editarUbigeo",params:{ubigeo:ubigeo.ubigeo}}' 
                                    class="btn btn-info">
                                    <i class="fas fa-edit"></i>
                                </router-link>
                                <a type="button" @click="borrarUbigeo(ubigeo.ubigeo)" 
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
        name:"ubigeos",
        data(){
            return {
                ubigeos:[]
            }
        },
        mounted(){
            this.mostrarUbigeos()
        },
        methods:{
            async mostrarUbigeos(){
                await this.axios.get('/api/ubigeo').then(response=>{
                    this.ubigeos = response.data
                }).catch(error=>{
                    console.log(error)
                    this.ubigeos = []
                })
            },
            borrarUbigeo(ubigeo){
                if(confirm("¿Confirma eliminar la Ubigeo?")){
                    this.axios.delete(`/api/ubigeo/${ubigeo}`).then(response=>{
                        this.mostrarUbigeos()
                    }).catch(error=>{
                        console.log(error)
                    })
                }
            }
        }
    }
</script>