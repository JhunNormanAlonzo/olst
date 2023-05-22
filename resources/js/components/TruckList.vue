

<template>
    <div class="row justify-content-center">
        <div class="col-2">
            <div class="d-flex align-items-center ml-4" >

                <label for="paginate" class="text-nowrap me-2 mb-0">Page</label>
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
    <hr />

        <table class="table table-sm">
            <thead>
            <tr>
                <th class="" style="font-size: 13px;">Name</th>
                <th class="" style="font-size: 13px;">Description</th>
                <th class="" style="font-size: 13px;">PlateNumber</th>
                <th class="" style="font-size: 13px;">Status</th>
                <th class="" style="font-size: 13px;">CreatedAt</th>
                <th class="" style="font-size: 13px;">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="truck in trucks.data" :key="truck.id">
                <td class="" style="font-size: 13px;">{{ truck.name }}</td>
                <td class="" style="font-size: 13px;">{{ truck.description }}</td>
                <td class="text-center" style="font-size: 13px;">{{ truck.plate_number }}</td>
                <td v-if="truck.status == 1" class="text-center" style="font-size: 13px;"><span class="badge bg-danger">Not Available</span></td>
                <td v-else-if="truck.status == 0" class="text-center" style="font-size: 13px;"><span class="badge bg-success">Available</span></td>
                <td class="text-center" style="font-size: 13px;">{{ truck.created_at }}</td>
                <td class="" style="font-size: 13px;">
                    <button class="btn btn-sm btn-danger" @click="deleteTruck(truck.id)">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>





    <div class="row mt-4 ">
        <div class="col-12 d-flex justify-content-center">
            <Bootstrap5Pagination :data="trucks" @pagination-change-page="getTrucks"></Bootstrap5Pagination>
        </div>
    </div>

</template>





<script >

export default {
    data() {
        return {
            trucks: [],
            paginate: 5,
            search: "",
            editTruck : {
                id: "",
                name: "",
                description: "",
                plate_number: "",
                status: ""
            }
        };

    },
    watch: {
        paginate : function (){
            this.getTrucks();
        },
        search : function (){
            this.getTrucks();
        }
    },
    methods : {
        getTrucks(page = 1){
            axios.get('/api/super-admin/truck/getTrucks?page='+ page
                + '&paginate=' + this.paginate
                + '&q=' + this.search
            )
            .then(response => {
                this.trucks = response.data
            })
        },


        deleteTruck(id) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;
            axios.delete(`/api/super-admin/truck/${id}`)
                .then(response => {
                    // Handle success
                    console.log('Truck deleted:', response.data);
                    // Remove the deleted truck item from the trucks data array
                    this.trucks.data = this.trucks.data.filter(truck => truck.id !== id);
                })
                .catch(error => {
                    // Handle error
                    console.error('Error deleting truck:', error);
                });
        }


    },
    mounted() {
        this.getTrucks();
        // setInterval(()=>{
        //     this.getTrucks();
        // }, 5000);
    },
};
</script>
