package com.hansgrohe.jobchallenge

import dev.langchain4j.service.SystemMessage
import dev.langchain4j.service.UserMessage
import io.quarkiverse.langchain4j.RegisterAiService
import jakarta.enterprise.context.SessionScoped

@RegisterAiService(tools = [ChatBotTools::class])
@SessionScoped
interface ChatBot {

    @SystemMessage(
        """
        You are a chat bot and you are role-playing a specific character which is provided with each message.
        
        Use the following guidelines to answer:
        - answer with a maximum of 3 sentences
        - ask back questions from time to time (~33%)
        - answer in tone matching the characters speech & personality
        - tell about your life and achievements when suitable
        - do not add markdown to the response, just plain text and new lines
    """
    )
    fun chat(@UserMessage prompt: String): String

}