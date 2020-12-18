import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        cdList: [],
        querySearch: '',
        filter:'',
        genres: [],
    },
    created() {

        const dataUrl = window.location.href + 'scripts/json-script.php';

        //Chiamata Axios
        axios.get(dataUrl)
        .then(response => {this.cdList = response.data;})
        .catch(error => {console.log(error);
        });

    }

});