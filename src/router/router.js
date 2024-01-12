import HomePage from '../components/pages/HomePage.vue';
import LoginPage from '../components/pages/LoginPage.vue';
import AddCityPage from '../components/pages/AddCityPage.vue'
import { createRouter, createWebHistory} from 'vue-router';

const routes = [
    {
        path: "/",
        name: "LoginPage",
        component: LoginPage
    },
    {
        path: "/home",
        name: "HomePage",
        component: HomePage
    },
    {
        path: "/addcity",
        name: "AddCityPage",
        component: AddCityPage
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;