import './bootstrap';
import './gallery';

import Alpine from 'alpinejs';

import drawerAgendamento from './alpine/drawerAgendamento';
import catalogoFiltro from './alpine/catalogoFiltro';


window.Alpine = Alpine;


/* Componentes Alpine */


Alpine.data(
    'drawerAgendamento',
    drawerAgendamento
);


Alpine.data(
    'catalogoFiltro',
    catalogoFiltro
);



Alpine.start();