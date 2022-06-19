import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/themes/base/all.css';
$('#start').datepicker({
    dateFormat: 'dd/mm/yy'
}
);
$('#end').datepicker({
    dateFormat: 'dd/mm/yy'
}
);


import 'datatables.net-bs5';
