

<template>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-2 col-sm-2 col-4">
            <div class="d-flex align-items-center ml-4" >
                <select v-model="paginate" id="" class="form-select form-select-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center ml-4" >
                <input v-model.lazy="search" type="text" class="form-control form-select-sm" placeholder="Search keyword here...">
            </div>
        </div>

    </div>

    <hr>
    <table class="table table-sm ">
        <thead>
        <tr>
            <th class="" style="font-size: 13px;">Name</th>
            <th class="" style="font-size: 13px;">Email</th>
            <th class="" style="font-size: 13px;">Address</th>
            <th class="" style="font-size: 13px;">ContactNumber</th>
            <th class="" style="font-size: 13px;">Gender</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users.data" :key="user.id">
            <td class="" style="font-size: 13px;">{{ user.name }}</td>
            <td class="" style="font-size: 13px;">{{ user.email }}</td>
            <td class="" style="font-size: 13px;">{{ user.address }}</td>
            <td class="" style="font-size: 13px;">{{ user.contact_number }}</td>
            <td class="" style="font-size: 13px;">{{ user.gender }}</td>
        </tr>
        </tbody>
    </table>
    <div class="row mt-4 ">
        <div class="col-12 d-flex justify-content-center">
            <Bootstrap5Pagination :data="users" @pagination-change-page="getUsers"></Bootstrap5Pagination>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                users: [],
                paginate: 5,
                search: "",
            };
        },
        watch : {
            paginate : function (){
                this.getUsers();
            },
            search : function(){
                this.getUsers();
            }
        },
        methods : {
            getUsers(page = 1){
                axios.get('/api/super-admin/driver/getUsers?page='+ page
                    + '&paginate=' + this.paginate
                    + '&q=' + this.search
                )
                .then(response => {
                    this.users = response.data
                })
            }
        },
        mounted() {
            this.getUsers();
        },
    }
</script>
