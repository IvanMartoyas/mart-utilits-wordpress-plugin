var button_component = {
    template: `
        <button class="slider__button" @click.prevent.stop="click_button">
            {{text}}
       </button>
    `,
    props: ['text',],
    data () {
        return {
        }
    },
    mounted() {
       // console.log(" component-settings ", this.component_settings);
    },
    methods: {
        click_button() {
            console.log('click')
        }
    }
}