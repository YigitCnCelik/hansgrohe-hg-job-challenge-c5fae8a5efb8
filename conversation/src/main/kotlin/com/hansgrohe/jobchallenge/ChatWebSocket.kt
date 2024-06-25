package com.hansgrohe.jobchallenge

import io.quarkus.websockets.next.OnError
import io.quarkus.websockets.next.OnTextMessage
import io.quarkus.websockets.next.WebSocket


@WebSocket(path = "/ws/chat")
class ChatWebSocket(private val chatBot: ChatBot) {

    @OnTextMessage
    fun onMessage(question: Chat): Message {
        try {
            val response = chatBot.chat(question.prompt())
            return Chat(question.persona, response)
        } catch (ex: Exception) {
            ex.printStackTrace()
            return Failure(ex.message!!)
        }
    }

    @OnError
    fun onError(ex: Exception): Message {
        return Failure(ex.message!!)
    }
}
