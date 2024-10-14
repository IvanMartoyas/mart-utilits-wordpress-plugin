var setting_slider = {
    template: `
       
            <slot></slot>

    `,
   // props: ['title'],
    data () {
        return {

        }
    },
    mounted() {
       // console.log(" component-settings ", this.component_settings);
    }
}


const init_libraris = {      
    data() {
        return {
            libraris: {},
            title: 'text',
        }
    },
    methods: {
        save_data() {

        }
    },
    created() {
        this.libraris = libraris_data;
    }
}
window.onload = function() {

    const app = Vue.createApp(init_libraris);
    app.mount("#init_libraris");
};
