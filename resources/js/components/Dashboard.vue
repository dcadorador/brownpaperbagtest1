<template>
    <div>
        <div class="content" style="height: 750px">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Task</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input"
                                                                             class="form-control-label">Name</label>
                                            </div>
                                            <div class="col-12 col-md-9"><input v-model="newTask" required type="text"
                                                                                id="text-input"
                                                                                name="keap" placeholder="e.g Do dishes"
                                                                                class="form-control"></div>
                                        </div>
                                        <div class="float-right">
                                            <button id="payment-button" style="width: 100px" type="submit"
                                                    class="btn btn-info" @click="addNewTask()"><span
                                                id="payment-button-amount">Add</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tasks</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Completed</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-if="tasks.length > 0" v-for="task in tasks" :key="tasks.id">
                                        <td class="text-center">{{ task.name }}</td>
                                        <td v-if="task.status === 1" class="text-center">
                                            <span class="badge badge-primary">Completed</span>
                                        </td>
                                        <td v-else class="text-center">
                                            <span class="badge badge-danger">Pending</span>
                                        </td>
                                    </tr>
                                    <tr v-else>
                                        <td class="text-center" colspan="2"><strong>NO TASKS EXISTING</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Chart</strong>
                            </div>
                            <div class="card-body">
                                <div>
                                    <Line
                                        v-if="loaded"
                                        id="my-chart-id"
                                        :options="chartOptions"
                                        :data="chartData"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Line} from 'vue-chartjs'
import {Chart as ChartJS, Title, Tooltip, Legend, CategoryScale, LinearScale, PointElement, LineElement} from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, CategoryScale, LinearScale, PointElement, LineElement)

export default {

    name: "Dashboard.vue",
    components: {Line},
    data() {
        return {
            loaded: false,
            chartData: null,
            chartOptions: {
                responsive: true
            },
            tasks: [],
            task: '',
            newTask: '',
        }
    },

    mounted() {
        setInterval(this.renderChartData, 30000)
        this.loaded = false;
        this.renderChartData();
    },

    created() {
        this.taskList();
    },

    methods: {
        taskList() {
            axios.get(import.meta.env.VITE_API_ENDPOINT + 'tasks')
                .then(({data}) => {
                    //console.log(data);
                    this.tasks = data.data
                });
        },

        addNewTask() {
            axios.post(import.meta.env.VITE_API_ENDPOINT + 'tasks', {'name': this.newTask})
                .then(({data}) => {
                    if (data.status) {
                        this.taskList();
                    }
                });
        },

        renderChartData() {
            console.log('running...')
            this.loaded = false;
            axios.get(import.meta.env.VITE_API_ENDPOINT + 'chart')
                .then(({data}) => {

                    this.chartData = {
                        labels: data.data.time,
                        datasets: [
                            {
                                label: 'Tasks',
                                data: data.data.data
                            }
                        ]
                    }

                    this.loaded = true;
                });
        }

    },

}

</script>

<style scoped>

</style>
