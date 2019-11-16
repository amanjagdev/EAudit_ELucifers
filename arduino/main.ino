const int trigpin = 10;
const int echopin = 11;
int led = 13;                
int sensor = 2;             
int state = LOW;             
int val = 0;              

long duration,distance;
 
void setup()
{
  pinMode(led, OUTPUT);      
  pinMode(sensor, INPUT);        
  pinMode(trigpin,OUTPUT);
  pinMode(echopin,INPUT);
  Serial.begin(9600);    
}

void loop()
{
  digitalWrite(trigpin, LOW);
  delayMicroseconds(2);

  digitalWrite(trigpin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigpin, LOW);
    
  duration=pulseIn(echopin,HIGH);
  distance=duration*0.017;


  Serial.println(distance);
    delay(40);
    val = digitalRead(sensor);   
    if (val == HIGH) {           // check if the sensor is HIGH
      digitalWrite(led, HIGH);   // turn LED ON
      delay(100);                // delay 100 milliseconds 
      
      if (state == LOW) {
        Serial.println("Motion detected!"); 
        state = HIGH;       // update variable state to HIGH
      }
    } 
    else {
        digitalWrite(led, LOW); // turn LED OFF
        delay(210);             // delay 200 milliseconds 
        
        if (state == HIGH){
          Serial.println("Motion stopped!");
          state = LOW;       // update variable state to LOW
      }
  }
}



