<template>
<div v-if="loading" class="loader"></div>
    <div>
        <h3 class="text-center">Crear Estudiante</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="CrearEstudiante">

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" v-model="estudiantes.nombres">
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" v-model="estudiantes.apellidos">
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <label>Tipo de identificación</label>
                                <select class="form-select" aria-label="Default select example" v-model="estudiantes.tipo_identificacion">
                                    <option selected disabled>Selecciona una opción</option>
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
                                        <input type="text" class="form-control" v-model="estudiantes.numero_identificacion">
                                    </div>
                            </div>

                            <div class="col-6 col-md-2">
                                <label>Sexo:</label>
                                <select class="form-select" aria-label="Default select example" v-model="estudiantes.sexo">
                                    <option selected disabled>Selecciona una opción</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control" v-model="estudiantes.fecha_nacimiento">
                                    </div>
                            </div>

                            <div class="col-6 col-md-5">
                                    <div class="form-group">
                                        <label>Carrera</label>
                                        <input type="text" class="form-control" v-model="estudiantes.carrera">
                                    </div>
                            </div>

                        </div>

                    <br><br>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>Crear estudiante</button>
                </form>
            </div>
        </div>
    </div>
</template>



<script>
    export default {
        data() {
            return {
                estudiantes: {},
                loading: false
            }
        },
        methods: {
            CrearEstudiante() {
                this.loading = true
                this.axios
                    .post('/api/estudiante/store', this.estudiantes)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }

    
</script>