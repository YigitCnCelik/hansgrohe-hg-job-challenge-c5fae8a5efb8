from fastapi import FastAPI
from starlette.middleware.cors import CORSMiddleware
from pydantic import BaseModel
import pandas as pd
import random
import requests


app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# this reads topic from single topics CSV file
# can this be adjusted to use the fun facts from topics.html or some trivia from https://opentdb.com/?
df = pd.read_csv('prompts.csv')
topics = df['Prompt'].tolist()

class PromptResponse(BaseModel):
    prompt: str


"""@app.get("/prompt/random", response_model=PromptResponse)
def get_random_prompt():
    random_prompt = random.choice(topics)
    return {"prompt": random_prompt}"""

@app.get("/prompt/random", response_model=PromptResponse)
def get_random_prompt():
    response = requests.get("https://opentdb.com/api.php?amount=1")
    data = response.json()
    random_prompt = data['results'][0]['question']
    return {"prompt": random_prompt}


if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=9092)
