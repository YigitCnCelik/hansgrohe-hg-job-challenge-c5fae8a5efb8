package com.hansgrohe.jobchallenge

import com.fasterxml.jackson.annotation.JsonSubTypes
import com.fasterxml.jackson.annotation.JsonTypeInfo

@JsonTypeInfo(use = JsonTypeInfo.Id.NAME, include = JsonTypeInfo.As.PROPERTY, property = "type")
@JsonSubTypes(
    JsonSubTypes.Type(value = Chat::class, name = "chat"),
    JsonSubTypes.Type(value = Failure::class, name = "failure"),
)
interface Message