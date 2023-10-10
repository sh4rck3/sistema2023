import axios from 'axios';
import { onMounted } from 'vue';
import { teste } from './Chat.vue';

onMounted(() => {
console.log('montado com sucesso');
axios.get('api/users').then(response => (
//console.log(response.data)
this.teste = response.data));
console.log(teste);
}
);
