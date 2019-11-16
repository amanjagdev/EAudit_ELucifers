#include <Servo.h>  
Servo servo;  
int angle = 0;   // servo position in degrees 
const int trigpin = 10;
const int echopin = 11;
int servoPin = 5;
int led = 13;                
int sp = 2;             
int state = LOW;             
int val = 0;              

long duration,distance;
 
void setup()
{
  servo.attach(servoPin);
   pinMode(servo,OUTPUT);
  pinMode(led, OUTPUT);      
  pinMode(sp, INPUT);        
  pinMode(trigpin,OUTPUT);
  pinMode(echopin,INPUT);
  Serial.begin(9600);    
}

void loop()
{
  tmr= millis();
  digitalWrite(trigpin, LOW);
  delayMicroseconds(2);

  digitalWrite(trigpin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigpin, LOW);
    
  duration=pulseIn(echopin,HIGH);
  distance=duration*0.017;


  Serial.println(distance);
    delay(40);
    val = digitalRead(sp);   
    if (val == HIGH || distance < 10) {           // check if the sensor is HIGH
      digitalWrite(led, HIGH);   // turn LED ON
      delay(100);
      // scan from 0 to 180 p3
       for(angle = 0; angle < 180; angle++)  
      {          
         servo.write(angle);               
          delay(10);                   
       } 
       // now scan back from 180 to 0 degrees
      for(angle = 180; angle > 0; angle--)    
      {                                
        servo.write(angle);           
        delay(5);       
      }     
      cst=millis() - tmr
                       
    } 
    else
    {
      digitalWrite(led, LOW);
    }
    Serial.println(cst);
    
    

}


