    //console.log(" settings file added");
    
    
    	
	    
   var setting_slider = {
            template: `
                <div class="Slide__row" v-if="settings_slider_visible">
    	            <div class="Slide__half">
                        <div class="Slide__form_title slides__row_title">{{ title }}</div>
                    </div>
    	            <div class="Slide__half">
                        <div @click="show_panel = !show_panel" >{{show_panel? 'Открыть' : 'Закрыть'}}</div>
                    </div>
    	            <div class="settings__panel" v-show="show_panel">
    	                test sett
    	            </div>
    	       </div>
            `,
            props: ['title'],
            data () {
                return {
                    settings_slider_visible: false,
                    // UI
                    show_panel: false,
                    component_settings,
                }
            },
            mounted() {
               // console.log(" component-settings ", this.component_settings);
            }
        }
