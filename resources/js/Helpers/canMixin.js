    import { usePage } from '@inertiajs/vue3';

    export default {
    computed: {
        user() {
        const user = usePage().props.auth.user;
        // Ensure `user` and `user.permissions` are defined before adding `can` method
        if (user && user.permissions) {
            user.can = (permission) => user.permissions.includes(permission);
        } else {
            user.can = () => false; 
        }
        return user;
        }
    }
    };
