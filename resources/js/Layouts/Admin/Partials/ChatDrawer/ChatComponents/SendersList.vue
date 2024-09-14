<template> 
      <div class="d-flex flex-stack py-4 cursor-pointer" @click="openSenderMessages(conversation?.id)" v-for="conversation in conversations"> 
         <div class="d-flex align-items-center">
            <div class="symbol symbol-45px symbol-circle" @click.stop="console.log('hello')"> 
               <img :src="conversation?.profile_photo_url" alt="">
            </div>
            <div class="ms-5">
               <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">{{conversation?.name}}</a>
               <div class="fw-semibold text-muted">{{conversation?.latest_message}}</div>
            </div>
         </div> 
         <div class="d-flex flex-column align-items-end ms-2">
            <span class="text-muted fs-7 mb-1">{{moment(conversation?.latest_message_time).format('ll')}}</span>
            <span class="badge badge-sm badge-circle badge-light-success" v-if="conversation?.unread_message_count">{{conversation?.unread_message_count}}</span>
         </div>
      </div>     
      <div class="d-flex justify-content-center align-items-center" v-if="!(page > lastPage) && loading" 
         :class="{'h-100' : !conversations},
               {'h-175px' :page  >=1 && conversations}"> 
         <span class="spinner-border spinner-border-sm align-middle ms-2 h-30px w-30px"></span>
      </div> 
</template>
<script setup>   
   import axios from 'axios';
   import { onMounted, ref } from 'vue';
   import moment from 'moment-timezone';
   const conversations = ref();
   const loading = ref();
   const lastPage = ref();
   const page = ref(1);

   const openSenderMessages = (user_id) => {
      emit.emit('openSenderMessages', user_id);
   }

   onMounted(() => { 
      getConversations(); 
   });

   const getConversations = async () => {
      loading.value = true;
      try {
         const response = await axios.get(route('admin.get-all-conversations'), { params: { page: page.value } });
         if (response.data.status) {
               const data = response.data.data; 
               conversations.value = data;
         }
      } catch (error) {
         console.error('Error fetching conversations:', error);
      } finally {
         loading.value = false;
      }
   }; 

   emit.on('loadMoreUsers', async () => {
      if (loading.value || (page.value > lastPage.value)) return;

      loading.value = true;

      try {
         const response = await axios.get(route('admin.get-all-conversations'), {
            params: { page: page.value }
         });
         if (response.data.status) {
                  const data = response.data.conversations.data;
                  conversations.value = [...conversations.value, ...data.map(convo => ({
                     id: convo.id,
                     profile_photo_url: convo.is_group ? 'https://ui-avatars.com/api/?name=GR&length=2' : convo.users[0]?.profile_photo_url,
                     displayName: convo.is_group ? convo.name : convo.users[0]?.full_name,
                     latest_message_created_at: convo?.last_message?.created_at,
                  }))];
            lastPage.value = response.data.conversations.last_page;
            page.value += 1;
         }
      } catch (error) {
         console.error('Error loading more conversations:', error);
      } finally {
         loading.value = false;
      }
   }); 

   

</script>