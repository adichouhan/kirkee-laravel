<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Users</h5>
                    <div class="table-responsive">
                        <table class="table center-aligned-table">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Phone number</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users">
                                <td>{{user.id}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>{{user.phone_number}}</td>
                                <td>
                                        <router-link :to="'/user/edit/'+user.id" ><i class="fa fa-edit blue"></i></router-link>
                                    <a href="#" @click="deleteUser(user.id)">
                                        <i class="fa fa-trash red"></i>
                                    </a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                editMode: false,
                users: {},
            }
        },
        created(){
            this.loadUsers();
        },
        methods:{
            loadUsers() {
                axios.get("api/users").then( data => (this.users = data.data));
            },

            deleteUsers(id) {
                axios.delete("api/users/"+id).then((resposne) => { this.loadUsers(); });
            },
        }
    }
</script>

<style scoped>

</style>