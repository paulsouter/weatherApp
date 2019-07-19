
<template>
    <div class="readings">
        <h2>weather Readings</h2>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchReadings(pagination.prev_page_url)">Previous</a></li>

                <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page}} of {{ pagination.last_page}}</a></li>

                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchReadings(pagination.next_page_url)">Next</a></li>
            </ul>
        </nav>
        <table>
            <tr>
                <th>'time' </th>
                <th> 'lev'</th>
                <th>'hshs'</th>
                <th>'hx'</th>
                <th>'tp'</th>
                <th>'tm01'</th>
                <th>'tm02'</th>
                <th>'dp'</th>
                <th>'dpm'</th>
                <th>'hs_sw1'</th>
                <th>'hs_sw8'</th>
                <th>'tp_sw1'</th>
                <th>'tp_sw8'</th>
                <th>'dpm_sw8'</th>
                <th>'dpm_sw1'</th>
                <th>'hs_sea8'</th>
                <th>'hs_sea'</th>
                <th>'tp_sea8'</th>
                <th>'tp_sea'</th>
                <th>'tm_sea'</th>
                <th>'dpm_sea8'</th>
                <th>'dpm_sea'</th>
                <th>'hs_ig'</th>
                <th>'wsp'</th>
                <th>'gst'</th>
                <th>'wd'</th>
                <th>'wsp100'</th>
                <th>'wsp50'</th>
                <th>'wsp80'</th>
                <th>'precip'</th>
                <th>'tmp'</th>
                <th>'rh'</th>
                <th>'vis'</th>
                <th>'cld'</th>
                <th>'cb'</th>
                <th>'csp0'</th>
                <th>'cd0'</th>
                <th>'ss'</th>
                <th>'sst</th>
            </tr>
            <tbody>
            <div  v-for="reading in readings" v-bind:key="reading.time">
                <tr>
                     <th>'time' </th>
                <th> 'lev'</th>
                <th>'hshs'</th>
                <th>'hx'</th>
                <th>'tp'</th>
                <th>'tm01'</th>
                <th>'tm02'</th>
                <th>'dp'</th>
                <th>'dpm'</th>
                <th>'hs_sw1'</th>
                <th>'hs_sw8'</th>
                <th>'tp_sw1'</th>
                <th>'tp_sw8'</th>
                <th>'dpm_sw8'</th>
                <th>'dpm_sw1'</th>
                <th>'hs_sea8'</th>
                <th>'hs_sea'</th>
                <th>'tp_sea8'</th>
                <th>'tp_sea'</th>
                <th>'tm_sea'</th>
                <th>'dpm_sea8'</th>
                <th>'dpm_sea'</th>
                <th>'hs_ig'</th>
                <th>'wsp'</th>
                <th>'gst'</th>
                <th>'wd'</th>
                <th>'wsp100'</th>
                <th>'wsp50'</th>
                <th>'wsp80'</th>
                <th>'precip'</th>
                <th>'tmp'</th>
                <th>'rh'</th>
                <th>'vis'</th>
                <th>'cld'</th>
                <th>'cb'</th>
                <th>'csp0'</th>
                <th>'cd0'</th>
                <th>'ss'</th>
                <th>'sst</th>
                </tr>
                    <td>{{ reading.time}}</td>
                    <td>{{ reading.lev}}</td>
                    <td>{{ reading.hs}}</td>
                    <td>{{ reading.hx}}</td>
                    <td>{{ reading.tp}}</td>
                    <td>{{ reading.tm01}}</td>
                    <td>{{ reading.tm02}}</td>
                    <td>{{ reading.dp}}</td>
                    <td>{{ reading.dpm}}</td>
                    <td>{{ reading.hs_sw1}}</td>
                    <td>{{ reading.hs_sw8}}</td>
                    <td>{{ reading.tp_sw1}}</td>
                    <td>{{ reading.tp_sw8}}</td>
                    <td>{{ reading.dpm_sw8}}</td>
                    <td>{{ reading.dpm_sw1}}</td>
                    <td>{{ reading.hs_sea8}}</td>
                    <td>{{ reading.hs_sea}}</td>
                    <td>{{ reading.tp_sea8}}</td>
                    <td>{{ reading.tp_sea}}</td>
                    <td>{{ reading.tm_sea}}</td>
                    <td>{{ reading.dpm_sea8}}</td>
                    <td>{{ reading.dpm_sea}}</td>
                    <td>{{ reading.hs_ig}}</td>
                    <td>{{ reading.hs_fig}}</td>
                    <td>{{ reading.wsp}}</td>
                    <td>{{ reading.gst}}</td>
                    <td>{{ reading.wd}}</td>
                    <td>{{ reading.wsp100}}</td>
                    <td>{{ reading.wsp50}}</td>
                    <td>{{ reading.wso80}}</td>
                    <td>{{ reading.precip}}</td>
                    <td>{{ reading.tmp}}</td>
                    <td>{{ reading.rh}}</td>
                    <td>{{ reading.vis}}</td>
                    <td>{{ reading.cld}}</td>
                    <td>{{ reading.cb}}</td>
                    <td>{{ reading.csp0}}</td>
                    <td>{{ reading.cd0}}</td>
                    <td>{{ reading.ss}}</td>
                    <td>{{ reading.sst}}</td>
                
                <hr>
                <!-- <button @click="editArticle(article)" class="btn btn-warning mb-2">Edit</button>
                <button @click="deleteArticle(article.id)" class="btn btn-danger">Delete</button> -->
            </div>
            
            </tbody>
        </table>
    </div>
</template>


<script>

    export default {
    data() {
    return {
    readings: [],
            reading: {
            time: '',
                    luv: '',
                    hs: '',
                    hx: '',
                    tp: '',
                    tm01: '',
                    tm02: '',
                    dp: '',
                    dpm: '',
                    hs_sw1: '',
                    hs_sw8: '',
                    tp_sw1: '',
                    tp_sw8: '',
                    dmp_sw1: '',
                    dmp_sw8: '',
                    hs_sea8: '',
                    hs_sea1: '',
                    tp_sea8: '',
                    tp_sea: '',
                    tm_sea: '',
                    dpm_sea8: '',
                    dpm_sea: '',
                    hs_ig: '',
                    wsp: '',
                    gst: '',
                    wd: '',
                    wsp100: '',
                    wsp50: '',
                    wsp80: '',
                    precip: '',
                    tmp: '',
                    rh: '',
                    vis: '',
                    cld: '',
                    cb: '',
                    csp0: '',
                    cd0: '',
                    ss: '',
                    sst: ''

            },
            reading_time: '',
            pagination: {},
            //   edit: false
    };
    },
            created() {
    this.fetchReadings();
    },
            methods: {
            fetchReadings(page_url) {
            let vm = this;
            page_url = page_url || '/api/readings';
            fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                    console.log(res.data);
                    this.readings = res.data;
                    vm.makePagination(res.meta, res.links);
                    })
                    .catch(err => console.log(err));
            },
                    makePagination(meta, links) {
            let pagination = {
            current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
            };
            this.pagination = pagination;
            },
                    clearForm() {
            this.edit = false;
            this.reading.time = null;
            this.reading.reading_id = null;
            this.reading.title = '';
            this.reading.body = '';
            },
            }
    };
</script>