  import { createApp, h } from 'vue';
  import { createInertiaApp, usePage, Link, Head } from '@inertiajs/vue3';
  import { ZiggyVue } from '../../vendor/tightenco/ziggy';
  import { defineAsyncComponent } from 'vue';
  import moment from 'moment';
  import emitter from 'tiny-emitter/instance';   
  window.emit = emitter;

  const AdminLayout = defineAsyncComponent(() =>
    import('./Layouts/Admin/Layout.vue')
  );
  
  const AuthLayout = defineAsyncComponent(() =>
    import('./Layouts/Auth/Layout.vue')
  );


  createInertiaApp({
      resolve: async name => {  
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: false })
        let page = await pages[`./Pages/${name}.vue`]()

        if(name.startsWith('Admin/')){ 
          page.default.layout = AdminLayout;
        }else if(name.startsWith('Frontend/')){
          page.default.layout = FrontendLayout;
        }else if(name.startsWith('Auth/')){
          page.default.layout = AuthLayout;
        }
        return page
      },

      setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
          .use(ZiggyVue)
          .use(plugin)  
          .component('Link',Link)
          .mount(el)
      },

  });

