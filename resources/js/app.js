import swal from 'sweetalert';
import 'styles/_colors.scss'; // assuming a styles directory under src/
import 'nprogress/nprogress'; // importing a css file from the nprogress node module
require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
