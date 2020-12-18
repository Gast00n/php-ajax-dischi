<div class="main">
    <div id="app">
        <div class="search-bar">
            <select v-model="filter" @change="onAuthors($event)">
                <option value="all" selected="selected" >All</option>
                <option v-for="artist in authors">{{ artist }}</option>
            </select>
        </div>
        <div class="container">
            <div v-for="cd in cdList" class="box-dischi">
                <img :src="cd.poster" alt="">
                <h3 class="title">
                    {{ cd.title }}
                    <small class="artist">{{ cd.author }}</small>
                </h3>
                <span class="year">{{ cd.year }}</span>
                <span class="genre">{{ cd.genre }}</span>
            </div>
        </div>
    </div>
</div>