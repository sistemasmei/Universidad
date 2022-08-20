<template>
<div v-if="loading" class="loader"></div>
    <div>
        <h3 class="text-center">Crear Estudiante</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="EditarEstudiante">

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" v-model="estudiante.nombres">
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" v-model="estudiante.apellidos">
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <label>Tipo de identificación</label>
                                <select class="form-select" aria-label="Default select example" v-model="estudiante.tipo_identificacion">
                                    <option selected>Selecciona una opción</option>
                                    <option value="Tarjera de identidad">Tarjera de identidad</option>
                                    <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                </select>
                            </div>
                        

                        </div>
                        <div class="row" style="margin-top:10px;">

                            <div class="col-6 col-md-2">
                                    <div class="form-group">
                                        <label>Número de identificación</label>
                                        <input type="text" class="form-control" v-model="estudiante.numero_identificacion">
                                    </div>
                            </div>

                            <div class="col-6 col-md-2">
                                <label>Sexo:</label>
                                <select class="form-select" aria-label="Default select example" v-model="estudiante.sexo">
                                    <option selected>Selecciona una opción</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control" v-model="estudiante.fecha_nacimiento">
                                    </div>
                            </div>

                            <div class="col-6 col-md-5">
                                    <div class="form-group">
                                        <label>Carrera</label>
                                        <input type="text" class="form-control" v-model="estudiante.carrera">
                                    </div>
                            </div>

                        </div>

                    <br><br>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar estudiante</button>
                </form>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                estudiante: {},
                loading: false
            }
        },
        created() {
            this.loading = true
            this.axios
                .get(`/api/estudiante/show/${this.$route.params.id}`)
                .then((res) => {
                    this.estudiante = res.data;
                    this.loading = false
                });
        },
        methods: {
            EditarEstudiante() {
                this.axios
                    .patch(`/api/estudiante/update/${this.$route.params.id}`, this.estudiante)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>