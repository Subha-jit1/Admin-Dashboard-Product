// canMixin.js
import { usePage } from '@inertiajs/vue3';

export default {
    methods: { 
        
        isUserHasPermissionTo(permission) {
            const user = usePage().props?.auth?.user;
            return user ? user.permissions.includes(permission) : false;
        },
 
        isUserHasAnyPermission(permissions) {
            const user = usePage().props?.auth?.user;
            return user ? permissions.some(permission => user.permissions.includes(permission)) : false;
        },
 
        isUserHasAllPermissions(permissions) {
            const user = usePage().props?.auth?.user;
            return user ? permissions.every(permission => user.permissions.includes(permission)) : false;
        }
    }
};
