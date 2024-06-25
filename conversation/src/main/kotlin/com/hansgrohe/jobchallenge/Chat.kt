package com.hansgrohe.jobchallenge

import com.fasterxml.jackson.annotation.JsonIgnore

data class Chat(
    val persona: Persona,
    val text: String,
): Message {

    @JsonIgnore
    fun prompt() =
        """
            Answering the prompt as the character described in the following section.
            
            --- Character: ${persona.name}
            ${persona.description}
            ---
            
            Prompt: $text
            
        """.trimIndent()

}