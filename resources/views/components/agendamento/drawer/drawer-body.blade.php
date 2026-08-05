<template x-if="drawer.etapa==1">

    <x-agendamento.drawer.drawer-step-date />

</template>

<template x-if="drawer.etapa==2">

    <x-agendamento.drawer.drawer-step-time />

</template>

<template x-if="drawer.etapa==3">

    <x-agendamento.drawer.drawer-step-payment />

</template>

<template x-if="drawer.etapa==4">

    <x-agendamento.drawer.drawer-step-confirm />

</template>