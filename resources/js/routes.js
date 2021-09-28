import LoginUser from './components/auth/login'
import RegisterUser from './components/auth/register'
import Index from './components/index'

export const routes = [
    
    
    {
        path: '/',
        name: 'Index',
        component: Index
    },
    {
        path: '/login',
        name: 'LoginUser',
        component: LoginUser
    },
    {
        path: '/register',
        name: 'RegisterUser',
        component: RegisterUser
    },

   
];