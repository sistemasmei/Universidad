import { createWebHistory, createRouter } from "vue-router";

import Estudiantes from "./components/Estudiantes.vue";
import CrearEstudiante from "./components/CrearEstudiante.vue";
import EditarEstudiante from "./components/EditarEstudiante.vue";

const rutas = [
    {
      path: "/",
      name: "home",
      component: Estudiantes
    },
    {
      path: "/crear",
      name: "crear",
      component: CrearEstudiante
    },
    {
      path: "/editar/:id",
      name: "editar",
      component: EditarEstudiante
    }
  ];


const routes = new createRouter({
    history: createWebHistory(),
    routes: rutas
  });

export default routes;