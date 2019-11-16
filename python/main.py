import wolframalpha 
import speech_recognition as sr 

r = sr.Recognizer()

r.dynamic_energy_threshold = True

r.pause_threshold = 2

with sr.Microphone() as source:
    audio = r.listen(source)

try:
    text = r.recognise_google(audio)

except sr.UnknownValueError:
    print("Google Speech Recognition could not understand audio")
    return(0)

except sr.RequestError as e:
    print("Could not request results from Google Speech Recognition service; {0}".format(e))


question = text

app_id = "PX2T6G-L2XQ4H9TE3" #wolfram-alpha id

client = wolframalpha.Client(app_id) 
  
res = client.query(question) 
  
# Includes only text from the response 
answer = next(res.results).text 
  
print(answer) 