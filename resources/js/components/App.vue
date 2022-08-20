<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">
                <h2><i class="fa-solid fa-building-columns"></i> Universidad</h2>
            </span>
        </div>
      
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">

                    <router-link to="/" class="nav-item nav-link"><i class="fa-solid fa-house"></i> Inicio</router-link>
                    <router-link to="/crear" class="nav-item nav-link"><i class="fa-solid fa-circle-plus"></i> Crear Estudiante</router-link>

                </div>
            </div>
        </nav>



        <br/>
        
        <router-view></router-view>

    </div>
</template>

<script>
export default {}
</script>
