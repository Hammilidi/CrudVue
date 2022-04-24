<template>
    <div class="container">
        <div class="text-center m-5">
            <span class="lead"></span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="btn btn-primary m-1 nav-link">Users</router-link>
                    <router-link to="/create" class="btn btn-success m-1 nav-link">Add User</router-link>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>
    export default {}
</script>