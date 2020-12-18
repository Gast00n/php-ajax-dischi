import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        cdList: [],
        querySearch: '',
        filter:'all',
        authors: [],
        filteredObj: [],
    },
    created() {
        const dataUrl = window.location.href + 'scripts/json-script.php';
        this.getAuthors(dataUrl);

        //Chiamata Axios
        axios.get(dataUrl)
        .then(response => {this.cdList = response.data;})
        .catch(error => {console.log(error);
        });

    },
    methods: {
        getAuthors(data) {
            axios.get(data)
            .then(response => {
                for (let i = 0; i < response.data.length; i++){
                    let authorNow = response.data[i].author.trim();
                    if (! this.authors.includes(authorNow)) {
                        this.authors.push(authorNow);
                    }
                };
            })
            .catch(error =>{
                console.log(error);
            })
        },
        onAuthors(event) {
            this.querySearch = '?artista=' + event.target.value;

            //Chiamata Axios Filtrata
            axios.get(window.location.href + 'scripts/json-script.php' + this.querySearch)
            .then(response => {
                this.cdList = '';
                this.cdList = response.data;
                console.log(response.data);
                console.log(this.cdList);
            })
            .catch(error => {console.log(error);
            });           

        }
    }

});