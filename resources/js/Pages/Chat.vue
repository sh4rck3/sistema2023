<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import axios from 'axios';
import { onMounted, ref, inject } from 'vue';

const teste = ref([])
const swal = inject('$swal')

function showAlert() {
    swal({
                    icon: 'success',
                    title: 'Category saved successfully'
                })
}

onMounted(() => {
        console.log('montado com sucesso')
        axios.get('api/users').then(response =>(
            //console.log(response.data)
            teste.value = response.data,
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="">Why do I have this issue?</a>'              
            })
        ))
    })
</script>



<template>
    <AppLayout title="Chat">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Chat
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                   <h1>Componente chat</h1>
                   {{teste}}
                   
                </div>
                <button @click="showAlert">Hello world</button>
            </div>
        </div>
    </AppLayout>
</template>
