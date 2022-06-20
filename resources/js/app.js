import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/themes/base/all.css';
$('#start').datepicker({
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true
}
);
$('#end').datepicker({
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true
}
);


import 'datatables.net-bs5';
