<template>
    <div>
        <h2 class="text-center">ALL Users</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <div role="group">
                            <router-link :to="{name: 'edit', params: { id: user.id }}" class="btn btn-success m-1">Edit</router-link>
                            <button class="btn btn-danger m-1" @click="deleteUser(user.id)">Delete</button>
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
                users: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/users/')
                .then(response => {
                    this.users = response.data;
                });
        },
        methods: {
            deleteUser(id) {
                this.axios
                    .delete(`http://localhost:8000/api/users/${id}`)
                    .then(response => {
                        let i = this.users.map(data => data.id).indexOf(id);
                        this.users.splice(i, 1)
                    });
            }
        }
    }
</script>