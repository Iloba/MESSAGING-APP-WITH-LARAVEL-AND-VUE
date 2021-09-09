import LoginUser from './components/auth/login'
import RegisterUser from './components/auth/register'

export const routes = [
    
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