import {createApp, h} from 'vue'
import Leave from "../components/leave/Leave.vue";
import LeaveApplication from "../components/leave/LeaveApplication.vue";
import { createRouter, createWebHistory } from 'vue-router';

let routes = [
    {
        path: "/leave/application",
        name: "LeaveApplication",
        component: LeaveApplication
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

createApp({
    render: () => h(Leave)
}).use(router).mount('#leave');
