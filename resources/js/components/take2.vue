<data-table
    url="http://vue-datatable.test/ajax"
    :per-page="perPage"
    :columns="columns">
</data-table>

export default {
    name: 'app',
    data() {
        return {
            perPage: ['10', '25', '50'],
            columns:  [
            { label: 'time', name: 'time' },
            {label: 'lev', name: 'lev'},
            { label: 'hs', name: 'hs'},
{ label: 'hx', name: 'hx'},
{ label: 'tp', name: 'tp'},
{ label: 'tm01', name: 'statm01tus'},
{ label: 'tm02', name: 'tm02'},
{ label: 'dp', name: 'dp'},
{ label: 'dpm', name: 'dpm'},
{ label: 'hs_sw1', name: 'hs_sw1'},
{ label: 'hs_sw8', name: 'hs_sw8'},
{ label: 'tp_sw1', name: 'tp_sw1'},
{ label: 'tp_sw8', name: 'tp_sw8'},
{ label: 'dpm_sw8', name: 'dpm_sw8'},
{ label: 'dpm_sw1', name: 'dpm_sw1'},
{ label: 'hs_sea8', name: 'hs_sea8'},
{ label: 'hs_sea', name: 'hs_sea'},
{ label: 'tp_sea8', name: 'tp_sea8'},
{ label: 'tp_sea', name: 'tp_sea'},
{ label: 'tm_sea', name: 'tm_sea'},
{ label: 'dpm_sea8', name: 'dpm_sea8'},
{ label: 'dpm_sea', name: 'dpm_sea'},
{ label: 'hs_ig', name: 'hs_ig'},
{ label: 'wsp', name: 'wsp'},
{ label: 'gst', name: 'gst'},
{ label: 'wd', name: 'wd'},
{ label: 'wsp100', name: 'wsp100'},
{ label: 'wsp50', name: 'wso50'},
{ label: 'wsp80', name: 'wsp80'},
{ label: 'precip', name: 'precip'},
{ label: 'tmp', name: 'tmp'},
{ label: 'rh', name: 'rh'},
{ label: 'vis', name: 'vis'},
{ label: 'cld', name: 'cld'},
{ label: 'cb', name: 'cb'},
{ label: 'csp0', name: 'csp0'},
{ label: 'cd0', name: 'cd0'},
{ label: 'ss', name: 'ss'},
{ label: 'sst', name: 'sst'}

        ];
        }
    },
}