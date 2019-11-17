import wolframalpha 
import serial
import pyttsx3
engine = pyttsx3.init()
voices = engine.getProperty('voices')
engine.setProperty('voice', 'HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Speech\Voices\Tokens\MSSpeech_TTS_en-AU_Hayley')
rate = engine.getProperty('rate')
volume = engine.getProperty('volume')
voice = engine.getProperty('voice')
engine.setProperty('rate', 160)
engine.say('Hi! I am from Wolframalpha! I can answer your each and every question')
engine.runAndWait()

question = input("Enter the Question : ")
app_id = "PX2T6G-L2XQ4H9TE3" 
client = wolframalpha.Client(app_id) 
res = client.query(question)  
answer = next(res.results).text
engine.say(answer)
engine.runAndWait()
print(answer)