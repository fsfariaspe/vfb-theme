<?php
/**
 * Template part para o chatbot Vivi
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Chatbot Vivi -->
<!-- Floating Action Button -->
<button id="chatbot-btn" onclick="toggleChat()" class="fixed bottom-6 right-6 w-16 h-16 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-2xl hover:shadow-3xl transition-all duration-300 z-50 flex items-center justify-center text-2xl font-bold">
    V
</button>

<!-- Chat Window -->
<div id="chat-window" class="chat-window chat-hidden fixed bottom-24 right-6 w-80 h-96 bg-white rounded-2xl shadow-2xl z-40 flex flex-col">
    <!-- Chat Header -->
    <div class="bg-blue-600 text-white p-4 rounded-t-2xl">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-lg">Vivi - Sua Assistente de Viagem</h3>
            <button onclick="toggleChat()" class="text-white hover:text-gray-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Chat Messages -->
    <div class="flex-1 p-4 overflow-y-auto chat-messages">
        <div class="bg-gray-100 rounded-lg p-3 mb-4">
            <p class="text-gray-800">
                Olá! Sou a Vivi, sua assistente de viagem virtual. Como posso ajudá-lo a planejar sua próxima aventura no Brasil? 🇧🇷
            </p>
        </div>
    </div>

    <!-- Chat Input -->
    <div class="p-4 border-t">
        <div class="flex gap-2">
            <input type="text" placeholder="Digite sua mensagem..." class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="chat-input">
            <button onclick="sendMessage()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                Enviar
            </button>
        </div>
    </div>
</div>
