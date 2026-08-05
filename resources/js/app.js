import './bootstrap';
import './gallery';

import Alpine from 'alpinejs';

import drawerAgendamento from './alpine/drawerAgendamento';

window.Alpine = Alpine;

/*
|--------------------------------------------------------------------------
| Componentes Alpine
|--------------------------------------------------------------------------
*/

Alpine.data('drawerAgendamento', drawerAgendamento);

Alpine.start();