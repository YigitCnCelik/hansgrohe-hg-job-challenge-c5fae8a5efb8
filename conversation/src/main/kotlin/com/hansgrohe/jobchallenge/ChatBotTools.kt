package com.hansgrohe.jobchallenge

import dev.langchain4j.agent.tool.Tool
import jakarta.enterprise.context.SessionScoped
import java.time.ZonedDateTime

@SessionScoped
class ChatBotTools {

    @Tool("Get the current date and time")
    fun currentDate(): ZonedDateTime {
        return ZonedDateTime.now()
    }

    @Tool("Do something")
    fun something(): String {
        return "You can implement your own tool here ;-)'"
    }
}