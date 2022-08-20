<template>
<div v-if="loading" class="loader"></div>
<div>
        <h2 class="text-center">Nuestros estudiantes</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo de identificación</th>
                <th>Número de identificación</th>
                <th>Sexo</th>
                <th>Fecha de nacimiento</th>
                <th>Carrera</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="estudiante in estudiantes" :key="estudiante.id">
                <td>{{ estudiante.id }}</td>
                <td>{{ estudiante.nombres }}</td>
                <td>{{ estudiante.apellidos }}</td>
                <td>{{ estudiante.tipo_identificacion }}</td>
                <td>{{ estudiante.numero_identificacion }}</td>
                <td>{{ estudiante.sexo }}</td>
                <td>{{ estudiante.fecha_nacimiento }}</td>
                <td>{{ estudiante.carrera }}</td>
                <td>
                    
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editar', params: { id: estudiante.id }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Editar</router-link>
                        <button class="btn btn-danger" @click="BorrarEstudiante(estudiante.id)"><i class="fa-solid fa-trash"></i> Borrar</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

 

</template>

<script>
    export default {
        data() {
            return {
                estudiantes: [],
                loading: false
            }
        },
        async created() {
            this.loading = true
            this.axios
                .get('/api/estudiantes')
                .then(response => {
                    this.estudiantes = response.data;
                    this.loading = false
                });
        },
        methods: {
            BorrarEstudiante(id) { 
                this.loading = true
                this.axios
                    .delete(`/api/estudiante/delete/${id}`)
                    .then(response => {
                        let i = this.estudiantes.map(data => data.id).indexOf(id);
                        this.estudiantes.splice(i, 1);
                        this.loading = false;
                    });
            }
        }
    }


</script>

